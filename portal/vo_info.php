<script type="text/javascript" src="jquery.jeditable.js"></script>
<script type="text/javascript">	

		$(function()
		{
			$('.contactedit').editable('updateProfile.php', {
				 indicator : 'Saving...',
				 submit  : 'OK',
				 tooltip   : 'Click to edit...'
		 	});
			
		});

</script>

<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><a href="">General Info</a></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">general info</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
<p><strong> Account's Owner Details </strong></p>
<p>Please review your details below periodically to ensure it is current 
  and correct.
<br>Some information such as Company Name, City, State, Postcode and Country  can only be updated by opening a <a href="#">sales 
  ticket</a>.</p>
<table  cellpadding="0" cellspacing="5" border="0" width="100%">
  <tbody>
    <tr> 
      <td valign="top" align="left" width="60%"> 
      <table width="97%" class="outline_table" cellpadding="5">
          <tbody>
            <tr> 
              <td valign="top"> 
                  <b><font class="lrg18_grey"></font><font class="lrg18_theme">your personal details</font></b><br>
                  <br><br>
                  <?php
				  	$profile_details = $clientfunc->portal_main_page_getClientCompanyInfo($_SESSION["mid"]);
				  
				  ?>
                  <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tbody>
                      <tr> 
                        <td align="right"><b>Company Name:</b></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td>Flexi e-Solutions Pty Ltd</td>
                      </tr>
                      <tr> 
                        <td valign="top" align="right"><strong>First Name:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="firstname_<?=$_SESSION["mid"];?> "><?=$profile_details["firstname"];?></td>
                      </tr>
                      <tr> 
                        <td valign="top" align="right"><strong>Last Name:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="lastname_<?=$_SESSION["mid"];?>"><?=$profile_details["lastname"];?></td>
                      </tr>
                      <tr> 
                        <td valign="top" align="right"><b>Address:</b></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td ><?=$profile_details["address"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>City:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td ><?=$profile_details["city"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>State:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td><?=$profile_details["state"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>Postal:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td><?=$profile_details["postcode"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>Country:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td><?=$profile_details["country"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><b>Pri. Phone:</b></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="pricontact_<?=$_SESSION["mid"];?>"><?=$profile_details["pri_contact_no"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>Alternate Phone:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="altcontact_<?=$_SESSION["mid"];?> "><?=$profile_details["sec_contact_no"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><strong>Fax:</strong></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="fax_<?=$_SESSION["mid"];?>"><?=$profile_details["fax_number"];?></td>
                      </tr>
                      <tr> 
                        <td align="right"><b>Pri. Email:</b></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="email_<?=$_SESSION["mid"];?>"><?=$profile_details["email"];?></td>
                      </tr>
                      <tr> 
                        <td align="right" valign="top" nowrap=""><b>Company Website:</b></td>
                        <td><img src="space.gif" width="5" alt=""></td>
                        <td class="contactedit" id="website_<?=$_SESSION["mid"];?>"><?=$profile_details["website"];?></td>
                      </tr>
                      <tr> 
                        <td align="right" colspan="5"> <img width="1" height="3" alt="" src="space.gif"><br> 
                          <img alt="" src="link.jpg"> ** Click on Text to Edit 
                          Info ** </td>
                      </tr>
                    </tbody> 
                  </table>
			</td>
            </tr>
          </tbody>
        </table></td>
      <!-- middle -->
      <td valign="top" align="right" width="50%"> <table width="97%" class="outline_table" cellpadding="5">
          <tbody>
            <tr> 
              <td valign="top">
			  <b><font class="lrg18_grey"></font><font class="lrg18_theme">your company nature of business</font></b><br><br>
               <div class="contactedit" id="geninfo_<?=$_SESSION["mid"];?>"> <?=$profile_details["general_info"];?> </div>
                </td>
            </tr>
            <tr> 
                 <td align="right" colspan="5"> <img width="1" height="3" alt="" src="space.gif"><br> 
                          <img alt="" src="link.jpg"> ** Click on Text to Edit 
                          Info ** </td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<div>&nbsp;</div>
