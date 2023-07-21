<?php
include_once( './loginfunc.php' );
include "../include/config.php";

include "clientClass.php";
$adminfunc = new clientClass();


$cpid=$_GET["cpid"];

$adminfunc->delClientContact($cpid);
	
?>