<?php

//define("TOEMAIL", "cs@voffice.com.my");
define( 'EWAYADJUST', '0.03');

define("TOEMAIL", "cs@voffice.com.my");
$validcur = array ("USD", "AUD", "EUR", "GBP", "NZD", "SGD", "ZAR","RM");

define ("BASEORDERURL", "https://voffice.com.my/pay/");
define("EWAYOK", "https://voffice.com.my/pay/ccsuccess.php");
define("EWAYFAIL", "https://voffice.com.my/pay/ccfail.php");
define ("PPRETURNURL", "https://voffice.com.my/pay/ppreturn.php");
define ("PPCANCELURL", "https://voffice.com.my/pay/ppcancel.php");
define("SAEWAYOK", "https://voffice.com.my/pay/saccsuccess.php");
define("SAEWAYFAIL", "https://voffice.com.my/pay/saccfail.php");

//define ("PPACCNT", "contact@flexiesolutions.com"); // paypal account to use
define ("PPACCNT", "cs@voffice.com.my"); // paypal account to use

// grab USD exchange rates vs aud
define ("DBHOST", "imagination.flexihostings.net");
define ("DBUSER", "flexi_xrates");
define ("DBNAME", "flexi_xrates");
define ("DBPASS", "Re4upUSt");

//$rhost = "216.12.199.194";
/*define( 'XDB_HOST',  'cp.flexifax.com.au' );
define( 'XDB_USER',  'cpffax_pmbc' );
define( 'XDB_PASS',  'pfVqps51+ES7' );
define( 'XDB_NAME',  'cpffax_vo' );*/

define( 'XDB_HOST',  'myvoffice.me' );
define( 'XDB_USER',  'myvoff_adm' );
define( 'XDB_PASS',  'pfVqps51+ES7' );
define( 'XDB_NAME',  'myvoff_vos' );

// USD exchange 
define ("USDEXRATESQLSTMT", "SELECT * FROM exrates ORDER BY id DESC LIMIT 1");
// SGD exchange
define ("SGDEXRATESQLSTMT", "SELECT * FROM sgexrates ORDER BY id DESC LIMIT 1");
// NZD exchanage
define ("NZDEXRATESQLSTMT", "SELECT * FROM nzexrates ORDER BY id DESC LIMIT 1");
// EURO exchange
define ("EUROEXRATESQLSTMT", "SELECT * FROM euexrates ORDER BY id DESC LIMIT 1");
// GBP exchange
define ("GBPEXRATESQLSTMT", "SELECT * FROM ukexrates ORDER BY id DESC LIMIT 1");
// ZAR exchange
define ("ZAREXRATESQLSTMT", "SELECT * FROM zaexrates ORDER BY id DESC LIMIT 1");
// MYR exchange
define ("MYREXRATESQLSTMT", "SELECT * FROM myexrates ORDER BY id DESC LIMIT 1");
// IDR exchange
define ("IDREXRATESQLSTMT", "SELECT * FROM idexrates ORDER BY id DESC LIMIT 1");
// PHP exchange
define ("PHPEXRATESQLSTMT", "SELECT * FROM phpexrates ORDER BY id DESC LIMIT 1");



define ("CLIENTCCOKMSG", "\r\nThank you for your payment. Please be informed that this transaction will appear as Flexi e-Solutions Pty Ltd on your credit card statement.\r\n\r\n");

define ("CLIENTCCFAILMSG", "\r\nThank you for using vOffice.com.my manual payment system. \r\nUnfortunately, your payment isn't successful and your credit card have not been charged.\r\n
Please contact us at cs@voffice.com.my if you believe this to be an error or alternatively, you can attempt to try again.\r\n");

define ("CLIENTPPMSG", "\r\nThank you for using vOffice.com.my manual payment system. \r\nYou have chosen Paypal as your payment method. \r\n\r\n");


define ("EMAILFOOTER", "
Please feel free to contact us at cs@voffice.com.my if you have any questions about this transaction.\r\n
Thank you once again.\r\n
Best regards,\r\n
vOffice.com.my Billing Team
");

define ("EMAILFAILFOOTER", "Thank you once again.\r\n
Best regards,\r\n
vOffice.com.my Billing Team
");

?>
