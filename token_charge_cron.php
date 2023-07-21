<?php
require_once(dirname(__FILE__).'/midtrans/veritrans-php-master/Veritrans.php');

require_once(dirname(__FILE__).'/voClass.php');

$voClass = new voClass();

	$voClass->addlog('execuated');

$today = date("Y-m-d");
$qry = $voClass->gettokens($today);
while($row = mysqli_fetch_assoc($qry)){
	echo "<pre>";
	print_r($row);
	echo "</pre>";


Veritrans_Config::$serverKey = 'Mid-server-6af_SctTHx4l0MT3ShiuKvk7';

if (Veritrans_Config::$serverKey == '<your server key>') {
  echo "<code>";
  echo "<h4>Please set real server key from sandbox</h4>";
  echo "In file: " . __FILE__;
  echo "<br>";
  echo "<br>";
  echo htmlspecialchars('Veritrans_Config::$serverKey = \'<your server key>\';');
  die();
}

// Uncomment for production environment
Veritrans_Config::$isProduction = true;

// Uncomment to enable sanitization
Veritrans_Config::$isSanitized = true;
$ref_id = "VOIDNO" . "-" . time();
$itemname = $row['vo_order']. " Renewal";
$transaction_details = array(
  'order_id'    => $ref_id,
  'gross_amount'  => $row['vo_amount']
);

// Populate items
$items = array(
    array(
      'id'       => $ref_id,
      'price'    => $row['vo_amount'],
      'quantity' => 1,
      'name'     => $itemname
    ),
    );
/*
// Populate customer's billing address
$billing_address = array(
    'first_name'   => "Andri",
    'last_name'    => "Setiawan",
    'address'      => "Karet Belakang 15A, Setiabudi.",
    'city'         => "Jakarta",
    'postal_code'  => "51161",
    'phone'        => "081322311801",
    'country_code' => 'IDN'
  );

// Populate customer's shipping address
$shipping_address = array(
    'first_name'   => "John",
    'last_name'    => "Watson",
    'address'      => "Bakerstreet 221B.",
    'city'         => "Jakarta",
    'postal_code'  => "51162",
    'phone'        => "081322311801",
    'country_code' => 'IDN'
  );

// Populate customer's info
$customer_details = array(
    'first_name'       => "Andri",
    'last_name'        => "Setiawan",
    'email'            => "andri@setiawan.com",
    'phone'            => "081322311801",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
  );
*/

$token_id = $row['vo_token'];

// Transaction data to be sent
$transaction_data = array(
    'payment_type' => 'credit_card',
    'credit_card'  => array(
    'token_id'     => $token_id,
	
    //'bank'          => 'cimb',
    'save_token_id' => true,
    ),
    'transaction_details' => $transaction_details,
    'item_details'        => $items,
   // 'customer_details'    => $customer_details
  );

try {
  $response = Veritrans_VtDirect::charge($transaction_data);
} catch (Exception $e) {
  echo $e->getMessage();
  $msg .= 'Midtrans Auto Renewal failed<br>';
	$msg .= 'Midtrans payment ID: '.$row['vo_id'].'<br>';
	$msg .= $e->getMessage();
	include_once('./sendmail/midtrans_fail_noify.php');
  die();
}

	
// Success
$renewterm = $row['vo_renewterm']+1;
$renewdate  = date('Y-m-d', strtotime("+1 months", strtotime(date("Y-m-d"))));	

if($response->transaction_status == 'capture') {
	
$voClass->renewOrder( $row['vo_name'], $row['vo_number'], $row['vo_email'], $ref_id, $row['vo_type'], $row['vo_amount'], 'idr', $row['vo_token'], $renewdate, $row['vo_expirydate'], $row['vo_term'], $renewterm, '3');
	
$voClass->updateStatus($row['vo_id']);
	
  echo "<p>Transaksi berhasil.</p>";
  echo "<p>Status transaksi untuk order id $response->order_id: " .
      "$response->transaction_status</p>";

  echo "<h3>Detail transaksi:</h3>";
  echo "<pre>";
  print_r($response);
  echo "</pre>";
}
// Deny
else if($response->transaction_status == 'deny') {
  echo "<p>Transaksi ditolak.</p>";
  echo "<p>Status transaksi untuk order id .$response->order_id: " .
      "$response->transaction_status</p>";

  echo "<h3>Detail transaksi:</h3>";
  echo "<pre>";
  var_dump($response);
  echo "</pre>";
	$msg .= 'Midtrans Auto Renewal failed<br>';
	$msg .= 'Midtrans payment ID: '.$row['vo_id'].'<br>';
	$msg .= var_dump($response);
	include_once('./sendmail/midtrans_fail_noify.php');
}
// Challenge
else if($response->transaction_status == 'challenge') {
  echo "<p>Transaksi challenge.</p>";
  echo "<p>Status transaksi untuk order id $response->order_id: " .
      "$response->transaction_status</p>";

  echo "<h3>Detail transaksi:</h3>";
  echo "<pre>";
  var_dump($response);
  echo "</pre>";
	$msg .= 'Midtrans Auto Renewal failed<br>';
	$msg .= 'Midtrans payment ID: '.$row['vo_id'].'<br>';
	$msg .= var_dump($response);
	include_once('./sendmail/midtrans_fail_noify.php');
}
// Error
else {
  echo "<p>Terjadi kesalahan pada data transaksi yang dikirim.</p>";
  echo "<p>Status message: [$response->status_code] " .
      "$response->status_message</p>";

  echo "<pre>";
  var_dump($response);
  echo "</pre>";
  $msg .= 'Midtrans Auto Renewal failed<br>';
	$msg .= 'Midtrans payment ID: '.$row['vo_id'].'<br>';
	$msg .= var_dump($response);
	include_once('./sendmail/midtrans_fail_noify.php');
}

echo "<hr>";
echo "<h3>Request</h3>";
echo "<pre>";
var_dump($response);
echo "</pre>";
	
}
//die();
