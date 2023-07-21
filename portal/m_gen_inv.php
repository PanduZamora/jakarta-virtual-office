<?php
		include_once( './loginfunc.php' );

		include "../include/config.php";

		//include "config.php";
		// Require the class
		require_once dirname(__FILE__) . '/HTML_ToPDF.php';
		//require_once dirname(__FILE__) . '/PDFEncryptor.php';
		// Create a unique filename for the resulting PDF

		/*$passinfo  = base64_decode($_REQUEST["info"]);
	
		$prep_info = explode ("-", $passinfo);
		$a = $prep_info[0];
		$qinv = $prep_info[1];*/
		
		$a=$_REQUEST["vo"];
		$qinv=$_REQUEST["inv"];
		
		$linkToPDFFull = $linkToPDF = tempnam(dirname(__FILE__), 'PDF-');
		// Remove the temporary file it creates
		unlink($linkToPDFFull);
		// Give it an extension
		$linkToPDFFull .= '.pdf';
		$linkToPDF .= '.pdf';
		// Make it web accessible
		$linkToPDF = basename($linkToPDF);
		$out_filename = $a."-".$qinv.".pdf";
		
		$defaultDomain = WEB_PATH;
		// Full path to the file to be converted (this time a webpage)
		// change this to your own domain
		//$htmlFile = 'https://'.$defaultDomain.'/focloud/batch_inv_template.php?vo='.$a.'&inv='.$qinv;
		//$htmlFile = 'https://'.$defaultDomain.'/inv_template03_v2.php';
		$htmlFile = 'http://'.$defaultDomain.'/inv_template03_v2.php?vo='.$a.'&inv='.$qinv;

		//$htmlFile = 'https://'.$defaultDomain.'/focloud/receipt_template.php';

		$pdf =& new HTML_ToPDF($htmlFile, $defaultDomain);
		$pdf->setAdditionalCSS('
		body {
			background: #ffffff url(topborder.jpg) left top repeat-x;
			color: #424242;
			font-family: Arial, Tahoma, Trebuchet MS, Helvetica, Garamond, Georgia;
			font-size: 10em;
			text-align: center;
			}
		');
		$result = $pdf->convert();
		if (is_a($result, 'HTML_ToPDFException')) 
		{
			die($result->getMessage());
		}
		else 
		{
			// Move the generated PDF to the web accessible file
			//copy($result, $linkToPDFFull);
			copy($result, $linkToPDFFull);
			unlink($result);
			header('Pragma: public');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Content-Type: application/pdf');
			header('Content-Disposition: attachment; filename='.$out_filename);
			readfile($linkToPDFFull);
			//echo $linkToPDFFull;
			unlink($linkToPDFFull);
			//unlink($linkToPDFFull);

		}

	


?>
