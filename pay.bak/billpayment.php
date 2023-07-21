<?php

echo "<script src=\"validateform.js\"></script>";
echo "<script src=\"showhidecc.js\"></script>";

include "locale.php";

if ($_POST["gopay"])
{

				// personal info
				$firstname = $_POST["first"];			
				$lastname = $_POST["last"];
				$address = $_POST["address"];
				$city = $_POST["city"];
				$state = $_POST["state"];
				$zip = $_POST["zip"];
				$country = $_POST["country"];
				$phone = $_POST["phone"];
				$email = $_POST["email"];
				$paymtype = $_POST["payment"];
				$coupon = $_POST["coupon"];
		
				// cc info
				$card_name = $_POST["cc_name"];		
				$card_no = $_POST["cc_num"];
				$card_exp_mm = $_POST["cc_exp_mm"];
				$card_exp_yy = $_POST["cc_exp_yy"];
				$card_cvv = $_POST["cc_cvv2"];
				$card_bank = $_POST["bankname"];
		
				$vip = $_SERVER['REMOTE_ADDR'];
				
				// set reference id
				$ref_id = "VOMY-Pay"."-".time();

			// Format currency
			
			$invoices = $_POST["invno"];
			$curencytype = $_POST["currency"];
			$raw_total = $_POST["payamount"];


			$msg_in = "";
			$msg_in = "Personnal Details"."\r\n";
			$msg_in .= "-----------------------------"."\r\n";
			$msg_in .= "Name : ".$firstname." ".$lastname."\r\n";
			$msg_in .= "Company : ".$companyname."\r\n";
			$msg_in .= "Address : ".$address."\r\n";
			$msg_in .= "City : ".$city."\r\n";
			$msg_in .= "State : ".$state."\r\n";
			$msg_in .= "Zip : ".$zip."\r\n";
			$msg_in .= "Phone : ".$phone."\r\n";
			$msg_in .= "Email : ".$email."\r\n\r\n";
	
			$msg_in .= "Payment Info"."\r\n";
			$msg_in .= "-----------------------------"."\r\n";
			$msg_in .= "Payment Type : ".$_POST["payment"]."\r\n";
			$msg_in .= "Invoice(s) : ".$invoices."\r\n";
			$msg_in .= "Currency Type : ".$curencytype."\r\n";
			$msg_in .= "Native Currency Amount : ".$raw_total."\r\n";
			$msg_in .= "Comments : ".$_POST["comments"]."\r\n";

		if ($_POST["payment"] == "cc")
		{
			
			if ($curencytype == "AUD")
			{
				  $pprice = $raw_total * 100;
			}
			else
			{
			      $dbmrates = mysql_connect (DBHOST, DBUSER, DBPASS) or die ('I cannot connect to the database because: ' . mysql_error());
                  mysql_select_db (DBNAME);
					
				  if ($curencytype == "USD") {
				  	$exratesnow = USDEXRATESQLSTMT;
				  }
				  elseif ($curencytype == "GBP") {
				  	$exratesnow = GBPEXRATESQLSTMT;
				  
				  }
  				  elseif ($curencytype == "EUR") {
				  	$exratesnow = EUROEXRATESQLSTMT;

				  }
  				  elseif ($curencytype == "NZD") {
				  	$exratesnow = NZDEXRATESQLSTMT;

				  }
  				  elseif ($curencytype == "SGD") {
				  	$exratesnow = SGDEXRATESQLSTMT;

				  }
				  elseif ($curencytype == "ZAR") {
				  	$exratesnow = ZAREXRATESQLSTMT;
				  }	  
  				  elseif ($curencytype == "MYR") {
				  	$exratesnow = MYREXRATESQLSTMT;
				  }	  

				  				  				  
            	  $result = mysql_query($exratesnow) or die("SQL Error[0]!");
                  $row = mysql_fetch_row($result);
                  $frates = $row[2];
                  
				  //echo $usrates;
                  mysql_close($dbmrates);

                  $totalpayable = $raw_total * $frates;
				  $pprice = $totalpayable * 100;

			}
			
			
			if ((strstr($pprice,".")))
			{
						$tprice=explode (".", $pprice);
						$price = $tprice[0];
			}
			else
			{
						$price=$pprice;
			}

			$msg_in .= "AU Amount Due : AUD".$price."\r\n\r\n";

			$elink = EWAYFAIL;
			$link = EWAYOK;

			
			  require_once('EwayPaymentLive.php');

			  // Set the payment details

			  $eway = new EwayPaymentLive($eWAY_CustomerID, $eWAY_PaymentMethod, $eWAY_UseLive);

			  //$eway = new EwayPaymentLive('14440882', "REAL_TIME", true);



			  $eway->setTransactionData("TotalAmount", $price); //mandatory field
			  $eway->setTransactionData("CustomerFirstName", $firstname);
			  $eway->setTransactionData("CustomerLastName", $lastname);
			  $eway->setTransactionData("CustomerEmail", $email);
			  $eway->setTransactionData("CustomerAddress", $address);
			  $eway->setTransactionData("CustomerPostcode", $postcode);
			  $eway->setTransactionData("CustomerInvoiceDescription", "FFAX");
			  $eway->setTransactionData("CustomerInvoiceRef", $txninv);
			  $eway->setTransactionData("CardHoldersName", $card_name); //mandatory field
			  $eway->setTransactionData("CardNumber", $card_no); //mandatory field
			  $eway->setTransactionData("CardExpiryMonth", $card_exp_mm); //mandatory field
			  $eway->setTransactionData("CardExpiryYear", $card_exp_yy); //mandatory field
			  $eway->setTransactionData("TrxnNumber", $ref_id);
			  $eway->setTransactionData("Option1", $txtOption1);
			  $eway->setTransactionData("Option2", $txtOption2);
			  $eway->setTransactionData("Option3", $txtOption3);
			  $eway->setCurlPreferences(CURLOPT_SSL_VERIFYPEER, 0); // Require for Windows hosting

			  // Send the transaction
			  $ewayResponseFields = $eway->doPayment();

			  if(strtolower($ewayResponseFields["EWAYTRXNSTATUS"])=="false")
			  {
				  //print "Transaction Error: " . $ewayResponseFields["EWAYTRXNERROR"] . "<br>\n";
				  foreach($ewayResponseFields as $key => $value)
				  {
					  //print "\n<br>\$ewayResponseFields[\"$key\"] = $value";
				  	  if ($key == "EWAYTRXNNUMBER")
					  {
						  	$txnref = $value;
					  }
				  }
				 $err = 1;

			  }
			  else if(strtolower($ewayResponseFields["EWAYTRXNSTATUS"])=="true")
			  {
				   // payment succesfully sent to gateway
				   // Payment succeeded get values returned
				   //$lblResult = " Result: " . $ewayResponseFields["EWAYTRXNSTATUS"] . "<br>";
				   //$lblResult .= " AuthCode: " . $ewayResponseFields["EWAYAUTHCODE"] . "<br>";
				   //$lblResult .= " Error: " . $ewayResponseFields["EWAYTRXNERROR"] . "<br>";
				   //$lblResult .= " eWAYInvoiceRef: " . $ewayResponseFields["EWAYTRXNREFERENCE"] . "<br>";
				   //$lblResult .= " Amount: " . $ewayResponseFields["EWAYRETURNAMOUNT"] . "<br>";
				   //$lblResult .= " Txn Number: " . $ewayResponseFields["EWAYTRXNNUMBER"] . "<br>";
				   //$txnref = $ewayResponseFields["EWAYTRXNNUMBER"];
				   //$lblResult .= " Option1: " . $ewayResponseFields["EWAYOPTION1"] . "<br>";
				   //$lblResult .= " Option2: " . $ewayResponseFields["EWAYOPTION2"] . "<br>";
				   //$lblResult .= " Option3: " . $ewayResponseFields["EWAYOPTION3"] . "<br>";
				   //echo $lblResult;
				    $authcode = $ewayResponseFields["EWAYAUTHCODE"];
					$txnref = $ewayResponseFields["EWAYTRXNNUMBER"];
					$err = 0;
			  }
			  else
			  {
				   // invalid response recieved from server.
				   $lblResult =  "Error: An invalid response was recieved from the payment gateway.";
				  // echo $lblResult;
				   $err = 1;
			  }

			if ($err == 1)
			{
				$gw_resp_code = $ewayResponseFields["EWAYTRXNERROR"];
			}
			else
			{
				$gw_resp_code = $ewayResponseFields["EWAYAUTHCODE"];
			}
			
			if($err == 1)		//error has occur on the transaction and email will be send out
			{			
				$msg_in .= "CC Payment Details"."\r\n";
				$msg_in .= "-----------------------------"."\r\n";
				$msg_in .= "Card Name : ". $card_name ."\r\n";
				$hproc_cc = substr($card_no, 0, 13);
				$tproc_cc = substr($card_no, -4);
				$msg_in .= "CC Number : ". $hproc_cc."xxx"."\r\n";
				//$msg_in .= "CC Number : ". $card_no."\r\n";
				$msg_in .= "Exp MM : ". $card_exp_mm."\r\n";
				$msg_in .= "Exp YY : ". $card_exp_yy."\r\n";
				$msg_in .= "CVV : ".$card_cvv ."\r\n";
				$msg_in .= "Error Code : ". $errcode."\r\n";
				$msg_in .= "Transaction Ref Code : ". $txnref."\r\n";
				$msg_in .= "Visitor IP : ". $vip ."\r\n";

				$emailToE = TOEMAIL;
				$subject_in = "Flexi e-Solutions FlexiPay CC Payment : Ref : ". $ref_id . "-FES - Fail";
	
				//$emailFromE = $email;
				$fheaders = 'From: noreply@flexihostings.net.au'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net.au'. "\r\n" . "X-Mailer: PHP/FlexiPay";
				mail($emailToE,$subject_in,$msg_in,$fheaders);
				
			$fheaders = 'From: noreply@flexihostings.net.au'. "\r\n". 'Reply-To: noreply@flexihostings.net.au'. "\r\n" . "X-Mailer: PHP/FlexiPay";
				mail("seanlmk@gmail.com",$subject_in,$msg_in,$fheaders);

				
				/** email client as well - eway Failure */
				$client_msg_in = "Hello ".$firstname."\r\n";
				$client_msg_in .= CLIENTCCFAILMSG;
				$client_msg_in .= EMAILFAILFOOTER;
				
				$client_emailToE = $email;
				$client_subject_in = "Your Manual Payment to Flexi e-Solutions : Ref : ". $ref_id . "-FES - Unsuccessful";
				//$emailFromE = $email;
				$client_fheaders = 'From: noreply@flexihostings.net'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net'. "\r\n" . "X-Mailer: PHP/FlexiPay";
				mail($client_emailToE,$subject_in,$client_msg_in,$client_fheaders);

				//Error page
			
					echo "Processing...";		
					echo "
					<script>
					window.location=\"".$elink."\"
					</script>
					";

			}
			else
			{
				$msg_in .= "CC Payment Details"."\r\n";
				$msg_in .= "-----------------------------"."\r\n";
				$msg_in .= "Card Name : ". $card_name ."\r\n";
				$hproc_cc = substr($card_no, 0, 13);
				$tproc_cc = substr($card_no, -4);
				$msg_in .= "CC Number : ". $hproc_cc."xxx"."\r\n";
				$msg_in .= "Auth Code : ". $authcode."\r\n";
				$msg_in .= "Transaction Ref Code : ". $txnref."\r\n";
				$msg_in .= "Visitor IP : ". $vip ."\r\n";

				$emailToE = TOEMAIL;
				$subject_in = "Flexi e-Solutions FlexiPay Credit Card Payment : Ref : ". $ref_id."-FES";
	
				//$emailFromE = $email;
				$fheaders = 'From: noreply@flexihostings.net.au'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net.au'. "\r\n" . "X-Mailer: PHP/FlexiPay";
				mail($emailToE,$subject_in,$msg_in,$fheaders);
				
				
				// Email to Client - eway Success
				$client_msg_in = "Hello ".$firstname.","."\r\n";
				$client_msg_in .= CLIENTCCOKMSG;
				$client_msg_in .= "Your credit card ending with ".$tproc_cc." have been charged for the amount of ".$curencytype.$raw_total."\r\n";
				$client_msg_in .= EMAILFOOTER;
				
				$client_emailToE = $email;
				$client_subject_in = "Flexi e-Solutions FlexiPay Credit Card Payment : Ref : ". $ref_id . " - Order Success";
				//$emailFromE = $email;
				$client_fheaders = 'From: noreply@flexihostings.net'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net'. "\r\n" . "X-Mailer: PHP/FlexiPay";
				mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);

				//Success page
			
					echo "Processing...";		
					echo "
					<script>
					window.location=\"".$link."\"
					</script>
					";

			}
			
			
		}
		elseif ($_POST["payment"] == "paypal")
		{
			$emailTo = TOEMAIL;
			$ppcurency = $currencytype;
			$subject_in = "Flexi e-Solutions FlexiPay Paypal Payment Ref : ". $ref_id."-FES";
			// no need to edit below		
			$emailMessage = $msg_in;
			$fheaders = 'From: noreply@flexihostings.net.au'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net.au'. "\r\n" . "X-Mailer: PHP/FlexiPay";
			mail($emailTo,$subject_in,$emailMessage,$fheaders);

			// email to client
			$client_msg_in = "Hello ".$firstname.","."\r\n";
			$client_msg_in .= CLIENTPPMSG;	
			$client_msg_in .= EMAILFOOTER;
				
			$client_emailToE = $email;
			$client_subject_in = "Flexi e-Solutions FlexiPay Ref : ". $ref_id . " - Payment via Paypal";
			//$emailFromE = $email;
			$client_fheaders = 'From: noreply@flexihostings.net'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@flexihostings.net'. "\r\n" . "X-Mailer: PHP/FlexiPay";
			mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);

			
			$ppamt = $raw_total;
			$ppreturnurl = PPRETURNURL;
			$ppreturncancel = PPCANCELURL;
			$ppacct = PPACCNT;
			
	

			$paypalcmd = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&currency_code=$curencytype&amount=$ppamt&item_number=$ref_id&return=$ppreturnurl&cancel_return=$ppreturncancel&item_name=Flexihostings Invoice $invoices&business=$ppacct";
			echo "<script>window.location= \"".$paypalcmd."\";</script>";

		
		}
		else
		{
			echo "Error in Payment Type... Please select a proper payment method.";
		}

}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<TITLE>Flexihostings - FlexiPay :: cPanel Web Hosting Australia, Dedicated Server Hosting, VPS Hosting, cPanel Semi Dedicated Hosting, Web Design, Domain Registration, Teamspeak Hosting, Self Manage Servers, Shopping Cart | Flexihostings.net.au</TITLE>
<META HTTP-EQUIV="title" content="Web Hosting, VPS Hosting, Dedicated Server Australia ">
<meta name="resource-type" content="Web Hosting, Dedicated Server Hosting, VPS Hosting Australia">
<META name="Abstract" content="VPS Hosting, Dedicated Server and Shared Web Hosting Australia">
<meta name="content" content="Australian web hosting, dedicated server, VPS Hosting and domains names registration for Australia business">
<META name="description" content="Web Hosting Australia - Reliable Australian Web hosting, Dedicated Server Hosting, VPS Hosting, Semi Dedicated Hosting, Web Design, Domain Registration, Shopping Cart :: Sydney :: Melbourne :: Brisbane :: Perth :: Adelaide :: Darwin :: Hobart :: Canbera :: Tasmania :: Domain Name Registration :: Domain Name. 30 days money back guarantee. cPanel, Direct Admin, CentOS, Linux, PHP,
MySQL, Perl, CGI, Fantastico">
<meta name="keywords" content="web hosting australia,vps hosting,vps,web,hosting,webhosting,dedicated server,semi dedicated,web design,domains,teamspeak hosting, teamspeak,shopping,cart,domains,carts,hosting,website,ecommerce,e-commerce,php,australia,mysql,oscommerce,joomla,cpanel,plesk,linux,vps hosting,Domain,Names,Dedicated,Servers">
<META content=global name=distribution>
<meta name="robots" content="all">
<meta name="robots" content="index,follow">
<meta name="re-visit" content="1 days">
<link href="style02.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<form name="billpay" method="post" action="billpayment.php"  onSubmit="return validateform()">

<table width="70%" height="100%" border="0" align="center" cellspacing="0">

  <tr> 

    <td width="64%" height="86" valign="top" bgcolor="#1F1F1F"><img src="images/toplogo.gif" width="649" height="86"></td>

    <td width="36%" bgcolor="#1F1F1F">

	<div id="leftbar">

	    <table width="200" border="0" align="right" cellpadding="0" cellspacing="0" class="menulink">

          <tr> 

            <td><a href="contactus.php">Contact Us</a></td>

          </tr>

          <tr> 

            <td><a href="https://flexisupport.com/help/" target="_blank">Helpdesk</a></td>

          </tr>

        </table>

      </div>

	  </td>

  </tr>

  <tr> 

    <td colspan="2" valign="top" class="b12"> <p class="t03">FlexiPay - Pay your invoice online securely here<br>
    </p>
<table width="98%" class="box" border="0" cellspacing="1">
					<!-- Insert here -->
                    
                    <tr id="domregstateChangedShow"> 
                      <td>&nbsp;</td>
                    </tr>
                    <tr id="cpregstateChangedShow"> 
                      <td class="f12k">Contact Information</td>
                    </tr>
                    <tr> 
                      <td class="b05"><table class="font" border="0" cellpadding="1" cellspacing="0" width="100%">
                          <tbody>
                            <tr bgcolor="#FAFAFA"> 
                              <td width="28%" align="right" valign="top" bgcolor="#FAFAFA">First 
                                Name:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td width="72%"> <input class="form" size="15" name="first" ></td>
                            </tr>
                            <tr> 
                              <td align="right" valign="top">Last Name:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="15" name="last"></td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Address:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="30" name="address" ></td>
                            </tr>
                            <tr > 
                              <td align="right" valign="top">City:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td> <input class="form" size="15" name="city"></td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">State or Province:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="15" name="state" ></td>
                            </tr>
                            <tr > 
                              <td align="right" valign="top"> <div id="other">Other 
                                  State/Province:</div></td>
                              <td valign="bottom"> <div id="other_field"> 
                                  <input class="form" size="15" name="province">
                                </div></td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Zip Code:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="9" name="zip" ></td>
                            </tr>
                            <tr > 
                              <td align="right" valign="top">Country:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td> <select name="country">
                                <option value="country">Select your Country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AG">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AG">Antigua & Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AA">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU" >Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BL">Bonaire</option>
                                <option value="BA">Bosnia & Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="BC">British Indian Ocean Ter</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="IC">Canary Islands</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CD">Channel Islands</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CI">Christmas Island</option>
                                <option value="CS">Cocos Island</option>
                                <option value="CO">Colombia</option>
                                <option value="CC">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CT">Cote D Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CB">Curacao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="TM">East Timor</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FA">Falkland Islands</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="FS">French Southern Ter</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GB">Great Britain</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HW">Hawaii</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IA">Iran</option>
                                <option value="IQ">Iraq</option>
                                <option value="IR">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="NK">Korea North</option>
                                <option value="KS">Korea South</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malaysia</option>
                                <option value="MW">Malawi</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="ME">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="MI">Midway Islands</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Nambia</option>
                                <option value="NU">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="AN">Netherland Antilles</option>
                                <option value="NL">Netherlands (Holland, Europe)</option>
                                <option value="NV">Nevis</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ" >New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NW">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau Island</option>
                                <option value="PS">Palestine</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PO">Pitcairn Island</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="ME">Republic of Montenegro</option>
                                <option value="RS">Republic of Serbia</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russia</option>
                                <option value="RW">Rwanda</option>
                                <option value="NT">St Barthelemy</option>
                                <option value="EU">St Eustatius</option>
                                <option value="HE">St Helena</option>
                                <option value="KN">St Kitts-Nevis</option>
                                <option value="LC">St Lucia</option>
                                <option value="MB">St Maarten</option>
                                <option value="PM">St Pierre & Miquelon</option>
                                <option value="VC">St Vincent & Grenadines</option>
                                <option value="SP">Saipan</option>
                                <option value="SO">Samoa</option>
                                <option value="AS">Samoa American</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome & Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
	                            <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="OI">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TA">Tahiti</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad & Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TU">Turkmenistan</option>
                                <option value="TC">Turks & Caicos Is</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US" >United States of America</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VS">Vatican City State</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietnam</option>
                                <option value="VB">Virgin Islands (Brit)</option>
                                <option value="VA">Virgin Islands (USA)</option>
                                <option value="WK">Wake Island</option>
                                <option value="WF">Wallis & Futana Is</option>
                                <option value="YE">Yemen</option>
                                <option value="ZR">Zaire</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                                </select> </td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Contact  Number:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="15" name="phone">
                                <font class="fn">(e.g. +61390140718) </font></td>
                            </tr>
                            <tr>
                              <td align="right" valign="top">&nbsp;</td>
                              <td><font class="fn">*It is important that you can 
                                be reached at this number during your day time 
                                as we may call to verify your order.)</font></td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Email Address:<span class="required"><font color="#CC0000">*</font></span></td>
                              <td><input class="form" size="15" name="email" > 
                                <font class="fn">(Please use an e-mail address 
                                which you check regularly)</font></td>
                            </tr>
                            <tr > 
                              <td align="right" valign="top">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            
                                                        <tr> 
                              <td align="right" valign="top" class="f12k"><div align="left">Invoice Information</div></td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Invoice Number : </td>
                              <td> 
                              <?php
								if ($_REQUEST["inv"] != "")
								{
									echo "#".$_REQUEST["inv"] ;
									echo "<input name=\"invno\" type=\"hidden\" value=\"".$_REQUEST["inv"]."\">";
								}
								else
								{
                              		echo "<input class=\"form\" size=\"30\" name=\"invno\">";
									echo "<br>(Kindly enter the Invoice Number you're making payment for here if you have one)";

								}
								?></td>
                            </tr>
                            <tr> 
                              <td align="right" valign="top">Currency : <span class="required"><font color="#CC0000">*</font></span></td>
                              <td>
                              <?php
								if ($_REQUEST["cur"] != "")
								{
									$chkcur = $_REQUEST["cur"];
									if ($chkcur != "USD" || $chkcur != "AUD" || $chkcur != "EUR" || $chkcur != "GBP" || $chkcur != "NZD" || $chkcur != "SGD" || $chkcur != "ZAR" || $chkcur != "MYR")
									{
										echo "USD";
										echo "<input name=\"currency\" type=\"hidden\" value=\"USD\">";

									}
									else
									{
										echo $_REQUEST["cur"];
										echo "<input name=\"currency\" type=\"hidden\" value=\"".$_REQUEST["cur"]."\">";
									}

								}
								else
								{
								   echo "<select name=\"currency\" ><br>";
								   echo "<option value=\"NA\">Please select your Currrency</option>
								   		<option value=\"AUD\">Australian Dollars</option>
										<option value=\"EUR\">Euros</option>
										<option value=\"GBP\">British Pounds</option>
										<option value=\"MYR\">Malaysia Riggit</option>
										<option value=\"NZD\">New Zealand Dollars</option>
										<option value=\"SGD\">Singapore Dollars</option>
										<option value=\"ZAR\">South African Rand</option>
										<option value=\"USD\">US Dollars</option>";
								   echo " </select>";
								}
							  ?>                              </td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">Payment Amount : <span class="required"><font color="#CC0000">*</font></span> </td>
                              <td> 
                                <?php
								if ($_REQUEST["amt"] != "")
								{
									echo $_REQUEST["amt"] ;
									echo "<input name=\"payamount\" type=\"hidden\" value=\"".$_REQUEST["amt"]."\">";
								}
								else
								{
                              		echo "<input class=\"form\" size=\"30\" name=\"payamount\">";
									echo "<br>(Please do not include any currency symbols)";
								}
								?>                              </td>
                            </tr>
                            <tr> 
                              <td align="right" valign="top">Additional Comments : <span class="required"><font color="#CC0000"></font></span></td>
                              <td>
                                <textarea name="comments" class="form" cols="45" rows="5"></textarea>                              </td>
                            </tr>
                            <tr bgcolor="#FAFAFA"> 
                              <td align="right" valign="top">&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </tbody>
                        </table></td>
                    </tr>
                    <tr> 
                      <td>&nbsp;</td>
                    </tr>
                    <tr> 
                      <td class="f12k">Payment Method</td>
                    </tr>
                    <tr> 
                      <td class="b05"><select style="width: 300px;" name="payment" id="payment" class="form" onChange="showhidecc(this.value, 'showpaytype');">
                          <option value="non">- Select a Payment -</option>
                          <option value="cc" >Credit Card</option>
                          <option value="paypal" >Pay Pal</option>
                        </select>
						<!-- insert payment method here -->
						<div style="display: none;" id="showpaytype"> 
                        <table width="100%" border="0" align="center" cellpadding="1" cellspacing="0">
                            <tr> 
                            <td width="28%" align="right" valign="top">Name on Card : <span class="required"><font color="#CC0000">*</font></span></td>
                            <td width="72%"> <input class="form" id="cc_name" size="18" maxlength="16" name="cc_name">
                             </td>
                          </tr>        
                          <tr> 
                            <td width="28%" align="right" valign="top">Card Number : <span class="required"><font color="#CC0000">*</font></span></td>
                            <td width="72%"> <input class="form" id="cc_num" size="18" maxlength="16" name="cc_num">
                              <font class="fn">(Our system will detect card type automatically)</font>                            </td>
                          </tr>
                          <tr bgcolor="#FAFAFA"> 
                            <td width="28%" align="right" valign="top">Expiration Date on 
                              Card : <span class="required"><font color="#CC0000">*</font></span></td>
                            <td width="72%"> <input class="form" name="cc_exp_mm" size="4" maxlength="2">
                            / 20
                              <input type="text" name="cc_exp_yy" size="4" maxlength="2" class="form">
                                <font class="fn">(mmyy)</font></td>
                          </tr>
                          <tr>
                            <td width="28%" align="right" valign="top">Name of Issuing Bank : <font color="#CC0000">*</font></td>
                            <td width="72%">
                              <input type="text" name="bankname" class="form">
                            </td>
                          </tr>
                          <tr> 
                            <td width="28%" align="right" valign="top">Card ID/CVV2 : <span class="required"><font color="#CC0000">*</font></span></td>
                            <td width="72%"><input class="form" id="cc_cvv2" name="cc_cvv2" size="4" maxlength="4"><font class="fn" >                             
                              <A HREF="javascript:void(0)"
                            onclick="window.open('cardcode.html', 'Cardcode','width=900,height=500,menubar=no,status=no,location=no,toolbar=no,scrollbars=yes')">
                            What is This?</A>
                            </font></td>
                          </tr>
						  <tr><td  valign="top">&nbsp;</td>
							<td align="left">
						  <font color="#333333" size="-2" face="Verdana, Arial, Helvetica, sans-serif" class="text">**Transaction will appear as </font><font size="-2" face="Verdana, Arial, Helvetica, sans-serif" class="text"><font color="red">Flexi e-Solutions Pty Ltd</font></font><font color="#333333" size="-2" face="Verdana, Arial, Helvetica, sans-serif" class="text"> in Credit Card Statement</font> </td>
						  </tr>
                        
                        </table>					
                        </div></td>
                    </tr>
                    
                    <tr> 
                      <td>&nbsp;</td>
                    </tr><tr> 
                      <td class="b10"><center>
                      <br />
                      <input type="submit" name="gopay" value="Proceed with Payment" class="form" />

                        <br />
                      </center></td>
                    </tr>
                    <tr>
                      <td class="divider"><p align="center" class="fr">&nbsp;</p></td>
                    </tr>
                    <tr> 
                      <td><div align="right"></div></td>
                    </tr>
                      <tr valign="top" bgcolor="#1F1F1F"> 

                  </table>
    </form>
    <table>
        <td height="15%" colspan="2" class="footer">Hosting over 250,000 domains together 

      with <a href="http://flexihostings.net/" target="_blank">FlexiHostings.net</a>, 

      <a href="http://flexihostings.co.uk/" target="_blank">FlexiHostings Europe</a>, 

      <a href="http://flexihostings.us/" target="_blank">FlexiHostings USA</a>, 

      <a href="http://flexihostings.co.uk" target="_blank">FlexiHostings UK</a>, 

      <a href="http://flexihostings.co.nz/" target="_blank">FlexiHostings New 

      Zealand</a>, <a href="http://flexihostings.com.sg/" target="_blank">FlexiHostings 

      Singapore</a>, <a href="http://flexihostings.co.za/" target="_blank">FlexiHostings 

      South Africa</a>, <a href="http://vpshosting.net.au/" target="_blank">VPSHosting.net.au</a>, 

      <a href="http://dedicatedserver.net.au/" target="_blank">DedicatedServer.net.au</a>, 

      and <a href="http://flexireseller.com.au">FlexiReseller.com.au</a></td>
  </tr>
</table>
</body>

</html>
