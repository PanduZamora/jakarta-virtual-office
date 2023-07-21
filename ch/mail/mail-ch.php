<?php session_start();

if ($_POST[pass1] != $_POST[pass2]) {
    echo "Verification Do Not Match!";
    die();
}
function enc($d)
{
    $d = htmlspecialchars(stripslashes(trim($d)));
    return $d;
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['contact_us'] != "") {

    //get all POST values
    $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);

    $to = $email;
    $subject = "Subject";
    $txt = "Thank You";
    $headers = "From: contact@vOffice.co.id";

    mail($to,$subject,$txt,$headers);

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "[New Inquiry] voffice.co.id/ch , please contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone / Whatsapp: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Source: </td><td> China hub website </td></tr>
                            <tr><td>From Page: </td><td><a href=" . $_POST['url'] . ">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    //$mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->SetFrom('contact@vOffice.co.id', 'vOffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('[New Inquiry] Contact Form | From Website vOffice.co.id - China Hub');
    $mail->MsgHTML($message);
    $mail->AddAddress('johnny@voffice.co.id', 'test');
    $mail->AddBCC('kevin@cre8.id');
    // $mail->AddCC('astrid@voffice.co.id');
    // // $mail->AddAddress('kevin@cre8.id', 'kevin');
    // $mail->AddBCC('albert.g@voffice.com.my');
    // $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send())
    {
        echo "2";
    }
    else
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
