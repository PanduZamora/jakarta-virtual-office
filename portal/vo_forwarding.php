<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><?php include("vo_mails.html")?></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">mail forwarding instruction</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<?php

if ($_POST["update_mf"])
{
	$add_mail_forward_check = $clientfunc->portal_checkClientMailForwardingSettingExist($_SESSION["mid"]);

	if ($add_mail_forward_check == 0)
	{
		$add_call_forward_addy = $clientfunc->portal_addClientMailForwardingInfo($_SESSION["mid"], $_POST["callforward"], $_POST["address"],$_POST["city"],$_POST["state"],$_POST["postcode"],$_POST["country"]);
	}
	else
	{
		$process_call_forward_addy = $clientfunc->portal_updateClientMailForwardingInfo($_SESSION["mid"], $_POST["callforward"], $_POST["address"],$_POST["city"],$_POST["state"],$_POST["postcode"],$_POST["country"]);
	}
	
	$jmsg = "Your Mail Forwarding Instructions have been updated";
	echo "<script language=\"javascript\"> alert('$jmsg')</script>"; 
	


}


?>
<div class="grid_12">
<p><strong> Edit Mail Forwarding Instruction: </strong></p>
<p>You can request your mails to be forwarded to you either when you need it by 
  informing us via email or by calling our Client Service team. Otherwise, You 
  can place a standing instruction so that our team will know what to do with 
  your mails each time we receive it.
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
                        <td rowspan="7">&nbsp;</td>
                        <td align="right" nowrap="nowrap"><b>Standing Instruction:&nbsp;</b></td>
                        <td align="left">
                         <select name="callforward" class="inputtext">
                        <?php
							$get_call_forward_intsr = $clientfunc->portal_getClientMailForwardInstruction($_SESSION["mid"]);
							$get_call_forward_intsr_list = $clientfunc->portal_getMailForwardInstructionList();
							
							$get_call_forward_addy = $clientfunc->portal_getClientMailForwardAddress($_SESSION["mid"]);
				
							while($q_cf_row = mysql_fetch_array($get_call_forward_intsr_list))
							{
								 echo "<option value=\"".$q_cf_row['id']."\"". ($q_cf_row['id'] == $get_call_forward_intsr ? ' selected ' : '') .">".$q_cf_row['status_desc']."</option>";
							}
						?>
                            
                          </select></td>
                      </tr>                      
                      <tr> 
                        <td align="right" nowrap="nowrap"><b>Address:&nbsp;</b></td>
                        <td align="left"><input type="text" id="address" name="address" value="<?=$get_call_forward_addy['mail_handling_forward_address'];?>" class="inputtext" size="40"></td>
                      </tr>
                      <tr> 
                        <td align="right" nowrap="nowrap"><strong>City:</strong></td>
                        <td align="left"><input type="text" id="city" name="city" value="<?=$get_call_forward_addy['mail_handling_forward_city'];?>" class="inputtext"></td>
                      </tr>
                       <tr> 
                        <td align="right" nowrap="nowrap"><strong>State:</strong></td>
                        <td align="left"><input type="text" id="state" name="state" value="<?=$get_call_forward_addy['mail_handling_forward_state'];?>" class="inputtext"></td>
                      </tr>
                      <tr> 
                        <td align="right" nowrap="nowrap"><strong>postcode:</strong></td>
                        <td align="left"><input type="text" id="postcode" name="postcode" value="<?=$get_call_forward_addy['mail_handling_forward_postcode'];?>" class="inputtext"></td>
                      </tr>
                      <tr> 
                        <td align="right" nowrap="nowrap"><strong>Country:</strong></td>
                        <td align="left"><input type="text" id="country" name="country" value="<?=$get_call_forward_addy['mail_handling_forward_country'];?>" class="inputtext"></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
				  <br>
                  <center>
                    <input name="update_mf" type="submit" class="submit_base" id="update_mf" value="Update Mail Forwarding Instruction">
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