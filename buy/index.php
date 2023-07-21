<? session_start();?>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?
include "../config.php";


if ($_POST["gopay_x"]){


  if (!empty($_POST["g-recaptcha-response"])) {


				// personal info
				$firstname = $_POST["firstname"];

				$lastname = $_POST["lastname"];

				$name = $firstname." ".$lastname;

				$address = $_POST["address"];

				$coname = $_POST["coname"];

				$city = $_POST["city"];

				$state = $_POST["state"];

				$zip = $_POST["zip"];

				$country = $_POST["country"];

				$phone = $_POST["phone"];

				$email = $_POST["email"];

				$paymtype = $_POST["payment"];

				$coupon = $_POST["coupon"];

        $service_plan = $_POST["service_plan"];

        $service_term = $_POST["service_term"];

        $price = $_POST["price"];

				$raw_total = $price;


				// cc info

				$vip = $_SERVER['REMOTE_ADDR'];



				// set reference id

				//$ref_id = "vOffice-Pay"."-".time();
				$ref_id = "VOIDPAY"."-".time();



			// Format invoices

			$invoices1 = $_POST["invno"];
			//$invoices2 = $_POST["invno2"];
			$invoices = $invoices1;

			// Format currency
			$curencytype = $_POST["currency"];

			//$raw_total = $_POST["payamount"];
			$raw_total = number_format((float)$raw_total, 2, '.', '');

				$payfor = $invoices;
				$payfordesc = "Invoice Number ". $invoices;

				if($invoices=="")
				$payfor = $ref_id;


				$_SESSION["scurrency"] = "IDR";
				$_SESSION["stotal"] = $raw_total;
				$_SESSION["ref_id"] = $ref_id;
				$_SESSION["in_plan"] = $payfor;


	  		$subject = 'Manual Payment 2019 @ voffice.co.id/pay - '.$ref_id;

			$msg_in = "";

			$msg_in = "Personnal Details"."\r\n<br>";

			$msg_in .= "-----------------------------"."\r\n<br>";

			$msg_in .= "Name : ".$firstname." ".$lastname."\r\n<br>";

			$msg_in .= "Company : ".$coname."\r\n<br>";

			$msg_in .= "Address : ".$address."\r\n<br>";

			$msg_in .= "City : ".$city."\r\n<br>";

			$msg_in .= "State : ".$state."\r\n<br>";

			$msg_in .= "Zip : ".$zip."\r\n<br>";

			$msg_in .= "Phone : ".$phone."\r\n<br>";

			$msg_in .= "Email : ".$email."\r\n<br>\r\n<br>";



			$msg_in .= "Payment Info"."\r\n<br>";

			$msg_in .= "-----------------------------"."\r\n<br>";

      $msg_in .= "Payment Type : ".$_POST["payment"]."\r\n<br>";

      $msg_in .= "Invoice(s) : ".$invoices."\r\n<br>";

      $msg_in .= "Location : ".$_POST["location"]."\r\n<br>";

      $msg_in .= "Plan : Virtual Office ".$_POST["service_plan"]."\r\n<br>";

      $msg_in .= "Term : ".$_POST["service_term"]." Months \r\n<br>";

      $msg_in .= "Currency Type : ".$curencytype."\r\n<br>";

			$msg_in .= "Native Currency Amount : ".number_format($raw_total,2,",",".")."\r\n<br>";



			$msg_in .= "Comments : ".$_POST["comments"]."\r\n<br>";


	  		$msg_in .= "\r\n<br>Sent From https://voffice.co.id/pay \r\n<br>";



		if ($_POST["payment"] == "CreditCard")

		{
			include 'sendit.php';
			include 'pay_via_midtrans_indo.php';
			die();
		}

		elseif ($_POST["payment"] == "paypal")
		{

			$ppcurency = $currencytype;
			include 'sendit.php';

			$ppamt = $raw_total;

			$ppreturnurl = PPRETURNURLPAY;

			$ppreturncancel = PPCANCELURLPAY;

			$ppacct = PPACCNT;



			$paypalcmd = "https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&currency_code=$curencytype&amount=$ppamt&item_number=$ref_id&return=$ppreturnurl&cancel_return=$ppreturncancel&item_name=PT vOffice Invoice $invoices&business=$ppacct";

			echo "<script>window.location= \"".$paypalcmd."\";</script>";

		}

		else

		{

			 echo "<script>alert('Error in Payment Type... Please select a proper payment method.')</script>";


		}
  } else {

	  echo "<script>alert('You did not check the verification')</script>";
  }
}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>vOffice &mdash; Secure Online Payment Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
				<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
				<style media="screen">
          select{
            padding-left: 20px !important;
          }
          #table_wrapper{
            display: none;
          }
          .feature.boxed{
            background: white;
            border: 1px solid #dedede;
          }
          input, select, textarea, option, input[type="text"]{
            font-size: 14px !important;
            background: #f5f6f8;
            border:none !important;
          }
          .feature-1 i{
            color: #2e2e2e;
          }
          .sub{
            font-size: 12px;
            color: #a1a0a1
          }
          input::placeholder, textarea::placeholder{
            font-size: 14px !important;

          }
          .bold-h6{
            font-size: 16px;
            color: #4b4b4b;
            margin-bottom: 15px;
          }
          .table-bordered > tfoot > tr > th, .table-bordered > tfoot > tr > td{
            text-transform: none;
          }
					@media (max-width:768px) {
					  #ccinfo{
							margin-bottom: 80px;
						}
					}
					@media (min-width:768px) {
					  .only-xs{
							display: none !important;
						}
					}
				</style>
    </head>
    <body>

		<?php include("header.html")?>

		<div class="main-container" style="margin-top:85px;">
		<section>
      <form class="form-email" name="billpay" method="post" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		        <div class="container">
		            <div class="row">
                    <div class="col-md-12 text-center">
                      <h2 class="bold mb8">VOPay</h2>
                      <p class="mb56">Pay your invoice online securely here</p>

                      <div class="select-option col-md-12 p0" style="visibility:hidden;position:absolute;">
                        <input type="text" name="price" id="price" placeholder="Payment Amount" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 mb40 mb-xs-24">
                      <div class="feature feature-1 boxed">
                        <div class="row">
                          <div class="col-sm-12">
                            <h6 class="bold-h6 text-left mb8">Plan Details</h6>
                            <div class="select-option col-md-12 p0">
                              <i class="ti-angle-down"></i>
                              <select name="location" id="location" required>
                                <option selected="selected" disabled value>Your Preferred Location</option>
                                <option value="Office8">Office 8, Jakarta Selatan</option>
                                <option value="MR">Menara Rajawali, Jakarta Selatan</option>
                                <option value="CT">Centennial Tower, Jakarta Selatan</option>
                                <option value="MK">Menara Kuningan, Jakarta Selatan</option>
                                <option value="MT">Metropolitan Tower, Jakarta Selatan</option>
                                <option value="TCB">The CEO Building, Jakarta Selatan</option>
                                <option value="GS">Graha Surveyor, Jakarta Selatan</option>
                                <option value="TCT">The City Tower, Jakarta Pusat</option>
                                <option value="S78">Sudirman 7.8, Jakarta Pusat</option>
                                <option value="KT">Kencana Tower, Jakarta Barat</option>
                                <option value="GST">Grand Slipi Tower, Jakarta Barat</option>
                                <option value="K2T">Kirana 2 Tower, Jakarta Utara</option>
                                <option value="PIK">PIK Avenue, Jakarta Utara</option>
                                <option value="RM">Rawamangun, Jakarta Timur</option>
                                <option value="BSD">MyRepublic Plaza BSD, Tangerang</option>
                                <option value="POT">The Prominence Office Tower, Tangerang</option>
                                <option value="BMT1">Bumi Mandiri Tower I, Surabaya</option>
                                <option value="BMT2">Bumi Mandiri Tower II, Surabaya</option>
                                <option value="IT">Intiland Tower, Surabaya</option>
                                <option value="SPAZIO">Spazio, Surabaya</option>
                                <option value="IBIS">Ibis Styles, Bali</option>
                                <option value="JH">Jimbaran Hub, Bali</option>
                                <option value="KIH">Kembali Innovation Hub, Bali</option>
                                <option value="honey-lady">Honey Lady, Jakarta Utara</option>
                                <option value="plaza-bekasi">Plaza Summarecon Bekasi, Bekasi</option>
                                <option value="mensana-tower">Mensana Tower, Cibubur</option>
                                <option value="GJJ">Grand Jati Junction, Medan</option>
                              </select>
                            </div>
                            <div class="select-option col-md-12 p0">
                              <i class="ti-angle-down"></i>
                              <select name="service_plan" id="service_plan" required>
                                <option selected="selected" disabled value>Choose a Plan</option>
                                <option value="silver">Virtual Office SILVER</option>
                                <option value="gold">Virtual Office GOLD</option>
                                <option value="platinum">Virtual Office PLATINUM</option>
                                <option value="platinum+">Virtual Office PLATINUM+</option>
                              </select>
                            </div>

                            <div class="col-md-12 p0" id="table_wrapper">
                          <div class="select-option col-md-12 p0">
                            <i class="ti-angle-down"></i>
                            <select name="service_term" id="service_term" required>
                              <option selected="selected" value="12">12 Months</option>
                              <option value="24">24 Months</option>
                            </select>
                          </div>
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th colspan="2"><h5 class="bold-h6 mb0">Plan Fee</h5></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row"><p>Plan &amp; Addon Total Amount</p></th>
                                <td><p>Rp <span id="planTotalAmount">0</span></p></td>
                              </tr>
                              <tr>
                                <th scope="row"><p>Plan Setup Fee</p></th>
                                <td><p>Rp 0</p></td>
                              </tr>
                              <tr>
                                <th scope="row"><p>VAT (10%)</p></th>
                                <td><p><span id="vat">0</span></p></td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th scope="row"><p class="bold">Final Amount Due</p></th>
                                <td><p class="bold"><span class="bold" id="finalAmountDue">0</span></p></td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                          </div>

                        </div>



                      </div>
                    </div>
		                <div class="col-md-6 col-sm-6 mb40 mb-xs-24">
		                    <div class="feature feature-1 boxed text-center">
                              	<h6 class="bold-h6 text-left mb8">Account Details</h6>
		                            <div class="col-md-6 p0">
                                <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
                                </div>
                                <div class="col-md-6 p0">
                                <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                                </div>
                                <input type="text" class="mb0" name="coname" id="coname" placeholder="Company Name" required>
                                <p class="sub text-left mb16">If you don't have a company name yet, please enter your name here.</p>
                                <textarea name="address" rows="2"  placeholder="Address" class="validate-required"></textarea>
                                <div class="col-md-6 p0">
                                <input type="text" name="city" placeholder="City">
                                </div>
                                <div class=" col-md-6 p0">
                                <input type="text" name="state" placeholder="State">
                                </div>
                                <div class="col-md-6 p0">
                                <input type="text" name="zip" placeholder="Postcode / Zipcode">
                                </div>
                                <div class="select-option col-md-6 p0">
                                <i class="ti-angle-down"></i>
                                <select name="country" id="country" required>
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
                                  <option value="British Indian O. Terr.">British Indian O. Terr.</option>
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
                                  <option value="St. Pierre &amp; Miquelon">St. Pierre &amp; Miquelon</option>
                                  <option value="St. Tome and Principe">St. Tome and Principe</option>
                                  <option value="St.Kitts Nevis Anguilla">St.Kitts Nevis Anguilla</option>
                                  <option value="St.Vincent &amp; Grenadines">St.Vincent &amp;
                                  Grenadines</option>
                                  <option value="Sudan">Sudan</option>
                                  <option value="Suriname">Suriname</option>
                                  <option value="Svalbard &amp; Jan Mayen Is">Svalbard &amp; Jan
                                  Mayen Is</option>
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
                                </select>
                              </div>

	                            <input type="text" class="mb5" name="phone" placeholder="Contact No (Eg +6221 2922 2999)" required>
                              <p class="sub text-left mb16" style="line-height:1.1">It is important that you can be reached at this number during your day time as we may call to verify your order.</p>

                              <input type="text" class="mb0" name="email" placeholder="Email Address" required>
                              <p class="sub text-left mb16">Please use an e-mail address which you check regularly.</p>

                              <textarea class="mb32" name="message" rows="2" placeholder="Additional notes"></textarea>

                              <h6 class="bold-h6 text-left mb8">Payment Method</h6>
                                <div class="select-option p0">
                                  <i class="ti-angle-down"></i>
                                  <select name="payment" id="payment" required>
                                		<option value="" selected disabled>Payment Method</option>
    	                           		<option value="CreditCard">Credit Card</option>
         						                <option value="Offline">Offline/Bank Transfer</option>
                                  </select>
                                </div>
                                <div id='ccinfo' style="display: none">
                                  <h6 class="bold-h6 text-left mb8">Credit Card Details</h6>
                                  <input type="text" id="ccname" maxlength="40" name="ccname" placeholder="Name on Card">
                                  <input type="text" id="ccno" maxlength="18" name="ccno" placeholder="Card Number">
                                  <h6 class="bold-h6 text-left mb8">Expiration Date on Card</h6>
                                  <div class="col-sm-12 no-padding">
                                    <div class="col-sm-6 no-padding">
                                       <div class="select-option p0">
                                          <i class="ti-angle-down"></i>
                                          <select name="mm" id="mm">
                                             <option selected disabled selected>MM</option>
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
                                       </div>
                                    </div>
                                    <div class="col-sm-6 no-padding">
                                       <div class="select-option p0">
                                          <i class="ti-angle-down"></i>
                                          <select  name="yy" id="yy">
                                             <option selected disabled selected>YY</option>
                                             <option value='2019'>2019</option>
                                             <option value='2020'>2020</option>
                                             <option value='2021'>2021</option>
                                             <option value='2022'>2022</option>
                                             <option value='2023'>2023</option>
                                             <option value='2024'>2024</option>
											                       <option value='2025'>2025</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                  <input type="text" name="bankname" placeholder="Name of Issuing Bank">
                                  <input type="text" id="cvc" name="cvc" placeholder="Card ID/CVV2">
                                  <div class="col-xs-12">

                                    <div class="fa-border mb40 mb-xs-24">
                                       <p>
                                          Transaction will appear as
                                          <b>Flexi e-Solutions Pty Ltd</b>
                                          on your Credit Card Statement
                                       </p>
                                    </div>
                                 </div>
		                         </div>

	                            <button type="submit" class="mb8 mt24" name="gopay_x" id="gopay_x" value="gopay_x">Proceed with order</button>

		                    </div>
		                </div>
		            </div>
		        </div>
          </form>
		    </section>

            <?php include("footer.html")?>
		</div>
	<script>
    document.getElementById('payment').addEventListener('change', function () {
		   var style = this.value == 'CreditCard' ? 'block' : 'none';
      document.getElementById('ccinfo').style.display = style;
	});

  document.getElementById('service_plan').addEventListener('change', function () {
    document.getElementById('table_wrapper').style.display = 'block';
    var planTotalAmount, vat, finalAmountDue;
    if (document.getElementById('service_term').value == '12') {
      if (this.value == 'silver') {
        planTotalAmount = 6500000;
        document.getElementById('planTotalAmount'). innerHTML = '6.500.000';
      }else if (this.value == 'gold') {
        planTotalAmount = 8910000;
        document.getElementById('planTotalAmount'). innerHTML = '8.910.000';
      }else if (this.value == 'platinum') {
        planTotalAmount = 11616000;
        document.getElementById('planTotalAmount'). innerHTML = '11.616.000';
      }else if (this.value == 'platinum+') {
        planTotalAmount = 12750000;
        document.getElementById('planTotalAmount'). innerHTML = '12.750.000';
      }
    }else if (document.getElementById('service_term').value == '24') {
      if (this.value == 'silver') {
        planTotalAmount = 13000000;
        document.getElementById('planTotalAmount'). innerHTML = '13.000.000';
      }else if (this.value == 'gold') {
        planTotalAmount = 16830000;
        document.getElementById('planTotalAmount'). innerHTML = '16.830.000';
      }else if (this.value == 'platinum') {
        planTotalAmount = 20064000;
        document.getElementById('planTotalAmount'). innerHTML = '20.064.000';
      }else if (this.value == 'platinum+') {
        planTotalAmount = 21900000;
        document.getElementById('planTotalAmount'). innerHTML = '21.900.000';
      }
    }else {
      planTotalAmount = 0;
      document.getElementById('planTotalAmount'). innerHTML = '0';
    }
    vat = planTotalAmount * 10 / 100;
    finalAmountDue = planTotalAmount + vat;

    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    })

    document.getElementById('vat').innerHTML = formatter.format(vat);
    document.getElementById('finalAmountDue').innerHTML = formatter.format(finalAmountDue);
    document.getElementById('price').value = finalAmountDue;
  });

  document.getElementById('service_term').addEventListener('change', function () {
    document.getElementById('table_wrapper').style.display = 'block';
    var planTotalAmount, vat, finalAmountDue;
    if (this.value == '12') {
      if (document.getElementById('service_plan').value == 'silver') {
        planTotalAmount = 6500000;
        document.getElementById('planTotalAmount'). innerHTML = '6.500.000';
      }else if (document.getElementById('service_plan').value == 'gold') {
        planTotalAmount = 8910000;
        document.getElementById('planTotalAmount'). innerHTML = '8.910.000';
      }else if (document.getElementById('service_plan').value == 'platinum') {
        planTotalAmount = 11616000;
        document.getElementById('planTotalAmount'). innerHTML = '11.616.000';
      }else if (document.getElementById('service_plan').value == 'platinum+') {
        planTotalAmount = 12750000;
        document.getElementById('planTotalAmount'). innerHTML = '12.750.000';
      }
    }else if (this.value == '24') {
      if (document.getElementById('service_plan').value == 'silver') {
        planTotalAmount = 13000000;
        document.getElementById('planTotalAmount'). innerHTML = '13.000.000';
      }else if (document.getElementById('service_plan').value == 'gold') {
        planTotalAmount = 16830000;
        document.getElementById('planTotalAmount'). innerHTML = '16.830.000';
      }else if (document.getElementById('service_plan').value == 'platinum') {
        planTotalAmount = 20064000;
        document.getElementById('planTotalAmount'). innerHTML = '20.064.000';
      }else if (document.getElementById('service_plan').value == 'platinum+') {
        planTotalAmount = 21900000;
        document.getElementById('planTotalAmount'). innerHTML = '21.900.000';
      }
    }else {
      planTotalAmount = 0;
      document.getElementById('planTotalAmount'). innerHTML = '0';
    }
    vat = planTotalAmount * 10 / 100;
    finalAmountDue = planTotalAmount + vat;

    const formatter = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0
    })

    document.getElementById('vat'). innerHTML = formatter.format(vat);
    document.getElementById('finalAmountDue'). innerHTML = formatter.format(finalAmountDue);
    document.getElementById('price').value = finalAmountDue;

  });

</script>
		<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <!--<script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>-->

    </body>
</html>
