<?php


function getProduct($in_plan, $in_term, $in_addon, $type, $in_coupon, $loc)
{

	include "config.php";		

	if ($in_addon == "faxup" || $in_addon=="vsup")
	{
		$fax_price = $addon_fax_price;	
	}
	else
	{
		$fax_price = 0;	
	}

	if ($in_addon == "smsup" || $in_addon=="vsup")
	{
		$sms_price = $addon_sms_price;	
	}
	else
	{
		$sms_price = 0;	
	}

	if ($in_plan == "VirtualOfficeSilver")
	{
		
			// if ($in_term == 3 || $in_term == 6)
			if ($in_term == 3)
			{
				// if ($loc == "Empire" || $loc == "MontKiara" || $loc == "Jakarta")
				if ($loc == "MegaKuningan" || $loc == "JakartaPusat" || $loc == "office8" || $loc == "PantaiIndah" || $loc == "pxplaza" || $loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" || $loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio"  || $loc == "GrandSlipi"   || $loc == "CEOBuilding" || $loc == "fxplaza")
				{
					if ($type == 1)
					{
						print "<script type=\"text/javascript\">"; 
						print "alert('Virtual Office Silver (Indonesia) has a Minimum Term of 12 months. 12 months term will be selected.');";
                        print '$("#fterms").attr("selectedIndex", 1);';
						print "</script>";  
                        $in_term = 6;
					}
				}
				//$f_tot = $vs[2] + ($fax_price * $in_term) + $sms_price;
			}
			//else
			//{
        if ($loc == "Empire")
        {
        
            if ($in_term == 24)
            {
                $f_tot = $evs[3] + ($fax_price * 24) + $sms_price;	
            }
            else
            {
                $f_tot = $evs[2] + ($fax_price * 12) + $sms_price;
            }
        }
        elseif ($loc == "MontKiara")
        {
            if ($in_term == 24)
            {
                $f_tot = $vs[3] + ($fax_price * 24) + $sms_price;	
            }
            else
            {
                $f_tot = $vs[2] + ($fax_price * 12) + $sms_price;
            }
        }
		elseif ($loc == "office8" || $loc == "PantaiIndah")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0]) + ($fax_price * 3) + $sms_price;
				}
		}
		
		elseif ($loc == "MegaKuningan" )
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
		elseif ($loc == "JakartaPusat")
		{
			
				if ($in_term == 24)
				{
					$f_tot = ($tctvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 36)
				{
					$f_tot = ($tctvs[4]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 12)
				{
					$f_tot = ($tctvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					$f_tot = ($tctvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($tctvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			
				if ($in_term == 24)
				{
					$f_tot = ($jkvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 36)
				{
					$f_tot = ($jkvs[4]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 12)
				{
					$f_tot = ($jkvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					$f_tot = ($jkvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jkvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
		elseif ($loc == "fxplaza")
		{
			
				if ($in_term == 24)
				{
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 36)
				{
					$f_tot = ($jvs[4]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 12)
				{
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "GrandSlipi")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "CEOBuilding")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio" )
		{
				if ($in_term == 36)
				{
					$f_tot = ($sujvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					$f_tot = ($sujvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					$f_tot = ($sujvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					$f_tot = ($sujvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($sujvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}
		}
		elseif ($loc == "Melbourne")
		{
				if ($in_term == 24)
				{
					$f_tot = ($auvs[3] * 24) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					$f_tot = ($auvs[2] * 12) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					$f_tot = ($auvs[1] * 6) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($auvs[0] * 3) + ($fax_price * 3) + $sms_price;
				}

		}

	  //}
	}
	elseif ($in_plan == "VirtualOfficeGold")
	{
		if ($in_addon=="smsup")	
		{
			if ($type == 1)
			{
				print "<script type=\"text/javascript\">"; 
				print "alert('This Addon is not available for this Services')"; 
				print "</script>";  
			}
		}

		if ($loc == "MontKiara")
		{
			if ($in_term == 3)
			{
				$f_tot = ($vg[0] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($vg[1] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($vg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($vg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "Empire")
		{
			if ($in_term == 3)
			{
				$f_tot = ($evg[0] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($evg[1] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($evg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($evg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "Melbourne")
		{
			if ($in_term == 3)
			{
				$f_tot = ($auvg[0] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($auvg[1] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($auvg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($auvg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "MegaKuningan")
		{
			if ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[4] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}
		}
		elseif ($loc == "JakartaPusat")
		{
			if ($in_term == 3)
			{
				$f_tot = ($tctvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($tctvg[1] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($tctvg[4] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($tctvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($tctvg[3] + $fax_price );
			}
		}
			elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 3)
			{
				$f_tot = ($jkvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($jkvg[1] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($jkvg[4] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jkvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($jkvg[3] + $fax_price );
			}
		}
		elseif ($loc == "fxplaza")
		{
			if ($in_term == 3)
			{
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($jvg[4] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($jvg[3] + $fax_price );
			}
		}
		elseif ($loc == "GrandSlipi")
		{
			if ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[4] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}
		}
		elseif ($loc == "CEOBuilding")
		{
			if ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[4] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}
		}
		elseif ($loc == "office8")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvg[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvg[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvg[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvg[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvg[0]) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[0] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[4] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[3] + $fax_price );
			}
		}
	}
	elseif ($in_plan == "VirtualOfficePlatinum")
	{
		if ($in_addon=="smsup" || $in_addon=="faxup")	
		{
			if ($type == 1)
			{
				print "<script type=\"text/javascript\">"; 
				print "alert('This Addon is not available for this Service.')"; 
				print "</script>";  
			}
		}

		if ($loc == "MontKiara")
		{

			if ($in_term == 3)
			{
				$f_tot = $vp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $vp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $vp[2] * $in_term;
			}
			else
			{
				$f_tot = $vp[3] * $in_term;
			}
		}
		elseif ($loc == "Empire")
		{
			if ($in_term == 3)
			{
				$f_tot = $evp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $evp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $evp[2] * $in_term;
			}
			else
			{
				$f_tot = $evp[3] * $in_term;
			}
		}
		elseif ($loc == "MegaKuningan")
		{
			if ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 36)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[4];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}
		}
		elseif ($loc == "GrandSlipi")
		{
			if ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 36)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[4];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}
		}
		elseif ($loc == "CEOBuilding")
		{
			if ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 36)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[4];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}
		}
		elseif ($loc == "JakartaPusat")
		{
			if ($in_term == 3)
			{
				$f_tot = $tctvp[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $tctvp[1];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $tctvp[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $tctvp[2];
			}
			else
			{
				$f_tot = $tctvp[3];
			}
		}
			elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 3)
			{
				$f_tot = $jkvp[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jkvp[1];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $jkvp[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jkvp[2];
			}
			else
			{
				$f_tot = $jkvp[3];
			}
		}
			elseif ($loc == "fxplaza" )
		{
			if ($in_term == 3)
			{
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $jvp[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jvp[2];
			}
			else
			{
				$f_tot = $jvp[3];
			}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $sujvp[0];
			}
			elseif ($in_term == 36)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $sujvp[4];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $sujvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $sujvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $sujvp[3];
			}
		}
		elseif ($loc == "Melbourne")
		{
			if ($in_term == 3)
			{
				$f_tot = $auvp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $auvp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $auvp[2] * $in_term;
			}
			else
			{
				$f_tot = $auvp[3] * $in_term;
			}
		}
		elseif ($loc == "office8" || $loc == "PantaiIndah")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvp[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvp[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvp[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvp[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvp[0]) + ($fax_price * 3) + $sms_price;
				}
		}

	}
	elseif ($in_plan == "Company_Registration_Malaysian_Director")
	{
		$f_tot = $lco_reg;
	}
	elseif ($in_plan == "Company_Registration_Foreign_Director")
	{
		$f_tot = $fco_reg;
	}
	elseif ($in_plan == "Company_Registration_Foreign_Director_2")
	{
		$f_tot = $fco_reg;
	}
			elseif ($in_plan == "vSpacePrivate")
	{
		if ($loc == "MegaKuningan")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspacepr[0];	
				
			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
					
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "JakartaPusat")
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "office8")
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "fxplaza" )
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
				if ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspacepr[0];	
				
			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
					
				$f_tot = $vspacepr[2];	
	
			}
			
		}
	}
	elseif ($in_plan == "vSpaceCo-Working")
	{
		if ($loc == "MegaKuningan")
		{
			if ($in_term == 'plan1')
			{	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspaceco[2];	
						
			}
		
		}
		if ($loc == "JakartaPusat")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "office8")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
				if ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 'plan1')
			{	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspaceco[2];	
						
			}
		
		}
		
	}


	if ($in_coupon != "")
	{
		$discount_amt = getCouponDiscount($f_tot, $in_plan, $in_coupon);
			
	}

	$r_tot = $f_tot - $discount_amt;
	return $r_tot;
}

function getProductRawTotal($in_plan, $in_term, $in_addon, $type, $loc)
{
	include "config.php";		

	if ($in_addon == "faxup" || $in_addon=="vsup")
	{
		$fax_price = $addon_fax_price;	
	}
	else
	{
		$fax_price = 0;	
	}

	if ($in_addon == "smsup" || $in_addon=="vsup")
	{
		$sms_price = $addon_sms_price;	
	}
	else
	{
		$sms_price = 0;	
	}

	if ($in_plan == "VirtualOfficeSilver")
	{
		/*if ($in_term == 3 || $in_term == 6)
		{
			if ($type == 1)
			{
				print "<script type=\"text/javascript\">"; 
				print "alert('Virtual Office Silver has a Minimum Term of 12 months. 12 months term will be selected.')"; 
				print "</script>";  
			}
			//$f_tot = $vs[2] + ($fax_price * $in_term) + $sms_price;
		}*/
		//else
		//{
			
		/*		print "<script type=\"text/javascript\">"; 
				print "alert('$in_term')"; 
				print "</script>";  */

		if ($loc == "MontKiara")
		{
			if ($in_term == 24)
			{
				$f_tot = $vs[3] + ($fax_price * 24) + $sms_price;
	
			}
			else
			{
				$f_tot = $vs[2] + ($fax_price * 12) + $sms_price;
			}
		}
		elseif ($loc == "Empire")
		{
			if ($in_term == 24)
			{
				$f_tot = $evs[3] + ($fax_price * 24) + $sms_price;	
			}
			else
			{
				$f_tot = $evs[2] + ($fax_price * 12) + $sms_price;
			}
		}
		elseif ($loc == "Melbourne")
		{
			if ($in_term == 24)
			{
				$f_tot = ($auvs[3] * 24) + ($fax_price * 24) + $sms_price;	
			}
			elseif($in_term == 12)
			{
				$f_tot = ($auvs[2] * 12) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6)
			{
				$f_tot = ($auvs[1] * 6) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($auvs[0] * 3) + ($fax_price * 3) + $sms_price;
			}

		}
		elseif ($loc == "MegaKuningan")
		{
			if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				
				//$f_tot = $jvs[0] + ($fax_price * 1) + $sms_price;
			elseif ($in_term == 24)
			{
				// $f_tot = $jvs[3] * $in_term;
				$f_tot = $jvs[3];
			

				/*				print "<script type=\"text/javascript\">"; 
				print "alert('FTOT $jvs[3]')"; 
				print "</script>";  */
	
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
				$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
				$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				// $f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				$f_tot = ($jvs[0]) + ($fax_price * 3) + $sms_price;
			}


		}
		elseif ($loc == "GrandSlipi")
		{
			if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				
				//$f_tot = $jvs[0] + ($fax_price * 1) + $sms_price;
			elseif ($in_term == 24)
			{
				// $f_tot = $jvs[3] * $in_term;
				$f_tot = $jvs[3];
			

				/*				print "<script type=\"text/javascript\">"; 
				print "alert('FTOT $jvs[3]')"; 
				print "</script>";  */
	
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
				$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
				$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				// $f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				$f_tot = ($jvs[0]) + ($fax_price * 3) + $sms_price;
			}


		}
		elseif ($loc == "CEOBuilding")
		{
			if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				
				//$f_tot = $jvs[0] + ($fax_price * 1) + $sms_price;
			elseif ($in_term == 24)
			{
				// $f_tot = $jvs[3] * $in_term;
				$f_tot = $jvs[3];
			

				/*				print "<script type=\"text/javascript\">"; 
				print "alert('FTOT $jvs[3]')"; 
				print "</script>";  */
	
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
				$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
				$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				// $f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				$f_tot = ($jvs[0]) + ($fax_price * 3) + $sms_price;
			}


		}
		elseif ($loc == "JakartaPusat")
		{
			if ($in_term == 36)
			{
				$f_tot = $tctvs[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $tctvs[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $tctvs[2];
			}
			elseif ($in_term == 6 || $in_term == 3)
			{
				$f_tot = $tctvs[1];
			}
			else
			{
				$f_tot = $tctvs[1];
			}
		}
		elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jkvs[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jkvs[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jkvs[2];
			}
			elseif ($in_term == 6 || $in_term == 3)
			{
				$f_tot = $jkvs[1];
			}
			else
			{
				$f_tot = $jkvs[1];
			}
		}
		elseif ($loc == "fxplaza" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jvs[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jvs[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jvs[2];
			}
			elseif ($in_term == 6 || $in_term == 3)
			{
				$f_tot = $jvs[1];
			}
			else
			{
				$f_tot = $jvs[1];
			}
		}
		elseif ($loc == "office8" || $loc == "PantaiIndah")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvs[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvs[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvs[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvs[0]) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($sujvs[4]) + ($fax_price * 36) + $sms_price;
				}
				
				//$f_tot = $jvs[0] + ($fax_price * 1) + $sms_price;
			elseif ($in_term == 24)
			{
				// $f_tot = $jvs[3] * $in_term;
				$f_tot = $sujvs[3];
			

				/*				print "<script type=\"text/javascript\">"; 
				print "alert('FTOT $jvs[3]')"; 
				print "</script>";  */
	
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
				$f_tot = ($sujvs[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
				$f_tot = ($sujvs[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				// $f_tot = ($jvs[0] * 3) + ($fax_price * 3) + $sms_price;
				$f_tot = ($sujvs[0]) + ($fax_price * 3) + $sms_price;
			}


		}
	}
	elseif ($in_plan == "VirtualOfficeGold")
	{
		if ($in_addon=="smsup")	
		{
			if ($type == 1)
			{
				print "<script type=\"text/javascript\">"; 
				print "alert('This Addon is not available for this Services')"; 
				print "</script>";  
			}
		}

		if ($loc == "MontKiara")
		{

			if ($in_term == 3)
			{
				$f_tot = ($vg[0] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($vg[1] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($vg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($vg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "Empire")
		{
			if ($in_term == 3)
			{
				$f_tot = ($evg[0] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($evg[1] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($evg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($evg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "Melbourne")
		{
			if ($in_term == 3)
			{
				$f_tot = $auvg[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $auvg[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($auvg[2] + $fax_price ) * $in_term;
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($auvg[3] + $fax_price ) * $in_term;
			}
		}
		elseif ($loc == "MegaKuningan")
		{
			if ($in_term == 36)
				{
					$f_tot = ($jvg[4]) + ($fax_price * 36) + $sms_price;
				}
			//$f_tot = $jvg[0] + ($fax_price ) + $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}

		}
		elseif ($loc == "GrandSlipi")
		{
			if ($in_term == 36)
				{
					$f_tot = ($jvg[4]) + ($fax_price * 36) + $sms_price;
				}
			//$f_tot = $jvg[0] + ($fax_price ) + $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}

		}
		elseif ($loc == "CEOBuilding")
		{
			if ($in_term == 36)
				{
					$f_tot = ($jvg[4]) + ($fax_price * 36) + $sms_price;
				}
			//$f_tot = $jvg[0] + ($fax_price ) + $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($jvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($jvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($jvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($jvg[3] + $fax_price );
			}

		}
		elseif ($loc == "JakartaPusat")
		{
			if ($in_term == 36)
			{
				$f_tot = $tctvg[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $tctvg[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $tctvg[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $tctvg[1];
			}
			else
			{
				$f_tot = $tctvg[0];
			}
		}
		elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jkvg[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jkvg[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jkvg[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jkvg[1];
			}
			else
			{
				$f_tot = $jkvg[0];
			}
		}
		elseif ($loc == "fxplaza" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jvg[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jvg[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jvg[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jvg[1];
			}
			else
			{
				$f_tot = $jvg[0];
			}
		}
		elseif ($loc == "office8" || $loc == "PantaiIndah")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvg[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvg[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvg[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvg[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvg[0]) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 36)
				{
					$f_tot = ($sujvg[4]) + ($fax_price * 36) + $sms_price;
				}
			//$f_tot = $jvg[0] + ($fax_price ) + $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = ($jvg[0] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				// $f_tot = ($jvg[1] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				// $f_tot = ($jvg[2] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				// $f_tot = ($jvg[3] + $fax_price ) * $in_term;
				$f_tot = ($sujvg[3] + $fax_price );
			}

		}
	}
	elseif ($in_plan == "VirtualOfficePlatinum")
	{
		if ($in_addon=="smsup" || $in_addon=="faxup")	
		{
			if ($type == 1)
			{
				print "<script type=\"text/javascript\">"; 
				print "alert('This Addon is not available for this Service.')"; 
				print "</script>";  
			}
		}

		if ($loc == "MontKiara")
		{

			if ($in_term == 3)
			{
				$f_tot = $vp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $vp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $vp[2] * $in_term;
			}
			else
			{
				$f_tot = $vp[3] * $in_term;
			}
		}
		elseif ($loc == "Empire")
		{
			if ($in_term == 3)
			{
				$f_tot = $evp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $evp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $evp[2] * $in_term;
			}
			else
			{
				$f_tot = $evp[3] * $in_term;
			}
		
		}
		elseif ($loc == "Melbourne")
		{
			if ($in_term == 3)
			{
				$f_tot = $auvp[0] * $in_term;
			}
			elseif ($in_term == 6)
			{
				$f_tot = $auvp[1] * $in_term;
			}
			elseif ($in_term == 12)
			{
				$f_tot = $auvp[2] * $in_term;
			}
			else
			{
				$f_tot = $auvp[3] * $in_term;
			}
		
		}
		elseif ($loc == "MegaKuningan")
		{
				if ($in_term == 36)
				{
					$f_tot = ($jvp[4]);
				}
				//$f_tot = $jvp[0] * $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}

		}
		elseif ($loc == "GrandSlipi")
		{
				if ($in_term == 36)
				{
					$f_tot = ($jvp[4]);
				}
				//$f_tot = $jvp[0] * $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}

		}
		elseif ($loc == "CEOBuilding")
		{
				if ($in_term == 36)
				{
					$f_tot = ($jvp[4]);
				}
				//$f_tot = $jvp[0] * $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $jvp[0];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $jvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $jvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $jvp[3];
			}

		}
		elseif ($loc == "JakartaPusat")
		{
			if ($in_term == 36)
			{
				$f_tot = $tctvp[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $tctvp[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $tctvp[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $tctvp[1];
			}
			else
			{
				$f_tot = $tctvp[0];
			}
		}
		elseif ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jkvp[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jkvp[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jkvp[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jkvp[1];
			}
			else
			{
				$f_tot = $jkvp[0];
			}
		}
		elseif ($loc == "fxplaza" )
		{
			if ($in_term == 36)
			{
				$f_tot = $jvp[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jvp[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jvp[2];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jvp[1];
			}
			else
			{
				$f_tot = $jvp[0];
			}
		}
		elseif ($loc == "office8" || $loc == "PantaiIndah")
		{
				if ($in_term == 36)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvp[4]) + ($fax_price * 36) + $sms_price;
				}
				elseif ($in_term == 24)
				{
					// $f_tot = ($jvs[3] * 24) + ($fax_price * 24) + $sms_price;	
					$f_tot = ($jvp[3]) + ($fax_price * 24) + $sms_price;	
				}
				elseif ($in_term == 12)
				{
					// $f_tot = ($jvs[2] * 12) + ($fax_price * 12) + $sms_price;
					$f_tot = ($jvp[2]) + ($fax_price * 12) + $sms_price;
				}
				elseif ($in_term == 6)
				{
					// $f_tot = ($jvs[1] * 6) + ($fax_price * 6) + $sms_price;
					$f_tot = ($jvp[1]) + ($fax_price * 6) + $sms_price;
				}
				else
				{
					$f_tot = ($jvp[0]) + ($fax_price * 3) + $sms_price;
				}
		}
				elseif ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
				if ($in_term == 36)
				{
					$f_tot = ($sujvp[4]);
				}
				//$f_tot = $jvp[0] * $in_term;
			elseif ($in_term == 3)
			{
				// $f_tot = $jvp[0] * $in_term;
				$f_tot = $sujvp[0];
			}
			elseif ($in_term == 6)
			{
				// $f_tot = $jvp[1] * $in_term;
				$f_tot = $sujvp[1];
			}
			elseif ($in_term == 12)
			{
				// $f_tot = $jvp[2] * $in_term;
				$f_tot = $sujvp[2];
			}
			else
			{
				// $f_tot = $jvp[3] * $in_term;
				$f_tot = $sujvp[3];
			}

		}
	}
			elseif ($in_plan == "vSpacePrivate")
	{
		if ($loc == "MegaKuningan")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspacepr[0];	
				
			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
					
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "JakartaPusat")
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "office8")
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		if ($loc == "fxplaza" )
		{
			if ($in_term == 'plan1')
			{

	
				$f_tot = $vspacepr[0];	

			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		
				if ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspacepr[0];	
				
			}
			elseif ($in_term == 'plan2')
			{
	
				$f_tot = $vspacepr[1];	
	
			}
			elseif ($in_term == 'plan3')
			{
					
				$f_tot = $vspacepr[2];	
	
			}
			
		}
		
	}
	elseif ($in_plan == "vSpaceCo-Working")
	{
		if ($loc == "MegaKuningan")
		{
			if ($in_term == 'plan1')
			{	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspaceco[2];	
						
			}
		
		}
		if ($loc == "JakartaPusat")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "office8")
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "KencanaTower" || $loc == "Kirana2Tower"  || $loc == "GrahaSurveyor" )
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
			if ($loc == "fxplaza" )
		{
			if ($in_term == 'plan1')
			{
	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{	
				$f_tot = $vspaceco[2];	
					
			}
		
		}
				if ($loc == "BumiMandiriII" || $loc == "IntilandTower" || $loc == "Spazio")
		{
			if ($in_term == 'plan1')
			{	
				$f_tot = $vspaceco[0];	
					
			}
			elseif ($in_term == 'plan2')
			{	
				$f_tot = $vspaceco[1];	
						
			}
			elseif ($in_term == 'plan3')
			{
	
				$f_tot = $vspaceco[2];	
						
			}
		
		}
	}

	return $f_tot;
}

function getProductRawTotalUSD($in_plan, $in_term, $type, $in_loc='')
{
	include "config.php";		

	if ($in_addon == "faxup" || $in_addon=="vsup")
	{
		$fax_price = $addon_fax_price;	
	}
	else
	{
		$fax_price = 0;	
	}

	if ($in_addon == "smsup" || $in_addon=="vsup")
	{
		$sms_price = $addon_sms_price;	
	}
	else
	{
		$sms_price = 0;	
	}

	if ($in_plan == "VirtualOfficeSilver")
	{
		if ($in_loc == 'MegaKuningan') {
			if ($in_term == 24)
			{
				$f_tot = $jvs_usd[3];
			}
			if ($in_term == 36)
			{
				$f_tot = $jvs_usd[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jvs_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($jvs_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($jvs_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
		elseif ($in_loc == 'JakartaPusat')
		{
			if ($in_term == 24)
			{
				$f_tot = $tctvs_usd[3];
			}
			if ($in_term == 36)
			{
				$f_tot = $tctvs_usd[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($tctvs_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($tctvs_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($tctvs_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
			elseif ($in_loc == 'KencanaTower')
		{
			if ($in_term == 24)
			{
				$f_tot = $jkvs_usd[3];
			}
			if ($in_term == 36)
			{
				$f_tot = $jkvs_usd[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jkvs_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($jkvs_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($jkvs_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
			elseif ($in_loc == 'office8')
		{
			if ($in_term == 36)
			{
				$f_tot = $jpvs_usd[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jpvs_usd[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jpvs_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($jpvs_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($jpvs_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
				if ($in_loc == 'BumiMandiriII') {
			if ($in_term == 24)
			{
				$f_tot = $sujvs_usd[3];
			}
			if ($in_term == 36)
			{
				$f_tot = $sujvs_usd[4];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($sujvs_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($sujvs_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($sujvs_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
	}
	elseif ($in_plan == "VirtualOfficeGold")
	{
		if ($in_loc == 'MegaKuningan') {
			if ($in_term == 3)
			{
				$f_tot = ($jvg_usd[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($jvg_usd[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jvg_usd[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($jvg_usd[3] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($jvg_usd[4] + $fax_price );
			}
		}
		elseif ($in_loc == 'JakartaPusat')
		{
			if ($in_term == 3)
			{
				$f_tot = ($tctvg_usd[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($tctvg_usd[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($tctvg_usd[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($tctvg_usd[3] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($tctvg_usd[4] + $fax_price );
			}
		}
				elseif ($in_loc == 'KencanaTower')
		{
			if ($in_term == 3)
			{
				$f_tot = ($jkvg_usd[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($jkvg_usd[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jkvg_usd[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($jkvg_usd[3] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($jkvg_usd[4] + $fax_price );
			}
		}
			elseif ($in_loc == 'office8')
		{
			if ($in_term == 36)
			{
				$f_tot = $jpvg_usd[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jpvg_usd[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jpvg_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($jpvg_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($jpvg_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
				if ($in_loc == 'BumiMandiriII') {
			if ($in_term == 3)
			{
				$f_tot = ($sujvg_usd[0] + $fax_price );
			}
			elseif ($in_term == 6)
			{
				$f_tot = ($sujvg_usd[1] + $fax_price );
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($sujvg_usd[2] + $fax_price );
			}
			elseif ($in_term == 24)
			{
				$f_tot = ($sujvg_usd[3] + $fax_price );
			}
			elseif ($in_term == 36)
			{
				$f_tot = ($sujvg_usd[4] + $fax_price );
			}
		}
	}
	elseif ($in_plan == "VirtualOfficePlatinum")
	{
		if ($in_loc == 'MegaKuningan') {
			if ($in_term == 3)
			{
				$f_tot = $jvp_usd[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jvp_usd[1];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jvp_usd[2];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $jvp_usd[4];
			}
			else
			{
				$f_tot = $jvp_usd[3];
			}
		}
		elseif ($in_loc == 'JakartaPusat')
		{
			if ($in_term == 3)
			{
				$f_tot = $tctvp_usd[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $tctvp_usd[1];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $tctvp_usd[2];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $tctvp_usd[4];
			}
			else
			{
				$f_tot = $tctvp_usd[3];
			}
		}
			elseif ($in_loc == 'KencanaTower')
		{
			if ($in_term == 3)
			{
				$f_tot = $jkvp_usd[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $jkvp_usd[1];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $jkvp_usd[2];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $jkvp_usd[4];
			}
			else
			{
				$f_tot = $jkvp_usd[3];
			}
		}
			elseif ($in_loc == 'office8')
		{
			if ($in_term == 36)
			{
				$f_tot = $jpvp_usd[4];
			}
			elseif ($in_term == 24)
			{
				$f_tot = $jpvp_usd[3];
			}
			elseif ($in_term == 12)
			{
				$f_tot = ($jpvp_usd[2]) + ($fax_price * 12) + $sms_price;
			}
			elseif($in_term == 6 || $in_term == 3)
			{
				$f_tot = ($jpvp_usd[1]) + ($fax_price * 6) + $sms_price;
			}
			elseif($in_term == 3)
			{
				$f_tot = ($jpvp_usd[0]) + ($fax_price * 3) + $sms_price;
			}
		}
				if ($in_loc == 'BumiMandiriII') {
			if ($in_term == 3)
			{
				$f_tot = $sujvp_usd[0];
			}
			elseif ($in_term == 6)
			{
				$f_tot = $sujvp_usd[1];
			}
			elseif ($in_term == 12)
			{
				$f_tot = $sujvp_usd[2];
			}
			elseif ($in_term == 36)
			{
				$f_tot = $sujvp_usd[4];
			}
			else
			{
				$f_tot = $sujvp_usd[3];
			}
		}

	}

	return $f_tot;
}

function getCouponDiscount($total, $productname, $coupon)
{
	include "conn.php";
	$coupon_result = mysql_query("SELECT id, discount_type, discount_amount	FROM coupon_core WHERE valid_product REGEXP '$productname' AND coupon_name REGEXP '$coupon' AND coupon_status = '1'") or die(mysql_error());

	$qrow = mysql_fetch_assoc($coupon_result);
	
	if ($qrow["id"] != "")
	{
		if ($qrow["discount_type"] == "p")
		{
			$d_amt = $total * $qrow["discount_amount"];
		}
		elseif ($qrow["discount_type"] == "v")
		{
			$d_amt = $qrow["discount_amount"];
		}
	}
	else
	{
		$d_amt = 0;
	}

	return $d_amt;
}

function updateCouponUsage($productname, $coupon)
{
	include "conn.php";
	$coupon_result = mysql_query("SELECT id	FROM coupon_core WHERE valid_product REGEXP '$productname' AND coupon_name REGEXP '$coupon' AND coupon_status = '1'") or die(mysql_error());
	
	$update_coupon_stmt = "UPDATE coupon_core SET num_used=num_used+1 WHERE valid_product REGEXP '$productname' AND coupon_name REGEXP '$coupon' AND coupon_status = '1'";
	$update_coupon_result = mysql_query ($update_coupon_stmt) or die("Could not update Coupon table \n");

}

function getAddonDesc($in_plan, $in_addon)
{
	include "config.php";	

	$lc_currency = LCURRENCY;
	
	$faxup_desc = "Incoming fax to email & outgoing email to fax service @ ".$lc_currency.$addon_fax_price." per month.";	
	$smsup_desc = "Upgrade to SMS Notification (for Mail Notification) @ ".$lc_currency.$addon_sms_price." per year.";	
	$vsup_desc = "Incoming fax to email & outgoing email to fax service @ ".$lc_currency.$addon_fax_price." per month + Upgrade to SMS Notification (for Mail Notification) @ ".$lc_currency.$addon_sms_price." per year.";	
	$noup_desc = "No Addon Selected.";				


	if ($in_plan == "VirtualOfficeSilver")
	{
			if ($in_addon == "faxup")
			{
				$f_desc = $faxup_desc;
			}
			elseif ($in_addon == "smsup")
			{
				$f_desc = $smsup_desc;
			}
			elseif ($in_addon=="vsup")
			{
				$f_desc = $vsup_desc;
			}
			else
			{
				$f_desc = $noup_desc;
			}
	}
	elseif ($in_plan == "VirtualOfficeGold")
	{
			if ($in_addon == "faxup")
			{
				$f_desc = $faxup_desc;
			}
			else
			{
				$f_desc = $noup_desc;
			}
	}
	elseif ($in_plan == "VirtualOfficePlatinum")
	{
			$f_desc = $noup_desc;
	}

	return $f_desc;
}

?>
