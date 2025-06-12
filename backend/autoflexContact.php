<?php

header('Content-type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false]);
    return;
}

$recaptchaSecretKey = "6Ld_3pMoAAAAAKbTExtdIUEuY9mzPL0MbxCSKz-C";
$recaptchaResponse = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

$responseKeys = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$response = json_decode($responseKeys, true);

if ($response['success']) {
    $company_name = strip_tags(isset($_POST['company_name']) ? $_POST['company_name'] : '');
    $company_place = strip_tags(isset($_POST['company_place']) ? $_POST['company_place'] : '');
    $name = strip_tags(isset($_POST['name']) ? $_POST['name'] : '');
    $phone = strip_tags(isset($_POST['phone']) ? $_POST['phone'] : '');
    $email = filter_var(isset($_POST['email']) ? $_POST['email'] : '', FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo json_encode(['success' => false, 'error' => 'Invalid email address']);
        return;
    }

    $carsys = isset($_POST['version']) ? $_POST['version'] : [];
    $amount = isset($_POST['amount']) ? $_POST['amount'] : [];
    $phone_central = isset($_POST['phone_central']) ? $_POST['phone_central'] : [];
    $message = strip_tags(isset($_POST['message']) ? $_POST['message'] : '');

    $klantcode = "thinkingdutch";
    $apikey = "XMfXEvU3yJSUWKmdi0aPPephThcAVc";
    $userid = "edwin";
    $reference = "website_autoflex";
    $templatename = "autoflex_welkom";
    $phonenumbers = [$phone];
    $klantnaam = $name;

    $messageObj = [
        "apikey" => $apikey,
        'userid' => $userid,
        "messages" => [
            [
                "phone" => $phonenumbers,
                "reference" => $reference,
                "templatename" => $templatename,
                "parameters" => [
                    "customername" => $klantnaam,
                ],
            ],
        ],
    ];

    $url = "https://{$klantcode}.tdmessenger.nl/api/submitmessage.php";

    $ch = curl_init();
    $optarray = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => ["Accept: application/json", "Access-Control-Allow-Origin: *"],
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_SSL_VERIFYPEER => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_POSTFIELDS => json_encode($messageObj),
    ];
    curl_setopt_array($ch, $optarray);
    $json = curl_exec($ch);
    curl_close($ch);

    error_log("Output response: " . $json);

    if (strpos($json, "success") !== false) {
        $carsysText = is_array($carsys) ? implode(", ", $carsys) : $carsys;
        $amountText = is_array($amount) ? implode(", ", $amount) : $amount;
        $phoneCentralText = is_array($phone_central) ? implode(", ", $phone_central) : $phone_central;

        $body = "<div>
            <b>Name:</b> {$name}<br>
            <b>Telefoon nummer:</b> {$phone}<br>
            <b>Email:</b> {$email}<br>
            <b>Bericht:</b> {$message}<br><br>

            <b>Bedrijfsnaam:</b> {$company_name}<br>
            <b>Bedrijfsvestiging:</b> {$company_place}<br><br>

            <b>Carsys versie:</b> {$carsysText}<br>
            <b>Aantal gebruikers:</b> {$amountText}<br>
            <b>Telefoonnummer centrale:</b> {$phoneCentralText}<br>
        </div>";

        $headers = 'MIME-Version: 1.0' . "\r\n" . 'Content-type: text/html; charset=utf-8' . "\r\n" . 'From: ' . $email . "\r\n";

        if (mail('autoflexform@thinkingdutch.com', 'Autoflex contact formulier - ThinkingDutch.com', $body, $headers)) {
            echo json_encode(['success' => true]);
            header('Location: ../nl/thankyou.php');
            exit();
        } else {
            error_log('Failed to send email.');
            header('Location: ../nl/autoflex.php?error=Failed to send email.');
        }
    } else {
        error_log('WhatsApp message sending failed.');
        header('Location: ../nl/autoflex.php?error=WhatsApp message sending failed.');
    }
} else {
    error_log('reCAPTCHA verification failed');
    header('Location: ../nl/autoflex.php?error=reCAPTCHA verification failed');
}
