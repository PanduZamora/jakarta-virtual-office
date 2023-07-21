<?php	
class voClass {	
	
	function addOrder($vo_name, $vo_number, $vo_email, $vo_order, $vo_type, $vo_amount, $vo_currency, $vo_renewdate, $vo_expirydate, $vo_term, $vo_renewterm)
	{
		include "db_con.php";
		$data_q = "INSERT INTO vo_orders (vo_name, vo_number, vo_email, vo_order, vo_type, vo_amount, vo_currency, vo_renewdate, vo_expirydate, vo_term, vo_renewterm) VALUES ('$vo_name', '$vo_number', '$vo_email', '$vo_order', '$vo_type', '$vo_amount', '$vo_currency', '$vo_renewdate', '$vo_expirydate', '$vo_term', '$vo_renewterm')"; 
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update vo_orders Failed.\n" . mysqli_error($bdbm));
		return mysqli_insert_id($bdbm);
		mysqli_close($bdbm);
	} 
	function addlog($status)
	{
		include "db_con.php";
		$data_q = "INSERT INTO logs (status) VALUES ('$status')"; 
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update logs Failed.\n" . mysqli_error($bdbm));
		return mysqli_insert_id($bdbm);
		mysqli_close($bdbm);
	} 
	
	function updateToken($id, $token, $status)
	{
		include "db_con.php";		
		$data_q = "UPDATE vo_orders SET vo_token='$token', vo_status='$status' WHERE vo_id='$id'";
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update Token Failed. Error:\n". mysqli_error($bdbm));
		mysqli_close($bdbm);
	}
	
	function gettokens($date)
	{
		include "db_con.php";	
		$data_r = mysqli_query($bdbm,"SELECT * FROM vo_orders WHERE vo_renewdate<='$date' AND vo_status='3' AND vo_term != vo_renewterm") or die("Error:\n ".mysqli_error($bdbm));
		return $data_r;
		mysqli_close($bdbm);	
	}
	
	function renewOrder($vo_name, $vo_number, $vo_email, $vo_order, $vo_type, $vo_amount, $vo_currency, $vo_token, $vo_renewdate, $vo_expirydate, $vo_term, $vo_renewterm, $vo_status)
	{
		include "db_con.php";
		$data_q = "INSERT INTO vo_orders (vo_name, vo_number, vo_email, vo_order, vo_type, vo_amount, vo_currency, vo_token, vo_renewdate, vo_expirydate, vo_term, vo_renewterm ,vo_status) VALUES ('$vo_name', '$vo_number', '$vo_email', '$vo_order', '$vo_type', '$vo_amount', '$vo_currency', '$vo_token', '$vo_renewdate', '$vo_expirydate', '$vo_term', '$vo_renewterm', '$vo_status')"; 
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update vo_orders Failed.\n" . mysqli_error($bdbm));
		return mysqli_insert_id($bdbm);
		mysqli_close($bdbm);
	} 
	
	function updateStatus($id)
	{
		include "db_con.php";		
		$data_q = "UPDATE vo_orders SET vo_status='4' WHERE vo_id='$id'";
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update Token Failed. Error:\n". mysqli_error($bdbm));
		mysqli_close($bdbm);
	}
	/* /////////////////////////
	function checktokens($email,$pwd)
	{
		include "db_con.php";	
		$data_r = mysqli_query($bdbm,"SELECT clientid FROM client_info WHERE email='$email' AND password=md5('$pwd')") or die("Checking voer Login Failed. Error:\n ".mysqli_error($bdbm));
		$fdata = mysqli_fetch_array($data_r);
		return $fdata["clientid"];
		mysqli_close($bdbm);	
	}
	
	function updateToken($id, $token)
	{
		include "db_con.php";		
		$data_q = "UPDATE client_info SET token='$token' WHERE clientid='$id'";
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update Token Failed. Error:\n". mysqli_error($bdbm));
		mysqli_close($bdbm);
	}
	//////////////////////// */
	
}