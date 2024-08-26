<?php
header('Content-type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
    return;
}

$recaptchaSecretKey = "6Ld_3pMoAAAAAKbTExtdIUEuY9mzPL0MbxCSKz-C";
$recaptchaResponse = $_POST['g-recaptcha-response'];

$responseKeys = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$recaptchaResponse");
$recaptchaVerifyUrl = "https://www.google.com/recaptcha/api/siteverify";

$response = json_decode($responseKeys, true);

if ($response['success']) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';

    // Check if all required fields are filled
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'error' => 'Please fill in all required fields.']);
        return;
    }

    // Validate the email domain (only Dutch mail)
    if (!preg_match('/@([a-zA-Z0-9-]+\.)?nl$/', $email)) {
        echo json_encode(['success' => false]);
        header('Location: ../nl/error.php');
    }

    $body = "<div>
                <b>Name:</b> " . $name . "<br>
                <b>Email:</b> " . $email . "<br>";

    if (!empty($phone)) {
        $body .= "<b>Phone:</b> " . $phone . "<br>";
    }

    $body .= "<b>Message:</b> " . $message . "<br>
             </div>";

    $headers = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $email . "\r\n";

    if (mail('sales@thinkingdutch.com', 'Contact formulier - ThinkingDutch.com', $body, $headers)) {
        $phonenumbers = !empty($phone) ? array($phone) : array();

        $klantcode = "thinkingdutch";
        $apikey = "XMfXEvU3yJSUWKmdi0aPPephThcAVc";
        $userid = "edwin";
        $reference = "website_welkom";
        $templatename = "website_welkom";

        $messageObj = array(
            "apikey" =>  $apikey,
            'userid' => $userid,
            "messages" => array(
                array(
                    "phone" => $phonenumbers,
                    "reference" => $reference,
                    "templatename" => $templatename,
                    "parameters" => array(
                        "customername" => $name
                    )
                ),
            ),
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

        echo json_encode(['success' => true]);
        header('Location: ../nl/thankyou.php');
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to send email.']);
        error_log('Failed to send email.');
        header('Location: ../nl/contact.php?error=Failed to send email.');
        return;
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid reCAPTCHA.']);
    error_log('Invalid reCAPTCHA.');
    header('Location: ../nl/contact.php?error=invalid recaptcha');
    return;
}
