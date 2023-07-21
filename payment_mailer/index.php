<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-VUFSYp7PcN-Kqofl0qoE-1IK';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;
// Set Override Notification
\Midtrans\Config::$overrideNotifUrl = "https://voffice.co.id/jakarta-virtual-office/payment_mailer/notification.php";
 
$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => 10000,
    ),
    'customer_details' => array(
        'first_name' => 'budi',
        'last_name' => 'pratama',
        'email' => 'budi.pra@example.com',
        'phone' => '08111222333',
    ),
);
 
$snapToken = \Midtrans\Snap::getSnapToken($params);
echo $snapToken;
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-nvRfIHVDdN2-X4rn"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>

  
 
  <body>
    <button id="pay-button">Pay!</button>
    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      // For example trigger on button clicked, or any time you need
      payButton.addEventListener('click', function () {
        window.snap.pay('<?= $snapToken ?>'); // Replace it with your transaction token
      });
    </script>
  </body>
</html>