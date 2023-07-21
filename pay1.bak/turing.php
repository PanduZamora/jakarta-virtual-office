<?php
session_name('fxpay');
session_start();


if(!isset($_SESSION["code"]))
	{
	die("Error generating turing number : no session specified. Get outta here ! :p");	// In order to arrive here, you do have to want it... so why be gentle with the intruder ? :D
	}


$code=strval($_SESSION["code"]);

// Creation of the picture, you shouldn't modify the dimensions unless you change the code's length. But well, you can do whatever you want... :)
$largeur=90;	// width
$hauteur=25;	// height
$img = imagecreate($largeur, $hauteur) or die("Cannot Initialize new GD image stream");

// The colors...
$bgc = imagecolorallocate($img, mt_rand(235,255), mt_rand(235,255), mt_rand(235,255));		// random background color... (not too dark though)
$black = imagecolorallocate($img, 0, 0, 0);

// Let's paint the background
imagefilledrectangle($img, 0, 0, $largeur, $hauteur, $bgc);

// Writes the code
$hor_pos=mt_rand(5,15); // horizontal position
for($i=0;$i<strlen($code);$i++)
	{
	imagestring($img, 5, $hor_pos, mt_rand(2,10), $code[$i], $black);
	$hor_pos+=mt_rand(10,20);
	}

// Now we're going to make it hard to read the picture :
// Let's spray some multicolored pixels
for($i=0;$i<300;$i++)
	{
	imagesetpixel($img, mt_rand(0,$largeur), mt_rand(0,$hauteur), imagecolorallocate($img, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255)));
	}
// Let's add some random lines (be careful not to put too many)
for($i=0;$i<4;$i++)
	{
	if($i<2)
		{
		$x1=rand(0,$largeur);
		$y1=0;
		$x2=abs($x1-mt_rand(0,5));
		$y2=$hauteur;
		}
	else
		{
		$x1=0;
		$y1=rand(0,$hauteur);
		$x2=$largeur;
		$y2=abs($y1-mt_rand(0,5));
		}
	imageline($img, $x1, $y1, $x2, $y2, $black);
	}

// Creates the headers
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); 
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-Type: image/png");
imagePNG($img);
imagedestroy($img);

?>