<?php
header('Content-type: application/json');

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false]);
    return;
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$body = "<div>
            <b>Name:</b> ". $name ."<br>
            <b>Email:</b> ". $email ."<br>
            <b>Message:</b> ". $message ."<br>
         </div>";

$headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";

if(mail('rogier@thinkingdutch.com', 'Contact formulier - thinkingdutch.com', $body, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}