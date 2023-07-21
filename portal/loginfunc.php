<?php

require "adminClass.php";


/**  * @domain:    DESILVA.BIZ      
  * @file:      EXAMPLE_SESSION_FUNCTIONS.PHP      
  * @author:    J de Silva
  * @website:   [url]www.desilva.biz[/url]
  * @email:     scripts[AT]desilva[DOT]biz
  * @copyright: Gen.I designs
  * @date:      July 24th, 2003
  * @version:   n/a
  * @about:    The 'engine' behind a simple PHP / MySQL session based
                login / password protecting web pages script. Contains
                key functions for the LOGIN system.
  *              
/*===================================*/

ini_set( 'session.name', 'voportal' );
//ini_set( 'session.cookie_secure', 1 );
//ini_set( 'session.cookie_lifetime', 60 );
ini_set("session.gc_maxlifetime","3600");

/* the URL to the login page is defined... */
define( 'URL_LOGIN_PAGE', 'login.php' );
define('SUCCESS_DEFAULT_PAGE', 'index.php');
define('FAIL_LOGIN_PAGE', 'login.php?login=bl');
define('URL_LOGOUT_PAGE', 'logout.php');

// start the session...
session_start();

/* One of the main functions of this included script is
   to check that the page including this script is
   being used by a valid user. There is ONE exception:
   when the person is actually LOGGING IN.  */    
if( !defined('LOGGING_IN') )
{
  verify_if_valid_user();
}

/* All the relevant functions are listed below. */
//------------------------------------------------
function match_user_in_db($user, $pass)
{
	$adminfunc = new adminClass();

    $client_id = $adminfunc->portal_checkUserLogin($user, $pass);


		if( $client_id != "" )
		{
				// escape shell
			    //$user = escapeshellcmd($fuser);
				
				$id = $client_id;
				//$dbpasswd = $row[1];
				//$mname = $row[1];
				
				//if ($dbpasswd == $pass)
				//$_SESSION['valid_user'] = mysql_result( $qv, 0, 0 );
				
				$_SESSION['mid'] = $id;
				//$_SESSION["accesslvl"] = $row[1];
				
				// Get prev Login
				$prev_login = $adminfunc->portal_getUserPrevLogin($id);
				$_SESSION['plogindate'] = $prev_login["last_login_date"];
				$_SESSION['plogintime'] = $prev_login["last_login_time"];
				
				// Update Current Login
				$get_tz = $adminfunc->portal_getUserTimeZone($id);		
				date_default_timezone_set($get_tz);

				$mt_date = date ("Y-m-d", time());
				$mt_time = date("G:i:s", time());
				$adminfunc->portal_updateUserLogin($id, $mt_date, $mt_time);


				// Log login IP
				$prev_login_ip = $adminfunc->portal_getUserPrevLoginIP($id);
				$_SESSION['ploginip'] = $prev_login_ip["last_login_date"];

				$login_ip = $_SERVER["REMOTE_ADDR"];
				$adminfunc->portal_updateUserLoginIP($id, $login_ip);

				// Success - Redirect to main page
				echo "
				<script>
				top.window.location=\"".SUCCESS_DEFAULT_PAGE."\"
				</script>
				";
		}
		else
		{
				echo "
				<script>
				top.window.location=\"".FAIL_LOGIN_PAGE."\"
				</script>
				";
				exit(0);
		}


  		mysql_close($dbm);

}

function process_login()
{

  /* Used ONLY in the LOGIN page. */
  $username = mysql_escape_string( trim($_POST['user']) );
  /* if you store the passwords without using md5,
    of course, edit the following line too. */
  $password = md5( trim($_POST['password']) );
  //$password = trim($_POST['password']);
  match_user_in_db( $username, $password );  
}

function process_logout()
{
  /* used ONLY in the LOGOUT page.  */
  session_destroy();
  unset( $_SESSION );
 //die( header('location:'.URL_LOGOUT_PAGE) );  
	echo "
	<script>
	top.window.location=\"".URL_LOGOUT_PAGE."\"
	</script>
	";
	exit();
}

function verify_if_valid_user()
{
  if( !isset($_SESSION['mid']) )
  {
    // user not logged in yet!
    // re-direct them to the login page
   // die( header('location:'.URL_LOGIN_PAGE) );
   	echo "
	<script>
	top.window.location=\"".URL_LOGIN_PAGE."\"
	</script>
	";
	exit();

  }
}
?>
