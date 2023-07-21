<?php
include_once( './loginfunc.php' );
include "../include/config.php";

include "clientClass.php";
$adminfunc = new clientClass();

$phonehndlingpage = "https://".SITEURL."/index.php?dis=vo_staff";
//$jmsg = $_POST["id"];
/*echo "<script language=\"javascript\"> alert('$jmsg')</script>"; */

$in_id = $_POST["id"];
$in_up_value = $_POST["value"];

$preid = explode ("_", $in_id);
// update field name
$field = $preid[0];
// id of entry to update
$fid = $preid[1];

// value to update
$fvalue = $_POST["value"];
$ovalue = "INIT";

if ($field == "name")
{
	$adminfunc->updateClientContactName($fid, $fvalue);	
}
elseif ($field == "alias")
{
	$adminfunc->updateClientContactAlias($fid, $fvalue);	
}
elseif ($field == "email")
{
	if ($fvalue != "")
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
			$adminfunc->updateClientContactEmail($fid, $fvalue);	
			$adminfunc->updateClientContactMobile($fid, "");	
			$adminfunc->updateClientContactAttendedTransfer($fid, "");	
	
	
		}
	}
	else
	{
			$adminfunc->updateClientContactEmail($fid, $fvalue);	
			$adminfunc->updateClientContactMobile($fid, "");	
			$adminfunc->updateClientContactAttendedTransfer($fid, "");	
	}
	
					echo "
					<script>
					window.location=\"".$phonehndlingpage."\"
					</script>
					";

}
elseif ($field == "mobile")
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
				$adminfunc->updateClientContactEmail($fid, "");	
				$adminfunc->updateClientContactAttendedTransfer($fid, "");	

			}
		}
	}
	else
	{
				$adminfunc->updateClientContactMobile($fid, $fvalue);	
				$adminfunc->updateClientContactEmail($fid, "");	
				$adminfunc->updateClientContactAttendedTransfer($fid, "");	
			
	}
					echo "
					<script>
					window.location=\"".$phonehndlingpage."\"
					</script>
					";
}
elseif ($field == "axfer")
{
	$adminfunc->updateClientContactAttendedTransfer($fid, $fvalue);	
	$adminfunc->updateClientContactMobile($fid, "");	
	$adminfunc->updateClientContactEmail($fid, "");	

	echo "
			<script>
			window.location=\"".$phonehndlingpage."\"
			</script>
		";
}
elseif ($field == "numshow")
{
	$adminfunc->updateClientContactNumbertoAdvice($fid, $fvalue);	
}
elseif ($field == "additionmsg")
{
	$adminfunc->updateClientContactAdditionalMsg($fid, $fvalue);	
}
elseif ($field == "ginfo")
{
	$adminfunc->updateClientContactGeneralInfo($fid, $fvalue);	
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