  <script type="text/javascript" src="https://api.sandbox.midtrans.com/v2/assets/js/veritrans.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.fancybox.pack.js"></script>
<?php
require_once(dirname(__FILE__) . '/../../Veritrans.php');

$notif = new Veritrans_Notification();

$transaction = $notif->transaction_status;
$fraud = $notif->fraud_status;

error_log("Order ID $notif->order_id: "."transaction status = $transaction, fraud staus = $fraud");

  if ($transaction == 'capture') {
    if ($fraud == 'challenge') {
      $body = $fraud;
    }
    else if ($fraud == 'accept') {
      $body = $fraud;
    }
  }
  else if ($transaction == 'cancel') {
    if ($fraud == 'challenge') {
      $body = $fraud;
    }
    else if ($fraud == 'accept') {
      $body = $fraud;
    }
  }
  else if ($transaction == 'deny') {
      $body = $fraud;
  }




require_once('class.phpmailer.php');
$mail = new PHPMailer();				
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "smtp_flexi"; 
$mail->Password = "1xaUvCpfPANkM"; 
//$mail->SMTPDebug = 2;
$mail->Host     = "mailgun.securesvr.net";
$mail->Port       = "587";


$mail->Subject    = "recur notification";
$mail->SetFrom("cs@voffice.co.id", "Sales Support");
$mail->AddReplyTo("cs@voffice.co.id", "Sales Support");
$mail->Body = $body;
$mail->MsgHTML($body);


$mail->AddAddress("javad@flexiesolutions.com");

$mail->Send();
$mail->ClearAddresses();
$mail->ClearCCs();

echo "emails sent!"
?>