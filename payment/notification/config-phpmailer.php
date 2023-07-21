<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

// config
$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = "server.voffice.co.id";
$mail->SMTPAuth = true;
$mail->Username = "smtp.user@voffice.co.id";
$mail->Password = "09X7CnHvRnFKrJJ!51";
$mail->Port = "587";
$mail->SMTPSecure = 'tls';
