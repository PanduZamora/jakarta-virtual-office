<?php
// FILENAME: EXAMPLE_LOGOUT.PHP
// ---------------------------------------

//include_once( './loginfunc.php' );
//process_logout();
ini_set( 'session.name', 'voportal' );
session_start();

session_destroy();
unset( $_SESSION );

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>vOffice&reg; &#8212; Customer Portal Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="theme.css" media="screen">
<style>
#login {
	background: transparent url(images/bg-logout.png) center top no-repeat;
	height: 493px;
}

#login_content {
	margin-top: 100px;
	padding: auto 35px auto 35px;
}
.content {margin-left: 35px;margin-right: 35px;}
.content .pnote {font-size: 0.7em;}
.content p, .content font{
    color: #5e5e5e;
    font-size: 0.8em;
	line-height: 1.55em;
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
          <div class="content"><h2>You have successfully log out from your MyvOffice 
                account.</h2>
                <p>If you're using a public computer, please clear your browser 
                  history and cookies for added security.</p>
                <p class="pnote">Click <a href="login.php">here</a> to login to your MyvOffice 
                  account again.</p>
		</div>
    </div>
	</td>
  </tr>
</table>

		

</body>
</html>
