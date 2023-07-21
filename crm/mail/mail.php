<?php session_start();
//print_r($_POST);echo "<br>";
if ($_POST[pass1] != $_POST[pass2]) {
    echo "Verification Do Not Match!";
    die();
}
//print_r($_POST);
function enc($d)
{
    $d = htmlspecialchars(stripslashes(trim($d)));
    return $d;
}

//notify email
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['notify_email'] != "") {

    //get all POST values
    $email = enc($_POST["notify_email"]);
    include_once "../sendmail/sendmail.php";

    $msg = "Notify Me of Virtual Office Indonesia offers: " . $email;

    $mail->SetFrom('cs@vOffice.co.id', 'Notify Me');
    $mail->Subject = ('Notify Me @ voffice.co.id (From Website)');
    $mail->MsgHTML($msg);
//    $mail->AddAddress('Javad@flexiesolutions.com', 'Javad');
    $mail->AddAddress('cs@voffice.co.id', 'Customer Service');
    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

}

//idea form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['idea_form'] != "") {

   $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);
    $ip = enc($_POST['ip']);
    $url = enc($_POST['url']); 

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "Pls contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>From IP: </td><td>" . $_POST['ip'] . "</td></tr>
                            <tr><td>From Page: </td><td><a href=".$_POST['url'].">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    $mail->SetFrom($email, $name);
//    $mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('Idea | From Website');
    $mail->MsgHTML($message);
    $mail->AddAddress('vanessa@voffice.co.id', 'Vanessa');

//    $mail->AddAddress('kevin@cre8.id', 'kevin');

    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('aulia@voffice.co.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

}

//feedback form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['feedback_form'] != "") {

  $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);
    $ip = enc($_POST['ip']);
    $url = enc($_POST['url']); 

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "Pls contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>From IP: </td><td>" . $_POST['ip'] . "</td></tr>
                            <tr><td>From Page: </td><td><a href=".$_POST['url'].">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    $mail->SetFrom($email, $name);
//    $mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('Feedback | From Website');
    $mail->MsgHTML($message);
    $mail->AddAddress('vanessa@voffice.co.id', 'Vanessa');

//    $mail->AddAddress('kevin@cre8.id', 'kevin');

    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('aulia@voffice.co.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}

//question form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['question_form'] != "") {


  $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);
    $ip = enc($_POST['ip']);
    $url = enc($_POST['url']); 

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "Pls contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>From IP: </td><td>" . $_POST['ip'] . "</td></tr>
                            <tr><td>From Page: </td><td><a href=".$_POST['url'].">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    $mail->SetFrom($email, $name);
//    $mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('Question | From Website');
    $mail->MsgHTML($message);
    $mail->AddAddress('vanessa@voffice.co.id', 'Vanessa');

//    $mail->AddAddress('kevin@cre8.id', 'kevin');

    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('aulia@voffice.co.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}


//complain form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['complain_form'] != "") {

   
  $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);
    $ip = enc($_POST['ip']);
    $url = enc($_POST['url']); 

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "Pls contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>From IP: </td><td>" . $_POST['ip'] . "</td></tr>
                            <tr><td>From Page: </td><td><a href=".$_POST['url'].">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    $mail->SetFrom($email, $name);
//    $mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('Complain | From Website');
    $mail->MsgHTML($message);
    $mail->AddAddress('vanessa@voffice.co.id', 'Vanessa');

//    $mail->AddAddress('kevin@cre8.id', 'kevin');

    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('aulia@voffice.co.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}

//vAmbassador_form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['vAmbassador_form'] != "") {

   
  $name = enc($_POST["name"]);
    $phone = enc($_POST["phone"]);
    $email = enc($_POST["email"]);
    $message = enc($_POST["message"]);
    $ip = enc($_POST['ip']);
    $url = enc($_POST['url']); 

    include_once "../sendmail/sendmail.php";

    $message = "<table name='contact_seller' style='border-collapse:collapse';> <tbody>";

    $message .= "Pls contact them :
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>Name: </td><td>" . $_POST['name'] . "</td></tr>
                            <tr><td>Phone: </td><td>" . $_POST['phone'] . "</td></tr>
                            <tr><td>Email: </td><td>" . $_POST['email'] . "</td></tr>
                            <tr><td>Message: </td><td>" . $_POST['message'] . "</td></tr>
                            <tr><td>&nbsp; </td><td>&nbsp;</td></tr>
                            <tr><td>From IP: </td><td>" . $_POST['ip'] . "</td></tr>
                            <tr><td>From Page: </td><td><a href=".$_POST['url'].">" . $_POST['url'] . "</a></td></tr>
                        ";

    $message .= "</tbody>
            </table>";

    $mail->SetFrom($email, $name);
//    $mail->SetFrom('cs@voffice.co.id', 'voffice.co.id');
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = ('VAmbassador | From Website');
    $mail->MsgHTML($message);
    $mail->AddAddress('vanessa@voffice.co.id', 'Vanessa');

//    $mail->AddAddress('kevin@cre8.id', 'kevin');

    $mail->AddBCC('albert.g@voffice.com.my');
    $mail->AddBCC('kevin@cre8.id');
    $mail->AddBCC('aulia@voffice.co.id');
    $mail->AddBCC('adam.goh@voffice.co.id');
    if ($mail->Send()) {
        echo "2";
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }


}