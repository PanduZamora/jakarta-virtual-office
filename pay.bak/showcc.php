<?php

$paytype=$_REQUEST["paytype"];

if ($paytype == "cc")
{

       echo "              <tr> 
                            <td width=\"28%\" align=\"right\" valign=\"top\">Name on Card : <span class=\"required\"><font color=\"#CC0000\">*</font></span></td>
                            <td width=\"72%\"> <input class=\"form\" id=\"cc_name\" size=\"18\" maxlength=\"16\" name=\"cc_name\">
                             </td>
                          </tr>        
                          <tr> 
                            <td width=\"28%\" align=\"right\" valign=\"top\">Card Number : <span class=\"required\"><font color=\"#CC0000\">*</font></span></td>
                            <td width=\"72%\"> <input class=\"form\" id=\"cc_num\" size=\"18\" maxlength=\"16\" name=\"cc_num\">
                              <font class=\"fn\">(Our system will detect card type automatically)</font>                            </td>
                          </tr>
                          <tr bgcolor=\"#FAFAFA\"> 
                            <td width=\"28%\" align=\"right\" valign=\"top\">Expiration Date on 
                              Card : <span class=\"required\"><font color=\"#CC0000\">*</font></span></td>
                            <td width=\"72%\"> <input class=\"form\" name=\"cc_exp_mm\" size=\"4\" maxlength=\"2\">
/ 20
  <input type=\"text\" name=\"cc_exp_yy\" size=\"4\" maxlength=\"2\" class=\"form\">
    <font class=\"fn\">(mmyy)</font></td>
                          </tr>
                          <tr>
                            <td width=\"28%\" align=\"right\" valign=\"top\">Name of Issuing Bank : <font color=\"#CC0000\">*</font></td>
                            <td width=\"72%\">
                              <input type=\"text\" name=\"bankname\" class=\"form\">
                            </td>
                          </tr>
                          <tr> 
                            <td width=\"28%\" align=\"right\" valign=\"top\">Card ID/CVV2 : <span class=\"required\"><font color=\"#CC0000\">*</font></span></td>
                            <td width=\"72%\"><input class=\"form\" id=\"cc_cvv2\" name=\"cc_cvv2\" size=\"4\" maxlength=\"4\"><font class=\"fn\" >
                              <a onClick=\"Newwindow(this.href,'popup','500','500','yes');return false;\" href=\"cardcode.html\" target=\"_blank\">(what 
                              is this?)</a></font></td>
                          </tr>
						  <tr><td  valign=\"top\">&nbsp;</td>
							<td align=\"left\">
						  <font color=\"#333333\" size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\" class=\"text\">**Transaction will appear as </font><font size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\" class=\"text\"><font color=\"red\">Flexi e-Solutions Pty Ltd</font></font><font color=\"#333333\" size=\"-2\" face=\"Verdana, Arial, Helvetica, sans-serif\" class=\"text\"> in Credit Card Statement</font> </td>
						  </tr>
                        ";
						
						
}

?>
