<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script type="text/javascript" src="jquery.jeditable.js"></script>
<script type="text/javascript" src="jquery.table.addrow.js"></script>
<script type="text/javascript">	

  		$(document).ready(function(){
				var lcpid = $("#cpid").val();
				var lcid = $("#cid").val();
				$.get("clientContactTable.php", { cpid: lcpid, cid: lcid },
				 function(showdata){
					//alert("Data Loaded: " + data);
					$('#loadtbl').html('<p><div align="center"><img src="./images/ajax-loader.gif" /></div></p>');
					$('#loadtbl').html(showdata);
				 });
				
		});


		$(function()
		{

			// for showing things are unning on cursor
			$(document).ready(function() {
				$(".submit_base").click(function() {
					$("*").css("cursor", "wait");
				});
			});
			
			$('.button_txt').click(function() {
			  var bid = this.id;
			  var preid = bid.split('_');
			  var fid = preid[1];
			  
			  var mtype = $('#notify_'+fid).val();
  			  var mmsg = $('#msg_'+fid).val();

			  alert(mmsg);
			});		   
		
			$('.contactedit').editable('updateClientContact.php', {
				 indicator : 'Saving...',
				 submit  : 'OK',
				 tooltip   : 'Click to edit...'
		 	});
			
			
			$('#add').click(function() {
					 
				var fcpid = $("#cpid").val();
				var fcid = $("#cid").val();
				
				incpid = 'cpid='+fcpid+'&cid='+fcid;
	
				$.get("addNewContact.php", { cpid: fcpid, cid: fcid },
				function(){
					//alert("Data Loaded: " + data);
					 $.get("clientContactTable.php", { cpid: fcpid },
					 function(showdata){
						$('#loadtbl').html(showdata);
					 });
					
				 });
				
			});	   



		});

</script>
<?php

$void = $clientfunc-> portal_getClientVOID($_SESSION["mid"]);
$f_cid = $_SESSION["mid"];


$in_searchtype = $_GET["searchtype"];
//$in_searchfor = $_GET["searchfor"];
$plan_flag = 0;


//$in_searchfor = $clientfunc->getclientplanid($void, $f_cid);

//if ($in_searchtype == "planid")
//{
$chk_dup_plans = $clientfunc->getNumberClientsPlanwithContacts($f_cid, 1);

if ($chk_dup_plans == 1)
{
	$cplaninfo = $clientfunc->getClientsPlanwithContacts($f_cid,1);

	$planinfo = $clientfunc->getClientsPlanwithContactsInfo($fpid,1);
	$prow = mysql_fetch_array($cplaninfo);

	if ($prow != "")
	{
		$cp_id = $prow["cp_id"];
		$cid = $prow["client_id"];
		$pid = $prow["product_id"];
		$void = $prow["vo_id"];
		$pstatus = $prow["status"];
		$max_clients = $prow["max_contacts"];
	
		$planname = $planfunc->getPlanName($pid);
		$planstatus = $planfunc->getPlanStatus($pstatus);

		$plan_flag = 1;
	}
	else
	{
			$jmsg = "No Client Plan with Call Logging Found. Code 1. ";
			echo "<script language=\"javascript\"> alert('$jmsg')</script>";
			exit(0);
	}
}
else
{
			$jmsg = "More than 1 Client Plan Found. Code 2. ";
			echo "<script language=\"javascript\"> alert('$jmsg')</script>";
			//exit(0);
	
}
//}

if ($plan_flag == 1)
{
	$searchrr = $clientfunc->getManageClientsInfo("clientid",$cid);
}
else
{
	$searchrr = $clientfunc->getManageClientsInfo($in_searchtype, $in_searchfor);
	$cp_id = $in_searchfor;
}

$_SESSION["cpid"] = $cp_id;

$check_result = mysql_num_rows($searchrr);

if ($check_result == 1)
{
	// found exact
	$lrow = mysql_fetch_array($searchrr);
	$cid = $lrow["clientid"];
	$coname = $lrow["coname"];
	

	// get number of client outstanding mails
	//$num_outstanding_mails = $clientfunc->getClientsOutstandingMails($cid);

	// Get general info
	//$client_general_info = $clientfunc->getClientGeneralInfo($cid);

	// Get client Prepaid Credit
	//$client_prepaid_credit = $clientfunc->getClientPrepaidCredit($cid);

	
}
elseif ($check_result > 1)
{
	// more then 1 ? duh!
	$jmsg = "More than 1 Client Found. Please change your Search Method.";
	echo "<script language=\"javascript\"> alert('$jmsg')</script>";
	exit(0);

		
}
elseif ($check_result == 0)
{
	// found non
	$jmsg = "No Client Found.";
	echo "<script language=\"javascript\"> alert('$jmsg')</script>";
	exit(0);

}
?>


<!----content starts here------->

<div id="subNavigation">
	
  <div class="grid_7" id="subNavigationItems"><?php include("vo_calls.html")?></div>
        
  <div class="grid_5" id="subNavigationTitle"><b><span class="med16_grey">virtual 
    office: </span><span class="med16_theme">edit staff profile</span></b></div>
		<div class="clear"></div>
</div>

<div class="clear">
		  <input name="cid" id="cid" type="hidden" value="<?=$cid;?>" />       
          <input name="cpid" id="cpid" type="hidden" value="<?=$cp_id;?>" />

</div>

<div class="grid_12">
<p><strong> Individual call management</strong></p>
<p>You can request your mails to be forwarded to you either when you need it by 
  informing us via email or by calling our Client Service team. Otherwise, You 
  can place a standing instruction so that our team will know what to do with 
  your mails each time we receive it. 
 <div>&nbsp;</div>     
      
<div id="loadtbl">

</div>

<input type="submit" name="add" id="add" value="Add Contact" class="submit_base">
<p>&nbsp;
<div>&nbsp;</div>