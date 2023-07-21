<?php
require_once('sendmail/class.phpmailer.php');
$mail = new PHPMailer();				
$mail->IsSMTP();					
$mail->SMTPAuth = true; 
$mail->Username = "smtp_flexi"; 
$mail->Password = "1xaUvCpfPANkM"; 
//$mail->SMTPDebug = 2;
$mail->Host     = "mailgun.securesvr.net";
$mail->Port       = "587";



$mail->SetFrom($email, 'payment @ vOffice.com.my');
$mail->Subject = ($subject);
$mail->MsgHTML($mainbody);
if($toemail!=''){
$mail->AddAddress($toemail, '');}
if($toemail==''){
$mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
}




?>
