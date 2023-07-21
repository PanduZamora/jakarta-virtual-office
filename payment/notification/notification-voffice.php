<?php

require_once(dirname(__FILE__) . '/../vendor/midtrans/midtrans-php/Midtrans.php');
\Midtrans\Config::$isProduction = true;
\Midtrans\Config::$serverKey = 'Mid-server-6af_SctTHx4l0MT3ShiuKvk7';
$notif = new \Midtrans\Notification();

$transaction = $notif->transaction_status;
$type = $notif->payment_type;
$order_id = $notif->order_id;
$fraud = $notif->fraud_status;

// set connection for get data from dbase
include('../includes/conn.php');

// get data
$query = mysqli_query($conn, "SELECT * FROM `payment-data` WHERE transaction_id = '$order_id'");
$row = $query->fetch_assoc();
$name =  $row['fname'] . " " . $row['lname'];
$email = $row['email'];
$whatsapp = $row['whatsapp'];
$location = $row['location'];
$plan = $row['plan'];
$terms = $row['terms'];
$amount = $row['price_gross'];

if (substr($whatsapp, 0, 1) == "0") {
  $waLink = "62" . substr($whatsapp, 1);
} elseif (substr($whatsapp, 0, 1) !== "0") {
  $waLink = $whatsapp;
}

if ($transaction == 'capture') {
  // Untuk transaksi kartu kredit, anda perlu memeriksa apakah transaksi terdapat challenge status dari FDS

  include "config-phpmailer.php";
  // include '../../sendmail/sendmail.php';

  $message = "<p>Berikut adalah data klien yang telah melakukan pembayaran melalui Buy-Now.</p>";
  $message .= "<table style='border-collapse:collapse';><tbody>";
  $message .= "   <tr><td style='font-weight: bold;'>transaction id </td><td>: " . $order_id . "</td></tr>
                    <tr><td style='font-weight: bold;'>Name </td><td>: " . $name . "</td></tr>
                    <tr><td style='font-weight: bold;'>Email </td><td>: " . $email . "</td></tr>
                    <tr><td style='font-weight: bold;'>WA Number </td><td>: <a href='http://wa.me/" . $waLink . "' target = '_blank'>" . $whatsapp . "</a></td></tr>
                    <tr><td style='font-weight: bold;'>Location </td><td>: " . $location . "</td></tr>
                    <tr><td style='font-weight: bold;'>Plan </td><td>: " . $plan . "</td></tr>
                    <tr><td style='font-weight: bold;'>Terms </td><td>: " . $terms . "</td></tr>
                    <tr><td style='font-weight: bold;'>Price Gross </td><td>: " . $amount . "</td></tr>
                    <tr><td style='font-weight: bold;'>Payment type </td><td>: " . $type . "</td></tr>
                    <tr><td style='font-weight: bold;'>Payment status </td><td>: " . $transaction . "</td></tr>
                    ";
  $message .= "</tbody>";
  $message .= "</table>";
  $message .= "<span>Klik tombol reply untuk langsung membalas email kepada customer</span>";

  // ================= TUJUAN EMAIL =======================

  $mail->From = "notification@voffice.co.id";
  $mail->FromName = "vOffice Buy Now System";
  $mail->AddReplyTo($email, $name);

  $mail->addAddress("buynow@voffice.co.id", "AA vOffice");
  $mail->addBCC("buynow.voffice@gmail.com", "AA vOffice");
  // $mail->addCC("kevin@voffice.co.id", "Kevin");
  // $mail->addCC("kevin.voffice@gmail.com");

  $mail->isHTML(true);

  $mail->Subject = "New Customer From BUY-NOW";
  $mail->Body = $message;
  $mail->AltBody = "This is the plain text version of the email content";

  try {
    $mail->send();
    echo "Message has been sent successfully";
  } catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }

  if ($type == 'credit_card') {
    if ($fraud == 'challenge') {
      // TODO set payment status in merchant's database to 'Challenge by FDS'
      // TODO merchant should decide whether this transaction is authorized or not in MAP
      echo "Transaction order_id: " . $order_id . " is challenged by FDS";
    } else {
      // TODO set payment status in merchant's database to 'Success'
      echo "Transaction order_id: " . $order_id . " successfully captured using " . $type;
    }
  }
} else if ($transaction == 'settlement') {
  // TODO set payment status in merchant's database to 'Settlement'
  include "config-phpmailer.php";

  $message = "<p>Berikut adalah data klien yang telah melakukan pembayaran melalui Buy-Now.</p>";
  $message .= "<table style='border-collapse:collapse';><tbody>";
  $message .= "   <tr><td style='font-weight: bold;'>transaction id </td><td>: " . $order_id . "</td></tr>
                    <tr><td style='font-weight: bold;'>Name </td><td>: " . $name . "</td></tr>
                    <tr><td style='font-weight: bold;'>Email </td><td>: " . $email . "</td></tr>
                    <tr><td style='font-weight: bold;'>WA Number </td><td>: <a href='http://wa.me/" . $waLink . "' target = '_blank'>" . $whatsapp . "</a></td></tr>
                    <tr><td style='font-weight: bold;'>Location </td><td>: " . $location . "</td></tr>
                    <tr><td style='font-weight: bold;'>Plan </td><td>: " . $plan . "</td></tr>
                    <tr><td style='font-weight: bold;'>Terms </td><td>: " . $terms . "</td></tr>
                    <tr><td style='font-weight: bold;'>Price Gross </td><td>: " . $amount . "</td></tr>
                    <tr><td style='font-weight: bold;'>Payment type </td><td>: " . $type . "</td></tr>
                    <tr><td style='font-weight: bold;'>Payment status </td><td>: " . $transaction . "</td></tr>
                    ";
  $message .= "</tbody>";
  $message .= "</table>";
  $message .= "<span>Klik tombol reply untuk langsung membalas email kepada customer</span>";

  // ================= TUJUAN EMAIL =======================

  $mail->From = "notification@voffice.co.id";
  $mail->FromName = "vOffice Buy Now System";
  $mail->AddReplyTo($email, $name);

  $mail->addAddress("buynow@voffice.co.id", "AA vOffice");
  $mail->addBCC("buynow.voffice@gmail.com", "AA vOffice");

  $mail->isHTML(true);

  $mail->Subject = "New Customer From BUY-NOW";
  $mail->Body = $message;
  $mail->AltBody = "This is the plain text version of the email content";

  try {
    $mail->send();
    echo "Message has been sent successfully";
  } catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
}

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
