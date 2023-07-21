<?php

echo "<script src=\"validateform.js\"></script>";

echo "<script src=\"showhidecc.js\"></script>";

include "locale.php";



if ($_POST["gopay_x"])

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

				$ref_id = "vOffice-Pay"."-".time();


			// Format invoices

			$invoices1 = $_POST["invno1"];
			$invoices2 = $_POST["invno2"];
			$invoices = $invoices1."-".$invoices2;

			// Format currency			
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

      elseif ($curencytype == "IDR") {

                     $exratesnow = IDREXRATESQLSTMT;

                  }
      elseif ($curencytype == "PHP") {

                     $exratesnow = PHPREXRATESQLSTMT;

                  }

            	  $result = mysql_query($exratesnow) or die("SQL Error[0]!");

                  $row = mysql_fetch_row($result);

                  $frates = $row[2];



				  //echo $usrates;

                  mysql_close($dbmrates);

		      $ptotalpayable = $raw_total * $frates;

                      $adjustrate = EWAYADJUST;
                      $f_adjustrates = $ptotalpayable * $adjustrate;
                      $totalpayable = $ptotalpayable - $f_adjustrates;
					  $totalpayable = ceil($totalpayable);
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



		include "egate.php";
		
		$vpc_MTxnRef=$ref_id;
			//$vpc_MTxnRef="12345678";
			$fccard = $card_exp_yy.$card_exp_mm;
			
			//Amount hard coded for Testing only 
			//$price = "2000";
			
			
			$fields = array( 
	
				'vpc_Version'=>urlencode("1"),
				'vpc_Command'=>urlencode("pay"),
				'vpc_AccessCode'=>urlencode($vpcAccessCode),
				'vpc_MerchTxnRef'=>urlencode($vpc_MTxnRef),
				'vpc_Merchant'=>urlencode($vps_MID),
				'vpc_OrderInfo'=>urlencode($plan),
				'vpc_Amount'=>urlencode($price),
				'vpc_CardNum'=>urlencode($card_no),
				'vpc_CardExp'=>urlencode($fccard),
				'vpc_CardSecurityCode'=>urlencode($card_cvv),
				//'vpc_card'=>urlencode("Mastercard"),
				'vpc_TxSource'=>urlencode("INTERNET"),
				'vpc_ReturnURL'=>urlencode($vpc_ReturnURL),
				'vpc_SecureHash'=>urlencode(strtoupper(md5($md5HashData))),		
				'vpc_Locale'=>urlencode($vpc_Locale),		
				//'vpc_gateway'=>urlencode($vpc_gateway),		
				'vpc_TxSourceSubType'=>urlencode("SINGLE")


			);
			
			
			//url-ify the data for the POST 
			foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; } 
			rtrim($fields_string,'&');

			ob_start();
	
			// initialise Client URL object
			$ch = curl_init();
			
			// set the URL of the VPC
			curl_setopt ($ch, CURLOPT_URL, $vpcURL);	
			curl_setopt($ch,CURLOPT_POST,count($fields));
			curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
			
			curl_exec ($ch);

			// get response
			$response = ob_get_contents();
			
			
			// turn output buffering off.
			ob_end_clean();
			
			// set up message paramter for error outputs
			$message = "";
			
			// serach if $response contains html error code
			if(strchr($response,"<html>") || strchr($response,"<html>")) {;
				$message = $response;
			} else {
				// check for errors from curl
				if (curl_error($ch))
					  $message = "%s: s". curl_errno($ch) . "<br/>" . curl_error($ch);
			}

			//echo print_r($response);
			//exit(0);
			
			curl_close ($ch);

			$map = array();
		
			// process response if no errors
			if (strlen($message) == 0) {
				$pairArray = split("&", $response);
				foreach ($pairArray as $pair) {
					$param = split("=", $pair);
					$map[urldecode($param[0])] = urldecode($param[1]);
				}
				$message         = null2unknown($map, "vpc_Message");
			} 
			
			// Standard Receipt Data
			# merchTxnRef not always returned in response if no receipt so get input
			//TK//$merchTxnRef     = $vpc_MerchTxnRef;
			$merchTxnRef     = $vpc_MTxnRef;
			
			
			$amount          = null2unknown($map, "vpc_Amount");
			$locale          = null2unknown($map, "vpc_Locale");
			$batchNo         = null2unknown($map, "vpc_BatchNo");
			$command         = null2unknown($map, "vpc_Command");
			$version         = null2unknown($map, "vpc_Version");
			$cardType        = null2unknown($map, "vpc_Card");
			$orderInfo       = null2unknown($map, "vpc_OrderInfo");
			$receiptNo       = null2unknown($map, "vpc_ReceiptNo");
			$merchantID      = null2unknown($map, "vpc_Merchant");
			$authorizeID     = null2unknown($map, "vpc_AuthorizeId");
			$transactionNo   = null2unknown($map, "vpc_TransactionNo");
			$acqResponseCode = null2unknown($map, "vpc_AcqResponseCode");
			$txnResponseCode = null2unknown($map, "vpc_TxnResponseCode");
			
			// 3D option return variables
			// 3-D Secure Data
			$verType         = array_key_exists("vpc_VerType", $map)          ? $map["vpc_VerType"]          : "No Value Returned";
			$verStatus       = array_key_exists("vpc_VerStatus", $map)        ? $map["vpc_VerStatus"]        : "No Value Returned";
			$token           = array_key_exists("vpc_VerToken", $map)         ? $map["vpc_VerToken"]         : "No Value Returned";
			$verSecurLevel   = array_key_exists("vpc_VerSecurityLevel", $map) ? $map["vpc_VerSecurityLevel"] : "No Value Returned";
			$enrolled        = array_key_exists("vpc_3DSenrolled", $map)      ? $map["vpc_3DSenrolled"]      : "No Value Returned";
			$xid             = array_key_exists("vpc_3DSXID", $map)           ? $map["vpc_3DSXID"]           : "No Value Returned";
			$acqECI          = array_key_exists("vpc_3DSECI", $map)           ? $map["vpc_3DSECI"]           : "No Value Returned";
			$authStatus      = array_key_exists("vpc_3DSstatus", $map)        ? $map["vpc_3DSstatus"]        : "No Value Returned";

			/*********************
			* END OF MAIN PROGRAM
			*********************/
			
			// FINISH TRANSACTION - Process the VPC Response Data
			// =====================================================
			// For the purposes of demonstration, we simply display the Result fields on a
			// web page.
			
			// Show 'Error' in title if an error condition
			//$errorTxt = "";
			// Show the display page as an error page 
			//if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" ) 
			// Show this page as an error page if vpc_TxnResponseCode equals '7'

			//if ($txnResponseCode == "7" || $txnResponseCode == "No Value Returned" || $errorExists) 

			if ($txnResponseCode != 0 || $txnResponseCode == "No Value Returned" ) 
			{
				
				$err = 1;
			}
			else
			{
				
				$err = 2;
			}	
			

			if ($err == 1)

			{


			$gw_resp_code = getResponseDescription($txnResponseCode);

				
				

			}

			else

			{

				$gw_resp_code = getResponseDescription($txnResponseCode);

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

				$msg_in .= "Error Code : ". $gw_resp_code."\r\n";

				$msg_in .= "Transaction Ref Code : ". $txnref."\r\n";

				$msg_in .= "Visitor IP : ". $vip ."\r\n";



				$emailToE = TOEMAIL;

				$subject_in = "voffice.com.my MPay CC Payment : Ref : ". $ref_id . " - Fail";

	



				//$emailFromE = $email;



				$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FesPay";



				mail($emailToE,$subject_in,$msg_in,$fheaders);



				



			$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FesPay";



				mail("sean@flexiesolutions.com",$subject_in,$msg_in,$fheaders);





				/** email client as well - eway Failure */



				$client_msg_in = "Hello ".$firstname."\r\n";

				$client_msg_in .= CLIENTCCFAILMSG;

				$client_msg_in .= EMAILFAILFOOTER;

				$client_emailToE = $email;



				$client_subject_in = "Your Manual Payment to voffice.com.my : Ref : ". $ref_id . " - Unsuccessful";



				//$emailFromE = $email;

				$client_fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FlexiPay";

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

				$subject_in = "voffice.com.my MPay Credit Card Payment : Ref : ". $ref_id;



				//$emailFromE = $email;

				$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FesPay";

				mail($emailToE,$subject_in,$msg_in,$fheaders);



				// Email to Client - eway Success

				$client_msg_in = "Hello ".$firstname.","."\r\n";

				$client_msg_in .= CLIENTCCOKMSG;

				$client_msg_in .= "Your credit card ending with ".$tproc_cc." have been charged for the amount of ".$curencytype.$raw_total."\r\n";

				$client_msg_in .= EMAILFOOTER;



				$client_emailToE = $email;

				$client_subject_in = "voffice.com.my MPay Credit Card Payment : Ref : ". $ref_id . " - Order Success";



				//$emailFromE = $email;

				$client_fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FlexiPay";

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

			$subject_in = "voffice.com.my Paypal Payment Ref : ". $ref_id;



			// no need to edit below		

			$emailMessage = $msg_in;

			$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FlexiPay";

			mail($emailTo,$subject_in,$emailMessage,$fheaders);



			// email to client

			$client_msg_in = "Hello ".$firstname.","."\r\n";

			$client_msg_in .= CLIENTPPMSG;	

			$client_msg_in .= EMAILFOOTER;

			$client_emailToE = $email;

			$client_subject_in = "voffice.com.my MPay Ref : ". $ref_id . " - Payment via Paypal";



			//$emailFromE = $email;

			$client_fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FlexiPay";

			mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);



			$ppamt = $raw_total;

			$ppreturnurl = PPRETURNURL;

			$ppreturncancel = PPCANCELURL;

			$ppacct = PPACCNT;



			$paypalcmd = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&currency_code=$curencytype&amount=$ppamt&item_number=$ref_id&return=$ppreturnurl&cancel_return=$ppreturncancel&item_name=PT vOffice Invoice $invoices&business=$ppacct";

			echo "<script>window.location= \"".$paypalcmd."\";</script>";

		}

		else

		{

			echo "Error in Payment Type... Please select a proper payment method.";

		}

}

?>



<!DOCTYPE html>
<!-- saved from url=(0020) -->
<html class="cufon-active cufon-ready"><head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<TITLE>Virtual-Office.com.my - Secure Online Payment Page</TITLE>

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

<link href="fesstyle.css" rel="stylesheet" type="text/css">

<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}} </style>

</head>



<body>

<div id="header_wrap"> 

  <div id="header"> 
    <p id="logo"><a href="http://voffice.com.my/">VOFFICE</a></p>
    <p id="slogan"><a href="http://voffice.com.my/what-is-virtual-office.html" title="What is a Virtual Office">&middot;&nbsp;&nbsp; 
      Virtual Office Made Easy &nbsp;&nbsp;&middot; <strong>{?}</strong></a> </p>
    <ul id="toc">
      <table width="150" border="0">
        <tr> 
          <td height="21"><a href="https://flexisupport.com/help/" target="_blank"><img src="images/icon-chat.png" width="24" height="17"></a></td>
          <td><a href="https://flexisupport.com/help/" target="_blank"> Start 
            a chat</a></td>
        </tr>
        <tr> 
          <td><a href="contact.php"><img src="images/icon-email.png" width="24" height="17"></a></td>
          <td><a href="contact.php"> Send an email</a> </td>
        </tr>
      </table>
    </ul>
  </div>

</div>

<!-- B main content -->

<div id="showcase_clip"> 

  <div id="showcase"> 

          

    <h2>vopay- Pay your invoice online securely here </h2>

    <div class="col1"> 

      <form name="billpay" method="post" action="custompay.php"  onSubmit="return validateform()">

        <div class="rndbox3"> 

          <p><img src="images/t01.gif" width="190" height="30"></p>

          <table border="0" width="98%">

            <tbody>

              <tr> 

                <td width="40%"  valign="top" >First Name:<font color="#FF0000">*</font></td>

                <td> <input name="first" class="form_txt" size="30"></td>

              </tr>

              <tr> 

                <td  valign="top">Last Name:<font color="#FF0000">*</font></td>

                <td><input name="last" class="form_txt" size="30"></td>

              </tr>

              <tr> 

                <td  valign="top">Address:<font color="#FF0000">*</font></td>

                <td><textarea name="address" rows="5" class="form_txt"></textarea></td>

              </tr>

              <tr> 

                <td  valign="top">City:<font color="#FF0000">*</font></td>

                <td> <input name="city" class="form_txt" size="30"></td>

              </tr>

              <tr> 

                <td  valign="top">State:<font color="#FF0000">*</font></td>

                <td><input name="state" class="form_txt" size="30" ></td>

              </tr>

              <tr> 

                <td  valign="top">Other State/Province:</td>

                <td><input name="province" class="form_txt" size="30" ></td>

              </tr>

              <tr> 

                <td  valign="top">Post Code:<font color="#FF0000">*</font></td>

                <td><input name="zip" class="form_txt" size="10"></td>

              </tr>

              <tr> 

                <td  valign="top">Country:<span class="required"></span></td>

                <td> <select name="country" class="form_txt">

                    <option value="Afghanistan">Afghanistan</option>

                    <option value="Albania">Albania</option>

                    <option value="Algeria">Algeria</option>

                    <option value="American Samoa">American Samoa</option>

                    <option value="Andorra">Andorra</option>

                    <option value="Angola">Angola</option>

                    <option value="Anguilla">Anguilla</option>

                    <option value="Antarctica">Antarctica</option>

                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>

                    <option value="Argentina">Argentina</option>

                    <option value="Armenia">Armenia</option>

                    <option value="Aruba">Aruba</option>

                    <option value="Australia">Australia</option>

                    <option value="Austria">Austria</option>

                    <option value="Azerbaidjan">Azerbaidjan</option>

                    <option value="Bahamas">Bahamas</option>

                    <option value="Bahrain">Bahrain</option>

                    <option value="Banglades">Banglades</option>

                    <option value="Barbados">Barbados</option>

                    <option value="Belarus">Belarus</option>

                    <option value="Belgium">Belgium</option>

                    <option value="Belize">Belize</option>

                    <option value="Benin">Benin</option>

                    <option value="Bermuda">Bermuda</option>

                    <option value="Bolivia">Bolivia</option>

                    <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>

                    <option value="Botswana">Botswana</option>

                    <option value="Bouvet Island">Bouvet Island</option>

                    <option value="Brazil">Brazil</option>

                    <option value="British Indian O. Terr.">British Indian O. 

                    Terr.</option>

                    <option value="Brunei Darussalam">Brunei Darussalam</option>

                    <option value="Bulgaria">Bulgaria</option>

                    <option value="Burkina Faso">Burkina Faso</option>

                    <option value="Burundi">Burundi</option>

                    <option value="Buthan">Buthan</option>

                    <option value="Cambodia">Cambodia</option>

                    <option value="Cameroon">Cameroon</option>

                    <option value="Canada">Canada</option>

                    <option value="Cape Verde">Cape Verde</option>

                    <option value="Cayman Islands">Cayman Islands</option>

                    <option value="Central African Rep.">Central African Rep.</option>

                    <option value="Chad">Chad</option>

                    <option value="Chile">Chile</option>

                    <option value="China">China</option>

                    <option value="Christmas Island">Christmas Island</option>

                    <option value="Cocos (Keeling) Isl.">Cocos (Keeling) Isl.</option>

                    <option value="Colombia">Colombia</option>

                    <option value="Comoros">Comoros</option>

                    <option value="Congo">Congo</option>

                    <option value="Cook Islands">Cook Islands</option>

                    <option value="Costa Rica">Costa Rica</option>

                    <option value="Croatia">Croatia</option>

                    <option value="Cuba">Cuba</option>

                    <option value="Cyprus">Cyprus</option>

                    <option value="Czech Republic">Czech Republic</option>

                    <option value="Czechoslovakia">Czechoslovakia</option>

                    <option value="Denmark">Denmark</option>

                    <option value="Djibouti">Djibouti</option>

                    <option value="Dominica">Dominica</option>

                    <option value="Dominican Republic">Dominican Republic</option>

                    <option value="East Timor">East Timor</option>

                    <option value="Ecuador">Ecuador</option>

                    <option value="Egypt">Egypt</option>

                    <option value="El Salvador">El Salvador</option>

                    <option value="Equatorial Guinea">Equatorial Guinea</option>

                    <option value="Estonia">Estonia</option>

                    <option value="Ethiopia">Ethiopia</option>

                    <option value="Falkland Isl.(Malvinas)">Falkland Isl.(Malvinas)</option>

                    <option value="Faroe Islands">Faroe Islands</option>

                    <option value="Fiji">Fiji</option>

                    <option value="Finland">Finland</option>

                    <option value="France">France</option>

                    <option value="France (European Ter.)">France (European Ter.)</option>

                    <option value="French Southern Terr.">French Southern Terr.</option>

                    <option value="Gabon">Gabon</option>

                    <option value="Gambia">Gambia</option>

                    <option value="Georgia">Georgia</option>

                    <option value="Germany">Germany</option>

                    <option value="Ghana">Ghana</option>

                    <option value="Gibraltar">Gibraltar</option>

                    <option value="Great Britain (UK)">Great Britain (UK)</option>

                    <option value="Greece">Greece</option>

                    <option value="Greenland">Greenland</option>

                    <option value="Grenada">Grenada</option>

                    <option value="Guadeloupe (Fr.)">Guadeloupe (Fr.)</option>

                    <option value="Guam (US)">Guam (US)</option>

                    <option value="Guatemala">Guatemala</option>

                    <option value="Guinea">Guinea</option>

                    <option value="Guinea Bissau">Guinea Bissau</option>

                    <option value="Guyana">Guyana</option>

                    <option value="Guyana (Fr.)">Guyana (Fr.)</option>

                    <option value="Haiti">Haiti</option>

                    <option value="Heard &amp; McDonald Isl.">Heard &amp; McDonald 

                    Isl.</option>

                    <option value="Honduras">Honduras</option>

                    <option value="Hong Kong">Hong Kong</option>

                    <option value="Hungary">Hungary</option>

                    <option value="Iceland">Iceland</option>

                    <option value="India">India</option>

                    <option value="Indonesia">Indonesia</option>

                    <option value="Iran">Iran</option>

                    <option value="Iraq">Iraq</option>

                    <option value="Ireland">Ireland</option>

                    <option value="Israel">Israel</option>

                    <option value="Italy">Italy</option>

                    <option value="Ivory Coast">Ivory Coast</option>

                    <option value="Jamaica">Jamaica</option>

                    <option value="Japan">Japan</option>

                    <option value="Jordan">Jordan</option>

                    <option value="Kazachstan">Kazachstan</option>

                    <option value="Kenya">Kenya</option>

                    <option value="Kirgistan">Kirgistan</option>

                    <option value="Kiribati">Kiribati</option>

                    <option value="Korea (North)">Korea (North)</option>

                    <option value="Korea (South)">Korea (South)</option>

                    <option value="Kuwait">Kuwait</option>

                    <option value="Laos">Laos</option>

                    <option value="Latvia">Latvia</option>

                    <option value="Lebanon">Lebanon</option>

                    <option value="Lesotho">Lesotho</option>

                    <option value="Liberia">Liberia</option>

                    <option value="Libya">Libya</option>

                    <option value="Liechtenstein">Liechtenstein</option>

                    <option value="Lithuania">Lithuania</option>

                    <option value="Luxembourg">Luxembourg</option>

                    <option value="Macau">Macau</option>

                    <option value="Madagascar">Madagascar</option>

                    <option value="Malawi">Malawi</option>

                    <option value="Malaysia" selected="selected">Malaysia</option>

                    <option value="Maldives">Maldives</option>

                    <option value="Mali">Mali</option>

                    <option value="Malta">Malta</option>

                    <option value="Marshall Islands">Marshall Islands</option>

                    <option value="Martinique (Fr.)">Martinique (Fr.)</option>

                    <option value="Mauritania">Mauritania</option>

                    <option value="Mauritius">Mauritius</option>

                    <option value="Mexico">Mexico</option>

                    <option value="Micronesia">Micronesia</option>

                    <option value="Moldavia">Moldavia</option>

                    <option value="Monaco">Monaco</option>

                    <option value="Mongolia">Mongolia</option>

                    <option value="Montserrat">Montserrat</option>

                    <option value="Morocco">Morocco</option>

                    <option value="Mozambique">Mozambique</option>

                    <option value="Myanmar">Myanmar</option>

                    <option value="Namibia">Namibia</option>

                    <option value="Nauru">Nauru</option>

                    <option value="Nepal">Nepal</option>

                    <option value="Netherland Antilles">Netherland Antilles</option>

                    <option value="Netherlands">Netherlands</option>

                    <option value="Neutral Zone">Neutral Zone</option>

                    <option value="New Caledonia (Fr.)">New Caledonia (Fr.)</option>

                    <option value="New Zealand">New Zealand</option>

                    <option value="Nicaragua">Nicaragua</option>

                    <option value="Niger">Niger</option>

                    <option value="Nigeria">Nigeria</option>

                    <option value="Niue">Niue</option>

                    <option value="Norfolk Island">Norfolk Island</option>

                    <option value="Northern Mariana Isl.">Northern Mariana Isl.</option>

                    <option value="Norway">Norway</option>

                    <option value="Oman">Oman</option>

                    <option value="Pakistan">Pakistan</option>

                    <option value="Palau">Palau</option>

                    <option value="Panama">Panama</option>

                    <option value="Papua New">Papua New</option>

                    <option value="Paraguay">Paraguay</option>

                    <option value="Peru">Peru</option>

                    <option value="Philippines">Philippines</option>

                    <option value="Pitcairn">Pitcairn</option>

                    <option value="Poland">Poland</option>

                    <option value="Polynesia (Fr.)">Polynesia (Fr.)</option>

                    <option value="Portugal">Portugal</option>

                    <option value="Puerto Rico (US)">Puerto Rico (US)</option>

                    <option value="Qatar">Qatar</option>

                    <option value="Reunion (Fr.)">Reunion (Fr.)</option>

                    <option value="Romania">Romania</option>

                    <option value="Russian Federation">Russian Federation</option>

                    <option value="Rwanda">Rwanda</option>

                    <option value="Saint Lucia">Saint Lucia</option>

                    <option value="Samoa">Samoa</option>

                    <option value="San Marino">San Marino</option>

                    <option value="Saudi Arabia">Saudi Arabia</option>

                    <option value="Senegal">Senegal</option>

                    <option value="Seychelles">Seychelles</option>

                    <option value="Sierra Leone">Sierra Leone</option>

                    <option value="Singapore">Singapore</option>

                    <option value="Slovak Republic">Slovak Republic</option>

                    <option value="Slovenia">Slovenia</option>

                    <option value="Solomon Islands">Solomon Islands</option>

                    <option value="Somalia">Somalia</option>

                    <option value="South Africa">South Africa</option>

                    <option value="Soviet Union">Soviet Union</option>

                    <option value="Spain">Spain</option>

                    <option value="Sri Lanka">Sri Lanka</option>

                    <option value="St. Helena">St. Helena</option>

                    <option value="St. Pierre &amp; Miquelon">St. Pierre &amp; 

                    Miquelon</option>

                    <option value="St. Tome and Principe">St. Tome and Principe</option>

                    <option value="St.Kitts Nevis Anguilla">St.Kitts Nevis Anguilla</option>

                    <option value="St.Vincent &amp; Grenadines">St.Vincent &amp; 

                    Grenadines</option>

                    <option value="Sudan">Sudan</option>

                    <option value="Suriname">Suriname</option>

                    <option value="Svalbard &amp; Jan Mayen Is">Svalbard &amp; 

                    Jan Mayen Is</option>

                    <option value="Swaziland">Swaziland</option>

                    <option value="Sweden">Sweden</option>

                    <option value="Switzerland">Switzerland</option>

                    <option value="Syria">Syria</option>

                    <option value="Tadjikistan">Tadjikistan</option>

                    <option value="Taiwan">Taiwan</option>

                    <option value="Tanzania">Tanzania</option>

                    <option value="Thailand">Thailand</option>

                    <option value="Togo">Togo</option>

                    <option value="Tokelau">Tokelau</option>

                    <option value="Tonga">Tonga</option>

                    <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>

                    <option value="Tunisia">Tunisia</option>

                    <option value="Turkey">Turkey</option>

                    <option value="Turkmenistan">Turkmenistan</option>

                    <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos 

                    Islands</option>

                    <option value="Tuvalu">Tuvalu</option>

                    <option value="Uganda">Uganda</option>

                    <option value="Ukraine">Ukraine</option>

                    <option value="United Arab Emirates">United Arab Emirates</option>

                    <option value="United Kingdom">United Kingdom</option>

                    <option value="United States">United States</option>

                    <option value="Uruguay">Uruguay</option>

                    <option value="US Minor outlying Isl.">US Minor outlying Isl.</option>

                    <option value="Uzbekistan">Uzbekistan</option>

                    <option value="Vanuatu">Vanuatu</option>

                    <option value="Vatican City State">Vatican City State</option>

                    <option value="Venezuela">Venezuela</option>

                    <option value="Vietnam">Vietnam</option>

                    <option value="Virgin Islands (British)">Virgin Islands (British)</option>

                    <option value="Virgin Islands (US)">Virgin Islands (US)</option>

                    <option value="Wallis &amp; Futuna Islands">Wallis &amp; Futuna 

                    Islands</option>

                    <option value="Western Sahara">Western Sahara</option>

                    <option value="Yemen">Yemen</option>

                    <option value="Yugoslavia">Yugoslavia</option>

                    <option value="Zaire">Zaire</option>

                    <option value="Zambia">Zambia</option>

                    <option value="Zimbabwe">Zimbabwe</option>

                  </select> </td>

              </tr>

              <tr> 

                <td  valign="top">Contact Number:<font color="#FF0000">*</font></td>

                <td><input  name="phone" class="form_txt" size="30"><br>

                  <em>(e.g. +62212922123)</em></td>

              </tr>

              <tr> 

                <td colspan="2"  valign="top"><em>(It is important that you can 

                  be reached at this number during your day time as we may call 

                  to verify your order.)</em></td>

              </tr>

              <tr> 

                <td  valign="top">Email Address:<font color="#FF0000">*</font></td>

                <td><input name="email" class="form_txt" onClick="calculate(term.value, addon.value,coupon.value);" size="30" > 

                <br> <em>(Please use an e-mail address which you check regularly)</em></td>

              </tr>

            </tbody>

          </table>

        </div>

		<div class="rndbox3"> 

          <p><img src="images/t02.gif" width="190" height="30"> </p>

          <table border="0" width="100%">

            <tbody>

              <tr> 

                <td width="40%" valign="top">Invoice / Quote Number: </td>

                <td width="60%"> 

                  <?php

								if ($_REQUEST["inv"] != "")

								{

									echo "#".$_REQUEST["inv"] ;

									echo "<input name=\"invno\" type=\"hidden\" value=\"".$_REQUEST["inv"]."\">";

								}

								else

								{
                              		echo "<input class=\"form_txt\" size=\"3\" maxlength=\"3\" name=\"invno1\"> - ";
                              		echo "<input class=\"form_txt\" size=\"8 \" name=\"invno2\">";

									echo "<br><em>(Kindly enter the Invoice Number you're making payment for here if you have one)<em>";

								}



								?>

                </td>

              </tr>

              <tr> 

                <td>Currency:<span class="required"><font color="#CC0000">*</font></span></td>

                <td> 

                  <?php

								if ($_REQUEST["cur"] != "")

								{

                                                                        for ($j = 0; $j < count ($validcur); $j++)

                                                                        {

                                                                                if ($validcur[$j] == $_REQUEST["cur"])

                                                                                {

                                                                                        echo $_REQUEST["cur"];

                                                                                        echo "<input name=\"currency\" type=\"hidden\" value=\"".$_REQUEST["cur"]."\">";



                                                                                }

                                                                                /*else

                                                                                {

                                                                                        echo "USD";

                                                                                        echo "<input name=\"currency\" type=\"hidden\" value=\"USD\">";

                                                                                }*/

                                                                        }







								}

								else

								{

								   echo "<select name=\"currency\" class=\"form_txt\"><br>";

								   echo "<option value=\"NA\">Please select your Currrency</option>

								   		<option value=\"AUD\">Australian Dollars</option>

										<option value=\"EUR\">Euros</option>

										<option value=\"GBP\">British Pounds</option>

										<option value=\"MYR\">Malaysia Ringgit</option>
										<option value=\"IDR\">Indonesia Rupiah</option>


										<option value=\"NZD\">New Zealand Dollars</option>
										<option value=\"PHP\">Philippines Peso</option>

										<option value=\"SGD\">Singapore Dollars</option>

										<option value=\"ZAR\">South African Rand</option>

										<option value=\"USD\">US Dollars</option>";

								   echo " </select>";

								}

							  ?>

                </td>

              </tr>

              <tr> 

                <td valign="top">Payment Amount :<span class="required"><font color="#CC0000">*</font></span> 

                </td>

                <td> 

                  <?php

								if ($_REQUEST["amt"] != "")

								{

									echo $_REQUEST["amt"] ;

									echo "<input name=\"payamount\" type=\"hidden\" value=\"".$_REQUEST["amt"]."\">";

								}

								else

								{

                              		echo "<input class=\"form_txt\" size=\"30\" name=\"payamount\">";

									echo "<br><em>(Please do not include any currency symbols)</em>";

								}

								?>

                </td>

              </tr>

              <tr> 

                <td valign="top">Additional Comments: <span class="required"><font color="#CC0000"></font></span></td>

                <td> <textarea name="comments" class="form_txt" rows="5"></textarea> 

                </td>

              </tr>

            </tbody>

          </table>

		</div>

        <div class="rndbox3"> 

          <p><img src="images/t03.gif" width="190" height="30"></p>

          <table width="98%" border="0">

            <tr> 

              <td width="40%">Choose a Payment Method:</td>

              <td width="60%"><select name="payment" id="payment" class="form_txt" onChange="showhidecc(this.value, 'showpaytype');">

                  <option value="non" selected="selected">---Select a Payment 

                  Method---</option>

                  <option value="cc">Credit Card</option>

                  <option value="paypal">PayPal</option>

                </select></td>

            </tr>

          </table>

          <div style="display: none;" id="showpaytype"> 

            <table width="98%" border="0" cellpadding="0"  class="innertd">

              <tr> 

                <td width="40%" valign="top">Name on Card:<font color="#FF0000">*</font></td>

                <td > <input class="form_txt" id="cc_name" size="30" maxlength="16" name="cc_name"> 

                </td>

              </tr>

              <tr> 

                <td valign="top">Card Number:<font color="#FF0000">*</font></td>

                <td> <input class="form_txt" id="cc_num" size="16" maxlength="18" name="cc_num"> 

                  <br>

                  (Accept Amex, Visa, Mastercard Only)</td>

              </tr>

              <tr > 

                <td valign="top">Expiration Date on Card:<font color="#FF0000">*</font></td>

                <td> 
<select name="cc_exp_mm" id="cc_exp_mm" class="form_txt" style=" width:50px">
<option value='01'>01</option>
<option value='02'>02</option>
<option value='03'>03</option>
<option value='04'>04</option>
<option value='05'>05</option>
<option value='06'>06</option>
<option value='07'>07</option>
<option value='08'>08</option>
<option value='09'>09</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
</select>
   

                  / 20 


<select name="cc_exp_yy" id="cc_exp_yy" class="form_txt" style=" width:50px">
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>(mm/yy)</td>

              </tr>

              <tr> 

                <td valign="top">Name of Issuing Bank:<font color="#FF0000">*</font></td>

                <td> <input type="text" name="bankname" class="form_txt" size="30"> 

                </td>

              </tr>

              <tr> 

                <td valign="top">Card ID/CVV2:<font color="#FF0000">*</font></td>

                <td><input class="form_txt" id="cc_cvv22" name="cc_cvv2" size="4" maxlength="4"> 

                  <font class="fn"> <a href="javascript:void(0)" onClick="window.open('cardcode.html', 'Cardcode','width=800,height=500,menubar=no,status=no,location=no,toolbar=no,scrollbars=yes')"> 

                  What is This?</a> </font></td>

              </tr>

              <tr> 

                <td colspan="2" class="topline">**Transaction will appear as <strong>Flexi e-Solutions Pty Ltd 

                  </strong> on your Credit Card Statement**</td>

              </tr>

            </table>

          </div>

        </div>

      

<table border="0" width="98%" class="noborder">

            <tbody>

              <tr> 

                <td width="40%"  valign="top">&nbsp;</td>

                <td>

				<input name="gopay" id="gopay" type="image" value=" " class="proceed"/>  

                </td>

              </tr>

            </tbody>

          </table>

        

      </form>

    </div>

    <div class="col2"> 

      <p>vOffice.com.my is a business of PT vOffice. We are a privately 
        owned debt free company originated from Victoria, Australia with networks 
        that span across Australia, New Zealand, USA, Belgium, South Africa, Middle 
        East, Malaysia, Singapore and Indonesia.</p>

      <p>We are constantly on the look out for the best technology commercially 

        feasible out there, therefore we can offer you the best possible solution 

        at the best possible price.</p>

      <p><strong>We know different companies have different needs.</strong> So 

        when we designed vOffice.com.my, we made it versatile enough to 

        match the unique needs of most business professionals. No matter who you 

        are, we just make life easier.</p>

	  <div class="divider"> 
        <p><strong>PT vOffice</strong><br>
          Menara Rajawali Level 7-1<br>
		  Jl Mega Kuningan Lot 5.1<br>
		  Mega Kuningan, Jakarta 12950 Indonesia</p>

        <p> <img src="http://voffice.com.my/images/icon-phone.png"> 
          +6221 29222999<br>
          <img src="http://voffice.com.my/images/icon-fax.png"> 
		  +6221 29222990<br>
          <img src="http://voffice.com.my/images/icon-email.png"> cs 
          @ voffice.com.my</p>

        </div>



       

      <!--p><strong>HOSTING SOLUTIONS</strong> <br>

        &middot;&nbsp;<a href="http://www.flexihostings.net.au/" target="_blank">FlexiHostings Australia</a>

        <br>&middot;&nbsp;<a href="http://www.eurowebhost.eu/" target="_blank">FlexiHostings Europe</a>

		<br>&middot;&nbsp;<a href="http://www.flexihostings.com.my/" target="_blank">FlexiHostings Malaysia</a>

        <br>&middot;&nbsp;<a href="http://www.flexihostings.co.nz/" target="_blank">FlexiHostings New Zealand</a>

        <br>&middot;&nbsp;<a href="http://www.flexihostings.com.sg/" target="_blank">FlexiHostings Singapore</a>

        <br>&middot;&nbsp;<a href="http://www.flexihostings.co.za/" target="_blank">FlexiHostings South Africa</a>

        <br>&middot;&nbsp;<a href="http://www.flexihostings.co.uk/" target="_blank">FlexiHostings UK</a>		

		<br>&middot;&nbsp;<a href="http://www.flexihostings.us/">FlexiHostings USA</a></li>

        <br>&middot;&nbsp;<a href="http://www.vpshosting.net.au/" target="_blank">VPSHosting.net.au</a>

      </p>

      <p><strong>BUSINESS SOLUTIONS</strong> <br>

        &middot;&nbsp;<a href="http://www.receptionist.com.au/" target="_blank">Receptionist 

        Australia</a> <br>

        &middot;&nbsp;<a href="http://www.receptionist.com.my/" target="_blank">Receptionist 

        Malaysia</a> <br>

        &middot;&nbsp;<a href="http://www.virtual-office.com.au/" target="_blank">Virtual 

        Office Australia</a> <br>

        &middot;&nbsp;<a href="http://www.flexioffice.com.my/" target="_blank">Virtual 

        Office Malaysia</a> <br>

        &middot;&nbsp;<a href="http://www.flexifax.com.my/" target="_blank">FlexiFax.com.my</a> 

        <br>

        &middot;&nbsp;<a href="http://www.flexiphonesystem.com/" target="_blank">FlexiPhoneSystem</a> 

      </p-->

      <p>WE PROUDLY ACCEPT:</p>

      <p> <img src="images/vo-accept-visa.png"/> <img src="images/vo-accept-mastercard.png"/> 

        <img src="images/vo-accept-amex.png"/> <img src="images/vo-accept-paypal.png"/> 

        <img src="images/id-bca.gif"/> </p>

    </div>

    <div class="clear"></div>

  </div>

</div>

<div class="clear"></div>

<div id="footer_wrap">

  <div id="footer">2012&copy; <a href="http://www.voffice.com.my/">vOffice.com.my</a> 

    - Jakarta Virtual Office by PT vOffice. All Rights Reserved. &nbsp;Search 

    Engine Optimized and Hosted by <a href="http://flexihostings.net.au" arget="_blank">Flexihostings.net.au</a></div>

</div>

<script type="text/javascript" src="jquery.js"></script>
	<!--script type="text/javascript" src="jquery.address.js"></script>
	<script type="text/javascript" src="jquery.scrollto.js"></script>-->

	<script type="text/javascript" src="voffice.js"></script>
	<script type="text/javascript" src="navigation.js"></script>

	<script type="text/javascript" src="cufon.js"></script>
	<script type="text/javascript" src="trade-gothic-bold-condensed-20.font.js"></script>
	<script type="text/javascript" src="trade-gothic-condensed-18.font.js"></script>

	<link rel="stylesheet" type="text/css" href="shadowbox.css">
	<script type="text/javascript" src="shadowbox.js"></script>

	<script type="text/javascript">
	Shadowbox.init({ skipSetup:true, troubleElements: ["select","object","embed"] });
	Shadowbox.setup();

	Cufon.replace('h1', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('h2', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('h3', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('h4', { fontFamily:'Trade Gothic W02 Bold Cn 20' });

	Cufon.replace('dt', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('#content.product #article .meta ul li span.value', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('#content.product #sidebar .section.purchase ul li p em', { fontFamily:'Trade Gothic W02 Bold Cn 20' });

	Cufon.replace('#content.product #sidebar .section.purchase ul li a.button.purchase span.price span.amount', { fontFamily:'Trade Gothic W02 Bold Cn 20' });
	Cufon.replace('#content.product #sidebar .section.purchase ul li a.button.purchase span.price span.interval', { fontFamily:'Trade Gothic W02 Cn 18' });

	Cufon.replace('#content.product #article .examples ul li a strong', { fontFamily:'Trade Gothic W02 Bold Cn 20' });

	Cufon.now();
	</script>

</body>

</html>

