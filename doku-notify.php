<?php
$db = "voffid_db_doku";
$connect = mysql_connect("localhost", "voffid_doku", "pf6kqgind2by") or die("error connection");
mysql_select_db("$db", $connect) or die ("error select DB");

{
    if ($_POST['TRANSIDMERCHANT']) {
        $order_number = $_POST['TRANSIDMERCHANT'];
    } else {
        $order_number = 0;
    }

    $totalamount = $_POST['AMOUNT'];
    $words = $_POST['WORDS'];
    $statustype = $_POST['STATUSTYPE'];
    $response_code = $_POST['RESPONSECODE'];
    $approvalcode = $_POST['APPROVALCODE'];
    $status = $_POST['RESULTMSG'];
    $paymentchannel = $_POST['PAYMENTCHANNEL'];
    $paymentcode = $_POST['PAYMENTCODE'];
    $session_id = $_POST['SESSIONID'];
    $bank_issuer = $_POST['BANK'];
    $cardnumber = $_POST['MCN'];
    $payment_date_time = $_POST['PAYMENTDATETIME'];
    $verifyid = $_POST['VERIFYID'];
    $verifyscore = $_POST['VERIFYSCORE'];
    $verifystatus = $_POST['VERIFYSTATUS'];
    $debug_export = "<?php \$response = ";
    $debug_export .= "array (\"PAYMENTDATETIME\" => '" . $_POST['PAYMENTDATETIME'] . "',\"RESULTMSG\" => '" . $_POST['RESULTMSG'] . "',\"TRANSIDMERCHANT\" => '" . $_POST['TRANSIDMERCHANT'] . "',\"RESPONSECODE\" => '" . $_POST['RESPONSECODE'] . "',\"SESSIONID\" => '" . $_POST['SESSIONID'] . "');";
    $debug_export .= "?>";
    file_put_contents($_POST['SESSIONID'] . ".php", $debug_export, LOCK_EX);

    $body = "
   Transaction Details<br/>
   ----------------------------------<br/><br/>
	PAYMENTDATETIME : " . $_POST["PAYMENTDATETIME"] . "<br/>
	PAYMENTCHANNEL : " . $_POST["PAYMENTCHANNEL"] . "<br/>
	AMOUNT : " . $_POST["AMOUNT"] . "<br/>
	PAYMENTCODE : " . $_POST["PAYMENTCODE"] . "<br/>
	WORDS : " . $_POST["WORDS"] . "<br/>
	RESULTMSG : " . $_POST["RESULTMSG"] . "<br/>
	VERIFYID : " . $_POST["VERIFYID"] . "<br/>
	BANK : " . $_POST["BANK"] . "<br/>
	STATUSTYPE : " . $_POST["STATUSTYPE"] . "<br/>
	APPROVALCODE : " . $_POST["APPROVALCODE"] . "<br/>
	VERIFYSCORE : " . $_POST["VERIFYSCORE"] . "<br/>
	RESPONSECODE : " . $_POST["RESPONSECODE"] . "<br/>
	VERIFYSTATUS : " . $_POST["VERIFYSTATUS"] . "<br/>
	SESSIONID : " . $_POST["SESSIONID"] . "<br/>";

// Basic SQL

    $sql = "select transidmerchant,totalamount from doku where transidmerchant='" . $order_number . "'and trxstatus='Requested'";
    $checkout = mysql_fetch_array(mysql_query($sql));
// echo "sql : ".$sql;
    $hasil = $checkout['transidmerchant'];
    $amount = $checkout['totalamount'];


    foreach ($_POST as $key => $value) {
        $msg_in .= "$key : $value <br>";
    }

    require_once('class.phpmailer.php');
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true; // turn on SMTP authentication
    /* $mail->Username = "sendadmin@voffice.co.id"; // SMTP username
    $mail->Password = "xX8J9Oc3?pQA"; // SMTP password
    $mail->SMTPDebug = 2;
    $mail->Host     = 'mail.myvoffice.me';
    $mail->Port       = 25;   */

    $mail->Username = "smtp_flexi";
    $mail->Password = "1xaUvCpfPANkM";
//$mail->SMTPDebug = 2;
    $mail->Host = "mailgun.securesvr.net";
    $mail->Port = "587";

//$body             = $msg_in;
//$body             = eregi_replace("[\]",'',$body);
    $mail->Subject = "payment for " . $order_number . " " . $_POST['RESULTMSG'];
    $mail->SetFrom("cs@voffice.co.id", "Sales Support");
    $mail->AddReplyTo("cs@voffice.co.id", "Sales Support");
    $mail->Body = $body;
    $mail->MsgHTML($body);


//$AltBody = str_replace('<br>', "\n", $body);				
//$mail->AltBody = $AltBody;
//$mail->AddAddress($address);
    $mail->AddAddress("javad@flexiesolutions.com");
    $mail->AddAddress("sean@flexiesolutions.com");
    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
//$mail->AddAddress("reymarth.voffice@gmail.com");
    $mail->Send();
    $mail->ClearAddresses();
    $mail->ClearCCs();


// Custom Field


    echo 'Continue';

//}
}

mysql_close();
?>
