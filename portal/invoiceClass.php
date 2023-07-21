<?php

class invoiceClass {

	function portal_getInvoiceStatus($status)
	{	
		$data_r = mysql_query("SELECT status FROM invoice_status WHERE status_id = '$status'") or die("Get Invoice Status Fail!");
		
		$fdata = mysql_fetch_array($data_r);

		return $fdata['status'];
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