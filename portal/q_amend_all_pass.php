<?php
include "../include/config.php";

require "invoiceClass.php";
require "clientClass.php";
require "helperClass.php";

$invfunc = new invoiceClass();
$clientfunc = new clientClass();
$helperfunc = new helperClass();


$data_r = mysql_query("SELECT clientid FROM client_info") or die("Cannot Grab  Client ID !");

while ($c_row =  mysql_fetch_array($data_r))
{
	$cid = $c_row["clientid"];
	$pass = $helperfunc->generatePassword();
	$fpass = md5($pass);
	echo $fpass."\r\n";
	
	$update_stmt = "UPDATE client_info SET password='$fpass' WHERE clientid = '$cid'";
	$update_result = mysql_query ($update_stmt) or die("Could not update Client Field \n");

	
	
}



?>