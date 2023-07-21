<?php
include_once( './loginfunc.php' );
include "../include/config.php";

 	
$a = $_GET["vo"];
$qinv = $_GET["inv"];

// Remote server to gen the invoice
$defaultDomain = WEB_PATH;
$htmlFile = 'http://'.$defaultDomain.'/r_gen_inv.php';

// post date that works
$invdata = array('vo' => $a, 'inv' => $qinv);

// Path to store genrated and transfered file
$path = '/home/voffice/www/invtmp/'.$a.'-'.$qinv.'.pdf';
$out_filename = $a."-".$qinv.".pdf";
 
$fp = fopen($path, 'w');

$c = curl_init($htmlFile);
curl_setopt($c, CURLOPT_POST, 1);
curl_setopt($c, CURLOPT_POSTFIELDS, $invdata);
curl_setopt($c, CURLOPT_RETURNTRANSFER, 0);

curl_setopt($c, CURLOPT_FILE, $fp);

$result = curl_exec($c);

// This part to generate the download locally
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename='.$out_filename);
readfile($path);

curl_close($c);
fclose($fp);

// remove generated pdf in tmp folder
unlink($path);

?>