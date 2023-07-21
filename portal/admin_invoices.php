<?php

require "function_usort.php";

?>
<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems">&nbsp;</div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">administrative: 
    </span><span class="med16_theme">invoices</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
<span class="med14_theme"><b>Open Invoices</b></span><br>
<br>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr bgcolor="#d3d3d3"> 
      <td width="10%" align="center"><strong>Invoice No</strong></td>
      <td><strong>Description</strong></td>
      <td width="10%" align="center"><strong>Issue Date</strong></td>
      <td width="10%" align="center"><strong>Due Date</strong></td>
      <td width="10%" align="center"><strong>Currency</strong></td>
      <td width="10%" align="center"><strong>Amount</strong></td>
      <td width="10%" align="center"><strong>Status</strong></td>
      <td width="10%" align="center"><strong>Option</strong></td>
    </tr>
    
    <tr>
    				<?php
					//$inv_cnt = 0;
				  	$invoice_results = $clientfunc->portal_main_page_getClientInvoices($_SESSION["mid"]);
					usort($invoice_results, 'date_compare');
					
					
					foreach ($invoice_results as $key => $sub_array)
					{
						//if ($inv_cnt == LAST_5_INVOICE)
						//	break;

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
							<td align=\"center\"><div align=\"center\"><a href=\"download_invoice.php?vo=$void&inv=$invid\">".$sub_array['invid']."</a></div></td>
							<td align=\"left\">".$invoice_details['description']."</td>
							<td align=\"center\">".$invoice_details['date_generated']."</td>
							<td align=\"center\">".$invoice_details['date_due']."</td>
							<td align=\"center\">".$invoice_details['currency']."</td>
							<td><div align=\"center\">".$invoice_details['amount_due']."</div></td>
							<td align=\"center\">".$invoice_status."</td>";
						if ($invoice_details['invoice_status'] == 1)
						{
							echo "<td align=\"center\"><div align=\"center\"><a href=\"download_invoice.php?vo=$void&inv=$invid\">Pay Now</a></div></td>
";
						}
						else
						{
							echo "<td align=\"center\">NA</td>";
						}
						//  </tr>";
						echo "</tr> ";
						
						  if ($col_bgcolor == 0)
						  {
							$col_bgcolor = 1;  
						  }
						  else
						  {
							$col_bgcolor = 0;  
						  }
						
						  //$inv_cnt++;
					}
				  ?>

    </tr>
    
    
    <tr bgcolor="#d3d3d3"> 
      <td align="right" colspan="8"> <img width="1" height="3" alt="" src="space.gif"></td>
    </tr>
    <tr> 
      <td align="right" colspan="8">&nbsp; </td>
    </tr>
  </tbody>
</table>
<div>&nbsp;</div>