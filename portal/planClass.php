<?php

class planClass {

	function getPlanName($pid)
	{
        $product_check = "SELECT product_name FROM products WHERE product_id='$pid'";
		$product_info = mysql_query ($product_check) or die (mysql_error());

		$pinfo_qrow = mysql_fetch_array($product_info);
		return $pinfo_qrow["product_name"];
	}

	function getPlanStatus($pid)
	{
        $product_check = "SELECT status_desc FROM client_plans_status WHERE status_id='$pid'";
		$product_info = mysql_query ($product_check) or die (mysql_error());

		$pinfo_qrow = mysql_fetch_array($product_info);
		return $pinfo_qrow["status_desc"];
	}



	function __construct ()
	{
		include "../include/config.php";
		$vdbm = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db (DB_NAME) or die("Could not select database \n"); 


	}

	function __destruct() {
	}
}

?>