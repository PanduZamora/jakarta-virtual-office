
<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><?php include("vo_calls.html")?></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">calls</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
<p><strong> Call Log Information: </strong></p>
<center>
  <span class="med14_theme"><b>Calls 
  Log</b></span>
</center>
<img src="space.gif" width="1" height="2" alt=""><br>
<form name="form1" method="post" action="">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr bgcolor="#d3d3d3"> 
        <td align="center"><strong>No</strong></td>
        <td width="10%" align="center"><strong>Date</strong></td>
        <td width="10%" align="center"><strong>Time</strong></td>
        <td width="10%"><div align="center"><strong>Caller Name</strong></div></td>
        <td width="10%"><div align="center"><strong>Caller From</strong></div></td>
        <td width="10%" align="center"><strong>Caller No</strong></td>
        <td width="10%" align="center"><strong>Log As</strong></td>
        <td width="25%" align="left"><strong>Comments</strong></td>
        <td width="10%" align="center"><strong>Call taken by</strong></td>
      </tr>
      <tr> 
               <?php
			   		$call_cnt = 1;
			   		$mt_date = date ("Y-m-d", time());
					
				  	$call_results = $clientfunc->portal_main_page_getClientCallfortheDay($_SESSION["mid"], $mt_date);

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
					 $staffname = $helperfunc->getStaffName($call_rows['operator']);
			  
					echo "<tr bgcolor=\"$bg_color_set\"> 
						<td>".$call_cnt."</td>
						<td align=\"center\">".$call_rows['log_date']."</td>
						<td align=\"center\">".$call_rows['log_time']."</td>
						<td align=\"center\">".$call_rows['caller_name']."</td>
						<td align=\"center\">".$call_rows['caller_coname']."</td>
						<td align=\"center\">".$call_rows['caller_no']."</td>
						<td align=\"center\">".$call_rows['notify_type']."</td>
						<td><div align=\"left\">".$call_rows['msg']."</div></td>
						<td align=\"center\">".$staffname."</td>
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

      <tr bgcolor="#d3d3d3"> 
        <td align="right" colspan="9"> <img width="1" height="3" alt="" src="space.gif"></td>
      </tr>
      <tr> 
        <td align="right" colspan="9"> <img width="1" height="3" alt="" src="space.gif"><br> 
          <img alt="" src="link.jpg"> <a title="Previous Mails" href="">Previous 
          Mails</a> </td>
      </tr>
    </tbody>
  </table>
</form>
<div>&nbsp;</div>