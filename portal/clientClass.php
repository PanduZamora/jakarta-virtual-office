<?php

class clientClass {

	function getNumRows($results) 
	{
		return mysql_num_rows($results);
	}
 
 	function getNumberofVOLocation()
	{
        $loc_check = "SELECT * FROM location_info";
		$loc_out = mysql_query ($loc_check) or die (mysql_error());
		$num_rows = mysql_num_rows($loc_out); 

		return $num_rows;
	}
	
	function checkifClientExist($email)
	{
		$data_r = mysql_query("SELECT clientid FROM client_info WHERE email = '$email'");
		$num_rows = mysql_num_rows($data_r); 
		
		return $num_rows;
	}
	
	function updateClientPassword($email, $fpass)
	{
		$update_stmt = "UPDATE client_info SET password='$fpass' WHERE email = '$email'";
		$update_result = mysql_query ($update_stmt) or die("Could not update Client Pass Fail. \n");
		
	}

	
	function portal_main_page_getClientLast5Mails($id)
	{
		$data_r = mysql_query("SELECT * FROM mail_log_v2 WHERE client_id = '$id'  ORDER BY ID DESC LIMIT 5") or die("Last 5 Mails Collected LookUp Fail!");
		return $data_r;
	}
	
	function portal_main_page_getClientCallfortheDay($id, $indate)
	{
		$data_r = mysql_query("SELECT * FROM phone_log WHERE clientid = '$id' AND log_date='$indate' ORDER BY ID DESC") or die("Calls for the Days LookUp Fail!");
		return $data_r;
	}

	function portal_main_page_getClientLast5Calls($id)
	{
		$data_r = mysql_query("SELECT * FROM phone_log WHERE clientid = '$id' ORDER BY ID DESC LIMIT 5") or die("Last 5 Calls LookUp Fail!");
		return $data_r;
	}

	
	function portal_main_page_getClientUncollectedMails($id)
	{
		$data_r = mysql_query("SELECT * FROM mail_log_v2 WHERE client_id = '$id' AND collect_date='0000-00-00' ORDER BY ID DESC") or die("Uncollected Mails LookUp Fail!");
		return $data_r;
	}

	
	function portal_main_page_getClientCompanyInfo($id)
	{
		$data_r = mysql_query("SELECT * FROM client_info WHERE clientid = '$id'") or die("Grab Main Page Co Name Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata;

	}

	function portal_getClientMailForwardInstruction($id)
	{
		$data_r = mysql_query("SELECT mail_handling_forward_default_instructions FROM client_mail_core WHERE client_id = '$id'") or die("Grab Client Mail Forwarding Instruction Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["mail_handling_forward_default_instructions"];

	}

	function portal_getMailForwardInstructionList()
	{
		$data_r = mysql_query("SELECT * FROM client_mail_handling_status") or die("Grab Mail Forwarding Instruction List Fail!");
		//$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $data_r;
	}

	function portal_getClientMailForwardAddress($id)
	{
		$data_r = mysql_query("SELECT * FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Address Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata;
	}

 	function portal_checkClientMailForwardingSettingExist($id)
	{
        $loc_check = "SELECT id FROM client_mail_core WHERE client_id='$id'";
		$loc_out = mysql_query ($loc_check) or die (mysql_error());
		$num_rows = mysql_num_rows($loc_out); 

		return $num_rows;
	}

	function portal_getClientMailForwardMobileCountry($id)
	{
		$data_r = mysql_query("SELECT mail_handling_forward_country_code FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Mobile Country Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata["mail_handling_forward_country_code"];
	}
	
	function portal_getClientMailForwardMobile($id)
	{
		$data_r = mysql_query("SELECT mail_handling_mobile FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Mobile  Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata["mail_handling_mobile"];
	}

	function portal_getClientMailForwardEmail($id)
	{
		$data_r = mysql_query("SELECT mail_handling_email FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Mobile  Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata["mail_handling_email"];
	}

	function portal_getClientMailForwardContactPerson($id)
	{
		$data_r = mysql_query("SELECT mail_handling_forward_person FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Contact  Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata["mail_handling_forward_person"];
	}

	function portal_getClientMailForwardPreferredNotification($id)
	{
		$data_r = mysql_query("SELECT mail_handling_forward_preferred_notification FROM client_mail_core WHERE client_id='$id'") or die("Grab Client Mail Forwarding Preffered Notification  Fail!");
		$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $fdata["mail_handling_forward_preferred_notification"];
	}

	function portal_getMailForwardCountryList()
	{
		$data_r = mysql_query("SELECT * FROM vo_country_list") or die("Grab Country List Fail!");
		//$fdata = mysql_fetch_array($data_r);

		//return $fdata["mail_handling_forward_default_instructions"];
		return $data_r;
	}

	function profile_page_updateClientProfileField($id, $data, $field)
	{	
		$fdata = mysql_real_escape_string($data);

		$update_stmt = "UPDATE client_info SET $field='$fdata' WHERE clientid = '$id'";
		$update_result = mysql_query ($update_stmt) or die("Could not update Client Field \n");
	}
	
	function portal_updateClientMailForwardingInfo($cid, $callfed, $address, $city,$state,$postcode,$country)
	{	
		//$fdata = mysql_real_escape_string($data);
		$update_stmt = "UPDATE client_mail_core SET mail_handling_forward_default_instructions='$callfed', mail_handling_forward_address='$address', mail_handling_forward_country='$country', mail_handling_forward_city='$city', mail_handling_forward_state='$state', mail_handling_forward_postcode='$postcode'  WHERE client_id = '$cid'";
		$update_result = mysql_query ($update_stmt) or die("Could not update Client MF address Field \n");
	}

	function portal_addClientMailForwardingInfo($cid, $callfed, $address, $city,$state,$postcode,$country)
	{
        $data_q = "INSERT INTO client_mail_core 
					(client_id, mail_handling_forward_default_instructions, mail_handling_forward_address, mail_handling_forward_country, mail_handling_forward_city, mail_handling_forward_state, mail_handling_forward_postcode) VALUES 
					('$cid', '$callfed', '$address', '$country', '$city', '$state', '$postcode')";
		$data_r = mysql_query ($data_q) or die("Could not Add Client Mail Handling Forwarding.\n");
	}

	function portal_updateClientMailForwardingSetting($cid, $person, $email, $countrycode, $mobile, $notify_type)
	{	
		//$fdata = mysql_real_escape_string($data);
		$update_stmt = "UPDATE client_mail_core SET mail_handling_forward_person='$person', mail_handling_email='$email', mail_handling_mobile='$mobile', mail_handling_forward_country_code='$countrycode', mail_handling_forward_preferred_notification='$notify_type' WHERE client_id = '$cid'";
		$update_result = mysql_query ($update_stmt) or die("Could not update Client MF Notification Field Failed \n");
	}

	function portal_addClientMailForwardingSetting($cid, $person, $email, $countrycode, $mobile, $notify_type)
	{
        $data_q = "INSERT INTO client_mail_core 
					(client_id, mail_handling_forward_person, mail_handling_email, mail_handling_mobile, mail_handling_forward_country_code, mail_handling_forward_preferred_notification) VALUES 
					('$cid', '$person', '$email', '$mobile', '$countrycode', '$notify_type')";
		$data_r = mysql_query ($data_q) or die("Could not Add Client Mail Handling Forwarding.\n");
	}


	function portal_getClientPlanStatus($id)
	{
		$data_r = mysql_query("SELECT status_desc FROM client_plans_status WHERE status_id = '$id'") or die("Status LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["status_desc"];
	}
	
	function portal_getClientVOID($cid)
	{
		$data_r = mysql_query("SELECT location FROM client_info WHERE clientid = '$cid'") or die("Client Location Name LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["location"];
	}

	function portal_getClientID($searchwhat, $searchfor)
	{
		$data_r = mysql_query("SELECT clientid FROM client_info WHERE $searchwhat = '$searchfor'") or die("Client ID LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["clientid"];
	}

	function portal_updateClientPassword($cid, $password)
	{
		$update_stmt = "UPDATE client_info SET password='$password' WHERE clientid = '$cid'";
		$update_result = mysql_query ($update_stmt) or die("Could not update Client Field \n");
	}

	function portal_getClientPlanProductName($id)
	{
		$data_r = mysql_query("SELECT product_name FROM products WHERE product_id = '$id'") or die("Product Name LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["product_name"];
	}
	
	function portal_getClientPlanLocation($id)
	{
		$data_r = mysql_query("SELECT location_desc FROM location_info WHERE id = '$id'") or die("Location Name LookUp Fail!");
		$fdata = mysql_fetch_array($data_r);

		return $fdata["location_desc"];
	}

	function getMaxClientContacts($cp_id)
	{
		$cinfo_sqlstmt = "SELECT max_contacts FROM client_plans WHERE cp_id='$cp_id'";
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt) or die (mysql_error());
		$pinfo_qrow = mysql_fetch_assoc($cinfo_trxn_result);
		return $pinfo_qrow["max_contacts"];
	}

	function getCurrentClientContacts($cpid)
	{
		$cinfo_sqlstmt = "SELECT id FROM client_contacts WHERE cp_id='$cpid'";
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt) or die (mysql_error());
		$pinfo_qrow = mysql_num_rows($cinfo_trxn_result);
		return $pinfo_qrow;
	}

	function getClientContacts($cpid)
	{
		$cc_info_sqlstmt = "SELECT * FROM client_contacts WHERE cp_id='$cpid'";
		$cccinfo_trxn_result = mysql_query($cc_info_sqlstmt);
		//$m_qrow = mysql_num_rows($cinfo_trxn_result);
		
		return $cccinfo_trxn_result;

	}
	
	function addNewClientContact($cpid)
	{
		$addclientsstmt = "INSERT INTO client_contacts (cp_id) VALUES ('$cpid')";
		$resultaddclients = mysql_query ($addclientsstmt) or die (mysql_error());
	}


	function getClientContactMobile($ccid)
	{

        $data_q = "SELECT contact_number FROM client_contacts WHERE id='$ccid'";
		$data_r = mysql_query ($data_q) or die("Could not get Client Contact Mobile.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function getClientContactEmail($ccid)
	{

        $data_q = "SELECT contact_email FROM client_contacts WHERE id='$ccid'";
		$data_r = mysql_query ($data_q) or die("Could not get Client Contact Email.\n");

		$fdata = mysql_fetch_row($data_r);
		return $fdata[0];
	}

	function delClientContact($id)
	{
		$delclientsstmt = "DELETE FROM client_contacts WHERE id='$id'";
		$resultdelclients = mysql_query ($delclientsstmt) or die (mysql_error());
	}

	function updateClientContactNumbertoAdvice($id, $data)
	{	
		$update_cc_name_stmt = "UPDATE client_contacts SET number_to_provide='$data' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Number to Provide \n");
	}

	function updateClientContactGeneralInfo($id, $data)
	{	
		$fdata = mysql_real_escape_string($data);
		$update_cc_name_stmt = "UPDATE client_info SET general_info='$fdata' WHERE clientid = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client General Info \n");
	}

	function updateClientContactName($id, $data)
	{	
		$fdata = mysql_real_escape_string($data);

		$update_cc_name_stmt = "UPDATE client_contacts SET contact_name='$fdata' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Name \n");
	}
	
	function updateClientContactAlias($id, $data)
	{
		$fdata = mysql_real_escape_string($data);

		$update_cc_name_stmt = "UPDATE client_contacts SET contact_alias='$fdata' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Alias \n");
	}

	function updateClientContactEmail($id, $data)
	{	
		$update_cc_name_stmt = "UPDATE client_contacts SET contact_email='$data' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Email \n");
	}

	function updateClientContactMobile($id, $data)
	{	
		$update_cc_name_stmt = "UPDATE client_contacts SET contact_number='$data' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Contact Number \n");
	}

	function updateClientContactAttendedTransfer($id, $data)
	{	
		$update_cc_name_stmt = "UPDATE client_contacts SET attended_transfer_number='$data' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Attended Transfer \n");
	}

	function updateClientContactNumbertoShow($id, $data)
	{	
		$update_cc_name_stmt = "UPDATE client_contacts SET number_to_provide='$data' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Number to Provide \n");
	}

	function updateClientContactAdditionalMsg($id, $data)
	{	
		$fdata = mysql_real_escape_string($data);
		$update_cc_name_stmt = "UPDATE client_contacts SET additional_message='$fdata' WHERE id = '$id'";
		$update_cc_name_result = mysql_query ($update_cc_name_stmt) or die("Could not update Client Adiitional Message \n");
	}


	function getNumberClientsPlanwithContacts($cid, $type)
	{
		if ($type == "")
		{
			//$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND max_contacts !='0' ";
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE client_id='$cid' AND max_contacts !='0' ";

		}
		else
		{
			//$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND status='$type' AND max_contacts !='0'";
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE client_id='$cid' AND status='$type' AND max_contacts !='0'";

		}
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt);

		$num_of_plan_with_contacts = mysql_num_rows($cinfo_trxn_result);
		return $num_of_plan_with_contacts;

	}
	
	function getClientsPlanwithContacts($cid, $type)
	{
		if ($type == "")
		{
			//$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND max_contacts !='0' ";
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE client_id='$cid' AND max_contacts !='0' ";

		}
		else
		{
			//$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND status='$type' AND max_contacts !='0'";
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE client_id='$cid' AND status='$type' AND max_contacts !='0'";

		}
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt);

		//$plandata = mysql_fetch_array($cinfo_trxn_result);
		return $cinfo_trxn_result;

	}

	function getClientsPlanwithContactsInfo($pid, $type)
	{
		if ($type == "")
		{
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND max_contacts !='0' ";
		}
		else
		{
			$cinfo_sqlstmt = "SELECT cp_id, client_id, product_id, vo_id, status, max_contacts FROM client_plans WHERE cp_id='$pid' AND status='$type' AND max_contacts !='0'";
		}
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt);

		return $cinfo_trxn_result;

	}

	function getManageClientsInfo($searchfor, $searchstring)
	{
		$f_search = trim ($searchstring);
		$o_search = mysql_real_escape_string($f_search);
		
		$no_go_chk = 0;
		
		if ($searchfor == "clientid")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_info WHERE clientid='$o_search'";			
		}
		elseif ($searchfor == "inv")
		{
			$p_inv = explode ("-", $searchstring);
			$void = trim($p_inv[0]);
			$invid = trim($p_inv[1]);
			$invtable = "client_invoices_".$void;
			$cinv_sqlstmt = "SELECT client_id FROM $invtable WHERE 	invoice_id='$invid' AND vo_id	='$void'";		
			$cinfo_trxn_result = mysql_query($cinv_sqlstmt);
			$result_chk = mysql_num_rows($cinfo_trxn_result);
			
			$qrow = mysql_fetch_row($cinfo_trxn_result);
			
			
			if ($result_chk != 0)
			{
				$cinfo_sqlstmt = "SELECT * FROM client_info WHERE clientid='$qrow[0]'";
			}
			else
			{
				$no_go_chk = 1;
			}
			
		}
		elseif ($searchfor == "fname")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_info WHERE firstname REGEXP '".$o_search."'";
		}
		elseif ($searchfor == "lname")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_info WHERE lastname REGEXP '".$o_search."'";
		}
		else
		{
			$cinfo_sqlstmt = "SELECT * FROM client_info WHERE ".$searchfor." REGEXP '".$o_search."'";
		}
		//$cinfo_sqlstmt = "SELECT clientid, firstname, lastname, coname FROM client_info WHERE ".$searchfor." LIKE '".$o_search."'";
		//echo $cinfo_sqlstmt;
		//$cinfo_trxn_result = mysql_query($cinfo_sqlstmt, $dbm) or die (@mysql_error());
		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt);
	
		if ($no_go_chk == 0)
		{
			return $cinfo_trxn_result;
		}
		else
		{
			return "NA";
		}
	}


	function portal_administrative_getClientsPlanInfo($cid, $mode)
	{

		if ($mode == "active")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_plans WHERE client_id='$cid' AND status='1'";
		}
		elseif ($mode == "cancel")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_plans WHERE client_id='$cid' AND status='2'";
		}
		elseif ($mode == "suspended")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_plans WHERE client_id='$cid' AND status='3'";
		}
		elseif ($mode == "bill")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_plans WHERE client_id='$cid' AND status !='2' ";
		}
		elseif ($mode == "all")
		{
			$cinfo_sqlstmt = "SELECT * FROM client_plans WHERE client_id='$cid'";
		}

		$cinfo_trxn_result = mysql_query($cinfo_sqlstmt) or die (mysql_error());
		return $cinfo_trxn_result;

	}
	
	function portal_main_page_getClientInvoice($vo_id, $inv_id)
	{
		$Inv_table_prefix = "client_invoices_";
		$active_inv_table = $Inv_table_prefix.$vo_id;
	
		$data_r = mysql_query("SELECT * FROM $active_inv_table WHERE vo_id = '$vo_id' AND invoice_id='$inv_id'") or die("User Invoice LookUp Fail!");
		
		$fdata = mysql_fetch_array($data_r);

		return $fdata;
	}

	function portal_main_page_getClientLast5Invoices($id)
	{
		$num_vo_loc = $this->getNumberofVOLocation();
		$Inv_table_prefix = "client_invoices_";
		$store_inv = array();
		$f_store_inv = array();
		$store_in_index = 0;
		
		for ($i=0; $i < $num_vo_loc ; ++$i)
		{
			$active_inv_table = $Inv_table_prefix.$i;
			$data_r = mysql_query("SELECT invoice_id, date_generated FROM $active_inv_table WHERE client_id = '$id'  ORDER BY invoice_id DESC LIMIT 5") or die("Last 5 Invoices LookUp Fail!");
			
			while ($l_rows = mysql_fetch_array($data_r))
			{
				if ($l_rows['invoice_id'] != "")
				{
					//$store_inv[$store_in_index]=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					//$store_inv=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					//$store_in_index++;
					$store_inv=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					array_push($f_store_inv, $store_inv);

				}
			}
		}
		//usort($store_inv, "cmp");
		//usort($store_inv, 'date_compare');

		//rsort($dateArray);
		return $f_store_inv;
	}

	function portal_main_page_getClientInvoices($id)
	{
		$num_vo_loc = $this->getNumberofVOLocation();
		$Inv_table_prefix = "client_invoices_";
		$store_inv = array();
		$f_store_inv = array();
		$store_in_index = 0;
		
		for ($i=0; $i < $num_vo_loc ; ++$i)
		{
			$active_inv_table = $Inv_table_prefix.$i;
			$data_r = mysql_query("SELECT invoice_id, date_generated FROM $active_inv_table WHERE client_id = '$id'  ORDER BY invoice_id DESC") or die(" Invoices LookUp Fail!");
			
			while ($l_rows = mysql_fetch_array($data_r))
			{
				if ($l_rows['invoice_id'] != "")
				{
					//$store_inv[$store_in_index]=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					//$store_inv=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					//$store_in_index++;
					$store_inv=array('invid'=>$i."-".$l_rows['invoice_id'],'dategen'=>$l_rows['date_generated']);
					array_push($f_store_inv, $store_inv);

				}
			}
		}
		//usort($store_inv, "cmp");
		//usort($store_inv, 'date_compare');

		//rsort($dateArray);
		return $f_store_inv;
	}

	function portal_main_page_getMailCollectionStatus($id)
	{
		$data_r = mysql_query("SELECT collect_date FROM mail_log_v2 WHERE ID = '$id'") or die("Get Collection Date  Fail!");
		$fdata = mysql_fetch_array($data_r);
		
		if ($fdata['collect_date'] == "0000-00-00")
		{
			$mail_status = "Uncollected";
		}
		else
		{
			$mail_status = "Collected";
		}
		return $mail_status;
	}


	
	function mportal_updateUserLogin($id, $indate, $intime)
	{
		$data_r = mysql_query("UPDATE client_info SET last_login_date='$indate', last_login_time='$intime' WHERE clientid = '$id'") or die("Fail Update Login");
	}
	

	function mlogPhoneMsg($fid, $femail,$mt_date, $mt_time, $fmsg, $oid)
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

	function __destruct() {
	}
}

?>