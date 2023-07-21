<?php


include "locale.php";
include "cp_conn.php";

$in_inv1 = trim($_GET["inv1"]);
$in_inv2 = trim($_GET["inv2"]);

$vo_inv_db = "client_invoices_".$in_inv1;

 
$q_inv = "SELECT setup_fee, amount_due FROM $vo_inv_db WHERE invoice_id='$in_inv2' AND invoice_status='1'";
$q_inv_info = mysql_query ($q_inv) or die (mysql_error());

$pinfo_qrow = mysql_fetch_row($q_inv_info);

if ($pinfo_qrow[0] != 0.00)
{
	$famt = $pinfo_qrow[0] + $pinfo_qrow[1];
}
else
{
	$famt = $pinfo_qrow[1];
}

if ($in_inv1 != "" && $in_inv2 != "")
{
	if ($famt == 0 || $famt == "")
	{
		$jmsg = "Invalid Invoice entered or Invoice already being paid. Please kindly try again. ";
		echo "<script language=\"javascript\"> alert('$jmsg')</script>";
		
		
	}
	else
	{
		echo $famt;
	}
}
?>	   
