<?php

header('Content-type: application/json');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method']);
    return;
}

$recaptchaSecretKey = "6Ld_3pMoAAAAAKbTExtdIUEuY9mzPL0MbxCSKz-C";
$recaptchaResponse = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

$responseKeys = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$response = json_decode($responseKeys, true);

if (!(isset($response['success']) ? $response['success'] : false)) {
    error_log('reCAPTCHA verification failed');
    header('Location: ../nl/autoflex.php?error=reCAPTCHA verification failed');
    exit;
}

function sanitizeString($value)
{
    return trim(filter_var($value, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
}

$company_name    = sanitizeString(isset($_POST['company_name']) ? $_POST['company_name'] : '');
$company_place   = sanitizeString(isset($_POST['company_place']) ? $_POST['company_place'] : '');
$name            = sanitizeString(isset($_POST['name']) ? $_POST['name'] : '');
$phone           = sanitizeString(isset($_POST['phone']) ? $_POST['phone'] : '');
$email           = filter_var(isset($_POST['email']) ? $_POST['email'] : '', FILTER_VALIDATE_EMAIL);
$message         = sanitizeString(isset($_POST['message']) ? $_POST['message'] : '');

if (!$email) {
    echo json_encode(['success' => false, 'error' => 'Invalid email address']);
    return;
}

$carsys         = isset($_POST['version']) ? $_POST['version'] : [];
$amount         = isset($_POST['amount']) ? $_POST['amount'] : [];
$phone_central  = isset($_POST['phone_central']) ? $_POST['phone_central'] : [];

// WhatsApp API instellingen
$klantcode    = "thinkingdutch";
$apikey       = "XMfXEvU3yJSUWKmdi0aPPephThcAVc";
$userid       = "edwin";
$reference    = "website_autoflex";
$templatename = "autoflex_welkom";
$phonenumbers = [$phone];
$klantnaam    = $name;

$messageObj = [
    "apikey"  => $apikey,
    "userid"  => $userid,
    "messages" => [
        [
            "phone"        => $phonenumbers,
            "reference"    => $reference,
            "templatename" => $templatename,
            "parameters"   => [
                "customername" => $klantnaam
            ]
        ]
    ]
];

$url = "https://{$klantcode}.tdmessenger.nl/api/submitmessage.php";

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => $url,
    CURLOPT_HTTPHEADER     => ["Accept: application/json", "Access-Control-Allow-Origin: *"],
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_SSL_VERIFYPEER => 1,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_ENCODING       => '',
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_POSTFIELDS     => json_encode($messageObj)
]);
$json = curl_exec($ch);
curl_close($ch);

error_log("WhatsApp API response: " . $json);

if (strpos($json, "success") !== false) {
    $body = "<div>
        <b>Name:</b> " . htmlspecialchars($name) . "<br>
        <b>Telefoon nummer:</b> " . htmlspecialchars($phone) . "<br>
        <b>Email:</b> " . htmlspecialchars($email) . "<br>
        <b>Bericht:</b> " . nl2br(htmlspecialchars($message)) . "<br><br>

        <b>Bedrijfsnaam:</b> " . htmlspecialchars($company_name) . "<br>
        <b>Bedrijfsvestiging:</b> " . htmlspecialchars($company_place) . "<br><br>

        <b>Carsys versie:</b> " . (is_array($carsys) ? implode(", ", $carsys) : htmlspecialchars($carsys)) . "<br>
        <b>Aantal gebruikers:</b> " . (is_array($amount) ? implode(", ", $amount) : htmlspecialchars($amount)) . "<br>
        <b>Telefoonnummer centrale:</b> " . (is_array($phone_central) ? implode(", ", $phone_central) : htmlspecialchars($phone_central)) . "<br>
    </div>";

    $headers = "MIME-Version: 1.0\r\n"
        . "Content-type: text/html; charset=utf-8\r\n"
        . "From: " . $email . "\r\n";

    if (mail('autoflexform@thinkingdutch.com', 'Autoflex contactformulier - ThinkingDutch.com', $body, $headers)) {
        echo json_encode(['success' => true]);
        header('Location: ../nl/thankyou.php');
        exit;
    } else {
        error_log('Failed to send email.');
        header('Location: ../nl/autoflex.php?error=Failed to send email.');
        exit;
    }

} else {
    error_log('WhatsApp message sending failed.');
    header('Location: ../nl/autoflex.php?error=WhatsApp message sending failed.');
    exit;
}
