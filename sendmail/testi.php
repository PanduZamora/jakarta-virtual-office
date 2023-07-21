<?php
require_once "Mail.php";
$from = "Sender Name <smtp.user@voffice.co.id>";
$to = "Recipient Name <tester2mail@gmail.com>";
$subject = " Subject Line Here: ";
$body = " any message you want ";
$host = "207.148.78.141";
$username = "smtp.user@voffice.co.id";
$password = "09X7CnHvRnFKrJJ!51";
$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'auth' => true,
'username' => $username,
'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>
