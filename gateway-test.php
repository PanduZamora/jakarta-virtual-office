<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<br><br>

<? if (!empty($_POST)) {
	echo "<h1>Response</h1>";
	foreach($_POST as $key => $result) {
    echo $key ." : ".$result, '<br>';
}
die();
}
	$ref = "VOMYNO"."-".time();
	//test
	$hashraw = "fxe12345FXE".$ref."https://voffice.com.my/gateway-test.phphttps://voffice.com.my/gateway-callback.php0.14MYR192.168.2.35780";
	//live
	//$hashraw = "qlf3FEtnFXE".$ref."https://voffice.com.my/gateway-test.phphttps://voffice.com.my/gateway-callback.php0.14MYR192.168.2.35780";
	$hash = hash('sha256', $hashraw);?>
<!--sha256 raw = "<?//$hashraw?>"<br>-->
sha256 = "<?=$hash?>"<br>
PaymentID = "<?=$ref?>"<br>
post form to "https://securepay.e-ghl.com/IPG/payment.aspx"<br><br>

<form name="frmPayment" id="frmPayment" method="post" action="https://test2pay.ghl.com/IPGSG/Payment.aspx">
<!--<form name="frmPayment" id="frmPayment" method="post" action="https://securepay.e-ghl.com/IPG/payment.aspx">-->

TransactionType<br>
<input  name="TransactionType" value="SALE" size="135">
<br><br>PymtMethod<br>
<input  name="PymtMethod" value="ANY" size="135">
<br><br>ServiceID<br>
<input  name="ServiceID" value="FXE" size="135">
<br><br>PaymentID<br>
<input  name="PaymentID" value="<?=$ref?>" size="135">
<br><br>OrderNumber<br>
<input  name="OrderNumber" value="IJKLMMN" size="135">
<br><br>PaymentDesc<br>
<input  name="PaymentDesc" value="Booking No: IJKLMN, Sector:KUL-BKI, First Flight Date: 26 Sep 2012" size="135">
<br><br>MerchantName<br>
<input  name="MerchantName" value="Voffice" size="135">
<br><br>MerchantReturnURL<br>
<input  name="MerchantReturnURL" value="https://voffice.com.my/gateway-test.php" size="135">
<br><br>MerchantCallBackURL<br>
<input  name="MerchantCallBackURL" value="https://voffice.com.my/gateway-callback.php" size="135">
<br><br>Amount<br>
<input  name="Amount" value="0.14" size="135">
<br><br>CurrencyCode<br>
<input  name="CurrencyCode" value="MYR" size="135">
<br><br>CustIP<br>
<input  name="CustIP" value="192.168.2.35" size="135">
<br><br>CustName<br>
<input  name="CustName" value="Jason" size="135">
<br><br>CustEmail<br>
<input  name="CustEmail" value="Jason@gmail.com" size="135">
<br><br>CustPhone<br>
<input  name="CustPhone" value="60126902328" size="135">
<br><br>HashValue<br>
<input  name="HashValue" value="<?=$hash?>" size="135">
<br><br>MerchantTermsURL<br>
<input  name="MerchantTermsURL"value="http://voffice.com.my/terms.html" size="135">
<br><br>LanguageCode<br>
<input  name="LanguageCode" value="en" size="135">
<br><br>PageTimeout<br>
<input  name="PageTimeout" value="780" size="135">
<!--
<br><br>CardHolder<br>
<input  name="CardHolder" value="Test" size="135">
<br><br>CardHolder<br>
<input  name="CardHolder" value="Test" size="135">
<br><br>CardNo<br>
<input  name="CardNo" value="4444333322221111" size="135">
<br><br>CardExp<br>
<input  name="CardExp" value="201711" size="135">
<br><br>CardCVV2<br>
<input  name="CardCVV2" value="123" size="135">
<br><br>IssuingBank<br>
<input  name="IssuingBank" value="test" size="135">
<br><br>-->
<input type="submit">

</form>

</body>
</html>
