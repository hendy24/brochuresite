<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$mail = new PHPMailer();

// Configure an SMTP
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.oxcs.bluehost.com';
$mail->SMTPAuth = true;
$mail->Username = 'kemish@boulderbros.co';
$mail->Password = '!thhVWjgk7gMe6!';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 587;

// Recipients
$mail->addAddress($sendToEmail, 'Website Admin');
//$mail->addReplyTo('info@example.com');
