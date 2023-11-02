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
$mail->Host = 'smtp.mail.us-west-2.awsapps.com';
$mail->SMTPAuth = true;
$mail->Username = 'kemish@tbcutah.com';
$mail->Password = 'v7XMr*v4A!CFHmir';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

// Recipients
$mail->addAddress('kemish.hendershot@gmail.com', 'Website Admin');
$mail->addReplyTo('info@example.com');
