<?php

class helperClass {

	function generateUcode ($length = 2)
	{
		// start with a blank password
		$pcode = "";
	
		// define possible characters - any character in this string can be
		// picked for use in the password, so if you want to put vowels back in
		// or add special characters such as exclamation marks, this is where
		// you should do it
		$possible = "ABCDFGHJKLMNPQRTVWXYZ";
	
		// we refer to the length of $possible a few times, so let's grab it now
		$maxlength = strlen($possible);
	  
		// check for length overflow and truncate if necessary
		if ($length > $maxlength) {
		  $length = $maxlength;
		}
		
		// set up a counter for how many characters are in the password so far
		$i = 0; 
		
		// add random characters to $password until $length is reached
		while ($i < $length) { 
	
		  // pick a random character from the possible ones
		  $char = substr($possible, mt_rand(0, $maxlength-1), 1);
			
		  // have we already used this character in $password?
		  if (!strstr($pcode, $char)) { 
			// no, so it's OK to add it onto the end of whatever we've already got...
			$pcode .= $char;
			// ... and increase the counter by one
			$i++;
		  }
	
		}
	
		// done!
		return $pcode;
	
	}
  
	function generatePassword($length=8, $strength=7) {
		$vowels = 'aeuy';
		$consonants = 'bdghjmnpqrstvz';
		if ($strength & 1) {
			$consonants .= 'BDGHJLMNPQRSTVWXZ';
		}
		if ($strength & 2) {
			$vowels .= "AEUY";
		}
		if ($strength & 4) {
			$consonants .= '23456789';
		}
		if ($strength & 8) {
			$consonants .= '@#$%';
		}
	 
		$password = '';
		$alt = time() % 2;
		for ($i = 0; $i < $length; $i++) {
			if ($alt == 1) {
				$password .= $consonants[(rand() % strlen($consonants))];
				$alt = 0;
			} else {
				$password .= $vowels[(rand() % strlen($vowels))];
				$alt = 1;
			}
		}
		return $password;
	}

	
	function getVOTimeZone($void)
	{
		$tz_q = "SELECT time_zone FROM location_info WHERE id='$void'";
		$tz_r = mysql_query ($tz_q) or die("Could not get Time Zone.\n");
		$fdata = mysql_fetch_array($tz_r);

		$g_tz = $fdata["time_zone"];

        //$data_q = "SET time_zone = $g_tz";
		//$data_r = mysql_query ($data_q) or die("Could not set TimeZone.\n");

		return $g_tz;
	}

	function getVOContactTemplate($void)
	{
        $data_q = "SELECT * FROM contact_template WHERE loc_id = '$void'";
		$data_r = mysql_query ($data_q) or die("Could not get VO Contact Template.\n");

		$fdata = mysql_fetch_array($data_r);
		return $fdata;
	}

	function getStaffName($staffid)
	{
        $data_q = "SELECT loginname FROM operators WHERE id='$staffid'";
		$data_r = mysql_query ($data_q) or die("Could not get Staff Name.\n");

		$fdata = mysql_fetch_array($data_r);
		return $fdata["loginname"];
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