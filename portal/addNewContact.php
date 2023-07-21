<?php
include_once( './loginfunc.php' );
include "../include/config.php";

include "clientClass.php";
$adminfunc = new clientClass();

$cpid=$_GET["cpid"];
$cid=$_GET["cid"];


$max_cc = $adminfunc->getMaxClientContacts($cpid);
$current_contact = $adminfunc->getCurrentClientContacts($cpid);

if ($current_contact < $max_cc)
{
	$adminfunc->addNewClientContact($cpid);
	
}
    


?>