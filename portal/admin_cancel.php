<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems">&nbsp;</div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">administrative: 
    </span><span class="med16_theme">cancel services</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
<p><strong> Cancellation procedure: </strong></p>
<p>Per the <a href="#">Terms of Service</a>, all cancellations must be requested 
    prior to Feb 06, 2012 23:59:59 CST (GMT-06:00) which is 24 hours prior to 
    the Anniversary Billing Date of Feb 08, 2012 00:00:00 CST (GMT-06:00). Failure 
    to supply the requisite written notice of cancellation will result in a full 
    billable monthly cycle. Should you cancel your service prior to Feb 06, 2012 
    23:59:59 CST (GMT-06:00) your service will remain online until the automated 
    process reclaims your service on your Anniversary Billing Date of Feb 08, 
    2012 00:00:00 CST (GMT-06:00).</p>

<span class="med14_theme"><b>Please select service you wish to cancel</b></span><br>

<img src="space.gif" width="1" height="2" alt=""><br>
<form name="admin_cancel" method="post" action="">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr bgcolor="#d3d3d3"> 
      <td width="5%" align="center"><strong>No.</strong></td>
      <td width="5%" align="center"><strong>CP ID</strong></td>
      <td width="10%" align="center"><strong>Location</strong></td>
      <td><strong>Plan Name</strong></td>
      <td width="10%" align="center"><strong>Service Start Date</strong></td>
      <td width="10%" align="center"><strong>Service Renew / Expiry Date</strong></td>
      <td width="10%" align="center"><strong>Billing Cycle</strong></td>
      <td width="5%" align="center"><strong>Currency</strong></td>
      <td width="10%" align="center"><strong>Price</strong></td>
      <td width="5%" align="center"><strong>Status</strong></td>
      <td width="5%" align="center"><strong>Cancel Plan</strong></td>
      </tr>
           <?php

				  $mode = "bill"; // list active and suspended
				  
				  $plan_results = $clientfunc->portal_administrative_getClientsPlanInfo($_SESSION["mid"], $mode);

				  $col_bgcolor = 0;
					
				  $plan_cnt = 1;
				  
				  while ($plan_rows = mysql_fetch_array($plan_results))
				  {
					  if ($col_bgcolor == 0)
					  {
						$bg_color_set = MAIN_PAGE_COL_1;  
					  }
					  else
					  {
						$bg_color_set = MAIN_PAGE_COL_2;  
					  }
					
					  $plan_status = $clientfunc->portal_getClientPlanStatus($plan_rows['status']);
					  $plan_name = $clientfunc->portal_getClientPlanProductName($plan_rows['product_id']);
					  $plan_location = $clientfunc->portal_getClientPlanLocation($plan_rows['vo_id']);
				  
					   
					echo "<tr bgcolor=\"$bg_color_set\"> 
						<td align=\"center\">".$plan_cnt."</td>
						<td align=\"center\">".$plan_rows['cp_id']."</td>
						<td align=\"center\">".$plan_location."</td>
						<td align=\"left\">".$plan_name."</td>
						<td align=\"center\">".$plan_rows['last_renew_date']."</td>
						<td align=\"center\">".$plan_rows['next_renew_date']."</td>
						<td align=\"center\">".$plan_rows['billing_cycle']."</td>
						<td align=\"center\">".$plan_rows['currency']."</td>
						<td align=\"center\">".$plan_rows['price']."</td>
						<td align=\"center\">".$plan_status."</td>
						<td align=\"center\"><input type=\"checkbox\" name=\"checkbox2\" value=\"checkbox\"></td>
					  </tr>";
					
					  if ($col_bgcolor == 0)
					  {
						$col_bgcolor = 1;  
					  }
					  else
					  {
						$col_bgcolor = 0;  
					  }
					  
					  $plan_cnt++;
					
				  }
		?>
    
            
      <tr bgcolor="#d3d3d3"> 
        <td align="right" colspan="11"> <img width="1" height="3" alt="" src="space.gif"></td>
      </tr>
      <tr> 
        <td align="right" colspan="11"> <img width="1" height="3" alt="" src="space.gif"><br> 
          <input type="submit" name="Submit" value="Request Cancellation of this Service(s)" class="submit_base"> 
          </td>
      </tr>
    </tbody>
  </table>
</form>
<div>&nbsp;</div>