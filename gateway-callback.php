<?

if (!empty($_POST)) {
    echo "<h1>Response</h1>";
    foreach ($_POST as $key => $result) {
        $msg .= $key . " : " . $result . '<br>';
    }

    if ($_POST[TxnStatus] == '0') {
        include 'sendmail/sendmail.php';
        $mail->SetFrom('cs@voffice.co.id', 'Customer Service');
        $mail->Subject = ("Payment Confirmation for Order ID : " . $_POST[PaymentID]);
        $mail->MsgHTML($msg);
        $mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
        $mail->AddAddress('csteam-voff@flexisupport.com', 'CS');
        $mail->AddAddress('albert.g@flexiesolutions.com', 'Albert');
        $mail->AddAddress('cs@voffice.co.id', 'CS vOffice');
        $mail->AddBCC('albert.g@voffice.com.my');
        $mail->AddBCC('kevin@cre8.id');
        if ($mail->Send()) {
            //echo "Message sent!";
        } else {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
    }


}

?>