<?php
require_once('../sendmail/sendmail.php');

$mail->SetFrom('signup@voffice.co.id', 'CS');
$mail->Subject = ($subject);
$mail->MsgHTML($msg_in);
$mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
$mail->AddAddress('cs@voffice.co.id', 'CS');
$mail->AddAddress('vo.indo.backup@gmail.com', 'Backup');
$mail->AddBCC('kevin@cre8.id');

$mail->Send();
// clear addresses of all types
$mail->ClearAddresses();  // each AddAddress add to list
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
