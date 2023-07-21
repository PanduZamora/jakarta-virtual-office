<?
 if (!empty($_REQUEST)) {
	echo "<h1>Response</h1>";
	foreach($_REQUEST as $key => $result) {
    $msg .= $key ." : ".$result. "\r\n<br>";
		}
		

include 'sendmail/sendmail.php';
//$mail->SMTPDebug = 2;	
$mail->SetFrom('cs@voffice.com.my', 'Customer Service');
$mail->Subject = ("Payment Confirmation for Order ID : ".$_REQUEST[PaymentID]);
$mail->MsgHTML('test');
$mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
//$mail->AddAddress('csteam-voff@flexisupport.com', 'CS');
//$mail->AddAddress('albert.g@flexiesolutions.com', 'Albert');
//$mail->AddAddress('st@voffice.com.my', 'Sales Team');
if($mail->Send()) {
 				 echo "Message sent!";
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					}
}
 



					?>