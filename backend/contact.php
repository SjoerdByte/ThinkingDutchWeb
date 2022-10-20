<?php
session_start();

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

if(mail('info@thinkingdutch.com', 'Contact formulier', $body, $headers)) {
    header('Location: ' . $_SERVER['HTTP_REFERER'] .'?status=success');
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER'] .'?status=error');
}