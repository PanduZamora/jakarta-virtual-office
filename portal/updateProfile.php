<?php
include_once( './loginfunc.php' );
include "../include/config.php";

require "clientClass.php";
$adminfunc = new clientClass();



$in_id = $_POST["id"];
//$in_up_value = $_POST["value"];

//$jmsg = $in_up_value;
/*echo "<script language=\"javascript\"> alert('$jmsg')</script>"; */

$preid = explode ("_", $in_id);
// update field name
$field = $preid[0];
// id of entry to update
$fid = $preid[1];

/*$jmsg = $field;
echo "<script language=\"javascript\"> alert('$jmsg')</script>"; */

// value to update
$fvalue = $_POST["value"];
$ovalue = "INIT";


if ($field == "firstname")
{
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $field);	
}
elseif ($field == "lastname")
{
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $field);	
	/*$jmsg = $fid." ".$fvalue;
	echo "<script language=\"javascript\"> alert('$jmsg')</script>"; */
}
elseif ($field == "pricontact")
{
	$in_field = "pri_contact_no";
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $in_field);	
}
elseif ($field == "email")
{
	$checkemail = strpos($fvalue, "@");		
	if ($checkemail != true)
	{
		$mmsg = "Please enter proper Email Address.";
		echo "<script language=\"javascript\"> alert('$mmsg')</script>"; 
		$ovalue = $adminfunc->getClientContactEmail($fid);
	}
	else
	{
		$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $field);	
	}

}
/*elseif ($field == "mobile")
{
	$check_dest_no_prefix = substr($fvalue, 0, 1);
	if ($check_dest_no_prefix != "+")
	{
		if ($check_dest_no_prefix != "0")
		{
			$mmsg= "Please enter Malaysia mobile phone in the following format : 01xxxxxxxxx";
			echo "<script language=\"javascript\"> alert('$mmsg')</script>"; 
			$ovalue = $adminfunc->getClientContactMobile($fid);
		}
		else
		{
			$checkhyphen = strpos($fvalue, "-");		
			if ($checkhyphen == true)
			{
				$mmsg = "Please enter Malaysia mobile phone in the following format : 01xxxxxxxxx";
				echo "<script language=\"javascript\"> alert('$mmsg')</script>"; 
				$ovalue = $adminfunc->getClientContactMobile($fid);
			}
			else
			{
				$adminfunc->updateClientContactMobile($fid, $fvalue);	
			}
		}
	}
	else
	{
		$adminfunc->updateClientContactMobile($fid, $fvalue);	
	}
}*/
elseif ($field == "altcontact")
{
	$in_field = "sec_contact_no";
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $in_field);	
}
elseif ($field == "fax")
{
	$in_field = "fax_number";
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $in_field);	
}
elseif ($field == "website")
{
	
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $field);	
}
elseif ($field == "geninfo")
{
	$in_field = "general_info";
	$adminfunc->profile_page_updateClientProfileField($fid, $fvalue, $in_field);	
}


if ($ovalue != "INIT")
{
	echo $ovalue;
}
else
{
	echo $fvalue;
}
?>