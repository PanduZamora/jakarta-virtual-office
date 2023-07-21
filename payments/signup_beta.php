<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<?
include "../pay/locale.php";



if (isset($_POST["gopay_x"]))
{

				// personal info

				$firstname = $_POST["firstname"];			

				$lastname = $_POST["lastname"];

				$address = $_POST["address"];

				$city = $_POST["city"];

				$state = $_POST["state"];

				$zip = $_POST["zip"];

				$country = $_POST["country"];

				$phone = $_POST["phone"];

				$email = $_POST["email"];

				$paymtype = $_POST["payment"];




				// cc info

				$card_name = $_POST["ccname"];		

				$card_no = $_POST["ccno"];

				$card_exp_mm = $_POST["mm"];

				$card_exp_yy = $_POST["yy"];

				$card_cvv = $_POST["cvc"];

				$vip = $_SERVER['REMOTE_ADDR'];



				// set reference id

				$ref_id = "MPay-".time();


			// Format invoices

			$ftype = $_POST["ftype"];

			// Format currency			
			$currency = $_POST["currency"];
			$raw_total = $_POST["payamount"];
			$amount = $_POST["payamount"];
			$price = $_POST["payamount"];

			$msg_in = "";
			$msg_in = "Personnal Details"."\r\n";
			$msg_in .= "-----------------------------"."\r\n";
			$msg_in .= "Name : ".$firstname." ".$lastname."\r\n";
			$msg_in .= "Address : ".$address."\r\n";
			$msg_in .= "City : ".$city."\r\n";
			$msg_in .= "State : ".$state."\r\n";
			$msg_in .= "Zip : ".$zip."\r\n";
			$msg_in .= "Phone : ".$phone."\r\n";
			$msg_in .= "Email : ".$email."\r\n\r\n";



			$msg_in .= "Payment Info"."\r\n";
			$msg_in .= "-----------------------------"."\r\n";
			$msg_in .= "Payment Type : ".$_POST["payment"]."\r\n";
			$msg_in .= "Invoice(s) : ".$ftype."\r\n";
			$msg_in .= "Currency Type : ".$currency."\r\n";
			$msg_in .= "Native Currency Amount : ".$raw_total."\r\n";
			$msg_in .= "Comments : ".$_POST["comments"]."\r\n";


		if ($_POST["payment"] == "CreditCard")
		{
			include 'voClass.php';
			$voClass = new voClass();
			$renewdate  = date('Y-m-d', strtotime("+1 months", strtotime(date("Y-m-d"))));
			$dbamount = str_replace( ',', '', $amount);
			$name = $firstname." ".$lastname;
			$_SESSION["order_id"] = $voClass->addOrder( $name, $phone, $email, $ref_id, $_POST['payment'], $dbamount, $currency, $renewdate);	
			include 'pay_via_midtrans_indo.php';
			die();

		}
		elseif ($_POST["payment"] == "paypal")
		{

			$emailTo = TOEMAIL;

			$ppcurency = $currency;

			$subject_in = "voffice.co.id Paypal Payment Ref : ". $ref_id;



			// no need to edit below		

			$emailMessage = $msg_in;

			$fheaders = 'From: noreply@voffice.co.id'. "\r\n". 'Cc: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.co.id'. "\r\n" . "X-Mailer: PHP/FlexiPay";

			mail($emailTo,$subject_in,$emailMessage,$fheaders);



			// email to client

			$client_msg_in = "Hello ".$firstname.","."\r\n";

			$client_msg_in .= CLIENTPPMSG;	

			$client_msg_in .= EMAILFOOTER;

			$client_emailToE = $email;

			$client_subject_in = "voffice.co.id MPay Ref : ". $ref_id . " - Payment via Paypal";



			//$emailFromE = $email;

			$client_fheaders = 'From: noreply@voffice.co.id'. "\r\n". 'BCC: albert.g@flexihostings.net'."\r\n".'Reply-To: noreply@voffice.co.id'. "\r\n" . "X-Mailer: PHP/FlexiPay";

			mail($client_emailToE,$client_subject_in,$client_msg_in,$client_fheaders);



			$ppamt = $raw_total;

			$ppreturnurl = PPRETURNURL;

			$ppreturncancel = PPCANCELURL;

			$ppacct = PPACCNT;



			$paypalcmd = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&currency_code=$currency&amount=$ppamt&item_number=$ref_id&return=$ppreturnurl&cancel_return=$ppreturncancel&item_name=PT vOffice Invoice $ftype&business=$ppacct";

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

<TITLE>voffice.co.id - Secure Online Payment Page</TITLE>

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

<link href="../pay/fesstyle.css" rel="stylesheet" type="text/css">

<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}
</style>

</head>



<body>

<div id="header_wrap"> 

  <div id="header"> 
    <p id="logo"><a href="http://voffice.co.id/">VOFFICE</a></p>
    <p id="slogan"><a href="http://voffice.co.id/what-is-virtual-office.html" title="What is a Virtual Office">&middot;&nbsp;&nbsp; 
      Virtual Office Made Easy &nbsp;&nbsp;&middot; <strong>{?}</strong></a> </p>
    <ul id="toc">
      <table width="150" border="0">
        <tr> 
          <td height="21"><a href="https://flexisupport.com/help/" target="_blank"><img src="../pay/images/icon-chat.png" width="24" height="17"></a></td>
          <td><a href="https://flexisupport.com/help/" target="_blank"> Start 
            a chat</a></td>
        </tr>
        <tr> 
          <td><a href="contact.php"><img src="../pay/images/icon-email.png" width="24" height="17"></a></td>
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

      <form name="billpay" method="post" action="signup_beta.php">

        <div class="rndbox3"> 

          <p><img src="../pay/images/t01.gif" width="190" height="30"></p>

          <table border="0" width="98%">

            <tbody>

              <tr> 

                <td width="40%"  valign="top" >First Name:<font color="#FF0000">*</font></td>

                <td> <input name="firstname" class="form_txt" size="30" value="Javad"></td>

              </tr>

              <tr> 

                <td  valign="top">Last Name:<font color="#FF0000">*</font></td>

                <td><input name="lastname" class="form_txt" size="30" value="test"></td>

              </tr>

              <tr> 

                <td  valign="top">Address:<font color="#FF0000">*</font></td>

                <td><textarea name="address" rows="5" class="form_txt">test</textarea></td>

              </tr>

              <tr> 

                <td  valign="top">City:<font color="#FF0000">*</font></td>

                <td> <input name="city" class="form_txt" size="30" value="test"></td>

              </tr>

              <tr> 

                <td  valign="top">State:<font color="#FF0000">*</font></td>

                <td><input name="state" class="form_txt" size="30" value="tester"></td>

              </tr>

              <tr> 

                <td  valign="top">Other State/Province:</td>

                <td><input name="province" class="form_txt" size="30" value="test"></td>

              </tr>

              <tr> 

                <td  valign="top">Post Code:<font color="#FF0000">*</font></td>

                <td><input name="zip" class="form_txt" size="10" value="33333"></td>

              </tr>

              <tr> 

                <td  valign="top">Country:<span class="required"></span></td>

                <td> <select name="country" class="form_txt">

                    <option value="Afghanistan">Afghanistan</option>

                    <option value="Albania" selected>Albania</option>

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

                    <option value="Indonesia" selected="selected">Indonesia</option>

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

                    <option value="Malaysia">Malaysia</option>

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

                <td><input  name="phone" class="form_txt" size="30" value="+62212922123"><br>

                  <em>(e.g. +62212922123)</em></td>

              </tr>

              <tr> 

                <td colspan="2"  valign="top"><em>(It is important that you can 

                  be reached at this number during your day time as we may call 

                  to verify your order.)</em></td>

              </tr>

              <tr> 

                <td  valign="top">Email Address:<font color="#FF0000">*</font></td>

                <td><input name="email" class="form_txt" size="30" value="javad@flexiesolutions.com"> 

                <br> <em>(Please use an e-mail address which you check regularly)</em></td>

              </tr>

            </tbody>

          </table>

        </div>

		<div class="rndbox3"> 

          <p><img src="../pay/images/t02.gif" width="190" height="30"> </p>

          <table border="0" width="100%">

            <tbody>

              <tr> 

                <td width="40%" valign="top">Invoice / Quote Number: </td>

                <td width="60%"> 
					<input class="form_txt" id="ftype" size="30" maxlength="16" name="ftype" value="3-5555"> 
                  

                </td>

              </tr>

              <tr> 

                <td>Currency:<span class="required"><font color="#CC0000">*</font></span></td>

                <td> IDR          
                   <input name="currency" type="hidden" value="IDR">


                </td>

              </tr>

              <tr> 

                <td valign="top">Payment Amount :<span class="required"><font color="#CC0000">*</font></span> 

                </td>

                <td> 
					<input class="form_txt" id="payamount" size="30" maxlength="16" name="payamount" value="10000.00"> 
                  

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

          <p><img src="../pay/images/t03.gif" width="190" height="30"></p>

          <table width="98%" border="0">

            <tr> 

              <td width="40%">Choose a Payment Method:</td>

              <!-- <td width="60%"><select name="payment" id="payment" class="form_txt" onChange="showhidecc(this.value, 'showpaytype');"> -->
              <td width="60%"><select name="payment" id="payment" class="form_txt">

                  <option value="non" >---Select a Payment Method---</option>

                  <option value="CreditCard" selected="selected">Credit Card</option>
 
                </select></td>

            </tr>

          </table>

         

            <table width="98%" border="0" cellpadding="0"  class="innertd">

              <tr> 

                <td width="40%" valign="top">Name on Card:<font color="#FF0000">*</font></td>

                <td > <input class="form_txt" id="ccname" size="30" maxlength="16" name="ccname" value="tester"> 

                </td>

              </tr>

              <tr> 

                <td valign="top">Card Number:<font color="#FF0000">*</font></td>

                <td> <input class="form_txt" id="ccnum" size="16" maxlength="18" name="ccno" value="4011111111111112"> 

                  <br>

                  (Accept Amex, Visa, Mastercard Only)</td>

              </tr>

              <tr > 

                <td valign="top">Expiration Date on Card:<font color="#FF0000">*</font></td>

                <td> <input type="text" class="form_txt" value="12" name="mm" id="mm" placeholder="MM"> 

                 

                  <input type="text" class="form_txt" value="2020" name="yy" id="yy" placeholder="YYYY"> </td>

              </tr>

             <!-- <tr> 

                <td valign="top">Name of Issuing Bank:<font color="#FF0000">*</font></td>

                <td> <input type="text" name="bankname" class="form_txt" size="30"> 

                </td>

              </tr>-->

              <tr> 

                <td valign="top">Card ID/CVV2:<font color="#FF0000">*</font></td>

                <td><input class="form_txt" id="cvc" name="cvc" size="4" value="123" maxlength="4"> 

                  <font class="fn"> <a href="javascript:void(0)" onClick="window.open('../pay/cardcode.html', 'Cardcode','width=800,height=500,menubar=no,status=no,location=no,toolbar=no,scrollbars=yes')"> 

                  What is This?</a> </font></td>

              </tr>

              <tr> 

                <td colspan="2" class="topline">**Transaction will appear as <strong>Flexi e-Solutions Pty Ltd 

                  </strong> on your Credit Card Statement**</td>

              </tr>

            </table>

       

        </div>

      

<table border="0" width="98%" class="noborder">

            <tbody>

              <tr> 

                <td width="40%"  valign="top">&nbsp;</td>

                <td>

				<input name="gopay_x" id="gopay_x" type="submit" value=" " class="proceed"/>  

                </td>

              </tr>

            </tbody>

          </table>

        

      </form>

    </div>

    <div class="col2"> 

      <p>vOffice.co.id is a business of PT vOffice. We are a privately 
        owned debt free company originated from Victoria, Australia with networks 
        that span across Australia, New Zealand, USA, Belgium, South Africa, Middle 
        East, Malaysia, Singapore and Indonesia.</p>

      <p>We are constantly on the look out for the best technology commercially 

        feasible out there, therefore we can offer you the best possible solution 

        at the best possible price.</p>

      <p><strong>We know different companies have different needs.</strong> So 

        when we designed vOffice.co.id, we made it versatile enough to 

        match the unique needs of most business professionals. No matter who you 

        are, we just make life easier.</p>

	  <div class="divider"> 
        <p><strong>PT vOffice</strong><br>
          Menara Rajawali Level 7-1<br>
		  Jl Mega Kuningan Lot 5.1<br>
		  Mega Kuningan, Jakarta 12950 Indonesia</p>

        <p> <img src="http://voffice.co.id/images/icon-phone.png"> 
          +6221 29222999<br>
          <img src="http://voffice.co.id/images/icon-fax.png"> 
		  +6221 29222990<br>
          <img src="http://voffice.co.id/images/icon-email.png"> cs 
          @ voffice.co.id</p>

        </div>



      <p>WE PROUDLY ACCEPT:</p>

      <p> <img src="../pay/images/vo-accept-visa.png"/> <img src="../pay/images/vo-accept-mastercard.png"/> 

        <img src="../pay/images/vo-accept-amex.png"/> <img src="../pay/images/vo-accept-paypal.png"/> 

        <img src="../pay/images/id-bca.gif"/> </p>

    </div>

    <div class="clear"></div>

  </div>

</div>

<div class="clear"></div>

<div id="footer_wrap">

  <div id="footer">2012&copy; <a href="http://www.voffice.co.id/">vOffice.co.id</a> 

    - Jakarta Virtual Office by PT vOffice. All Rights Reserved. &nbsp;Search 

    Engine Optimized and Hosted by <a href="http://flexihostings.net.au" arget="_blank">Flexihostings.net.au</a></div>

</div>

</body>

</html>

