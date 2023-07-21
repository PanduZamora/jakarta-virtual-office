<?  session_start();
    $version = $_GET["version"];
    $in_monthly = $_GET["monthly"];
	$in_loc = $_GET["inloc"];
	$in_plan = $_GET["plan"];
	$in_term = $_GET["term"];
	$in_addon = $_GET["addon"];
	include 'config.php';
	//print_r($_GET);

   // http://voffice.co.id/2017b/plansdetails.php?plan=Gold&term=24&incoupon=undefined&inloc=Kirana

      if($version == "new" && $in_monthly != "yes"){

         if($in_plan == "VirtualOfficeSilver"){
            $fplan = array("6500000","13000000");
         }elseif($in_plan == "VirtualOfficeGold"){
            $fplan = array("8910000","16830000");
         }elseif($in_plan == "VirtualOfficePlatinum"){
            $fplan = array("11616000","20064000");
         }elseif($in_plan == "VirtualOfficePlatinumPlus"){
            $fplan = array("12750000","21900000");
		}elseif($in_plan == "midtranstest"){
            $fplan = array("10000","10000");	 
         }
         
         if($in_term == "12"){
            $fterms = 0;
         }elseif($in_term == "24"){
            $fterms = 1;
         }
         
         $price = $fplan[$fterms];
      }
		if($version == "new" && $in_monthly == "yes"){

         if($in_plan == "VirtualOfficeSilver"){
            $fplan = array("UN");
         }elseif($in_plan == "VirtualOfficeGold"){
            $fplan = array("UN");
         }elseif($in_plan == "VirtualOfficePlatinum"){
            $fplan = array("1100000");
         }elseif($in_plan == "VirtualOfficePlatinumPlus"){
            $fplan = array("1250000");
		}elseif($in_plan == "midtranstest"){
            $fplan = array("10000","10000");	 
         }

         
         $price = $fplan[0];
      }
      else {
            $centre = "UN";

      }

	//MIDTRANS TEST
	if($in_plan != "midtranstest"){
	$gst = $price*.1;
	$total_price = $gst+$price;
	}else{
	$total_price = $price;
	}

	//round up
	$price = round($price,2);
	$gst = round($gst,2);
	$total_price = round($total_price,2);

	if($in_monthly=="yes"){
    $monthly_debit = $price+$gst;
	$total_price = $total_price*2;	
	}

	//set sessions
	$_SESSION['price']=$price;
	$_SESSION['gst']=$gst;
	$_SESSION['total_price']=$total_price;
	

if($in_monthly!="yes"){


?>
<table class="table table-striped table-bordered">
<? if($price== "NA" && $centre==""){
echo "<tr><h3 class=\"text-center color-primary\">Sorry, this plan is not applicable for the ". $in_term ." month(s) term.</h3></tr>";
}
else if($price== "0" && $centre=="UN"){ 
echo "<tr><h3 class=\"text-center color-primary\">This location is not ready yet, please check back later</h3></tr>";

}else{ ?>
<thead>
<tr>
	<th colspan="2"><h5 class="bold-h6 mb8">Plan Fee</h5></th>
</tr>
</thead>
<tbody>

<tr>
	<th scope="row">Plan & Addon Total Amount</th>
	<td>IDR <span class="number"><?=number_format($price,0,"",".")?></span></td>
</tr>
<tr>
	<th scope="row">Plan Setup Fee</th>
	<td>IDR <span class="number">0.00</span> <span class="sub">(One Time Setup Fee)</span></td>
</tr>
<tr>
	<th scope="row">Final VAT Amount (10%)</th>
	<td>IDR <span class="number"><?=number_format($gst,0,"",".")?></span></td>
</tr>
</tbody>
<tfoot>
<tr>
	<th scope="row"><h5 class="bold-h6 mb8">Final Amount Due</h5></th>
	<td><h5 class="bold-h6 mb8">IDR <span class="number"><?=number_format($total_price,0,"",".")?></span></h5></td>
</tr>
</tfoot>
<? } ?>
</table>
<? if($price!= "NA") 
echo '<p class="sub text-center">All prices in Indonesian Rupiah (IDR)</p>';
					   
					   
$_SESSION['monthly_debit']=$total_price;
}
if($in_monthly=="yes"){



?>
<table class="table table-striped table-bordered">
<? if($price== "NA" && $centre==""){
echo "<tr><h3 class=\"text-center color-primary\">Sorry, this plan is not applicable for the ". $in_term ." month(s) term.</h3></tr>";
}
else if($price== "0" && $centre=="UN"){ 
echo "<tr><h3 class=\"text-center color-primary\">This location is not ready yet, please check back later</h3></tr>";

}else{ ?>
<thead>
<tr>
	<th colspan="2"><h5 class="bold-h6 mb8">Plan Fee</h5></th>
</tr>
</thead>
<tbody>

<tr>
	<th scope="row">Plan & Addon Total Amount</th>
	<td>IDR <span class="number"><?=number_format($price,0,"",".")?></span></td>
</tr>
<tr>
	<th scope="row">Plan Setup Fee</th>
	<td>IDR <span class="number">0.00</span> <span class="sub">(One Time Setup Fee)</span></td>
</tr>
<tr>
	<th scope="row">Final VAT Amount (10%)</th>
	<td>IDR <span class="number"><?=number_format($gst,0,"",".")?></span></td>
</tr>
<tr>
	<th scope="row">Monthly Debit Amount</th>
	<td>IDR <span class="number"><?=number_format($monthly_debit,0,"",".")?></span></td>
</tr>	
</tbody>
<tfoot>
<tr>
	<th scope="row"><h5 class="bold-h6 mb8">Final Amount Due Today</h5></th>
	<td><h5 class="bold-h6 mb8">IDR <span class="number"><?=number_format($total_price,0,"",".")?></span></h5></td>
</tr>
</tfoot>
<? } ?>
</table>
<? if($price!= "NA") 
echo '<p class="sub text-center">All prices in Indonesian Rupiah (IDR)</p>';
$_SESSION['monthly_debit']=$monthly_debit;
}

?>