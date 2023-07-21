<?php

require "function_usort.php";

// Swap col colour fag
$col_bgcolor = 0;

?>
<!----content starts here------->

<div id="subNavigation">
	<div class="grid_7" id="subNavigationItems"> <a href="https://manage.voffice.com.my/welcome.pdf" class="underline linkN" target="_blank">Welcome 
      to vOffice (PDF)</a> </div>
        <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">myvoffice: </span><span class="med16_theme">home</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
      <b>Welcome to the vOffice Customer Management Portal.</b><br>
      <br>
<table width="100%">
    <tbody><tr>
        <td width="35%" align="left" valign="top">
            <!-- Left Start -->
            <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td>
                        <center><a href="Administrative/companyProfile" title="Update Company Profile"><span class="med14_theme"><b>Your Information</b></span></a></center>
                        <br>
                        <?php
						
							$client_co_info = $clientfunc->portal_main_page_getClientCompanyInfo($_SESSION["mid"]);

						?>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
                            <tbody>
                            <tr>
                                <td align="right"><b>First Name:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["firstname"];?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Last Name:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["lastname"];?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Company Name:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["coname"];?></td>
                            </tr>
                            <tr>
                                <td valign="top" align="right"><b>Address:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["address"];?></td>
                            </tr>
                            <tr>
                                <td><b>&nbsp;</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["city"]."<br>".$client_co_info["state"]."<br>".$client_co_info["postcode"]."<br>".$client_co_info["country"];?>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><b>Pri. Phone:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["pri_contact_no"];?></td>
                            </tr>
                            <tr>
                                <td align="right"><b>Pri. Email:</b></td>
                                <td><img src="space.gif" width="5" alt=""></td>
                                <td><?=$client_co_info["email"];?></td>
                            </tr>
                           
							<tr> 
                    <td align="right" colspan="5"> <img width="1" height="3" alt="" src="space.gif"><br> 
                      <img alt="" src="link.jpg"> <a title="Edit Info" href="index.php?dis=vo_info">Edit Info</a> </td>
                  </tr>
                       </tbody></table>
                    </td>
                </tr>
            </tbody></table>
            <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td>
                        <center>
                <a href="" title="Announcement"><span class="med14_theme"><b>Announcement 
                / News</b></span></a> 
              </center>
                        <table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tbody><tr>
        <td align="right"><br></td>
    </tr>
    <tr>
                    <td><p>vOffice is glad to announce the opening of vOffice 
                        Jakarta Centre on the 26 March 2012. You may be entitle 
                        to a Very Special Discount for our Jakarta Centre. Contact 
                        our Sales Team for more info.</p></td>
    </tr>
</tbody></table>
                    </td>
                </tr>
            </tbody></table>
        
      <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr> 
            <td> <center>
                <a href="" title="Announcement"><span class="med14_theme"><b>Contact 
                Us</b></span></a> 
              </center>
			  <br>
              <form name="form1" method="post" action="">
                <table cellpadding="0" cellspacing="5" border="0">
                  <tbody>
                    <tr> 
                      <td rowspan="7">&nbsp;</td>
                      <td align="right" nowrap="nowrap"><b>Title:&nbsp;</b></td>
                      <td align="left"><select name="select" class="inputtext">
                          <option value="" selected>General</option>
                          <option value="">Sales</option>
                          <option value="">Support</option>
                        </select></td>
                    </tr>
                    <tr> 
                      <td align="right" valign="top" nowrap="nowrap"><strong>Message:</strong></td>
                      <td align="left"><textarea name="textarea" rows="5" cols="30" class="inputtextarea"></textarea></td>
                    </tr>

                  </tbody>
                </table>
				  <br>
                  <center>
                    <input name="submit" type="submit" class="submit_base" id="administrative_updatepassword_portal_form_submit" value="Submit">
                  </center>
              </form> </td>
          </tr>
        </tbody>
      </table></td>
        <td width="2"><img src="space.gif" width="1" height="1" alt=""></td>
        
       <td width="2"><img src="space.gif" width="1" height="1" alt=""></td>
        <td align="right" valign="top">
            <!-- Right Start -->
            <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td>
                        <center>
                <a href="" title="Last 5 Calls"><span class="med14_theme"><b>Last 
                5 Calls</b></span></a> 
              </center>
                        <img src="space.gif" width="1" height="2" alt=""><br>
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr bgcolor="#d3d3d3"> 
                    <td width="15%"><strong> Date</strong></td>
                    <td width="10%" align="center"><div align="left"><strong>Time</strong></div></td>
                    <td width="25%" align="center"><div align="left"><strong>Company 
                        Name</strong></div></td>
                    <td width="20%" align="center"><strong>Caller Name</strong></td>
                    <td width="20%" align="center"><strong>Caller Number</strong></td>
                    <td width="10%" align="center"><strong>Log As</strong></td>
                  </tr>
                  <tr> 
                  <?php
					
				  	$call_results = $clientfunc->portal_main_page_getClientLast5Calls($_SESSION["mid"]);

				  	$col_bgcolor = 0;
					
				  while ($call_rows = mysql_fetch_array($call_results))
				  {
					  if ($col_bgcolor == 0)
					  {
						$bg_color_set = MAIN_PAGE_COL_1;  
					  }
					  else
					  {
						$bg_color_set = MAIN_PAGE_COL_2;  
					  }
			  
					echo "<tr bgcolor=\"$bg_color_set\"> 
						<td align=\"center\">".$call_rows['log_date']."</td>
						<td align=\"center\">".$call_rows['log_time']."</td>
						<td align=\"center\">".$call_rows['caller_coname']."</td>
						<td align=\"center\">".$call_rows['caller_name']."</td>
						<td align=\"center\">".$call_rows['caller_no']."</td>
						<td align=\"center\">".$call_rows['notify_type']."</td>
					  </tr>";
					echo "<tr> ";
					
					  if ($col_bgcolor == 0)
					  {
						$col_bgcolor = 1;  
					  }
					  else
					  {
						$col_bgcolor = 0;  
					  }
						$call_cnt++;
				  }
				  ?>

                  </tr>

                  <tr> 
                    <td bgcolor="#d3d3d3" colspan="6"><img width="1" height="1" alt="" src="space.gif"></td>
                  </tr>
                  <tr> 
                    <td align="right" colspan="6"> <img width="1" height="3" alt="" src="space.gif"><br> 
                      <img alt="" src="link.jpg"> <a title="More Mails" href="index.php?dis=vo_calls">More 
                      Calls</a> </td>
                  </tr>
                </tbody>
              </table>
                     </td>
                </tr>
            </tbody></table>
      <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr> 
            <td> <center>
                <a href="" title="Last 5 Mails"><span class="med14_theme"><b>Last 5 Mails</b></span></a> 
              </center>
              <img src="space.gif" width="1" height="2" alt=""><br> <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr bgcolor="#d3d3d3"> 
                    <td width="15%"><strong> Date</strong></td>
                    <td width="10%" align="center"><div align="left"><strong>Time</strong></div></td>
                    <td width="25%" align="center"><div align="left"><strong>Mailer 
                        Name</strong></div></td>
                    <td width="20%" align="center"><strong>Type</strong></td>
                    <td width="30%" align="center"><strong>Status</strong></td>
                  </tr>
                  
                  <?php
				  	$mail_results = $clientfunc->portal_main_page_getClientLast5Mails($_SESSION["mid"]);

				  	$col_bgcolor = 0;
					
				  while ($mail_rows = mysql_fetch_array($mail_results))
				  {
					  if ($col_bgcolor == 0)
					  {
						$bg_color_set = MAIN_PAGE_COL_1;  
					  }
					  else
					  {
						$bg_color_set = MAIN_PAGE_COL_2;  
					  }
					 $mail_status = $clientfunc->portal_main_page_getMailCollectionStatus($mail_rows['id']);
					  
					echo "<tr bgcolor=\"$bg_color_set\"> 
						<td>".$mail_rows['log_date']."</td>
						<td align=\"center\"><div align=\"left\">".$mail_rows['log_time']."</div></td>
						<td><div align=\"left\">".$mail_rows['log_from']."</div></td>
						<td align=\"center\">".$mail_rows['type']."</td>
						<td align=\"center\">".$mail_status."</td>
					  </tr>";
					echo "<tr> ";
					
					  if ($col_bgcolor == 0)
					  {
						$col_bgcolor = 1;  
					  }
					  else
					  {
						$col_bgcolor = 0;  
					  }
					
				  }
				  ?>
                  <tr>
                    <td bgcolor="#d3d3d3" colspan="5"><img width="1" height="1" alt="" src="space.gif"></td>
                  </tr>
                  <tr> 
                    <td align="right" colspan="5"> <img width="1" height="3" alt="" src="space.gif"><br> 
                      <img alt="" src="link.jpg"> <a title="More Mails" href="index.php?dis=vo_mails">More 
                      Mails</a> </td>
                  </tr>
                </tbody>
              </table></td>
          </tr>
        </tbody>
      </table>
            <table class="outline_table" cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td>
                        <center>
                <a href="" title="Last 5 Invoices"><span class="med14_theme"><b>Last 
                5 Invoices</b></span></a> 
              </center><br>
                        
              <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr bgcolor="#d3d3d3"> 
                    <td width="15%"><strong> Date</strong></td>
                    <td width="20%" align="center"><div align="center"><strong>Inv 
                        Number</strong></div></td>
                    <td width="20%" align="center"><div align="center"><strong>Amount 
                        (RM) </strong></div></td>
                    <td width="20%" align="center"><strong>Due Date</strong></td>
                    <td width="35%" align="center"><strong>Status</strong></td>
                  </tr>
				<?php
					$inv_cnt = 0;
				  	$invoice_results = $clientfunc->portal_main_page_getClientLast5Invoices($_SESSION["mid"]);
					usort($invoice_results, 'date_compare');
					
					
					foreach ($invoice_results as $key => $sub_array)
					{
						if ($inv_cnt == LAST_5_INVOICE)
							break;

						$pre_inv = explode("-",$sub_array['invid']);
						$void = $pre_inv[0];
						$invid = $pre_inv[1];

						$invoice_details = $clientfunc->portal_main_page_getClientInvoice($void, $invid);
						$invoice_status = $invfunc->portal_getInvoiceStatus($invoice_details['invoice_status']);

						  if ($col_bgcolor == 0)
						  {
							$bg_color_set = MAIN_PAGE_COL_1;  
						  }
						  else
						  {
							$bg_color_set = MAIN_PAGE_COL_2;  
						  }
						  
						echo "<tr bgcolor=\"$bg_color_set\"> 
							<td>".$invoice_details['date_generated']."</td>
							<td align=\"center\"><div align=\"center\"><a href=\"download_invoice.php?vo=$void&inv=$invid\">".$sub_array['invid']."</a></div></td>
							<td><div align=\"center\">".$invoice_details['amount_due']."</div></td>
							<td align=\"center\">".$invoice_details['date_due']."</td>
							<td align=\"center\">".$invoice_status."</td>
						  </tr>";
						echo "<tr> ";
						
						  if ($col_bgcolor == 0)
						  {
							$col_bgcolor = 1;  
						  }
						  else
						  {
							$col_bgcolor = 0;  
						  }
						
						  $inv_cnt++;
					}
				  ?>

                <!--  <tr bgcolor="#f1f1f1"> 
                    <td>17/12/2011</td>
                    <td align="center"><div align="center"><a href="#">685.4</a></div></td>
                    <td><div align="center">450.00</div></td>
                    <td align="center">31/12/2011</td>
                    <td align="center">Paid</td>
                  </tr> -->
                 
                  <tr> 
                    <td bgcolor="#d3d3d3" colspan="5"><img width="1" height="1" alt="" src="space.gif"></td>
                  </tr>
                  <tr> 
                    <td align="right" colspan="5"> <img width="1" height="3" alt="" src="space.gif"><br> 
                      <img alt="" src="link.jpg"> <a title="More Mails" href="index.php?dis=admin_invoices">More 
                      Invoices</a> </td>
                  </tr>
                </tbody>
              </table> 
                    </td>
                </tr>
            </tbody></table>
        </td>
    </tr>
    <tr>
            <td width="100%" colspan="6" valign="top">
	<!-----contents end here-------->
    
