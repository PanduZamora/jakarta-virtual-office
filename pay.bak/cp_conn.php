<?php
	include "locale.php";
	$xdbm = mysql_connect (XDB_HOST, XDB_USER, XDB_PASS) or die ('I cannot connect to the database because: ' . mysql_error());
	mysql_select_db (XDB_NAME) or die("Could not select database \n"); 

?>
