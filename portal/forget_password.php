<?php
include "../include/config.php";
require "helperClass.php";
require "clientClass.php";

$helperfunc = new helperClass();
$clientfunc = new clientClass();

$returnurl = "https://".SITEURL."/login.php";

if($_POST["reset_pass"])
{
	$process_email = escapeshellcmd(trim($_POST["email"]));
	$chk_exist = $clientfunc->checkifClientExist($process_email);
	
	if ($chk_exist == 0)
	{
			$jmsg = "Error Code 0 Encountered. Please contact Customer Service team to resolve the issue. ";
			echo "<script language=\"javascript\"> alert('$jmsg')</script>";
				echo "
					<script>
					window.location=\"".$returnurl."\"
					</script>
					";
	
	}
	else
	{
			$pass = $helperfunc->generatePassword();
			$fpass = md5($pass);
			
			$cid = $clientfunc->portal_getClientID("email", $_POST["email"]);
			$void = $clientfunc->portal_getClientVOID($cid);
			$contact_template = $helperfunc->getVOContactTemplate($void);
 			$profile = $clientfunc->portal_main_page_getClientCompanyInfo($cid);
 
 			$clientfunc->portal_updateClientPassword($cid, $fpass);
 
			$from_email = $contact_template["email_from_name"]." <".$contact_template["email_from"]."> ";
			//$bcc_email = "flexifax@flexiesolutions.com";
			
			$emailToE = trim($_POST["email"]);
			$subject_in = $contact_template["email_from_name"]." Portal New Password Reset Request.";
			$msg_in = "Hi ".$profile["firstname"].",\r\n\r\n";
			$msg_in .= "Below is the new password for your ".$contact_template["email_from_name"]." portal account.\r\n";
			$msg_in .= "User ID : ". $process_email ."\r\n";
			$msg_in .= "New Password : ".$pass."\r\n\r\n";
			$msg_in .= "If you have not requested for a password reset, then please contact us at ".$contact_template["email_from"]." so we can assist you further on securing your account.\r\n\r\n";
			$msg_in .= "Regards,"."\r\n";
			$msg_in .= $contact_template["email_from_name"]." Customer Care\r\n";
			
	
			$fheaders = "From: ".$from_email. "\r\n";
			$fheaders .= "Reply-To: ".$from_email. "\r\n";
			$fheaders .= "X-Mailer: PHP/vOSPortal". "\r\n";
	
			mail($emailToE,$subject_in,$msg_in,$fheaders); 
			$jmsg = "Your New Password have been Sent to you.";
			echo "<script language=\"javascript\"> alert('$jmsg')</script>";

			echo "
					<script>
					window.location=\"".$returnurl."\"
					</script>
					";
		
	}
  
}
else
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>vOffice&reg; &#8212; Customer Portal Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="theme.css" media="screen">
<style>
#login {
	background: transparent url(images/bg-login.png) center top no-repeat;
	height: 493px;
}

#login_content {
	margin-top: 100px;
	padding: auto 35px auto 35px;
}
table, p, font{
    color: #5e5e5e;
    font-size: 0.85em;
    font-family:  Helvetica, Arial,sans-serif, Verdana;
}
input.form_txt{ 
	width: 250px;
	padding: 5px;
	font: 1.05em Arial, Tahoma, Helvetica, Verdana;
	color: #505050;
	border: 1px solid #aaaaaa;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	-khtml-border-radius: 3px;
	border-radius: 3px;
}
.pwdline {border-top: 1px dashed #c9cacc; border-bottom: 1px dashed #c9cacc; font-size: 0.9em; padding: 10px auto;}
.pwd {margin-top: 5px; margin-bottom: 5px;}
.submit_base{
  font-size: 12px;
  line-height: 18px;
  cursor: pointer;
  cursor: hand;
 }
</style>

</head>

<body>
<table width="600" border="0" align="center" id="login">
  <tr>
    <td>
	<div id="login_content">
	<form name="resetpass" id="resetpass" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <table width="500" border="0" align="center">
            <tr>
              <td>&nbsp;</td>
              <td>
              <?php
              if ($login=="bl")
			  {
				  echo "<div class=\"pwd\">Logging Error.</div>";
			  }              
              ?>
              </td>
            </tr>
            <tr> 
              <td width="27%">Email</td>
              <td width="73%"> <input name="email" type="text" id="email" class="form_txt"/> 
              </td>
            </tr>
            <tr> 
              <td class="pwdline">&nbsp;</td>
              <td class="pwdline"><p class="pwd">&nbsp;</p></td>
            </tr>
            <tr> 
              <td>&nbsp;</td>
              <td><input type="submit" name="reset_pass" value="Reset and Send me my New Password" class="submit_base"/></td>
            </tr>
          </table>
        </form>
    </div>
	</td>
  </tr>
</table>

		

</body>
</html>
<?php
}
?>
