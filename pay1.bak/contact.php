<?php
session_name('fxpay');
session_start();
include "locale.php";

/*

	if (isset($_COOKIE[session_name()])) {
	   unset($_COOKIE[session_name()]);

	}
	srand(time());
    for ($i=0; $i < 6; $i++)
    {
      $random = (rand()%6);
      $slot[$i] = $random;
    }


	$verisign = $slot[0].$slot[1].$slot[2].$slot[3].$slot[4].$slot[5];
    setcookie('secure', $verisign);
*/	 

	

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

			$toaddy = $dept."@flexihostings.net";

			$to      = $toaddy;
			$subject = "Enquiry Message From Flexihostings - ".ZONE;
			$message = "Enquiry Message

			NAME      : ".$name."
			TELEPHONE : ".$telephone."
			EMAIL     : ".$email."
			MESSAGE   : ".$message."
			VERIFY   : ".$verify."
			IP Address   : ".$ip."

			* Email message from contact page!";
			
			$headers = 'From: customers@flexihostings.net';

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

<!DOCTYPE html>
<!-- saved from url=(0020) -->
<html class="cufon-active cufon-ready"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<TITLE>Flexi e-Solutions - FlexiPay | Receptionist.net.au | Virtua-Office.com.au | Receptionist.com.my | FlexiOffice.com.my</TITLE>
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
<style type="text/css">cufon{text-indent:0!important;}@media screen,projection{cufon{display:inline!important;display:inline-block!important;position:relative!important;vertical-align:middle!important;font-size:1px!important;line-height:1px!important;}cufon cufontext{display:-moz-inline-box!important;display:inline-block!important;width:0!important;height:0!important;overflow:hidden!important;text-indent:-10000in!important;}cufon canvas{position:relative!important;}}@media print{cufon{padding:0!important;}cufon canvas{display:none!important;}}</style>

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
          <td height="21">&nbsp;</td>
          <td><a href="https://flexisupport.com/help/" target="_blank"> </a></td>
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
          
    <h2>contacting voffice.com.my</h2>
    <p>We're pleased that you've click on this page and we hope you have some 
      questions for us. Our team is all geared to answer them. You may find our 
      official contact information around the world below. Feel free to contact 
      us through the region / country closest to you.</p>
    <p>&nbsp;</p>

    <div class="col1">
<form name="signup" method="post" action="index.php?dis=signup" onsubmit="return validateform()">
        <div class="rndbox3"> 
		  <p><strong>Contact Form</strong><br>
            Please fill up the below form if you have any comment or enquiry about 
            our services. Thank you.</p>
          <p>
            <?php
			  if ($failcode==1)
			  {
			  	echo "Wrong Verification Code.";
			  }
			  ?>
          </p>
          <table border="0" width="98%">
            <tbody>
              <tr> 
                <td width="40%"  valign="top" >Your Name:</td>
                <td> <input type="text" name="name" class="form_txt" size="30"></td>
              </tr>
              <tr> 
                <td  valign="top">Your daytime Phone No:&nbsp;</td>
                <td><input type="text" name="telephone" class="form_txt" size="30"></td>
              </tr>
              <tr> 
                <td  valign="top">Your Email:</td>
                <td><input type="text" name="email" class="form_txt" size="30"></td>
              </tr>
              <tr> 
                <td  valign="top">Department:</td>
                <td><select name="dept" id="dept" class="form_txt">
                    <option value="sales">Sales</option>
                    <option value="cs">Customer Service</option>
                    <option value="billing">Billing</option>
                    <option value="abuse">Abuse</option>
                    <option value="legal-dept">Legal</option>
                    <option value="pr">Press</option>
                  </select></td>
              </tr>
              <tr> 
                <td  valign="top">Your Message / Enquiry / Suggestions / Comments</td>
                <td> <textarea name="message" rows="5" class="form_txt"></textarea></td>
              </tr>
              <tr> 
                <td  valign="top">Verification Code </td>
                <td> 
                  <?php 
						$fpath = "turing.php";
						echo "<img src=\"$fpath\">"; 
					  ?>
                </td>
              </tr>
              <tr> 
                <td  valign="top">Enter above verification code</td>
                <td><input type="text" name="verify" class="form_txt" size="30"></td>
              </tr>
            </tbody>
          </table>  <table border="0" width="98%" class="noborder">
            <tbody>
              <tr> 
                <td width="40%" height="52"  valign="top">&nbsp;</td>
                <td> <input type="image" name="submit" id="submit" value=" " class="submit"> 
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      
</form>
	 <!--div class="rndbox3">
	    <table width="95%" border="0" align="center" cellpadding="3" cellspacing="0" id="blue">
          <tr> 
            <td colspan="2" ><strong>Corporate Office</strong></td>
          </tr>
          <tr> 
            <td width="50%" valign="top" ><img src="images/au.png" width="16" height="11"> 
              Australia:</td>
            <td width="50%">S.5.04, 365 Lt Collins St,<br>Melbourne, Victoria, 3000</td>
          </tr>
          <tr valign="bottom"> 
            <td height="50" colspan="2" ><strong>Customer Contact Center Phone 
              Numbers</strong></td>
          </tr>
          <tr> 
            <td valign="top" ><img src="images/my.png" width="16" height="11"> 
              Malaysia / Asia:</td>
            <td>(60) 03 6207 1500</td>
          </tr>
          <tr> 
            <td ><img src="images/au.png" width="16" height="11"> Australia:</td>
            <td> (61) 03 9018 3098</td>
          </tr>
          <tr> 
            <td > <img src="images/nz.png" width="16" height="11"> New Zealand:</td>
            <td>(64) 9887 0393 </td>
          </tr>
          <tr> 
            <td> <img src="images/us.png" width="16" height="11"> USA: </td>
            <td>+1.43847379292</td>
          </tr>
          <tr > 
            <td ><img src="images/gb.png" width="16" height="11"> U.K. / Europe:</td>
            <td>(44) 020 3384 2149</td>
          </tr>
          <tr valign="bottom"> 
            <td height="50" colspan="2" ><strong>Technical Support Centers Team 
              Lead Contacts</strong></td>
          </tr>
          <tr> 
            <td valign="top" >Support Center 1 - <img src="images/au.png" width="16" height="11"> 
              Australia:</td>
            <td>sc-au [at] flexihostings.net</td>
          </tr>
          <tr> 
            <td valign="top" >Support Center 2 - <img src="images/my.png" width="16" height="11"> 
              Malaysia:</td>
            <td>sc-my [at] flexihostings.net</td>
          </tr>
          <tr> 
            <td valign="top" >Support Center 3 - <img src="images/in.png" width="16" height="11"> 
              India :</td>
            <td>sc-in [at] flexihostings.net</td>
          </tr>
          <tr valign="bottom"> 
            <td height="50" colspan="2" ><strong>Escalation Procedures</strong></td>
          </tr>
          <tr> 
            <td colspan="2" valign="top">If you are not happy with how your issue 
              has been handled or if you have a important comment that you believe 
              requires the management attention, you may escalate it to our executive 
              management team at the following email address: contact-management 
              [at] flexihostings.net</a>.</td>
          </tr>
          <tr valign="bottom"> 
            <td height="50" colspan="2" ><strong>Primary Snail Mail / Postal Address</strong></td>
          </tr>
          <tr> 
            <td valign="top" ><img src="images/au.png" width="16" height="11"> 
              Australia:</td>
            <td> PO Box 8044<br>
              Camberwell North 3124, Victoria</td>
          </tr>
          <tr> 
            <td valign="top" ><img src="images/my.png" width="16" height="11"> 
              Malaysia:</td>
            <td> M-3-19 Plaza Damas,<br>
              Sri Hartamas, 50480 Kuala Lumpur</td>
          </tr>
          <tr valign="bottom"> 
            <td height="50" colspan="2" ><strong>Data Centers / NOC</strong></td>
          </tr>
          <tr> 
            <td rowspan="3" valign="top" ><img src="images/us.png" width="16" height="11"> 
              USA:<br>
              (Seattle, Dallas, Washington D.C.)</td>
            <td>Seattle Test ping IP: 67.228.93.5.</td>
          </tr>
          <tr> 
            <td>Dallas Test ping IP: 67.228.55.27</td>
          </tr>
          <tr> 
            <td>Washington D.C. Test ping IP: 208.43.99.196&nbsp;</td>
          </tr>
          <tr> 
            <td valign="top" ><img src="images/sg.png" width="16" height="11"> 
              Singapore:<br>
              (International Business Park)</td>
            <td>Test ping IP: 203.211.142.85</td>
          </tr>
          <tr> 
            <td valign="top" ><img src="images/au.png" width="16" height="11"> 
              Australia:<br>
              (Queensland)</td>
            <td>Test ping IP: 202.125.47.131</td>
          </tr>
          <tr> 
            <td valign="top" > <img src="images/dk.png" width="16" height="11"> 
              Denmark:<br>
              (Copeheagan)</td>
            <td>Test ping IP: 82.103.143.2</td>
          </tr>
        </table>
	 </div-->
    </div>
	
    <div class="col2"> 

        <p><strong>SECURE ONLINE PAYMENT PROCESSING SYSTEM FOR</strong> </p>
        <div class="divider"> 
          <p><strong><img src="https://virtual-office.com.my/pay/images/virtual-office.png" width="167" height="35"></strong></p>
          <p><strong>Subang Jaya, MALAYSIA</strong><br>
          A-5-10 Empire Tower, SS16/1, Subang Jaya<br>
            47500 Selangor, Malaysia</p>
          <p> <img src="http://www.virtual-office.com.my/images/icon-phone.png"> 
            +6(03) 5021 8200<br>
            <img src="http://www.virtual-office.com.my/images/icon-fax.png"> +6(03) 
            5021 8201<br>
            <img src="http://www.virtual-office.com.my/images/icon-email.png"> 
            cs @ Virtual-Office.com.my</p>
          <p>&nbsp;</p>
          <p><img src="https://virtual-office.com.my/pay/images/vOffice.png" width="116" height="40"></p>
          <p><strong>Mont Kiara, MALAYSIA</strong><br>
            B-5-8 Plaza Mont Kiara, Mont Kiara<br>
            Kuala Lumpur, Malaysia</p>
          <p> <img src="http://www.virtual-office.com.my/images/icon-phone.png"> 
            +6(03) 2788 3555<br>
            <img src="http://www.virtual-office.com.my/images/icon-fax.png"> +6(03) 
            2788 3666<br>
            <img src="http://www.virtual-office.com.my/images/icon-email.png"> 
            cs @ vOffice.com.my</p>
        </div>
        <p>vOffice.com.my is a brand of Flexi e-Solutions Pty Ltd. We are a privately 
          owned debt free company originated from Victoria, Australia with networks 
          that span across Australia, New Zealand, USA, Belgium, South Africa, 
          Middle East, Malaysia, Singapore and Indonesia.</p>
        <p>We are constantly on the look out for the best technology commercially 
          feasible out there, therefore we can offer you the best possible solution 
          at the best possible price. </p>
        <p>WE PROUDLY ACCEPT:</p>
        <p> <img src="images/vo-accept-visa.png"/> <img src="images/vo-accept-mastercard.png"/> 
          <img src="images/vo-accept-amex.png"/> <img src="images/vo-accept-paypal.png"/> 
          <img src="images/vo-accept-m2u.png"/> </p>
        <p>&nbsp;</p>
        <div class="divider"> 
          <p>Your connection to this page is encrypted with 256 bit encryption</p>
        </div>

      </div>
    <div class="clear"></div>
  </div>
</div>
<div class="clear"></div>
<div id="footer_wrap">
  <div id="footer">2011&copy; <a href="http://www.virtual-office.com.my/">Virtual-Office.com.my</a> 
    - Virtual Office @ Empire Tower Subang. All Rights Reserved. &nbsp;Search 
    Engine Optimized and Hosted by <a href="http://flexihostings.net.au" arget="_blank">Flexihostings.net.au</a></div>
</div>

<script type="text/javascript" src="jquery.js"></script>
	<!--script type="text/javascript" src="jquery.address.js"></script>
	<script type="text/javascript" src="jquery.scrollto.js"></script-->

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