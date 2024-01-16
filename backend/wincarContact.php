<?php

header('Content-type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false]);
    return;
}

$recaptchaSecretKey = "6Ld_3pMoAAAAAKbTExtdIUEuY9mzPL0MbxCSKz-C";
$recaptchaResponse = $_POST['g-recaptcha-response'];

$responseKeys = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$recaptchaVerifyUrl = "https://www.google.com/recaptcha/api/siteverify";

$response = json_decode($responseKeys, true);

if ($response['success']) {
    $company_name = filter_var($_POST['company_name'], FILTER_SANITIZE_STRING);
    $company_place = filter_var($_POST['company_place'], FILTER_SANITIZE_STRING);

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo json_encode(['success' => false, 'error' => 'Invalid email address']);
        return;
    }

    $wincar = $_POST['version'];
    $interest = $_POST['interest'];
    $amount = $_POST['amount'];
    $phone_central = $_POST['phone_central'];

    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $klantcode = "thinkingdutch";
    $apikey = "XMfXEvU3yJSUWKmdi0aPPephThcAVc";
    $userid = "edwin";
    $reference = "wincar_welkom";
    $templatename = "wincar_welkom";
    $phonenumbers = array($phone);
    $klantnaam = $name;

    $messageObj = array(
        "apikey" => $apikey,
        'userid' => $userid,
        "messages" => array(
            array(
                "phone" => $phonenumbers,
                "reference" => $reference,
                "templatename" => $templatename,
                "parameters" => array(
                    "customername" => $klantnaam
                )
            )
        )
    );

    $url = "https://{$klantcode}.tdmessenger.nl/api/submitmessage.php";

    $ch = curl_init();
    $optarray = array(
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => array("Accept: application/json", "Access-Control-Allow-Origin: *"),
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_SSL_VERIFYPEER => 1,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_POSTFIELDS => json_encode($messageObj)
    );
    curl_setopt_array($ch, $optarray);
    $json = curl_exec($ch);
    curl_close($ch);

    error_log("Output response: " . $json);

    if (strpos($json, "success") !== false) {
        $body = "<div>
                <b>Name:</b> " . $name . "<br>
                <b>Telefoon nummer:</b> " . $phone . "<br>
                <b>Email:</b> " . $email . "<br>
                <b>Bericht:</b> " . $message . "<br>
                <br>
                
                <b>Bedrijfsnaam:</b> " . $company_name . "<br>
                <b>Bedrijfsvesteging:</b> " . $company_place . "<br>
                <br>
                
                <b>Interesse in:</b> " . implode(", ", $_POST['interest']) . "<br>
                <b>Aantal gebruikers:</b> " . implode(", ", $_POST['amount']) . "<br>
                <b>Telefoonnummer centrale:</b> " . implode(", ", $_POST['phone_central']) . "<br>
                
             </div>";

        $headers = 'MIME-Version: 1.0' . "\r\n"
            . 'Content-type: text/html; charset=utf-8' . "\r\n"
            . 'From: ' . $email . "\r\n";

        if (mail('sales@thinkingdutch.com', 'Wincar contact formulier - ThinkingDutch.com', $body, $headers)) {
            echo json_encode(['success' => true]);
            header('Location: ../nl/thankyou.php');
            exit();
        } else {
            echo json_encode(['success' => false, 'error' => 'Failed to send email.']);
            header(error_log('Failed to send email.'));
            header('Location: ../nl/wincar.php?error=Failed to send email.');
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'WhatsApp message sending failed.']);
        header(error_log('WhatsApp message sending failed.'));
        header('Location: ../nl/wincar.php?error=WhatsApp message sending failed.');
    }
} else {
    echo json_encode(['success' => false, 'error' => 'reCAPTCHA verification failed']);
    header(error_log('reCAPTCHA verification failed'));
    header('Location: ../nl/wincar.php?error=reCAPTCHA verification failed');
}
