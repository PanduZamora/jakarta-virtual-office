<?php
require_once(dirname(__FILE__) . '/../../Veritrans.php');

// YOUR CLIENT KEY
// can find in Merchant Portal -> Settings -> Access keys
Veritrans_Config::$clientKey = "SB-Mid-client-Gw97ODxUjT1SF57t";

if (Veritrans_Config::$clientKey == "<your client key>") {
  echo "<p style='background: #FFB588; padding: 10px;'>";
  echo "Please set your client key in file " . __FILE__; 
  echo "</p>";
}
?> 
<html>

<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="jquery.fancybox.css">
</head>

<body>
  <script type="text/javascript" src="https://api.sandbox.midtrans.com/v2/assets/js/veritrans.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.fancybox.pack.js"></script>

  <h1>Checkout</h1>
  <form action="token-charge.php" method="POST" id="payment-form">
    <fieldset>
      <legend>Checkout</legend>
      <p>
        <label>Token_id</label>
        <input class="token-id" value="" size="23" type="text" name="token_id" id="token_id" />
      </p>



      <button class="submit-button" type="submit">Submit Payment</button>
    </fieldset>
  </form>

  <code>
    <pre>
  <b>Testing cards:</b>

  Visa success      4011 1111 1111 1112
  Visa challenge    4111 1111 1111 1111
  Visa deny by FDS  4211 1111 1111 1110

  MasterCard success      5481 1611 1111 1081
  MasterCard challenge    5110 1111 1111 1119
  MasterCard deny by FDS  5210 1111 1111 1118

  <b>3D Secure:</b>

  Visa        4811 1111 1111 1114
  MasterCard  5211 1111 1111 1117
    </pre>
  </code>


</body>
	
</html>