<?php
include_once( './loginfunc.php' );
include "../include/config.php";

require "clientClass.php";
$clientfunc = new clientClass();

?>
<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script type="text/javascript" src="jquery.jeditable.js"></script>
<script type="text/javascript">	

		$(function()
		{
			
			$(document).ready(function() {
				$(".button_txt").click(function() {
					$("*").css("cursor", "wait");
				});
			});
			
			$('.contactedit').editable('updateClientContact.php', {
				 indicator : 'Saving...',
				 submit  : 'OK',
				 tooltip   : 'Click to edit...'
		 	});

			$('.del_button_txt').click(function() {
			  var bid = this.id;
			  var preid = bid.split('_');
			  var fid = preid[1];
			  

			  // Prevent double click on the button.
			 // event.preventDefault();
			  
			  
			  var mtype = $('#del_'+fid).val();
				//alert("Data Loaded: " + fid);
				$.get("delClientContact.php", { cpid: fid },
				function(){
					//alert("Data Loaded: " + data);
					/* $.get("clientContactTable.php", { cpid: fid },
					 function(showdata){
						$('#loadtbl').html(showdata);
					 });*/

					var rcpid = $("#cpid").val();

					rset = 'cpid='+rcpid;
					//var url = "showCore.php?"+rset;  
					var url = "index.php?dis=vo_staff";    

					$(location).attr('href',url);

					//$('#clientinfo').html('<p><div align="center"><img src="./images/ajax-loader.gif" /></div></p>');
					//$("#clientinfo").load("opsshowresults.php?"+rset;  

				 });
			});		   

			// Update standing Instructions
			$('.submit_base').click(function() {
			  var bid = this.id;
			  var preid = bid.split('_');
			  var fid = preid[1];
			  

			  // Prevent double click on the button.
			 // event.preventDefault();
			  
			  
			  var mtype = $('#del_'+fid).val();
				//alert("Data Loaded: " + fid);
				$.get("updateClientContact.php", { cpid: fid },
				function(){
					//alert("Data Loaded: " + data);
					/* $.get("clientContactTable.php", { cpid: fid },
					 function(showdata){
						$('#loadtbl').html(showdata);
					 });*/

					var rcpid = $("#cpid").val();

					rset = 'cpid='+rcpid;
					//var url = "showCore.php?"+rset;  
					var url = "index.php?dis=vo_staff";    

					$(location).attr('href',url);

					//$('#clientinfo').html('<p><div align="center"><img src="./images/ajax-loader.gif" /></div></p>');
					//$("#clientinfo").load("opsshowresults.php?"+rset;  

				 });
			});		   

		/*	$('.button_txt').click(function(event) {
			  var bid = this.id;
			  var preid = bid.split('_');
			  var fid = preid[1];
			  
			  var mtype = $('#notify_'+fid).val();
			  var callername = $('#caller_'+fid).val();
  			  var callerconame = $('#callerconame_'+fid).val();
  			  var callerno = $('#callerno_'+fid).val();
  			  var mmsg = $('#msg_'+fid).val();
			
			  // Prevent double click on the button.
			  event.preventDefault();
			  //rset = 'sendtype='+mtype+'&msg='+encodeURIComponent(mmsg);
			  //$("#clientinfo").load("opsshowresults.php?"+rset;  
			   $.post("logSendMsg.php",{ ccid: fid, sendtype: mtype, msg: mmsg, ccallername: callername, ccallerconame: callerconame, ccallerno: callerno }, function(mdata) {    
					var url = "phoneHandlingDetails.php";    
					if (mdata != "")
					{
						alert(mdata);
					}
					$(location).attr('href',url);  
				});   
			});		   */

		});

</script>

<?php

$cp_id=$_GET["cpid"];


?>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tbody>
    <tr bgcolor="#d3d3d3"> 
      <td > </td>
      <td ><strong>Name</strong></td>
      <td ><strong>a.k.a</strong></td>
      <td ><strong>Email</strong></td>
      <td ><strong>Mobile</strong></td>
      <td align="center" ><strong>Call Forward Number</strong></td>
      <td align="center" ><strong>Can Provide This Number</strong></td>
      <td align="center" ><strong>Default Instructions</strong></td>
    </tr>
    <?php
		$client_contact_data = $clientfunc->getClientContacts($cp_id);
		$check_cc_result = mysql_num_rows($client_contact_data);
		if ($check_cc_result != 0)
		{
			while ($ccon_row = mysql_fetch_array($client_contact_data))
			{
				$ccon_id = $ccon_row["id"];
				$ccon_name = $ccon_row["contact_name"];
				$ccon_alias = $ccon_row["contact_alias"];
				$ccon_email = $ccon_row["contact_email"];
				$ccon_number = $ccon_row["contact_number"];
				$ccon_msg = $ccon_row["additional_message"];
				$ccon_xfernum = $ccon_row["attended_transfer_number"];
				$ccon_num_give = $ccon_row["number_to_provide"];
				
				/*$mmsg = "Please enter proper Email Address.";
				echo "<script language=\"javascript\"> alert('$ccon_id')</script>"; */

	?>

    <tr> 
      <td><input name="del_<?=$ccon_id;?>" type="submit" id="del_<?=$ccon_id;?>" value="Delete" class="del_button_txt">
                <input name="cpid" type="hidden" value="<?=$cp_id;?>">
      </td>
      <td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="name_<?=$ccon_id;?>"><?=$ccon_name;?></td>
				<td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="alias_<?=$ccon_id;?>"><?=$ccon_alias;?></td>	
				<td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="email_<?=$ccon_id;?>"><?=$ccon_email;?></td>
				<td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="mobile_<?=$ccon_id;?>"><?=$ccon_number;?></td>
				<td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="axfer_<?=$ccon_id;?>"><?=$ccon_xfernum;?></td>
				<td class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="numshow_<?=$ccon_id;?>"><?=$ccon_num_give;?></td>
<td id="email_<?=$ccon_id;?>">
				
				<?php
                	if ($ccon_email != "")
					{
						//echo "<option value=\"email\">Notify by Email</option>";			
						echo "Notify By Email.";			

					}
					if ($ccon_number != "")
					{
						//echo "<option value=\"sms\">Notify by SMS</option>";		
						echo "Notify By SMS.";			
	
					}
					/*if ($ccon_number != "" && $ccon_email != "")
					{
						echo "<option value=\"both\">Send to both Mobile and Email.</option>";			
					}*/
					if ($ccon_xfernum != "")
					{
						//echo "<option value=\"calltransferred\">Foward All Call(s)</option>";		
						echo "Forward All Call(s).";			
	
					}
				  ?>

                </td>

      <!-- <td>Sean</td>
      <td>Blackman</td>
      <td>sean@flexiesolutions.com</td>
      <td>+6590091550</td>
      <td align="center"><select name="select4" class="inputtext" tabindex="5">
          <option value="Yes" selected>Yes</option>
          <option value="No">No</option>
        </select></td>
      <td align="center"><select name="select" class="inputtext" tabindex="6">
          <option value="Yes" selected>Yes</option>
          <option value="No">No</option>
        </select></td>
      <td align="center"><select name="select2" class="inputtext">
          <option value="SMS" selected>SMS</option>
          <option value="Email">Email</option>
        </select></td>
    </tr> -->
    <tr bgcolor="#f1f1f1"> 
      <td colspan="2" align="center"><div align="right"><strong>Customer not available message:</strong></div></td>
     <!--  <td colspan="4" align="center"><input name="Input" type="text" class="inputtext" tabindex="1" value="custom message" size="100"></td> -->
       <td colspan="8" class="contactedit" align="center" onMouseOver="this.className='normalActive'" onMouseOut="this.className='normal'" id="additionmsg_<?=$ccon_id;?>"><?=$ccon_msg;?></td>


    </tr>
    		<?php
    		}
		}
		else
		{
			echo "<tr><td colspan=\"7\"></td></tr> ";
		}

	   ?>

    <tr bgcolor="#d3d3d3"> 
      <td align="right" colspan="8"> <img width="1" height="3" alt="" src="space.gif"></td>
    </tr>
    <tr> 
      <td align="right" colspan="8"> <img width="1" height="3" alt="" src="space.gif"></td>
    </tr>
  </tbody>
</table>
