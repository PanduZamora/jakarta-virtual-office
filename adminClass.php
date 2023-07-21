<?php

class adminClass {

	function reConnectClientClassDB()
	{
		require_once dirname(__FILE__) . '/../include/config.php';
		$dbm = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db (DB_NAME) or die("Could not select database \n"); 
	
	}
	function checkforexistingclient($email)
	{
        $data_q = "select * from client_info where email= '$email'";
		$data_r = mysql_query ($data_q) or die();
		return $data_r;
	}
	function SearchByBarcode($barcode)
	{
        $data_q = "SELECT * FROM client_barcode where barcode='$barcode'";
		$data_r = mysql_query ($data_q) or die("Could not find any clinet.\n");

		return $data_r;
	}
	function getVoProductName($id)
	{
        $data_q = "SELECT product_name FROM vo_products WHERE id='$id' AND location = 'ph'";
		//$data_r = mysql_query($data_q) or die("Could not get VO Location Name.\n");
		$data_r = mysql_query($data_q);

		$fdata = mysql_fetch_array($data_r);
		return $fdata["product_name"];
	}
	function getVoProducts()
	{
        $data_q = "SELECT * FROM vo_products WHERE location = 'ph' ORDER BY id ASC ";
		$data_r = mysql_query ($data_q) or die("Could not find any products.\n");

		return $data_r;
	}
	function getVoProductsByID($id)
	{
        $data_q = "SELECT * FROM vo_products WHERE id='$id' AND location = 'ph' ";
		$data_r = mysql_query ($data_q) or die("Could not find any products.\n");

		return $data_r;
	}
	function SearchByNumber($number)
	{
        $data_q = "SELECT * FROM client_barcode where number='$number'";
		$data_r = mysql_query ($data_q) or die("Could not find any clinet.\n");

		return $data_r;
	}
	function updateClientBarcodeInfo($fname, $lname, $email, $contact, $address, $city, $state, $postcode, $country, $how_obt, $barcode)
	{
	    $data_q = "UPDATE client_barcode SET fname='$fname',lname='$lname',email='$email',contact='$contact',address='$address',city='$city',state='$state',postcode='$postcode',location='$country',how_obt='$how_obt' WHERE barcode='$barcode'";
		$data_r = mysql_query ($data_q) or die("Could not Update Card Info.\n");
	}
	function updateClientBarcodeVisitor($visit,$number)
	{
	    $data_q = "UPDATE client_barcode SET visitors='$visit' WHERE number='$number'";
		$data_r = mysql_query ($data_q) or die("Could not Update Card Info.\n");
	}
	function updateClientBarcodeSignups($sign,$number)
	{
	    $data_q = "UPDATE client_barcode SET signups='$sign' WHERE number='$number'";
		$data_r = mysql_query ($data_q) or die("Could not Update Card Info.\n");
	}
	function getAllLocationInfo()
	{
        $data_q = "SELECT * FROM location_info";
		$data_r = mysql_query ($data_q) or die("Could not find any clinet.\n");

		return $data_r;
	}
	function getVOName($void)
	{
        $data_q = "SELECT location_desc FROM location_info WHERE id='$void'";
		//$data_r = mysql_query($data_q) or die("Could not get VO Location Name.\n");
		$data_r = mysql_query($data_q);

		$fdata = mysql_fetch_array($data_r);
		return $fdata["location_desc"];
	}
	function updateReferralSignups($ref_id, $product, $price, $currency, $ref_percent, $paytype, $location, $fname, $lname, $email)
	{		
		$data_q = "INSERT INTO referral_signups (ref_id, product, price, currency, ref_percent, paytype, location, c_fname, c_lname, c_email) VALUES ('$ref_id', '$product', '$price', '$currency', '$ref_percent', '$paytype', '$location', '$fname', '$lname', '$email')"; 
		$data_r = mysql_query ($data_q) or die("Update Referral Signups Failed.\n"); 
	}
	function getReferralPercent($refcid)
	{
        $data_q = "SELECT * FROM referral_currency WHERE clientid ='$refcid' AND currency='PHP'";
		$data_r = mysql_query ($data_q) or die("Could not find any clinet.\n");

		return $data_r;
	}
		function getXRate($curr)
	{
        $data_q = "SELECT rate FROM currency_rates WHERE currency='$curr'";
		//$data_r = mysql_query($data_q) or die("Could not get VO Location Name.\n");
		$data_r = mysql_query($data_q);
		$fdata = mysql_fetch_array($data_r);
		return $fdata["rate"];
	}
	
}
	?>