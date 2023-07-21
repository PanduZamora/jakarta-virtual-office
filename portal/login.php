<?php
// FILENAME: EXAMPLE_LOGIN.PHP
// ---------------------------------------

if( isset($_POST['user_login']) )
{
  define( 'LOGGING_IN', true );
  // include the 'session functions' file
  include_once( 'loginfunc.php' );
  process_login();
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
	<form name="loginform" id="loginform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
              <td width="73%"> <input name="user" type="text" id="user" class="form_txt"/> 
              </td>
            </tr>
            <tr> 
              <td>Password</td>
              <td> <input name="password" type="password" id="password" class="form_txt"/> 
              </td>
            </tr>
            <tr> 
              <td class="pwdline">&nbsp;</td>
              <td class="pwdline"><p class="pwd"><a href="forget_password.php">Forgot pasword?</a></p></td>
            </tr>
            <tr> 
              <td>&nbsp;</td>
              <td><input type="submit" name="user_login" value="log in" class="submit_base"/></td>
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
