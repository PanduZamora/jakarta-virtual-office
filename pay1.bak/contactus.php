<?php

session_name('fxpay');

session_start();

include "locale.php";

	if($_POST[submit])

	{

		if ($_SESSION["code"]== $_POST['verify'])

		{

			$name = $_POST["name"];

			$telephone = $_POST["telephone"];

			$email = $_POST["email"];

			$message = $_POST["message"];

			$verify = $_POST["verify"];

			$dept = $_POST["dept"];

			$ip = $_SERVER['REMOTE_ADDR'];

			$toaddy = $dept."@flexiesolutions.com";

			$to      = $toaddy;

			$subject = "Enquiry Message From Flexi e-Solutions - FlexiPay";

			$message = "Enquiry Message



			NAME      : ".$name."

			TELEPHONE : ".$telephone."

			EMAIL     : ".$email."

			MESSAGE   : ".$message."

			VERIFY   : ".$verify."

			IP Address   : ".$ip."

			* Email message from contact page!";

					$headers = 'From: '.$email;

					mail($to, $subject, $message, $headers);

					//mail($to, $subject, $message);

					echo "<script>alert(\"Your enquiry message has been send!\")</script>";

		}

		else

		{

					echo "<script>alert(\"Please enter the correct Verification Code!\")</script>";

		}

		$code=mt_rand(1000,9999);		// Code with digits

		$_SESSION["code"]=$code;

	}

	else

	{

		$code=mt_rand(1000,9999);		// Code with digits

		$_SESSION["code"]=$code;

	}

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<TITLE>Flexi e-Solutions - Contact Us Pge :: We produdly provde Web Hosting Australia, Dedicated Server Hosting, VPS Hosting, cPanel Semi Dedicated Hosting, Web Design, Domain Registration, Teamspeak Hosting, Self Manage Servers, Shopping Cart | Flexihostings.net.au</TITLE>

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

<table width="70%" height="100%" border="0" align="center" cellspacing="0">

  <tr> 

    <td width="64%" height="86" valign="top"><img src="images/toplogo.gif" width="649" height="86"></td>

    <td width="36%">

	<div id="leftbar">

	    <table width="200" border="0" align="right" cellpadding="0" cellspacing="0" class="menulink">

          <tr> 

            <td><a href="index.php?dis=contact">Contact Us</a></td>

          </tr>

          <tr> 

            <td><a href="https://flexisupport.com/help/" target="_blank">Helpdesk</a></td>

          </tr>

        </table>

      </div>

	  </td>

  </tr>

  <tr> 

    <td colspan="2" valign="top">

     <table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

  <tr> 

    <td colspan="2" valign="top">

	    <table width="90%" border="0" align="center">

              <tr>

                <td>&nbsp;</td>

              </tr>

              <tr> 

                <td><p class="t02">Contacting Flexi e-Solutions</p>

                  <p>We're pleased that you've click on this page and we hope 

                    you have some questions for us. Our team is all geared to 

                    answer them. You may find our official contact information 

                    around the world below. Feel free to contact us through the 

                    region / country closest to you.</p></td>

              </tr>

              <tr> 

                <td>&nbsp;</td>

              </tr>

              <tr> 

                <td><font class="fr">Contact Form</font> <br>

                  Please fill up the below form if you have any comment or enquiry 

                  about our services. Thank you. 

                  <form name="contact" method="post" action="contactus.php"  onsubmit="return validate(this)">

                    <table width="95%" border="0" align="center" cellpadding="1" cellspacing="0">

                      <tr> 

                        <td width="23%">&nbsp;</td>

                        <td colspan="3"> 

                          <?php

			  if ($failcode==1)

			  {

			  	echo "Wrong Verification Code.";

			  }

			  ?>

                        </td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td>Your Name:</td>

                        <td width="16%"><input type="text" name="name" class="form"></td>

                        <td width="23%">&nbsp;</td>

                        <td width="38%">&nbsp;</td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td>Your daytime Phone No:&nbsp;&nbsp;</td>

                        <td><input type="text" name="telephone" class="form"></td>

                        <td><div align="right">Your Email:&nbsp;&nbsp;</div></td>

                        <td><input type="text" name="email" class="form"></td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td valign="top">Department</td>

                        <td colspan="3" valign="top"><label> 

                          <select name="dept" id="dept" class="form">

                            <option value="sales">Sales</option>

                            <option value="cs">Customer Service</option>

                            <option value="billing">Billing</option>

                            <option value="abuse">Abuse</option>

                            <option value="legal-dept">Legal</option>

                            <option value="pr">Press</option>

                          </select>

                          </label></td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td valign="top">&nbsp;</td>

                        <td colspan="3" valign="top">&nbsp;</td>

                      </tr>

                      <!--<tr> 

			<td>&nbsp;</td>

			<td>Please enter the code above</td>

			<td><input name="textfield4" type="text" class="form" size="5" maxlength="5"></td>

			<td valign="top"><input type="submit" name="submit" value="SUBMIT" class="formbutton"></td>

		  </tr>-->

                      <tr> 

                        <td valign="top">Your Message / Enquiry / Suggestions 

                          / Comments</td>

                        <td colspan="3" valign="bottom"><textarea name="message" cols="75" rows="5" class="form"></textarea></td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td height="33">Verification Code </td>

                        <td height="33" colspan="3"><table width="54%" border="0" class="formbutton">

                            <tr> 

                              <td><div align="left"> 

                                  <?php 

						$fpath = "turing.php";

						echo "<img src=\"$fpath\">"; 

					  ?>

                                </div></td>

                            </tr>

                          </table></td>

                      </tr>

                      <tr bgcolor="#fafafa"> 

                        <td>Enter above verification code</td>

                        <td colspan="3"><input type="text" name="verify" class="form" ></td>

                      </tr>

                      <tr> 

                        <td>&nbsp;</td>

                        <td colspan="3">&nbsp;</td>

                      </tr>

                      <tr> 

                        <td>&nbsp;</td>

                        <td colspan="3"><input type="submit" name="submit" value="SUBMIT" class="formbutton"></td>

                      </tr>

                    </table>

                  </form></td>

              </tr>

              <tr> 

                <td class="L01">&nbsp;</td>

              </tr>

            </table>

      </td>

  </tr>

  <tr> 

    <td valign="top"><div class="content"> <br>

              <table width="500" border="0" align="center" cellpadding="3" cellspacing="0" id="blue">

                <tr> 

                  <td colspan="2" class="L06"><strong>Corporate Office</strong></td>

                </tr>

                <tr> 

                  <td width="39%" valign="top" >Australia:</td>

                  <td width="61%">S.2.1.10<br>

                    343 Lt Collins St, Melbourne, Victoria, 3000</td>

                </tr>

                <tr> 

                  <td valign="top" >&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr> 

                  <td colspan="2" class="L06"><strong>Customer Contact Center 

                    Phone Numbers</strong></td>

                </tr>

                <tr> 

                  <td valign="top" ><img src="images/my.png" width="16" height="11"> 

                    Malaysia / Asia:</td>

                  <td>(60) 03 6207 1500</td>

                </tr>

                <tr bgcolor="#eefaff"> 

                  <td ><img src="images/au.png" width="16" height="11"> Australia:</td>

                  <td> (61) 03 9018 3098</td>

                </tr>

                <tr> 

                  <td > <img src="images/nz.png" width="16" height="11"> New Zealand:</td>

                  <td>(64) 9887 0393 </td>

                </tr>

                <tr> 

                  <td bgcolor="#eefaff"> <img src="images/us.png" width="16" height="11"> 

                    USA: </td>

                  <td bgcolor="#eefaff">(1) 567 252 9312</td>

                </tr>

                <tr > 

                  <td ><img src="images/gb.png" width="16" height="11"> U.K. / 

                    Europe:</td>

                  <td><p>(44) 020 3384 2149</p></td>

                </tr>

                <tr> 

                  <td >&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr> 

                  <td colspan="2" class="L06"><strong>Technical Support Centers 

                    Team Lead Contacts</strong></td>

                </tr>

                <tr> 

                  <td valign="top" >Support Center 1 - <img src="images/au.png" width="16" height="11"> 

                    Australia:</td>

                  <td>sc-au [at] flexihostings.net</td>

                </tr>

                <tr bgcolor="#eefaff"> 

                  <td valign="top" >Support Center 2 - <img src="images/my.png" width="16" height="11"> 

                    Malaysia:</td>

                  <td>sc-my [at] flexihostings.net</td>

                </tr>

                <tr> 

                  <td valign="top" >Support Center 3 - <img src="images/in.png" width="16" height="11"> 

                    India :</td>

                  <td>sc-in [at] flexihostings.net</td>

                </tr>

                <tr> 

                  <td valign="top" >&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr> 

                  <td colspan="2" class="L06"><strong>Escalation Procedures</strong></td>

                </tr>

                <tr> 

                  <td colspan="2" valign="top">If you are not happy with how your 

                    issue has been handled or if you have a important comment 

                    that you believe requires the management attention, you may 

                    escalate it to our executive management team at the following 

                    email address: contact-management [at] flexihostings.net.</td>

                </tr>

                <tr> 

                  <td valign="top" >&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

                <tr> 

                  <td colspan="2" class="L06"><strong>Primary Snail Mail / Postal 

                    Address</strong></td>

                </tr>

                <tr> 

                  <td valign="top" ><img src="images/au.png" width="16" height="11"> 

                    Australia:</td>

                  <td> PO Box 8044<br>

                    Camberwell North 3124, Victoria</td>

                </tr>

                <tr bgcolor="#eefaff"> 

                  <td valign="top" ><img src="images/my.png" width="16" height="11"> 

                    Malaysia:</td>

                  <td> M-3-19 Plaza Damas,<br>

                    Sri Hartamas, 50480 Kuala Lumpur</td>

                </tr>

                <tr> 

                  <td valign="top" >&nbsp;</td>

                  <td>&nbsp;</td>

                </tr>

              </table>

            </div></td>







    <td width="300" valign="top">







        <table width="254" border="0" cellpadding="0" cellspacing="0" id="Table_01">







          <tr> 







            <td background="http://flexihostings.us/web/images//office.gif" width="273" height="40" alt=""></td>







          </tr>







          <tr> 







            <td background="http://flexihostings.us/web/images//assist_02.gif" width="273" height="20" alt=""> 







              <div class="info"> 







                    <p class="L09"><strong>ASIA</strong></p>







                <p>Malaysia (GMT+8)<br>







                  M-3-19 Plaza Damas,<br>







                  Sri Hartamas, Kuala Lumpur, 50480<br>







                  Tel: +603 6207 1500<br>







                  Fax: +603 6207 150x</p>







                    <p class="L09"><strong>OCEANIA</strong></p>







                <p>Australia (GMT +11)<br>







                  343 Lt Collins St<br>







                  Melbourne, Victoria, 3000<br>







                  Tel: +613 9014 0938<br>







                  Fax: +613 8764 4937</p>







                    <p class="L09"><strong>AMERICA</strong></p>







                    <p>1600 Woodlands Drive<br>

                      Suite 200<br>

                      Maumee, Ohio 43537<br>

                      United States<br>

                      Tel: +1 567 252 9312<br>

                      Fax: +1 484 206 9827</p>







              </div></td>







          </tr>







          <tr> 







            <td background="http://flexihostings.us/web/images//assist_03.gif" width="273" height="9" alt=""></td>







          </tr>







        </table><br>







        <table width="254" border="0" cellpadding="0" cellspacing="0" id="Table_01">







          <tr> 







            <td background="http://flexihostings.us/web/images//payment02.gif" width="273" height="40" alt=""></td>







          </tr>







          <tr> 







            <td background="http://flexihostings.us/web/images//assist_02.gif" width="273" height="20" alt="">







                <div align="center"><img src="images/cards.gif" width="218" height="46"> 







                </div><div class="info"> 







                    <ul class="infolist">

                      <li>Credit cards (Visa, Mastercard, American Express, Bankcard, 

                        Diners)</li>

                      <li> Paypal <a href="#" onClick="javascript:window.open('https://www.paypal.com/cgi-bin/webscr?cmd=xpt/Marketing/popup/OLCWhatIsPayPal-outside','olcwhatispaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=400, height=350');"><img  src="https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif" border="0" alt="Acceptance Mark"></a></li>

                      <li> Direct deposit / Telegraphic Transfer</li>

                      <li> Cheque, Cashier Cheque, Money Order </li>

                    </ul>







              </div></td>







          </tr>







          <tr> 







            <td background="http://flexihostings.us/web/images//assist_03.gif" width="273" height="9" alt=""></td>







          </tr>







        </table>

      <p>&nbsp;</p></td>

  </tr>

</table>

      </td>

  </tr>

  <tr valign="top"> 

    <td colspan="2">

        <?php include("footer.html")?>

      </td>

  </tr>

</table>

</body>

</html>