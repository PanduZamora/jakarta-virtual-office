<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "server.voffice.co.id";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     
$mail->Username = "smtp.user@voffice.co.id";                 
$mail->Password = "09X7CnHvRnFKrJJ!51";                         
//Set TCP port to connect to
$mail->Port = 587;

// ================= Retrive DATA =======================
    // from buy now
    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $telp = $_POST['telp'];
    }
    $message = "<table name='new inquiry' style='border-collapse:collapse';> <tbody>";
    $message .= "   <tr><td>Email: </td><td>". $email . "</td></tr>
                    <tr><td>Email: </td><td>". $name . "</td></tr>
                    <tr><td>Email: </td><td>". $telp . "</td></tr>
                    ";
    $message .= "</tbody></table>";

// ================= TUJUAN EMAIL =======================

$mail->From = "contact@voffice.co.id";
$mail->FromName = "vOffice.co.id";
$mail->AddReplyTo($email,$name);

$mail->addAddress("hadiyusuf.voffice@gmail.com", "Hadi Yusuff");

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = $message;
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}