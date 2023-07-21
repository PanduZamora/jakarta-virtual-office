<?php
@session_start();
	include 'voClass.php';
	$voClass = new voClass();
require_once(dirname(__FILE__) . '/midtrans/veritrans-php-master/Veritrans.php');


Veritrans_Config::$serverKey = 'SB-Mid-server-SCeR2bF_vbD4M3lE62lLzsn0';

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
// Veritrans_Config::$isProduction = true;

// Uncomment to enable sanitization
// Veritrans_Config::$isSanitized = true;

$transaction_details = array(
  'order_id'    => $_POST['ref'],
  'gross_amount'  => $_POST['price']
);

// Populate items
$items = array(
    array(
      'id'       => $_POST['item'],
      'price'    => $_POST['price'],
      'quantity' => 1,
      'name'     => $_POST['item']
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
*/
// Populate customer's info
$customer_details = array(
    'first_name'       => $_POST['name'],
    'email'            => $_POST['email'],
    'phone'            => $_POST['phone']
  );


$token_id = $_POST['token_id'];

// Transaction data to be sent
$transaction_data = array(
    'payment_type' => 'credit_card',
    'credit_card'  => array(
    'token_id'     => $token_id,
	
    //'bank'          => 'bni',
    'save_token_id' => true,
    ),
    'transaction_details' => $transaction_details,
    'item_details'        => $items,
    'customer_details'    => $customer_details
  );

try {
  $response = Veritrans_VtDirect::charge($transaction_data);
} catch (Exception $e) {
  echo $e->getMessage();
  die();
}

// Success

if($response->transaction_status == 'capture') {
  $voClass->updateToken($_SESSION["order_id"], $response->saved_token_id);
  echo "<p>Transaksi berhasil.</p>";
  echo "<p>Status transaksi untuk order id $response->order_id: " .
      "$response->transaction_status</p>";

  echo "<h3>Detail transaksi:</h3>";
  echo "<pre>";
  var_dump($response);
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
}
// Error
else {
  echo "<p>Terjadi kesalahan pada data transaksi yang dikirim.</p>";
  echo "<p>Status message: [$response->status_code] " .
      "$response->status_message</p>";

  echo "<pre>";
  var_dump($response);
  echo "</pre>";
}

echo "<hr>";
echo "<h3>Request</h3>";
echo "<pre>";
var_dump($response);
echo "</pre>";