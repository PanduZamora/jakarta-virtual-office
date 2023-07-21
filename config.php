<?php

define("TOEMAIL", "cs@izin.co.id");

//reduce eway price by %3

define( 'EWAYADJUST', '0.03'); 

$oemail = array("albert.g@flexiesolutions.com","ruth@voffice.co.id","seantham@voffice.co.id", "sean@flexiesolutions.com");

//$ccemail = array("sean@flexiesolutions.com");

//define("TOEMAIL", "albert.g@flexiesolutions.com");

define ("BASEORDERURL", "https://voffice.co.id/");

define("EWAYOK", "https://voffice.co.id/index.php?dis=ccsuccess");

define("EWAYFAIL", "https://voffice.co.id/index.php?dis=ccfail");

define ("PPRETURNURL", "https://voffice.co.id/index.php?dis=ppreturn");

define ("PPCANCELURL", "https://voffice.co.id/index.php?dis=ppcancel");

define ("OFFLINEURL", "https://voffice.co.id/index.php?dis=offlinereturn");

//define ("PPACCNT", "contact@flexiesolutions.com"); // paypal account to use

define ("PPACCNT", "paypal@voffice.co.id"); // paypal account to use

// grab exchange rates vs aud

define ("DBHOST", "bb8.flexihostings.net");

define ("DBUSER", "flexi_xrates");

define ("DBNAME", "flexi_xrates");

define ("DBPASS", "Re4upUSt");

define("LCURRENCY", "IDR");

define("CURRENCY", "IDR");

$idr_to_usd = 0.000104373; //1 IDR = 0.000104373 USD

// ---------------- pricing -------------------------


// Mon t Kiara ---------------------------------

// vo silver

$vs = array("0","0","3000000","5500000");


// vo gold

$vg = array("650000","600000","550000","500000");

// vo platinum

$vp = array("850000","800000","750000","700000");

// Empire ---------------------------------

// vo silver

$evs = array("0","0","3000000","5500000");

// vo gold

$evg = array("650000","600000","550000","500000");

// vo platinum

$evp = array("850000","800000","750000","700000");

// Melbourne ---------------------------------

// vo silver

$auvs = array("145","145","130.50","123.25");

// vo gold

$auvg = array("265.00","265.00","238.50","225.25");

// vo platinum

$auvp = array("295.00","295.00","265.50","250.75");
// ----------------------------------

//  Jakarta ---------------------------------

/*

// vo silver

$jvs = array("0","0","3000000","5500000");

// vo gold

$jvg = array("650000","600000","550000","500000");

// vo platinum

$jvp = array("850000","800000","750000","700000");

*/

// vo silver

$jvs = array("6500000","6500000","6500000","13000000","14300000");

// vo gold

//$jvg = array("2250000","3600000","8100000","15300000","20790000");

$jvg = array("8910000","8910000","8910000","16830000","22869000");

// vo platinum

$jvp = array("13200000","13200000","13200000","26400000","25344000");

//$jvp = array("2550000","4800000","9000000","16800000");

// in USD - total


/*
$jvs_usd = array("0","261","418","731");
$jvg_usd = array("204","376","689","1253");
//$jvp_usd = array("280","530","693","1288");
$jvp_usd = array("267","502","752","1228");
*/

foreach ($jvs as $value) { $jvs_usd[] = ceil($value * $idr_to_usd); }
foreach ($jvg as $value) { $jvg_usd[] = ceil($value * $idr_to_usd); }
foreach ($jvp as $value) { $jvp_usd[] = ceil($value * $idr_to_usd); }



//  Surabaya ---------------------------------

/*

// vo silver

$jvs = array("0","0","3000000","5500000");

// vo gold

$jvg = array("650000","600000","550000","500000");

// vo platinum

$jvp = array("850000","800000","750000","700000");

*/

// vo silver

$sujvs = array("5500000","5500000","5500000","10000000","16500000");

// vo gold

//$jvg = array("2250000","3600000","8100000","15300000","20790000");

$sujvg = array("8910000","8910000","8910000","16830000","22275000");

// vo platinum

$sujvp = array("13200000","13200000","13200000","26400000","25344000");

//$jvp = array("2550000","4800000","9000000","16800000");

// in USD - total


/*
$jvs_usd = array("0","261","418","731");
$jvg_usd = array("204","376","689","1253");
//$jvp_usd = array("280","530","693","1288");
$jvp_usd = array("267","502","752","1228");
*/

foreach ($sujvs as $value) { $sujvs_usd[] = ceil($value * $idr_to_usd); }
foreach ($sujvg as $value) { $sujvg_usd[] = ceil($value * $idr_to_usd); }
foreach ($sujvp as $value) { $sujvp_usd[] = ceil($value * $idr_to_usd); }


// Jakarta, Pusat

// vo silver

$jpvs = array("0","6500000","6500000","13000000","18000000");

// vo gold

$jpvg = array("2805000","4600000","10098000","19074000","25900000");

// vo platinum
$jpvp = array("13200000","13200000","13200000","26400000","25344000");


// TCT

// vo silver

$tctvs = array("0","6500000","6500000","13000000","14300000");

// vo gold

$tctvg = array("2805000","4600000","8910000","16830000","22869000");

// vo platinum
$tctvp = array("13200000","13200000","13200000","26400000","25344000");


// in USD - total

/*
$jpvs_usd = array("0","293","564","1044");
$jpvg_usd = array("267","480","950","1826");
$jpvp_usd = array("376","691","1325","2609");
*/

foreach ($jpvs as $value) { $jpvs_usd[] = ceil($value * $idr_to_usd); }
foreach ($jpvg as $value) { $jpvg_usd[] = ceil($value * $idr_to_usd); }
foreach ($jpvp as $value) { $jpvp_usd[] = ceil($value * $idr_to_usd); }

foreach ($tctvs as $value) { $tctvs_usd[] = ceil($value * $idr_to_usd); }
foreach ($tctvg as $value) { $tctvg_usd[] = ceil($value * $idr_to_usd); }
foreach ($tctvp as $value) { $tctvp_usd[] = ceil($value * $idr_to_usd); }


// Kencana Tower 

// vo silver

$jkvs = array("0","6000000","6000000","11000000","13500000");

// vo gold

$jkvg = array("2145000","2145000","7722000","14568000","19819000");

$fxvg = array("2145000","2145000","8910000","14568000","19819000");

// vo platinum

$jkvp = array("13200000","13200000","13200000","26400000","25344000");

// in USD - total

/*

$jpvs_usd = array("0","293","564","1044");
$jpvg_usd = array("267","480","950","1826");
$jpvp_usd = array("376","691","1325","2609");
*/

foreach ($jkvs as $value) { $jkvs_usd[] = ceil($value * $idr_to_usd); }
foreach ($jkvg as $value) { $jkvg_usd[] = ceil($value * $idr_to_usd); }
foreach ($jkvp as $value) { $jkvp_usd[] = ceil($value * $idr_to_usd); }

// ----------------------------------

// br

// $br = array("240000","225000","210000","195000");

//ar

// $ar = array("295000","280000","265000","250000");

// br

$br = array("350000","325000","300000","300000");
//ar
$ar = array("500000","475000","450000","450000");

//fax price
$addon_fax_price = 45000;

// sms price per year

$addon_sms_price = 299000;

//------------------- vspace plans -----------------------

$vspacepr = array("2700000","5200000","6700000");
$vspaceco = array("1400000","2700000","4900000");

//combo deals
//$vspaceprcombo = array("750","1550","1950");
//$vspacecocombo = array("350","750","1250");
// ------------- extra services pricing ------------------
// dedicatedfax price
$dfax = array("166500","162000","157500");

// D fax setup price
$dfaxsetup= 50000;
// MY DID
// $didn = array("80000","80000","80000");
$didn = array("160000","160000","160000");
// addon channel price
// $channeladdon = array("180000","360000","720000","1440000");
$channeladdon = array("120000","240000","360000","480000");
// MY DID setup price
// $didsetup= 100000;
$didsetup= 200000;

// premuim ivr

$pivr = array("225000","215000","200000");

// premuim ivr setup
$pivrsetup= 450000;
// toll free price

$tf = array("210000");

// desposit plus setup 150 + 500
$tfsetup = array("1950000");

// zFlexi personal assistant

$fpa = array("225000");

// conference call

$cf4 = array("800000");
$cf8 = array("1500000");
$cf12 = array("2100000");
$cf16 = array("2900000");
$cf24 = array("3500000");

// Conference call recording
$cfr= 100000;

// Co Registration - Local Director

$lco_reg = 13200000;

// Co Registration - Foreign Director
$fco_reg = 27500000;

/* Meeting Room Plan */
$mroom['Meeting_Room_5'] = 1250000; //5hrs
$mroom['Meeting_Room_10'] = 2500000; //10 hrs
$mroom['Meeting_Room_20'] = 5000000; //20 hrs
$mroom['Meeting_Room_40'] = 10000000; //40 hrs
$mroom['addonhrs'] = 250000; // per hr
$mroom['projector_rental'] = 100000; // per hr
$mroom['audio_recording'] = 450000; // entire session
$mroom['speakerphone'] = 600000; // entire session

/* Global Telephone Number */

$gphone['a'] = 270000; // per month

$gphone['b'] = 360000; // per month

$gphone['setup'] = 150000;

$gphone_countries['a'] = array('Argentina', 'Australia', 'Austria', 'Belgium', 'Brazil', 'Bulgaria', 'Canada', 'Croatia', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Germany', 'Greece', 'Ireland', 'Israel', 'Italy', 'Latvia', 'Lithuania', 'Luxembourg', 'New Zealand', 'Norway', 'Peru', 'Poland', 'Portugal', 'Romania', 'Slovakia', 'Slovenia', 'South Africa', 'Spain', 'Sweden', 'Switzerland', 'Taiwan', 'United Kingdom', 'United States');

$gphone_countries['b'] = array('Algeria', 'Chile', 'China', 'Costa Rica', 'Cyprus', 'Dominican Republic', 'El Salvador', 'Hong Kong', 'Hungary', 'Japan', 'Malta', 'Mexico', 'Netherlands', 'Panama', 'Russian Federation', 'Singapore', 'Vietnam');
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
// ****************** Client Email Message Area ***************************** 

define ("CLIENTCCOKMSG", "<br>Thank you for your payment. Your Order have have been submitted and is enqueue to be process by our Customer Care Member.<br><br>");
define ("CLIENTCCFAILMSG", "<br>Thank you for your Order. <br>Unfortunately, your payment isn't successful and your credit card have not been charged.<br>
Please contact us at cs@voffice.co.id if you believe this to be an error or alternatively, you can attempt to try again.<br>");
define ("CLIENTPPMSG", "<br>Thank you for using vOffice manual payment system. <br>You have chosen Paypal as 
your payment method. <br><br>");
define ("CLIENTOFFLINEMSG1", "<br>Thank you for choosing vOffice.co.id. The details of the order are below: <br>");
define ("CLIENTOFFLINEMSG2", "You have chosen Offline Payment as your payment method.<br> 
You may forward your payment for this order to us via Transfer, Direct Deposit or Cheque. <br><br>
===================================================<br>
Bank in Method - Our bank detail is as below<br>
===================================================<br><br>
Bank Name: BANK MANDIRI (PERSERO)<br>
Account No:  165 00 8899 8993 <br>
Account Name: vOffice Thamrin<br>
Swift Code: BMRIIDJA852 (For International Transfer only)<br><br>
Bank Name : BCA<br>
Account Number : 6560113399<br>
Account Name: PT VO Sudirman<br><br>
(For remitting in US Dollars)<br>
Bank Name : BCA <br>
Account Number : 6560 777 688<br>
Account Name: PT vOffice<br>
Swift Code: CENAIDJA<br><br><br>
Kindly include the invoice number or order number as the reference when making payment via Direct Deposit / 
Internet Bank Transfer and please fax or email your payment advise to<br><br>
Fax No : 6221 29222990<br>
Email : paid@voffice.co.id<br>
<br>
===================================================<br>
Cheque Method <br>
===================================================<br><br>
Cheque payable to PT vOffice and please post it to<br><br>
PT vOffice<br>
Voffice<br>
Office 8, level 18 – A<br>
SCBD Lot 28,<br>
Sudirman Central Business District (SCBD)<br>
JL. Jendral Sudirman Kav 52 – 53<br>
Jakarta Selatan 12190<br><br>
Do remember to write your company name, contact number and invoice number (if any) behind the Cheque. <br>
");
define ("CLIENTOFFLINEMSG3", "You have chosen Offline Payment as your payment method.<br> 
You may forward your payment for this order to us via Transfer, Direct Deposit or Cheque. <br><br>
===================================================<br>
Bank in Method - Our bank detail is as below<br>
===================================================<br><br>
Bank Name: BCA<br>
Account No:  6560 133 888 <br>
Account Name: PT vOffice<br>
Swift Code: CENAIDJA (For International Transfer only)<br><br>
Bank Name : MANDIRI<br>
Account Number : 165-00-0034025-8<br>
Account Name: PT vOffice<br><br>
(For remitting in US Dollars)<br>
Bank Name : BCA <br>
Account Number : 6560 777 688<br>
Account Name: PT vOffice<br>
Swift Code: CENAIDJA<br><br><br>
Kindly include the invoice number or order number as the reference when making payment via Direct Deposit / 
Internet Bank Transfer and please fax or email your payment advise to<br><br>
Fax No : 6221 29222990<br>
Email : paid@voffice.co.id<br>
<br>
===================================================<br>
Cheque Method <br>
===================================================<br><br>
Cheque payable to PT vOffice and please post it to<br><br>
PT vOffice<br>
Menara Rajawali Level 7-1 Jl Mega Kuningan Lot 5.1<br>
Mega Kuningan, Jakarta 12950 Indonesia<br><br>
Do remember to write your company name, contact number and invoice number (if any) behind the Cheque. <br>
");
define ("CLIENTOFFLINEMSG4", "You have chosen Offline Payment as your payment method.<br> 
You may forward your payment for this order to us via Transfer, Direct Deposit or Cheque. <br><br>
===================================================<br>
Bank in Method - Our bank detail is as below<br>
===================================================<br><br>
Bank Name: BCA<br>
Account No:  656-003 0388 <br>
Account Name: PT vOffice<br>
Swift Code: CENAIDJA (For International Transfer only)<br><br>
(For remitting in US Dollars)<br>
Bank Name : BCA <br>
Account Number : 6560 777 688<br>
Account Name: PT vOffice<br>
Swift Code: CENAIDJA<br><br><br>
Kindly include the invoice number or order number as the reference when making payment via Direct Deposit / 
Internet Bank Transfer and please fax or email your payment advise to<br><br>
Fax No : 6221 29222990<br>
Email : paid@voffice.co.id<br>
<br>
===================================================<br>
Cheque Method <br>
===================================================<br><br>
Cheque payable to PT vOffice and please post it to<br><br>
PT vOffice Thamrin<br>
The City Tower, Level 12 Unit 1-N<br>
JLN H Tharmin No.81, Jakarta Pusat 10310<br><br>
Do remember to write your company name, contact number and invoice number (if any) behind the Cheque. <br>
");
define ("EMAILFOOTER", "
Please feel free to contact us at cs@voffice.co.id if you have any questions about this transaction.<br>
Thank you once again.<br><br>
Best regards,<br><br>
vOffice.co.id Billing Team

");
define ("EMAILFAILFOOTER", "Thank you once again.<br><br>
Best regards,<br><br>
vOffice.co.id Billing Team
");

?>



