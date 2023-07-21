<!----content starts here------->
<script type="text/javascript" src="vo_notification_type_switch.js"></script>

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><?php include("vo_mails.html")?></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">mail notification setting</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<?php

if ($_POST["update_mf"])
{
		$add_mail_forward_check = $clientfunc->portal_checkClientMailForwardingSettingExist($_SESSION["mid"]);

	    if ($add_mail_forward_check == 0)
		{
			$add_mail_forward_setting = $clientfunc->portal_addClientMailForwardingSetting($_SESSION["mid"], $_POST["person"], $_POST["emails"],$_POST["countrycode"],$_POST["mobile"], $_POST["notify_type"]);
		}
		else
		{
			$process_mail_forward_setting = $clientfunc->portal_updateClientMailForwardingSetting($_SESSION["mid"], $_POST["person"], $_POST["emails"],$_POST["countrycode"],$_POST["mobile"], $_POST["notify_type"]);
		}
	$jmsg = "Your Mail Forwarding Settings have been updated";
	echo "<script language=\"javascript\"> alert('$jmsg')</script>"; 

}

	$get_call_forward_email = $clientfunc->portal_getClientMailForwardEmail($_SESSION["mid"]);
	$get_call_forward_mobile = $clientfunc->portal_getClientMailForwardMobile($_SESSION["mid"]);
	$get_call_forward_Contact_Person = $clientfunc->portal_getClientMailForwardContactPerson($_SESSION["mid"]);
	$get_call_forward_pref_notification = $clientfunc->portal_getClientMailForwardPreferredNotification($_SESSION["mid"]);

?>
<div class="grid_12">
<p><strong>  Mail Notification Setting: </strong></p>
<p>Set your email or mobile number which notifications will be sent to when your mail(s) comes in. 
<table id="updatepassword_container" cellpadding="0" cellspacing="5" border="0" width="100%">
  <tbody>
    <tr> 
      <td valign="top" align="left" width="60%"> <table width="97%" class="outline_table" cellpadding="5">
          <tbody>
            <tr> 
              <td valign="top"> <form id="mail_mf" name="mail_mf" action="" method="post">
                  <b><font class="lrg18_grey">mail forwarding </font><font class="lrg18_theme">instruction</font></b><br>
                  <br><br>
                  <table cellpadding="0" cellspacing="5" border="0">
                    <tbody>
                   
                      <tr> 
                        <td align="right" nowrap="nowrap"><b>Contact Person:&nbsp;</b></td>
                        <td align="left"><input name="person" type="text" class="inputtext" id="person" value="<?=$get_call_forward_Contact_Person;?>" size="40" maxlength="254"></td>
                      </tr>                  
                      <tr>
                        <td align="right" nowrap="nowrap"><b>Notification Method</b></td>
                        <td align="left">
                        <input type="radio" name="notify_type" id="notify_type" value="email" onClick="notification_switch(this.value);" 
                        <?php echo ($get_call_forward_pref_notification == "email" ? ' checked=\"checked\" '  : '') ?>
                        />
                        Email 
                        <input name="notify_type" type="radio" id="notify_type" onClick="notification_switch(this.value);" value="sms" 
                        <?php echo ($get_call_forward_pref_notification == "sms" ? ' checked=\"checked\" ' : '') ?>
                        />
                        SMS</td>
                      </tr>
                       <?php
					  if ($get_call_forward_pref_notification == "email")
					  {
                      	echo "<tr style=\"display: ;\" id=\"emailset\">";
					  }
					  else
					  {
						echo "<tr style=\"display: none;\" id=\"emailset\">";

					  }
					  ?>
                        <td align="right" nowrap="nowrap"><b>Email(s):&nbsp;</b></td>
                        <td align="left">
                        <input name="emails" type="text" class="inputtext" id="emails" value="<?=$get_call_forward_email;?>" size="40" maxlength="254">
                       <br /> (More than 1 email address can be added here seperated by , <br />e.g yourname@gmail.com, yourname@hotmail.com)
                        </td>
                      </tr>
                      
                      <?php
					  if ($get_call_forward_pref_notification == "sms")
					  {
                      	echo "<tr style=\"display: ;\" id=\"mobilecset\">";
					  }
					  else
					  {
						echo "<tr style=\"display: none;\" id=\"mobilecset\">";

					  }
					  ?>
                        <td align="right" nowrap="nowrap"><strong>Mobile Phone Country</strong></td>
                        <td align="left">
                        <select name="countrycode" class="inputtext">
                           <?php
							$get_call_forward_mobile_country = $clientfunc->portal_getClientMailForwardMobileCountry($_SESSION["mid"]);
							$get_call_forward_country_list = $clientfunc->portal_getMailForwardCountryList();
							
							//$get_call_forward_addy = $clientfunc->portal_getClientMailForwardAddress($_SESSION["mid"]);
				
							while($q_cf_row = mysql_fetch_array($get_call_forward_country_list))
							{
								 echo "<option value=\"".$q_cf_row['country_code']."\"". ($q_cf_row['country_code'] == $get_call_forward_mobile_country ? ' selected ' : '') .">".$q_cf_row['country']."</option>";
							}
						?>
                    	</select>
                        </td>
                      </tr>
 					 <?php
					  if ($get_call_forward_pref_notification == "sms")
					  {
                      	echo "<tr style=\"display: ;\" id=\"mobileset\">";
					  }
					  else
					  {
						echo "<tr style=\"display: none;\" id=\"mobileset\">";

					  }
					  ?>
                        <td align="right" nowrap="nowrap"><strong>Mobile Number:</strong></td>
                        <td align="left"><input type="text" id="mobile" name="mobile" value="<?=$get_call_forward_mobile;?>" class="inputtext"></td>
                      </tr>
                      
                 
                    </tbody>
                  </table>
                  <br>
				  <br>
                  <center>
                    <input name="update_mf" type="submit" class="submit_base" id="update_mf" value="Update Mail Notification Settings">
                  </center>
                  <br>
                </form>
			</td>
            </tr>
          </tbody>
        </table></td>
      <!-- middle -->
      <td valign="top" align="right" width="50%"> <table width="97%" class="outline_table" cellpadding="5">
          <tbody>
            <tr> 
              <td valign="top"><p><strong>Price Range</strong><br>
                  You will receive your mails on the next day for most destination 
                  in Malaysia when you opt for Pos Laju to deliver your mails 
                  and for other destinations as well. You may check the postage 
                  rate and estimated delivery time at Poslaju.com.my.</p> 
                <p><em>*Actual price may differ.</em></p> 
              </td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<div>&nbsp;</div>