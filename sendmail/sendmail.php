<?
require_once('class.phpmailer.php');


$mail = new PHPMailer();
#$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Username = "smtp.user@voffice.co.id";
$mail->Password = "09X7CnHvRnFKrJJ!51";
$mail->Host     = "voffice.co.id";
$mail->Port     = "465";
$mail->SMTPSecure = "ssl";

// Mailer
// $mail = new PHPMailer();				
// $mail->IsSMTP();
// $mail->SMTPAuth = true;
// $mail->Username = "pandu.zamora@voffice.co.id";
// $mail->Password = "091214Eunseo!";
// $mail->Host     = "smtp.gmail.com";
// $mail->Port     = "465";
// $mail->SMTPSecure = "ssl";



//$mail->Username = "notification@voffice.co.id";
//$mail->Password = "qehwah-5sujZo-xowwic";
//$mail->Host     = "mail.voffice.co.id";
//$mail->Port       = "587";
// Mailer pandu
// MAIL_DRIVER=smtp
// MAIL_HOST='smtp.mailgun.org'
// MAIL_PORT=587
// MAIL_USERNAME='postmaster@mail.myvios.cloud'
// MAIL_PASSWORD='6d9820f95398e86a7b10945e84a49b1c-e470a504-84fe385d'
// MAIL_ENCRYPTION=tls
// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->SMTPAuth = true;
// $mail->Username = "postmaster@mail.myvios.cloud";
// $mail->Password = "6d9820f95398e86a7b10945e84a49b1c-e470a504-84fe385d";
// $mail->Host     = "smtp.mailgun.org";
// $mail->Port     = "587";

// Mailer Flexiee
//$mail->Username = "smtp_void";
//$mail->Password = "cD53oc:oI";
//$mail->Host     = "mailgun120.securesvr.net";

//$mail->SMTPDebug = 2;
//$mail->SMTPSecure = "tls";
//before

//vox
//$mail->Username = "notification@voffice.co.id";
//$mail->Password = "qehwah-5sujZo-xowwic";
//$mail->Host     = "mail.voffice.co.id";
//$mail->Port       = "587";


/*
$mail->SetFrom('infi@evoicemail.net', 'New Order');
$mail->Subject = ('New Message from eVoiceMail');
$mail->MsgHTML('test');
$mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
if($mail->Send()) {
  echo "Message sent!";
} else {
  echo "Mailer Error: " . $mail->ErrorInfo;
}
*/
?>
