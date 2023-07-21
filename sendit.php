<?php
require_once('sendmail/sendmail.php');

$mail->SetFrom('signup@voffice.co.id', 'CS');
$mail->Subject = ($subject);
$mail->MsgHTML($msg_in);
$mail->AddAddress('sean@flexiesolutions.com', 'Sean');
$mail->AddAddress('javad@flexiesolutions.com', 'Javad');
$mail->AddAddress('hestiana@voffice.co.id ', 'Hestiana');
$mail->AddAddress('cs@voffice.co.id', 'CS');
$mail->AddAddress('vo.indo.backup@gmail.com', 'Backup');

$mail->Send();
// clear addresses of all types
$mail->ClearAddresses();  
$mail->ClearCCs();
$mail->ClearBCCs();
$mail->SetFrom('signup@voffice.co.id', 'CS');
$mail->Subject = ($subject);
include_once('client_mail_template.phtml');
$mail->MsgHTML($client_mesg);
$mail->AddAddress($email, $firstname);
$mail->AddBCC('vo.indo.backup@gmail.com', 'Backup');
$mail->Send();
?>
