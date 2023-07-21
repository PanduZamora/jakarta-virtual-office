<? session_start();
if($_POST["go_pay"]) 
{
include 'adminClass.php';
$adminclass = new adminClass;
include "config.php";
?><script src="js/jquery.min.js"></script><?



	//get visitor ip
	function getUserIP()
		{
			$client  = @$_SERVER['HTTP_CLIENT_IP'];
			$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
			$remote  = $_SERVER['REMOTE_ADDR'];
		
			if(filter_var($client, FILTER_VALIDATE_IP))
			{
				$ip = $client;
			}
			elseif(filter_var($forward, FILTER_VALIDATE_IP))
			{
				$ip = $forward;
			}
			else
			{
				$ip = $remote;
			}
		
			return $ip;
		}
		$vip = getUserIP();
		
		function enc($d)
		{
			$d = htmlspecialchars(stripslashes(trim($d)));
			return $d;
		}

		// personal info
		$firstname = $_POST["firstname"];			
		$lastname = $_POST["lastname"];
		$address = $_POST["address"];
		$companyname = $_POST["company"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zip = $_POST["postcode"];
		$country = $_POST["country"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$paymtype = $_POST["payment"];
		$coupon = trim($_POST["coupon"]);
		$location = $_POST["location"];
		$referral = $_SESSION["referral"];
		
		$in_plan = $_POST["plan"];
		$in_term = $_POST["term"];
		
		$price = $_SESSION['price'];
		$gst = $_SESSION['gst'];
		$ff_tot = $_SESSION['total_price'];
		$ref_id = "VOMYNO"."-".time();
		$raw_total = $ff_tot;
		$curencytype = "MYR";
		
		//session set
		$_SESSION["scurrency"] = "MYR";
		$_SESSION["stotal"] = $ff_tot;
		$_SESSION["ref_id"] = $ref_id;
		$_SESSION["in_plan"] = $in_plan;
		$_SESSION["in_term"] = $in_term;
		
		
		/// add to referral table
		
			$result = $adminclass -> reConnectClientClassDB();
			$result = $adminclass -> SearchByNumber($referral);
			$row = mysql_fetch_assoc($result);
			$result = $adminclass -> getReferralPercent($row['clientid']);
			$row = mysql_fetch_assoc($result);
			$ear_percent = $row['percent'];
			$ref_percent = $raw_total * $ear_percent;
			$ref_percent = $ref_percent/100;
			$product = $in_plan.",".$in_term;
			$result = $adminclass -> updateReferralSignups($referral,$product,$raw_total,$curencytype,$ref_percent,$_POST["payment"], $location, $firstname, $lastname, $email);
		
			//set hash
			//test
			//$hashraw = "fxe12345FXE".$ref_id."http://voffice.com.my/return.phphttps://voffice.com.my/gateway-callback.php".$ff_tot.$curencytype.$vip."780";
	//live
			$hashraw = "qlf3FEtnFXE".$ref_id."http://voffice.com.my/return.phphttps://voffice.com.my/gateway-callback.php".$ff_tot.$curencytype.$vip."780";
				
			$hash = hash('sha256', $hashraw);

		$msg_in = "";



			$msg_in = "Personnal Details"."\r\n<br>";
			$msg_in .= "---------------------------------------"."\r\n<br>";
			$msg_in .= "Name : ".$firstname." ".$lastname."\r\n<br>";
			$msg_in .= "Company : ".$companyname."\r\n<br>";
			$msg_in .= "Address : ".$address."\r\n<br>";
			$msg_in .= "City : ".$city."\r\n<br>";
			$msg_in .= "State : ".$state."\r\n<br>";
			$msg_in .= "Country : ".$country."\r\n<br>";
			$msg_in .= "Zip : ".$zip."\r\n<br>";
			$msg_in .= "Phone : ".$phone."\r\n<br>";
			$msg_in .= "Email : ".$email."\r\n<br>"; 
			$msg_in .= "Comments : ".$_POST["comments"]."\r\n<br>";
			$msg_in .= "Affiliate ID : ".$f_affid."\r\n<br>";
			$msg_in .= "Client IP : ".$_SERVER['REMOTE_ADDR']."\r\n<br>";
			if($referral!="")
			$msg_in .= "Referral ID : ".$referral."\r\n<br>";


			$msg_in .= "\r\n<br>"."Payment Info"."\r\n<br>";
			$msg_in .= "---------------------------------------"."\r\n<br>";
			$msg_in .= "Payment Type : ".$_POST["payment"]."\r\n<br>";
			$msg_in .= "Location : ".$location."\r\n<br>";
			$msg_in .= "Plan : ".$in_plan."\r\n<br>";
			$msg_in .= "Term : ".$in_term." month(s) \r\n<br>";
			$msg_in .= "Addon (if any) : ".$addon_desc."\r\n<br>";
			$msg_in .= "Coupon Code : ".$coupon."\r\n<br>";
			$msg_in .= "Currency Type : ".$curencytype."\r\n<br>";
			$msg_in .= "Amount : ".$ff_tot."\r\n<br>";
			
			
			
			$msg_in .= "\r\n<br>"."Supplementary Services"."\r\n<br>";
			$msg_in .= "---------------------------------------"."\r\n<br>";
			$msg_in .= "".$_POST["supp1"]."\r\n<br>";
			$msg_in .= "".$_POST["supp2"]."\r\n<br>";
			$msg_in .= "".$_POST["supp3"]."\r\n<br>";
			$msg_in .= "".$_POST["supp4"]."\r\n<br>";
			$msg_in .= "".$_POST["supp5"]."\r\n<br>";
			$msg_in .= "".$_POST["supp6"]."\r\n<br>";


		if ($_POST["payment"] == "CreditCard")

		{

			$subject_in = "vOffice.com.my New Order : Ref : ". $ref_id;
				$subject=$subject_in;
				$mainbody=$msg_in;
				include('sendit.php');
				if($mail->Send()) {
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					echo "<br><br>Please contact support: cs@voffice.com.my";
					die();
					}
				$client_msg_in = "Hello ".$firstname." Below are details for your order\r\n<br>";

				$client_msg_in .= $msg_in;


				$toemail=$email;
				$subject=$subject_in;
				$mainbody=$client_msg_in;
				include('sendit.php');
				if($mail->Send()) {
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					echo "<br><br>Please contact support: cs@voffice.com.my";
					die();
					}
		
			
		?>
        	<!--<form name="frmPayment" id="frmPayment" method="post" action="https://test2pay.ghl.com/IPGSG/Payment.aspx">-->
			<form name="frmPayment" id="frmPayment" method="post" action="https://securepay.e-ghl.com/IPG/payment.aspx">

			<input type="hidden" name="TransactionType" value="SALE" size="135">
			<input type="hidden" name="PymtMethod" value="CC" size="135">
			<input type="hidden" name="ServiceID" value="FXE" size="135">
			<input type="hidden" name="PaymentID" value="<?=$ref_id?>" size="135">
			<input type="hidden" name="OrderNumber" value="<?=$in_plan.'-'.$in_term.'-'.$ref_id?>" size="135">
			<input type="hidden" name="PaymentDesc" value="<?=$in_plan.'-'.$in_term.'-'.$location?>" size="135">
			<input type="hidden" name="MerchantName" value="Voffice" size="135">
			<input type="hidden" name="MerchantReturnURL" value="http://voffice.com.my/return.php" size="135">
			<input type="hidden" name="MerchantCallBackURL" value="https://voffice.com.my/gateway-callback.php" size="135">
			<input type="hidden" name="Amount" value="<?=$ff_tot?>" size="135">
			<input type="hidden" name="CurrencyCode" value="<?=$curencytype?>" size="135">
			<input type="hidden" name="CustIP" value="<?=$vip?>" size="135">
			<input type="hidden" name="CustName" value="<?=$firstname." ".$lastname?>" size="135">
			<input type="hidden" name="CustEmail" value="<?=$email?>" size="135">
			<input type="hidden" name="CustPhone" value="<?=$phone?>" size="135">
			<input type="hidden" name="HashValue" value="<?=$hash?>" size="135">
			<input type="hidden" name="MerchantTermsURL"value="http://voffice.com.my/terms.html" size="135">
			<input type="hidden" name="LanguageCode" value="en" size="135">
			<input type="hidden" name="PageTimeout" value="780" size="135">
            </form>
            <? 
			echo "<script type=\"text/javascript\">$('#frmPayment').submit();</script>"; 
			die();    
			
			
		}
		else if ($_POST["payment"] == "OnlineBanking")

		{
			$subject_in = "vOffice.com.my New Order : Ref : ". $ref_id;
				$subject=$subject_in;
				$mainbody=$msg_in;
				include('sendit.php');
				if($mail->Send()) {
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					echo "<br><br>Please contact support: cs@voffice.com.my";
					die();
					}
				$client_msg_in = "Hello ".$firstname." Below are details for your order\r\n<br>";

				$client_msg_in .= $msg_in;


				$toemail=$email;
				$subject=$subject_in;
				$mainbody=$client_msg_in;
				include('sendit.php');
				if($mail->Send()) {
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					echo "<br><br>Please contact support: cs@voffice.com.my";
					die();
					}
		
			
		?>
			<form name="frmPayment" id="frmPayment" method="post" action="https://securepay.e-ghl.com/IPG/payment.aspx">

			<input type="hidden" name="TransactionType" value="SALE" size="135">
			<input type="hidden" name="PymtMethod" value="CC" size="135">
			<input type="hidden" name="ServiceID" value="FXE" size="135">
			<input type="hidden" name="PaymentID" value="<?=$ref_id?>" size="135">
			<input type="hidden" name="OrderNumber" value="<?=$in_plan.'-'.$in_term.'-'.$ref_id?>" size="135">
			<input type="hidden" name="PaymentDesc" value="<?=$in_plan.'-'.$in_term.'-'.$location?>" size="135">
			<input type="hidden" name="MerchantName" value="Voffice" size="135">
			<input type="hidden" name="MerchantReturnURL" value="http://voffice.com.my/return.php" size="135">
			<input type="hidden" name="MerchantCallBackURL" value="https://voffice.com.my/gateway-callback.php" size="135">
			<input type="hidden" name="Amount" value="<?=$ff_tot?>" size="135">
			<input type="hidden" name="CurrencyCode" value="<?=$curencytype?>" size="135">
			<input type="hidden" name="CustIP" value="<?=$vip?>" size="135">
			<input type="hidden" name="CustName" value="<?=$firstname." ".$lastname?>" size="135">
			<input type="hidden" name="CustEmail" value="<?=$email?>" size="135">
			<input type="hidden" name="CustPhone" value="<?=$phone?>" size="135">
			<input type="hidden" name="HashValue" value="<?=$hash?>" size="135">
			<input type="hidden" name="MerchantTermsURL"value="http://voffice.com.my/terms.html" size="135">
			<input type="hidden" name="LanguageCode" value="en" size="135">
			<input type="hidden" name="PageTimeout" value="780" size="135">
            </form>
            <? 
			echo "<script type=\"text/javascript\">$('#frmPayment').submit();</script>"; 
			die();    
			
			
		}


		else if ($_POST["payment"] == "paypal")

		{
			?><script type="text/javascript" src="http://www.jomniaga.com/api/conversion?transtype=SALE&amount=<? echo $_SESSION["stotal"]?>&tracking=<? echo $ref_id?>"></script>
<noscript><img src="http://www.jomniaga.com/api/conversion?transtype=SALE&amount=<? echo $_SESSION["stotal"]?>&tracking=<? echo $ref_id?>" width="1" height="1" border="0" /></noscript>
<?
			$emailTo = TOEMAIL;

			$ppcurency = $currencytype;

			$subject_in = "vOffice.com.my Paypal Payment Ref : ". $ref_id;



			// no need to edit below		

			$emailMessage = $msg_in;

			$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Cc: albert.g@flexiesolutions.com, sean@flexiesolutions.com'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FFAX";

			//mail($emailTo,$subject_in,$emailMessage,$fheaders);
				//$email=$email;
				$subject=$subject_in;
				$mainbody=$msg_in;
				include('sendit.php');
				if($mail->Send()) {
 				 echo "Processing...";
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					}


			// email to client

			$client_msg_in = "Hello ".$firstname.","."\r\n<br>";

			$client_msg_in .= CLIENTPPMSG;	

			$client_msg_in .= EMAILFOOTER;

			$client_emailToE = $email;

			$client_subject_in = "vOffice.com.my Ref : ". $ref_id . " - Payment via Paypal";



			//$emailFromE = $email;

			$client_fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FFAX";

			//mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);
				$toemail=$email;
				$subject=$client_subject_in;
				$mainbody=$client_msg_in;
				include('sendit.php');
				if($mail->Send()) {
 				 echo "...";
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					}
					
					$product = "Virtual Office ".$in_plan.'-'.$in_term.'Month(s)-';
				$ppamt = $ff_tot;

			$ppreturnurl = PPRETURNURL;

			$ppreturncancel = PPCANCELURL;

			$ppacct = PPACCNT;
			
			$paypalcmd = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&currency_code=$curencytype&amount=$ppamt&item_number=$ref_id&return=$ppreturnurl&cancel_return=$ppreturncancel&item_name=$product&business=$ppacct";



			echo "<script>window.location= \"".$paypalcmd."\";</script>";

		}
		
		else

		{
			$offlink = OFFLINEURL;

				$emailToE = TOEMAIL;

				$subject_in = "vOffice.co.id : Offline Payment Order : Ref : ". $ref_id;



				//$emailFromE = $email;

				$fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'Cc: albert.g@flexihostings.net, linda@flexiesolutions.com'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/FFAX";

				//mail($emailToE,$subject_in,$msg_in,$fheaders);
				//mail("sean@flexiesolutions.com",$subject_in,$msg_in,$fheaders);
				$subject=$subject_in;
				$mainbody=$msg_in;
				include('sendit.php');
				if($mail->Send()) {
 				 echo "Processing...";
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					}

				

				$client_msg_in = "Hello ".$firstname.","."\r\n<br>\r\n<br>";

				$client_msg_in .= CLIENTOFFLINEMSG1."\r\n<br>";



				$client_msg_in .= "Order Summary"."\r\n<br>";

				$client_msg_in .= "--------------------------------------"."\r\n<br>";

				$client_msg_in .= "Plan : ".$in_plan."\r\n<br>";

				$client_msg_in .= "Term : ".$in_term." month(s) \r\n<br>";

				$client_msg_in .= "Addon (if any) : ".$addon_desc."\r\n<br>";

				$client_msg_in .= "Setup Fee : ". $curencytype. $setup_fee."\r\n<br>";

				$client_msg_in .= "Total Payable Amount : ".$curencytype.$raw_total."\r\n<br>";



				//$client_msg_in .= "Coupon Code : ". $_SESSION["couponcode"]."\r\n<br>";

				//$client_msg_in .= "Coupon Description : ". $_SESSION["coupondisplay"]."\r\n<br>";

				$client_msg_in .= CLIENTOFFLINEMSG2."\r\n<br>";

				$client_msg_in .= EMAILFOOTER;

				$client_emailToE = $email;

				$client_subject_in = "Your New Order at vOffice.com.my : Ref - ". $ref_id . " - Order Success";



				//$emailFromE = $email;

				$client_fheaders = 'From: noreply@voffice.com.my'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.com.my'. "\r\n" . "X-Mailer: PHP/RIAMY";

				//mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);
				$toemail=$email;
				$subject=$client_subject_in;
				$mainbody=$client_msg_in;
				include('sendit.php');
				if($mail->Send()) {
 				 echo "...";
				 $toemail='';
				 $subject='';
				 $mainbody='';
				} else {
  					echo "Mailer Error: " . $mail->ErrorInfo;
					}
					
					echo "

					<script>

					window.location=\"".$offlink."\"

					</script>

					";

	}
	
	
	
}