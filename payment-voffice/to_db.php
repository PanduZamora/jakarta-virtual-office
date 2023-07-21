<?php 

// midTrans Started
namespace Midtrans;

/**
 * Include test library if you are using composer
 * Example: Psysh (debugging library similar to pry in Ruby)
 */
require_once dirname(__FILE__) . '/vendor/autoload.php';

require_once dirname(__FILE__) . '/vendor/midtrans/midtrans-php/Midtrans.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-VUFSYp7PcN-Kqofl0qoE-1IK';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

// get value by post method
$transaction_id = $_POST['transaction_id'];
$fname      = $_POST['fname'];
$lname      = $_POST['lname'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$address    = $_POST['address'];
$city       = $_POST['city'];
$state      = $_POST['state'];
$postCode   = $_POST['postcode'];
$country    = $_POST['country'];
$location   = $_POST['location'];
$plan       = $_POST['plan'];
$terms      = $_POST['terms'];
$promoCode  = $_POST['promo'];


if($plan == 'Virtual Office Silver' and $terms == '12 Months'){
  $math = 6500000;
} elseif($plan == 'Virtual Office Silver' and $terms == '24 Months'){
  $math = 12000000;
} elseif($plan == 'Virtual Office Gold' and $terms == '12 Months'){
  $math = 8910000;
} elseif($plan == 'Virtual Office Gold' and $terms == '24 Months'){
  $math = 16236000;
} elseif($plan == 'Virtual Office Platinum' and $terms == '12 Months'){
  $math = 11616000;
} elseif ($plan == 'Virtual Office Platinum' and $terms == '24 Months') {
  $math = 19272000;
} elseif ($plan == 'Virtual Office 4.0' and $terms == '12 Months') {
  $math = 14900000;
} elseif ($plan == 'Virtual Office 4.0' and $terms == '24 Months') {
  $math = 27000000;
}

$price_gross = $math;


// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 0, // no decimal allowed for creditcard
);

$item1_details = array (
    'id' => 'a1',
    'price' => $price_gross,
    'quantity' => 1,
    'name' => $plan,
    'category' => $terms
);


$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => $fname,
    'last_name'     => $lname,
    'address'       => $address,
    'city'          => $city,
    'postal_code'   => $postCode,
    'phone'         => $phone,
);

// Optional
$customer_details = array(
    'first_name'    => $fname,
    'last_name'     => $lname,
    'email'         => $email,
    'phone'         => $phone,
    'billing_address'  => $billing_address,
);

$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snapToken = Snap::getSnapToken($transaction);

// snaptoken to db
$snap_token = $snapToken;

include('includes/conn.php');

// inser data to DB
$sql = "INSERT INTO `payment-data` (id, snap_token, transaction_id, price_gross, fname, lname, email, phone, `address`, city, `state`, postcode, country, `location`, plan, terms, `promo`)
VALUES ('', '$snap_token', '$transaction_id', '$price_gross', '$fname', '$lname', '$email', '$phone', '$address', '$city', '$state', '$postCode', '$country', '$location', '$plan', '$terms', '$promoCode')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>