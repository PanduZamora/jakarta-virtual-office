<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><?php include("vo_mails.html")?></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">mails</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear"></div>

<div class="grid_12">
<p><strong> Manage Mail(s): </strong></p>
<p>Manage your uncollected mails here.<br>
  <br><table width="100%">
  </p>
<center>
  <span class="med14_theme"><b>Mail Logs </b></span>
</center>
<img src="space.gif" width="1" height="2" alt=""><br>
<form name="form1" method="post" action="">
  <table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody>
      <tr bgcolor="#d3d3d3"> 
        <td width="5%" align="center"><strong>No</strong></td>
        <td width="10%" align="center"><strong>Receive Date</strong></td>
        <td width="15%" align="center"><strong>Type</strong></td>
        <td><strong>From</strong></td>
        <td width="20%" align="center"><strong>Status</strong></td>
        <!-- <td width="5%" align="center">&nbsp;</td> -->
      </tr>
       <?php
				  	$mail_results = $clientfunc->portal_main_page_getClientUncollectedMails($_SESSION["mid"]);
				  	$col_bgcolor = 0;
					$mail_index = 1;
					
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
					  
					echo "
					    <tr bgcolor=\"$bg_color_set\"> 
						<td align=\"center\">".$mail_index."</td>
						<td align=\"center\">".$mail_rows['log_date']."</td>
						<td align=\"center\">".$mail_rows['type']."</td>
						<td align=\"left\">".$mail_rows['log_from']."</td>
						<td align=\"center\">".$mail_status."</td>";
					//echo	"<td align=\"center\"><input type=\"checkbox\" name=\"checkbox\" value=\"".$mail_rows['id']."\"></td>
					echo "</tr>";
					//echo "<tr> ";
					
					  if ($col_bgcolor == 0)
					  {
						$col_bgcolor = 1;  
					  }
					  else
					  {
						$col_bgcolor = 0;  
					  }
					 
					  $mail_index++; 
					}
					
		?>

      <tr bgcolor="#d3d3d3"> 
        <td align="right" colspan="6"> <img width="1" height="3" alt="" src="space.gif"></td>
      </tr>
      <tr> 
        <td align="right" colspan="6"> <img width="1" height="3" alt="" src="space.gif"><br>
         <!-- <input type="submit" name="Submit" value="Forward to me" class="submit_base">  <input type="submit" name="Submit" value="Scan &amp; Email" class="submit_base"> -->
          <img alt="" src="link.jpg"> <a title="Previous Mails" href="">Previous 
          Mails</a> </td>
      </tr>
    </tbody>
  </table>
</form>
<div>&nbsp;</div>