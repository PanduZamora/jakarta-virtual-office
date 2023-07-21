<?php
include_once( './loginfunc.php' );
include "../include/config.php";

require "invoiceClass.php";
require "clientClass.php";
require "helperClass.php";
require "planClass.php";

$invfunc = new invoiceClass();
$clientfunc = new clientClass();
$helperfunc = new helperClass();
$planfunc = new planClass();

$void =  $clientfunc->portal_getClientVOID($_SESSION["mid"]);
$get_tz = $helperfunc->getVOTimeZone($void);		
date_default_timezone_set($get_tz);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0040)Index/index -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<title>vOffice® &#8212; Customer Portal Home</title>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="text.css">
<link rel="stylesheet" type="text/css" href="960.css">
<link rel="stylesheet" type="text/css" href="master.css" media="screen">
<link rel="stylesheet" type="text/css" href="theme.css" media="screen"> 
<link rel="stylesheet" type="text/css" href="jcarousel-skin-tango.css"> 

<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script language="JavaScript" src="jquery.jcarousel.min.js" type="text/javascript"></script>
<script language="JavaScript" src="json.js" type="text/javascript"></script>
<script language="JavaScript" src="jquery.bgiframe.min.js" type="text/javascript"></script>

</head>
<body>
    <div id="container" class="container_12">
      
  <div id="header"> 
    <!--div class="grid_3"><a href="http://www.softlayer.com/" class="underline logo">HOME</a></div-->
    <div class="grid_9" id="toplinks"> 
      <ul>
        <li id="top_home"><a href="index.php">home</a></li>
        <li id="top_new"><a href="" target="">Special Offer</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
      <div id="subheader">
        <div class="grid_3" id="userinfo">
          <div class="box">
            <h1><a href="index.php" title="Customer Portal Home" class="underline"><span class="lrg18_grey">MyvOffice </span><span class="lrg18_theme xl22_theme">home</span></a></h1>
            <dl>
              <dt>your client id</dt>
              <dd><?=$_SESSION["mid"];?></dd>
              <dt>credit balance</dt>
         	  <dd>$50</dd>
         	  <dt>conference room</dt>
              <dd>10 hour(s)</dd>
              <dt>day office</dt>
              <dd>0 day</dd>
			  <dt>hot desking</dt>
              <dd>4 hour(s)</dd>
             </dl>
            <div class="clear"></div>
            <div class="accountLinks">
             <div class="editLink"> </div>
             <div class="logoutLink"><a href="logout.php" class="linkN">Logout</a></div>
            </div>
          </div>
        </div>
        <div class="grid_6" id="header_sl_ad">
            <a href="http://voffice.com.my/refer-a-friend.html" target="_blank"><img src="images/spreadtheword.jpg" title="Refer a friend &amp; get rewarded!" border="0"></a>
        <a href="http://voffice.com.my/feedback/" target="_blank"><img src="images/feedback.jpg" title="Let Us Hear From You!" border="0"></a>        </div>
        <div class="grid_3" id="contact">
          <div class="box">
            <dl>
              <dt>Contact Sales</dt>
              
          <dd>Toll Free: +603 2788 3555</dd>
             <dd class="chatLink"><a id="_lpChatBtn1" target="chat12703439" href="" onclick="" class="underline linkN">sales chat</a>
</dd>
              
          <dd class="chatMail"><a href="mailto:sales@voffice.com.my" class="underline linkN">sales@voffice.com.my</a></dd>
              <dd>&nbsp;</dd>
              <dd>&nbsp;</dd>
              
          <dt>Contact Customer Service</dt>
              
          <dd>Tel No: +603 5021 9191</dd>
		  <dd class="chatLink"><a id="" target="" href="" class="underline linkN">support 
            chat</a> </dd>
              
          <dd class="chatMail"><a href="mailto:cs@voffice.com.my" class="underline linkN">cs@voffice.com.my</a></dd>
		  <dd>&nbsp;</dd>
           <dd>&nbsp;</dd>
          </dl>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <!-- End Header -->

<div id="main_menu_container">
    <ul id="main_menu">
      <li id="menu_tree_admin" class=" rootNode"><a class="rootLink" href="Administrative/index"><img id="group_image_admin" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_admin&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_admin_off.jpg" alt="admin" border="0"></a> 
        <ul id="menu_admin">
          <div id="menu_div_admin" style="display: inline;"> 
            <li><a class="subMenu" href="index.php?dis=vo_info" alt="General Info">General Info</a></li>
            <li><a class="subMenu" href="index.php?dis=admin_subscribe" alt="Subscribe Services">Subscribe Services</a></li>
            <li class="oddRow"><a class="subMenu" href="index.php?dis=admin_invoices" alt="Invoices">Invoices</a></li>
            <li><a class="subMenu" href="index.php?dis=admin_cancel" alt="Cancel Services">Cancel Services</a></li>
            <li><a class="subMenu" href="index.php?dis=admin_payment" alt="How To Pay">How To Pay</a></li>
          </div>
        </ul>
      </li>
      <li id="menu_tree_vo" class=" rootNode"><a class="rootLink" href="VO/addTicket"><img id="group_image_vo" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_vo&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_vo_off.jpg" alt="virtual office" border="0"></a> 
        <ul id="menu_vo">
          <div id="menu_div_vo" style="display: inline;"> 
            <li><a class="subMenu" href="index.php?dis=vo_mails" alt="Mails">Mails</a></li>
            <li class="oddRow"><a class="subMenu" href="index.php?dis=vo_calls" alt="Phone Calls">Phone Calls</a></li>
            <li class="oddRow"><a class="subMenu" href="index.php?dis=vo_facilities" alt="Facilities">Facilities</a></li>
          </div>
        </ul>
      </li>
	  <li id="menu_tree_fos" class=" rootNode"><a class="rootLink" href="index.php?dis=fos"><img id="group_image_fos" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_fos&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_fos_off.jpg" alt="flexi serviced office" border="0"></a> 
        <ul id="menu_fos">
          <div id="menu_div_fos" style="display: inline;"> 
		    <li>Coming Soon...</li>
            <!--li><a class="subMenu" href="FFax/account" alt="Account Details">Account Details</a></li>
            <li class="oddRow"><a class="subMenu" href="FFax/incoming" alt="Incoming Fax Service">Incoming Fax Service</a></li>
            <li><a class="subMenu" href="FFax/outgoing" alt="Outgoing Fax Service">Outgoing Fax Service</a></li>
            <li class="oddRow"><a class="subMenu" href="FFax/report" alt="Usage Reports">Usage Reports</a></li>
            <li><a class="subMenu" href="FFax/refer" alt="Refer &amp; Earn">Refer &amp; Earn</a></li-->
          </div>
        </ul>
      </li>
      <li id="menu_tree_ffax" class=" rootNode"><a class="rootLink" href=""><img id="group_image_ffax" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_ffax&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_ffax_off.jpg" alt="flexifax" border="0"></a> 
        <ul id="menu_ffax">
          <div id="menu_div_ffax" style="display: inline;"> 
		    <li>Coming Soon...</li>
            <!--li><a class="subMenu" href="FFax/account" alt="Account Details">Account Details</a></li>
            <li class="oddRow"><a class="subMenu" href="FFax/incoming" alt="Incoming Fax Service">Incoming Fax Service</a></li>
            <li><a class="subMenu" href="FFax/outgoing" alt="Outgoing Fax Service">Outgoing Fax Service</a></li>
            <li class="oddRow"><a class="subMenu" href="FFax/report" alt="Usage Reports">Usage Reports</a></li>
            <li><a class="subMenu" href="FFax/refer" alt="Refer &amp; Earn">Refer &amp; Earn</a></li-->
          </div>
        </ul>
      </li>
      <li id="menu_tree_hosting" class=" rootNode"><a class="rootLink" href="Hardware/configuration"><img id="group_image_hosting" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_hosting&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_hosting_off.jpg" alt="hosting" border="0"></a> 
        <ul id="menu_hosting">
          <div id="menu_div_hosting" style="display: inline;"> 
            <li>Coming Soon...</li>
			<!--li><a class="subMenu" href="Hardware/reboot" alt="Reboot">Reboot</a></li>
            <li class="oddRow"><a class="subMenu" href="Hardware/configuration" alt="Configuration">Configuration</a></li>
            <li><a class="subMenu" href="Hardware/control" alt="Control">Control</a></li>
            <li class="oddRow"><a class="subMenu" href="Virtual/live" alt="Virtual Servers">Virtual 
              Servers</a></li>
            <li><a class="subMenu" href="Hardware/monitoring" alt="Monitoring">Monitoring</a></li>
            <li class="oddRow"><a class="subMenu" href="Hardware/osReloadHardware" alt="OS Reloads">OS 
              Reloads</a></li>
            <li><a class="subMenu" href="Hardware/rescueLayer" alt="RescueLayer">RescueLayer</a></li>
            <li class="oddRow"><a class="subMenu" href="Hardware/ipSearch" alt="IP Search">IP 
              Search</a></li-->
          </div>
        </ul>
      </li>
      <li id="menu_tree_teleconference" class=" rootNode"><a class="rootLink" href="Software/licenseManager"><img id="group_image_teleconference" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_teleconference&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_teleconf_off.jpg" alt="teleconference" border="0"></a> 
        <ul id="menu_teleconference">
          <div id="menu_div_teleconference" style="display: inline;"> 
            <li>Coming Soon...</li>
			<!--li><a class="subMenu" href="Software/licenseManager" alt="License Manager">License Manager</a></li>
            <li class="oddRow"><a class="subMenu" href="Software/cpanel" alt="cPanel">cPanel</a></li>
            <li><a class="subMenu" href="Software/plesk" alt="Plesk">Plesk</a></li>
            <li class="oddRow"><a class="subMenu" href="Software/helm" alt="Helm">Helm</a></li>
            <li><a class="subMenu" href="Software/urchin" alt="Urchin">Urchin</a></li>
            <li class="oddRow"><a class="subMenu" href="Software/quantastor" alt="QuantaStor">QuantaStor</a></li>
            <li><a class="subMenu" href="Software/getHyperVInfo" alt="Hyper-V">Hyper-V</a></li>
            <li class="oddRow"><a class="subMenu" href="Software/downloads" alt="Downloads">Downloads</a></li>
            <li><a class="subMenu" href="Software/driverInfo" alt="Drivers">Drivers</a></li-->
          </div>
        </ul>
      </li>
      <li id="menu_tree_1800" class=" rootNode"><a class="rootLink" href="CloudLayer/index"><img id="group_image_1800" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_1800&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_1800_off.jpg" alt="1800 toll free" border="0"></a> 
        <ul id="menu_1800">
          <div id="menu_div_1800" style="display: inline;"> 
            <li>Coming Soon...</li>
			<!--li><a class="subMenu" href="CloudLayer/computing" alt="Computing">Computing</a></li>
            <li class="oddRow"><a class="subMenu" href="CloudLayer/bareMetal" alt="Bare Metal Computing">Bare 
              Metal Computing</a></li>
            <li><a class="subMenu" href="CloudLayer/monitoring" alt="Monitoring">Monitoring</a></li>
            <li class="oddRow"><a class="subMenu" href="PrivateNetwork/storageLayer/HUB" alt="Storage">Storage</a></li>
            <li><a class="subMenu" href="CloudLayer/cdn" alt="Content Delivery Network">Content 
              Delivery Network</a></li>
            <li class="oddRow"><a class="subMenu" href="CloudLayer/osReloadInstance" alt="OS Reloads">OS 
              Reloads</a></li-->
          </div>
        </ul>
      </li>
	  <li id="menu_tree_support" class=" rootNode"><a class="rootLink" href="Support/addTicket"><img id="group_image_support" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_support&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_support_off.jpg" alt="support" border="0"></a> 
        <ul id="menu_support">
          <div id="menu_div_support" style="display: inline;"> 
            <li>Coming Soon...</li>
			<!--li><a class="subMenu" href="Hardware/reboot" alt="Reboot">Reboot</a></li>
            <li class="oddRow"><a class="subMenu" href="Support/tickets" alt="Tickets">Tickets</a></li>
            <li><a class="subMenu" href="Support/forums" alt="Forums">Forums</a></li>
            <li class="oddRow"><a class="subMenu" href="http://knowledgelayer.softlayer.com/" alt="KnowledgeLayer">KnowledgeLayer</a></li>
            <li><a class="subMenu" href="Support/tutorialsIndex" alt="Tutorials">Tutorials</a></li>
            <li class="oddRow"><a class="subMenu" href="Support/apiTutorial" alt="API">API</a></li>
            <li><a class="subMenu" href="Notification/viewRealTimeNotificationHistory" alt="Real-time Notification History">Real-time 
              Notification History</a></li-->
          </div>
        </ul>
      </li>
      <li id="menu_tree_sales" class=" rootNode"><a class="rootLink" href="Sales"><img id="group_image_sales" onmouseover="this.src = this.src.replace(&#39;_off&#39;, &#39;_on&#39;);" onmouseout="if (document.getElementById(&#39;menu_sales&#39;).style.display == &#39;none&#39;) { this.src = this.src.replace(&#39;_on&#39;, &#39;_off&#39;);}" src="images/button_sales_off.jpg" alt="sales" border="0"></a>
	  	<ul id="menu_sales">
		<div id="menu_div_sales" style="display: inline;">
		<li>Coming Soon...</li>
		<!--li><a class="subMenu" href="Sales/serverList" alt="Add Server">Add Server</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/orderComputingInstance" alt="Add Monthly Computing Instance">Add Monthly Computing Instance</a></li>
		<li><a class="subMenu" href="Sales/orderHourlyComputingInstance" alt="Add Hourly Computing Instance">Add Hourly Computing Instance</a></li>
		<li class="oddRow"><a class="subMenu" href="CloudLayer/buildYourOwnCloud" alt="Build Your Own Cloud">Build Your Own Cloud</a></li>
		<li><a class="subMenu" href="Sales/orderBareMetalInstance" alt="Add Monthly Bare Metal Instance">Add Monthly Bare Metal Instance</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/orderHourlyBareMetalInstance" alt="Add Hourly Bare Metal Instance">Add Hourly Bare Metal Instance</a></li>
		<li><a class="subMenu" href="Sales/index" alt="Add Other Service">Add Other Service</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/upgradeRequest" alt="Upgrades">Upgrades</a></li>
		<li><a class="subMenu" href="Security/hardwareFirewall" alt="Add Firewall">Add Firewall</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/orderAdditionalServices/nas" alt="Add NAS Storage">Add NAS Storage</a></li>
		<li><a class="subMenu" href="PrivateNetwork/backup" alt="Add Backup">Add Backup</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/orderAdditionalServices/subnet" alt="Add IP Addresses">Add IP Addresses</a></li>
		<li><a class="subMenu" href="Sales/addUpgradeTicket/Business%20Continuance%20Insurance%20(BCI)/7" alt="Add BCI">Add BCI</a></li>
		<li class="oddRow"><a class="subMenu" href="Sales/quoteSummary/nopaging/resetform" alt="View Quote Summary">View Quote Summary</a></li>
		<li><a class="subMenu" href="Administrative/cancelList" alt="Cancel Server">Cancel Server</a></li>
		<li class="oddRow"><a class="subMenu" href="Administrative/cancelServices" alt="Cancel Other Service">Cancel Other Service</a></li>
		<li><a class="subMenu" href="Sales/requestControlsAuditReport" alt="Request SSAE 16 Report">Request SSAE 16 Report</a></li-->
		</div>
		</ul>
	  </li>
	  </ul>
	  </div>
	  <div style="clear: left;"></div>
<script type="text/javascript"><!--//--><![CDATA[//><!--

var menuEvents = {};

navRoot = document.getElementById("main_menu");
for (i = 0; i< navRoot.childNodes.length; i++) {
    node = navRoot.childNodes[i];
    if (node.nodeName == "LI") {

        node.onmouseover = function() {
            if (menuEvents[this.id] != null) {
                clearTimeout(menuEvents[this.id]);
            	delete menuEvents[this.id];
            }

            for (var nodeId in menuEvents) {
            	hideNode(document.getElementById(nodeId));
            }

            this.className = "listOver rootNode";

            var groupName = this.id.replace('menu_tree_', '');

            var groupImage = document.getElementById('group_image_' + groupName);

            if (groupName != '') {
                groupImage.src = groupImage.src.replace('_off', '_on');
            }
        }

        node.onmouseout = function() {
            var nodeItem = this;
            menuEvents[this.id] = setTimeout(function() {
            	hideNode(nodeItem);
            }, 500);
        }
    }
}

function hideNode(nodeItem) {
	nodeItem.className = nodeItem.className.replace("listOver", "");

    var groupName = nodeItem.id.replace('menu_tree_', 'group_image_');

    var groupImage = document.getElementById(groupName);

    if (groupName != 'group_image_') {
        groupImage.src = groupImage.src.replace('_on', '_off');
    }
}

//--><!]]></script>

<?php
		$dis = $_REQUEST["dis"];
		if($dis == "")
			$dis = "home";

		if($dis == "home")
			include "home.php";

		//admin content
		else if($dis == "admin_subscribe")
			include "admin_subscribe.php";
		else if($dis == "admin_invoices")
			include "admin_invoices.php";
		else if($dis == "admin_cancel")
			include "admin_cancel.php";
		else if($dis == "admin_account")
			include "admin_account.php";
		else if($dis == "admin_payment")
			include "admin_payment.php";
		
		
		//vo content
		else if($dis == "vo_mails")
			include "vo_mails.php";
		else if($dis == "vo_forwarding")
			include "vo_forwarding.php";
		else if($dis == "vo_notification")
			include "vo_notification.php";
		else if($dis == "vo_scan")
			include "vo_scan.php";
		else if($dis == "vo_calls")
			include "vo_calls.php";
		else if($dis == "vo_staff")
			include "vo_staff2.php";
		else if($dis == "vo_greeting")
			include "vo_greeting.php";
		else if($dis == "vo_notavailable")
			include "vo_notavailable.php";
		else if($dis == "vo_info")
			include "vo_info.php";
		else if($dis == "vo_facilities")
			include "vo_facilities.php";
?>

	 
     <div class="clear"></div>
      <!-- begin footer -->
      <div id="footer">
        <div class="footer_links">
            <ul>
                <li><a href="Administrative/index" class="foot_link">Administrative</a></li>
                <li><a href="Support/addTicket" class="foot_link">Support</a></li>
                <li><a href="Security/hardwareFirewall" class="foot_link">Security</a></li>
                <li><a href="Hardware/hardware" class="foot_link">Hardware</a></li>
                <li><a href="Software/licenses" class="foot_link">Software</a></li>
                <li><a href="Network/publicNetworkStatus" class="foot_link">Public Network</a></li>
                <li><a href="Network/privateNetworkStatus" class="foot_link">Private Network</a></li>
                <li><a href="Sales" class="foot_link">Sales</a></li>
            </ul>
                &nbsp;Copyright ©2012 <a href="http://www.voffice.com.my.com/" class="foot_link" target="_blank">vOffice.com.my</a> All Rights Reserved.
            <a href="http://www.softlayer.com/legal" target="_blank">Legal</a>
        </div>
                <div class="footer_logo"> <a href="http://www.voffice.com.my/"><img src="images/logo.jpg" alt="vOffice.com.my" border="0"></a> 
                </div>
      </div>
       <!--end container-->


<map name="admin">
<area href="Administrative/userAdmin" alt="user administration" coords="0,1,108,25">
<area href="Administrative/accountSummary" alt="accounting" coords="109,1,213,25">
<area href="Administrative/cancelList/" alt="cancel server" coords="214,1,334,25">
<area href="Administrative/cancelList/cancelService" alt="cancel other service" coords="335,1,498,25">
<area href="Administrative/companyProfile" alt="company profile" coords="499,1,634,25">
<area href="Administrative/contactUs" alt="contact us" coords="635,1,954,25">
</map>

<map name="support">
<area href="Hardware/reboot" alt="reboot" coords="0,0,79,25">
<area href="Support/tickets" alt="tickets" coords="80,0,155,25">
<area href="Support/forums" alt="forums" coords="156,0,235,25">
<area href="http://knowledgelayer.softlayer.com/" onclick="window.open(this.href,&#39;&#39;,&#39;&#39;);return false;" target="_blank" alt="faq" coords="236,0,369,25">
<area href="Support/tutorialsIndex" alt="tutorials" coords="370,0,458,25">
<area href="Support/apiTutorial" alt="api" coords="459,0,954,25">
</map>

<map name="security">
<area href="Security/hardwareFirewall" alt="hardware firewall" coords="0,0,146,25">
<area href="Security/softwareFirewall" alt="software firewall" coords="147,0,284,25">
<area href="Security/antivirusSpywareList" alt="Antivirus - Spyware" coords="285,0,401,25">
<area href="PublicNetwork/intrusionProtectionSystem" alt="network detection protection" coords="402,0,509,25">
<area href="Security/hostIntrusionProtectionSystem" alt="host detection protection system" coords="510,0,594,25">
<area href="Security/scanner" alt="scanner" coords="595,0,680,25">
<area href="Security/freePciScan" alt="free pci scan" coords="681,0,954,25">
</map>

<map name="hardware">
<area href="Hardware/reboot" alt="reboot" coords="0,0,79,25">
<area href="Hardware/configuration" alt="configuration" coords="80,0,196,25">
<area href="Hardware/control" alt="control" coords="197,0,276,25">
<area href="Hardware/monitoring" alt="monitoring" coords="277,0,378,25">
<area href="Hardware/osReloadHardware" alt="os reloads" coords="379,0,479,25">
<area href="Hardware/rescueLayerList" alt="rescuelayer" coords="480,0,588,25">
<area href="Hardware/ipSearch" alt="ip search" coords="589,0,954,25">
</map>

<map name="software">
<area href="Software/licenses" alt="License Manager" coords="0,0,141,25">
<area href="Tutorials/cpanel" alt="cPanel" coords="142,0,219,25">
<area href="Tutorials/plesk" alt="Plesk" coords="220,0,286,25">
<area href="Tutorials/helm" alt="Helm" coords="287,0,354,25">
<area href="Tutorials/urchin" alt="Urchin" coords="355,0,429,25">
<area href="Software/getHyperVInfo" alt="Hyper-V" coords="430,0,513,25">
<area href="Tutorials/downloads" alt="Downloads" coords="514,0,615,25">
<area href="Software/driverInfo" alt="Drivers" coords="616,0,744,25">
</map>

<map name="publicnetwork">
<area href="Bandwidth/publicHardware" alt="bandwidth" coords="0,0,98,25">
<area href="Network/publicPortControlList" alt="port control" coords="99,0,195,25">
<area href="LoadBalancer/index" alt="load balancer" coords="196,0,305,25">
<area href="NetworkSubnet/publicSubnet" alt="ip manager" coords="306,0,402,25">
<area href="Domains/index" alt="manage dns" coords="403,0,453,25">
<area href="CdnService/index" alt="CDN" coords="454,0,502,25">
<area href="NetworkTools/index" alt="network tools" coords="503,0,615,25">
<area href="NetworkConsole/index" alt="network IDS" coords="616,0,714,25">
<area href="NetworkSubnet/rwhoisData" alt="rwhois" coords="715,0,780,25">
<area href="NetworkSubnet/listSwipSubnets" alt="swip" coords="781,0,954,25">
</map>

<map name="privatenetwork">
<area href="PrivateNetwork/bandwidth" alt="bandwidth" coords="0,0,92,25">
<area href="PrivateNetwork/portControl" alt="port control" coords="107,0,193,25">
<area href="NetworkStorage/summaryForNasType/LOCKBOX" alt="storage" coords="208,0,297,25">
<area href="PrivateNetwork/backup" alt="backup" coords="315,0,373,25">
<area href="PrivateNetwork/dnsResolvers" alt="dns resolvers" coords="392,0,488,25">
<area href="PrivateNetwork/osUpdates" alt="os updates" coords="505,0,578,25">
<area href="Hardware/osReloadHardware" alt="os reloads" coords="595,0,677,25">
<area href="Hardware/rescueLayerList" alt="rescuelayer" coords="692,0,779,25">
<area href="PrivateNetwork/vpn" alt="vpn" coords="792,0,834,25">
<area href="NetworkTranscode/viewJobs" alt="transcode" coords="850,0,954,25">
</map>

<map name="sales">
<area href="Sales/serverList" alt="add server" coords="0,0,105,25">
<area href="Sales/index" alt="add other service" coords="106,0,250,25">
<area href="Sales/addUpgradeTicket" alt="upgrades" coords="251,0,344,25">
<area href="Sales/orderAdditionalServices/firewall" alt="add firewall" coords="345,0,452,25">
<area href="Sales" alt="add storage" coords="453,0,562,25">
<area href="PrivateNetwork/backup" alt="add backup" coords="563,0,671,25">
<area href="Sales/orderAdditionalServices/subnet" alt="add ip addresses" coords="672,0,800,25">
<area href="Sales/addUpgradeTicket/Business%20Continuance%20Insurance%20(BCI)/7" alt="add bci" coords="801,0,882,25">
<area href="Administrative/cancelList/" alt="cancel" coords="883,0,954,25">
</map>

<!-- <script language="JavaScript" src="jquery-latest.min.js" type="text/javascript"></script> -->

<script type="text/javascript">

            if (typeof SoftLayer == "undefined") {
                var SoftLayer =
                {
                    Controllers: {}
                };
            }

            if (typeof SoftLayer.Controllers['Index'] == "undefined") {
                SoftLayer.Controllers['Index'] = {};
            }

            if (typeof SoftLayer.Controllers['Index']['index'] == "undefined") {
                SoftLayer.Controllers['Index']['index'] = {};
            }

$('#networkCoreDiv').hide();
$('#datacenterList').hide();
$('#defaultCoreDiv').show();

function getBackboneData(backboneLocation)
{
	$('#networkCoreDiv').hide();
    $('#datacenterList').hide();
    $('#defaultCoreDiv').hide();

    document.getElementById('index_locationlist').value = backboneLocation;

    if(backboneLocation == "Select A Location") {
        $('#networkCoreDiv').hide();
        $('#defaultCoreDiv').show();
        return false;
    }

    

	$.get('/dispatch/Backbones/getBackbonesByLocation/' + backboneLocation, '', function (data) {
		$('#networkCoreDiv').html(data);
		$('#networkCoreDiv').show();
    });

    return false;
}

function getDatacenterList(datacenterLocation)
{
    $('#datacenterList').hide();
    $('#networkCoreDiv').hide();
    $('#defaultCoreDiv').hide();

    document.getElementById('index_locationlist').value = "Select A Location";

    
    var datacenters = '{"ams01":"Amsterdam 1","dal01":"Dallas 1","dal04":"Dallas 4","dal05":"Dallas 5","dal06":"Dallas 6","dal07":"Dallas 7","hou02":"Houston 2","sjc01":"San Jose 1","sea01":"Seattle","sng01":"Singapore 1","wdc01":"Washington, DC"}';
    var datacenterArray = eval('('+datacenters+')');
    var pops = '{"ams02":"Amsterdam, The Netherlands","atl01":"Atlanta, GA","chi01":"Chicago, IL","dal03":"Dallas 3","den01":"Denver, CO","fra01":"Frankfurt, Germany","lon01":"London, England","lax01":"Los Angeles, CA","mia01":"Miami, FL","nyc01":"New York, NY","pal01":"Palo Alto, CA","sjc02":"San Jose, CA","sea02":"Seattle, WA 2","wdc02":"Washington, DC 2"}';
    var popArray = eval('('+pops+')');
    var html = "";
    var title = "";

    if(datacenterLocation == 'dal') {
        title = 'Dallas';
    } else if(datacenterLocation == 'sea') {
        title = 'Seattle';
    } else if(datacenterLocation == 'wdc') {
        title = 'Washington, DC';
    } else if(datacenterLocation == 'hou') {
        title = 'Houston'
    } else if(datacenterLocation == 'sjc') {
        title = 'San Jose'
    }

    html ='<center><table cellspacing="0" cellpadding="0" border="0">';
    html += '<tr><td class="med14_theme"><b>'+title+' Data Centers</b></td></tr>';
    html += '<tr><td>&nbsp;</td></tr>';
    for(var i in datacenterArray) {
        if(i.substring(0,3) == datacenterLocation) {
            html += '<tr><td><a href="#self" onClick="getBackboneData(\''+i+'\');">'+datacenterArray[i]+'</a></td></tr>';
        }
    }
    html += '<tr><td>&nbsp;</td></tr>';
    html += '<tr><td class="med14_red"><b>'+title+' Network POPs</b></td></tr>';
    html += '<tr><td>&nbsp;</td></tr>';
    for(var i in popArray) {
        if(i.substring(0,3) == datacenterLocation) {
            html += '<tr><td><a href="#self" onClick="getBackboneData(\''+i+'\');">'+popArray[i]+'</a></td></tr>';
        }
    }
    html += '<tr><td>&nbsp;</td></tr>';
    html += '</table></center>';

    $('#datacenterList').html(html);
    $('#datacenterList').show();
}

function showDefaultBackbone()
{
	$('#networkCoreDiv').hide();
    $('#defaultCoreDiv').show();
}
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({start: 2,wrap: 'circular',scroll: 1});
});

            if (typeof SoftLayer == "undefined") {
                var SoftLayer =
                {
                    Controllers: {}
                };
            }

            if (typeof SoftLayer.Controllers['Index'] == "undefined") {
                SoftLayer.Controllers['Index'] = {};
            }

            if (typeof SoftLayer.Controllers['Index']['networkMonitorDetails'] == "undefined") {
                SoftLayer.Controllers['Index']['networkMonitorDetails'] = {};
            }

            if (typeof SoftLayer == "undefined") {
                var SoftLayer =
                {
                    Controllers: {}
                };
            }

            if (typeof SoftLayer.Controllers['EmergencyNotification'] == "undefined") {
                SoftLayer.Controllers['EmergencyNotification'] = {};
            }

            if (typeof SoftLayer.Controllers['EmergencyNotification']['index'] == "undefined") {
                SoftLayer.Controllers['EmergencyNotification']['index'] = {};
            }
$(function() {

                                        var findNode = $('#hardware_fqdn');

                                        findNode.click(function() {
                                            this.value = '';
                                        });

                                        findNode.keyup(function() {
                                            var selectNode = $('#reboothardware_id');

                                            var foundNode = $("option[@text *= '" + this.value + "']:first", selectNode);

                                            if (foundNode.length == 0) {
                                                foundNode = $("option[@value *= '" + this.value + "']:first", selectNode);
                                            }

                                            foundNode.attr('selected','selected');

                                        });

                                        findNode.show();
                                    
            $("div[@id ^= 'menu_div_']").bgiframe();
});
</script>      <script type="text/javascript">
        <!--
            $(".sales-menu #chat").click(function() {
            	window.open('https://sales.liveperson.net/hc/12703439/?cmd=file&file=visitorWantsToChat&site=12703439&SESSIONVAR%21skill=Sales-SL-Portal-English&referrer='+escape(document.location),'chat12703439','width=500,height=500,resizable=yes');return false;        	});

        	$("#softlayer-chat").click(function() {
        		window.open('https://sales.liveperson.net/hc/12703439/?cmd=file&file=visitorWantsToChat&site=12703439&SESSIONVAR%21skill=Sales-SL-Portal-English&referrer='+escape(document.location),'chat12703439','width=500,height=500,resizable=yes');return false;        	});

            /* chat button hover/active functionality */
            $('#sl-chat').mouseover(function () {
                var id = $(this).children('a:nth-child(2)').attr('id');
                $('#' + id).show();
            });

            $('#sl-chat').mouseout(function () {
                var id = $(this).children('a:nth-child(2)').attr('id');
                $('#' + id).hide();
            });

            $("#sl-chat").click(function() {
                window.open('https://sales.liveperson.net/hc/12703439/?cmd=file&file=visitorWantsToChat&site=12703439&SESSIONVAR%21skill=Sales-SL-Portal-English&referrer='+escape(document.location),'chat12703439','width=500,height=500,resizable=yes');return false;            });

            function displayOff2(nr){
                if (document.all)
                    document.all[nr].style.display = 'none';
                else if (document.getElementById)
                    document.getElementById(nr).style.display = 'none';
            }

            function displayOn2(nr){
                if (document.all)
                    document.all[nr].style.display = 'block';
                else if (document.getElementById)
                    document.getElementById(nr).style.display = 'block';
            }


            // the following method inverts the current mode
            // i.e. turns displayed to hidden and vice-versa
            function displayToggle2(nr){
                if (document.all)
                    document.all[nr].style.display = (document.all[nr].style.display == 'none') ? 'block' : 'none';
                else if (document.getElementById)
                    document.getElementById(nr).style.display = (document.getElementById(nr).style.display == 'none') ? 'block' : 'none';
                return false;
            }
        //-->
    </script>
<form name="forumAutoLogin" action="https://forums.softlayer.com/portal_login.php" method="post">
          <input name="vb_login_md5password" type="hidden" value="d1d30dc450b192f473bd18f30d042d93">
          <input name="do" type="hidden" value="login">
          <input name="vb_login_username" size="12" type="hidden" value="albertg">
</form>

</td>
</tr>
</tbody>
</table>
</center>
</div>
</div>
</body>
</html>
