<?php

class adminClass {

	function getNumRows($results) 
	{
		return mysql_num_rows($results);
	}
 
	function portal_checkUserLogin($user, $pass)
	{
		//$user = mysqli_real_escape_string($fuser);
		$data_r = mysql_query("SELECT clientid FROM client_info WHERE email = '$user' AND password='$pass'") or die("User LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);
		return $fdata["clientid"];
	}
	
	function portal_getUserPrevLogin($id)
	{
		$data_r = mysql_query("SELECT last_login_date, last_login_time FROM client_info WHERE clientid = '$id'") or die("Get Previous Login Fail!");
		$fdata = mysql_fetch_array($data_r);
		return $fdata;
	}

	function portal_getUserPrevLoginIP($id)
	{
		$data_r = mysql_query("SELECT log_ip FROM client_info WHERE clientid = '$id'") or die("Get Previous Login IP Fail!");
		$fdata = mysql_fetch_array($data_r);
		return $fdata;
	}

	
	function portal_updateUserLogin($id, $indate, $intime)
	{
		$data_r = mysql_query("UPDATE client_info SET last_login_date='$indate', last_login_time='$intime' WHERE clientid = '$id'") or die("Fail Update Login");
	}
	
	function portal_updateUserLoginIP($id, $inip)
	{
		$data_r = mysql_query("UPDATE client_info SET log_ip='$inip' WHERE clientid = '$id'") or die("Fail Update IP Login");
	}


	function portal_getUserTimeZone($id)
	{
		$tz_q = "SELECT timezone FROM client_info WHERE clientid='$id'";
		$tz_r = mysql_query ($tz_q) or die("Could not get User Time Zone.\n");
		$fdata = mysql_fetch_array($tz_r);

		$g_tz = $fdata["timezone"];

		return $g_tz;
	}


	function getStaffName($staffid)
	{
        $data_q = "SELECT loginname FROM operators WHERE id='$staffid'";
		$data_r = mysql_query ($data_q) or die("Could not get Staff Name.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}
	
	function getNumberofVOLocation()
	{
        $data_q = "SELECT id FROM location_info";
		$data_r = mysql_query($data_q) or die("Could not get Number of VO Location.\n");

		$fdata = mysql_num_rows($data_r);
		return $fdata;
	}

	function getPBXHost($void)
	{
        $data_q = "SELECT pbx_host FROM location_info WHERE id='$void'";
		$data_r = mysql_query($data_q) or die("Could not get PBX Host .\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getPBXUsername($void)
	{
        $data_q = "SELECT pbx_user FROM location_info WHERE id='$void'";
		$data_r = mysql_query($data_q) or die("Could not get PBX Username.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getPBXPassword($void)
	{
        $data_q = "SELECT pbx_pass FROM location_info WHERE id='$void'";
		$data_r = mysql_query($data_q) or die("Could not get PBX Password.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}
	
	function getPBXDB($void)
	{
        $data_q = "SELECT pbx_db FROM location_info WHERE id='$void'";
		$data_r = mysql_query($data_q) or die("Could not get PBX DB.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}
	
	function getVOName($void)
	{
        $data_q = "SELECT location_desc FROM location_info WHERE id='$void'";
		$data_r = mysql_query($data_q) or die("Could not get VO Location Name.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getPBXIncomingCalls($void)
	{
		$r_pbxhost = $this->getPBXHost($void);
		$r_pbxdb = $this->getPBXDB($void);
		$r_pbxusername = $this->getPBXUsername($void);
		$r_pbxpw = $this->getPBXPassword($void);

		//echo $r_pbxhost;
		if ($r_pbxhost != "")
		{
			$pdbm = mysql_connect ($r_pbxhost, $r_pbxusername, $r_pbxpw) or die ('I cannot connect to the database because: ' . mysql_error());
			mysql_select_db ($r_pbxdb) or die("Could not select database \n"); 
	
			$data_q = "SELECT * FROM incominglog WHERE logtime > now( ) - INTERVAL 1400 MINUTE GROUP BY logtime ORDER BY id DESC";
			$data_r = mysql_query ($data_q, $pdbm) or die("Could not get Call Log.\n");
		
			return $data_r;
		}
	}


	function getStaffExtension($staffid)
	{
        $data_q = "SELECT extension FROM operators WHERE id='$staffid'";
		$data_r = mysql_query ($data_q) or die("Could not get Staff Name.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getCallLoggingStatus()
	{
        $status_r = "SELECT * FROM call_logging_status";
		$status_info = mysql_query ($status_r) or die (mysql_error());

		return $status_info;
	}

	function getTimeZone($void)
	{
		$tz_q = "SELECT time_zone FROM location_info WHERE id='$void'";
		$tz_r = mysql_query ($tz_q) or die("Could not get Time Zone.\n");
		$fdata = mysql_fetch_row($tz_r);

		$g_tz = $fdata[0];

        //$data_q = "SET time_zone = $g_tz";
		//$data_r = mysql_query ($data_q) or die("Could not set TimeZone.\n");

		return $g_tz;
	}
	
	function getSuspendDays($vo_id)
	{
        $data_q = "SELECT suspend_day FROM location_info WHERE id='$vo_id'";
		$data_r = mysql_query ($data_q) or die("Could not get Suspend Day.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}


	function getStaffACL($vo_id, $staffid, $section)
	{
        $data_q = "SELECT $section FROM operator_acl WHERE op_id='$staffid' AND vo_id= '$vo_id'";
		$data_r = mysql_query ($data_q) or die("Could not get Staff ACL.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getVOAccess($staffid)
	{
        $data_q = "SELECT vo_acl FROM operators WHERE id='$staffid' AND status= '1'";
		$data_r = mysql_query ($data_q) or die("Could not get Staff Name.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}
	
	function getAutoFollowupDay($void)
	{
        $data_q = "SELECT followup_auto_day FROM location_info WHERE id ='$void'";
		$data_r = mysql_query ($data_q) or die("Could not get followup day.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function checkVOAccess($staffid, $volist)
	{
		
        $data_q = "SELECT vo_id FROM operator_acl WHERE op_id='$staffid' AND vo_id ='$volist' ";
		$data_r = mysql_query ($data_q) or die("Could not get Staff VOID Access.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function logPhoneMsg($fid, $femail,$mt_date, $mt_time, $fmsg, $oid)
	{
		$data_q = "INSERT INTO phone_log (clientid, notify_via, log_date, log_time,  msg, operator) VALUES ('$fid', '$femail','$mt_date', '$mt_time','$fmsg', '$oid')";
		$data_r = mysql_query ($data_q) or die("Could not get Insert Pone Message.\n");
	}


	function __construct ()
	{
		include "../include/config.php";
		$vdbm = mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) or die ('I cannot connect to the database because: ' . mysql_error());
		mysql_select_db (DB_NAME) or die("Could not select database \n"); 


	}

}

?>