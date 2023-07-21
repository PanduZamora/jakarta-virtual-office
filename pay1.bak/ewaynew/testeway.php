<?
$urltopost = "https://api.sandbox.ewaypayments.com/soap.asmx";
$datatopost = '<soap:Envelope xmlns:soap="http://www.w3.org/2003/05/soap-envelope">
    <soap:Body>
        <DirectPayment xmlns="https://api.ewaypayments.com/">
            <request>
                <Customer>
                    <CardDetails>
                        <Number>4444333322221111</Number>
                        <Name>John Smith</Name>
                        <ExpiryMonth>12</ExpiryMonth>
                        <ExpiryYear>25</ExpiryYear>
                        <CVN>123</CVN>
                    </CardDetails>
                </Customer>
                <Payment>
                    <TotalAmount>1000</TotalAmount>
                </Payment>
                <Method>ProcessPayment</Method>
                <TransactionType>Purchase</TransactionType>
            </request>
        </DirectPayment>
    </soap:Body>
</soap:Envelope>';

$header=array("content-type"=>"application/json");
$ch = curl_init ($urltopost);
curl_setopt ($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $header);
$returndata = curl_exec ($ch);
print_r($returndata);
?>