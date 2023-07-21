<?php	
class voClass {	
	
	function addOrder($vo_name, $vo_number, $vo_email, $vo_order, $vo_type, $vo_amount, $vo_currency, $vo_renewdate)
	{
		include "db_con.php";
		$data_q = "INSERT INTO vo_orders (vo_name, vo_number, vo_email, vo_order, vo_type, vo_amount, vo_currency, vo_renewdate
) VALUES ('$vo_name', '$vo_number', '$vo_email', '$vo_order', '$vo_type', '$vo_amount', '$vo_currency', '$vo_renewdate')"; 
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update vo_orders Failed.\n" . mysqli_error($bdbm));
		return mysqli_insert_id($bdbm);
		mysqli_close($bdbm);
	} 
	
	function updateToken($id, $token)
	{
		include "db_con.php";		
		$data_q = "UPDATE vo_orders SET vo_token='$token' WHERE vo_id='$id'";
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update Token Failed. Error:\n". mysqli_error($bdbm));
		mysqli_close($bdbm);
	}
	/* /////////////////////////
	function checktokens($email,$pwd)
	{
		include "db_conn.php";	
		$data_r = mysqli_query($bdbm,"SELECT clientid FROM client_info WHERE email='$email' AND password=md5('$pwd')") or die("Checking voer Login Failed. Error:\n ".mysqli_error($bdbm));
		$fdata = mysqli_fetch_array($data_r);
		return $fdata["clientid"];
		mysqli_close($bdbm);	
	}
	
	function updateToken($id, $token)
	{
		include "db_conn.php";		
		$data_q = "UPDATE client_info SET token='$token' WHERE clientid='$id'";
		$data_r = mysqli_query ($bdbm,$data_q) or die("Update Token Failed. Error:\n". mysqli_error($bdbm));
		mysqli_close($bdbm);
	}
	//////////////////////// */
	
}