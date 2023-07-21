<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vOffice Malaysia</title>
<link href="http://fonts.googleapis.com/css?family=Lato:300,400%7Carial:100,400,300,500,600,700%7COpen+Sans:400,500,600" rel="stylesheet" type="text/css">
</head>

<body style="background:#f0f0f0">
<div style="width:700px; margin:0 auto;">
<!-- -->

<table cellspacing="0" cellpadding="0">
<tr style="background-color: #ffffff;">
	<td style="padding:20px; border-bottom:1px solid #e2e2e2;">
    <img src="http://voffice.com.my/img/logo-dark.png" alt="vOffice" width="100" height="47"/>
    </td>
    <td style="padding:20px; border-bottom:1px solid #e2e2e2;" align="right">
    <a href="https://www.facebook.com/voffice.com.my/" target="_blank"><img src="http://www.voffice.com.my/img/icon-facebook.png" alt="vOffice" width="20px" height="20px"></a>
    
    <a href="https://twitter.com/vofficecorp" target="_blank"><img src="http://www.voffice.com.my/img/icon-twitter.png" alt="vOffice" width="20px" height="20px"></a>
    </td>
</tr>

<tr background="https://voffice.com.my/newsletter/bg-header.jpg">
<td colspan="2" style="padding: 40px 50px;border-bottom:1px solid #e2e2e2;" align="center" valign="middle">
	<p style="font-size:36px;font-family:arial;color:#fff;margin-bottom:0;">Hello <?=$firstname?>! </p>
    <p style="font-size:26px;font-family:arial;color:#fff;margin-bottom:20px;">Welcome to vOffice.</p>
   
</td>
</tr>

<tr style="background:#fff;">
<td colspan="2" style="padding: 30px 50px;border-bottom:1px solid #e2e2e2;" align="center" valign="middle">
 <p style="font-size: 18px;line-height:130%;font-family:arial;color:#898989;margin-bottom:30px;">Below is the details of your order</p>
<p style="font-size:18px;font-family:arial;color:#cb0000;font-weight:bold;margin-bottom:10px;text-transform:uppercase;letter-spacing:.1em">Personal Details</p>
    
<table width="100%" border="0" cellpadding="3" cellspacing="0" style="border:1px solid #e2e2e2;padding:20px">
  <tr>
    <td width="30%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">
    	Name
    	</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span></td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;">
        <?=$_GET[firstname]." ".$_GET[lastname]?>
        </span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">
        Company
        </span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;">
        <?=$companyname?>
        </span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">
        Address
        </span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;">
        <?=$address?>
        </span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">City</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$city?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">State</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$state?></span>
   	</td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Country</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$country?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Zip</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$zip?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Phone</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$phone?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Email</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><a href="mailto:<?=$email?>" target="_blank" style="text-decoration: none; "><?=$email?></a></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Client IP</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$_SERVER['REMOTE_ADDR']?></span>
    </td>
  </tr>
    </table>
    
  <p style="font-size:18px;font-family:arial;color:#cb0000;font-weight:bold;margin-bottom:10px;text-transform:uppercase;letter-spacing:.1em">Payment Details</p>
    
  <table width="100%" border="0" cellpadding="3" cellspacing="0" style="border:1px solid #e2e2e2;padding:20px">
  <tr>
    <td width="30%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">Payment Type</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$_POST["payment"]?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Location</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$location?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Plan</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$in_plan?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Term</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$in_term?> month(s)</span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Currency Type</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$curencytype?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Amount</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td align="left">
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$ff_tot?></span>
    </td>
  </tr>
  <tr>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;">Coupon Code</span>
    </td>
    <td align="center" width="5%">
    	<span style="font-size:16px;font-family:arial;color:#575757;">:</span>
    </td>
    <td>
    	<span style="font-size:16px;font-family:arial;color:#575757;"><?=$coupon?></span>
    </td>
  </tr>
    </table>

</td>
</tr>

<tr style="background:#f8f8f8;">
<td colspan="2" style="padding: 30px 50px;border-bottom:1px solid #e2e2e2;" align="left" valign="middle">
	<p style="font-size:16px;font-family:arial;color:#3b3b3b;font-weight:bold;margin-bottom:0;text-transform:uppercase;letter-spacing:.1em">Serviced Office with all the necessities</p>
    <p style="font-size: 14px;line-height:130%;font-family:arial;color:#898989;margin-bottom:30px;">We offer you the opportunity of working in the best professional yet friendly environment for you and your people and all you have to do is focus on your business and let us worry about the rest.</p>


<a href="http://voffice.com.my/serviced-office-malaysia.php" style="text-decoration: none; margin-bottom:20px;"><span style="-webkit-border-radius: 3;
  -moz-border-radius: 3;
  border-radius: 3px;
  font-family: Arial;
  color: #ffffff;
  font-size: 16px;
  background: #cb0000;
  padding: 10px 20px 10px 20px;">Start Exploring</span></a>
</td>
</tr>

<tr style="background-color: #fff;">
	<td style="padding:20px 50px;" width="65%">
    
   <p style="font-size: 11px;line-height:120%;font-family:arial;color:#575757;">Since 2003. Virtual Office Malaysia (vOffice) has served over 22,000 businesses and available in over 42 locations. Virtual Office Malaysia enable businesses to scale fast and operate leanly. For more information about virtual office Malaysia, please call us at <b>+603 2788 3555</b> or email us at <b>cs@voffice.com.my</b></p>
    </td>
    <td style="padding:20px 50px;" align="center">
    <img src="http://voffice.com.my/img/logo-dark.png" alt="vOffice" width="100" height="47"/>
    </td>
</tr>
</table>
<p>&nbsp;</p>
</div>
</body>
</html>
