<?php
if(!empty($_POST)){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$question = $_POST['question'];
$from = $_POST['from'];

//sending email
$recipient = "vofficecoidcs@voindo.freshdesk.com";
$subject = "[$from] Inquiry | from website voffice.co.id";
$formcontent=" [New Inquiry] $from, please contact them : \n \n
 From: $name \n Email: $email \n Phone: $phone \n Message: $question \n \n
 From AMP Website
";

$mailheader = "From: vOffice.co.id <contact@voffice.co.id>" . "\r\n";
$mailheader .= "Cc: astrid@voffice.co.id" . "\r\n";
$mailheader .= "Bcc: albert.g@voffice.com.my" . "\r\n";
$mailheader .= "Bcc: kevin@cre8.id" . "\r\n";
$mailheader .= "Bcc: adam.goh@voffice.co.id" . "\r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

//amp setting
$host = isset($_SERVER['HTTP_X_FORWARDED_HOST'])
  ? $_SERVER['HTTP_X_FORWARDED_HOST']
  : $_SERVER['HTTP_HOST'];

header('Content-Type: application/json');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
header('Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin');
header('AMP-Access-Control-Allow-Source-Origin: https://' . $host);
header("Access-Control-Expose-Headers: AMP-Access-Control-Allow-Source-Origin");
header("AMP-Redirect-To: https://voffice.co.id/jakarta-virtual-office/thank-you.php");
header("Access-Control-Expose-Headers: AMP-Redirect-To, AMP-Access-Control-Allow-Source-Origin");
exit;
}
?>
