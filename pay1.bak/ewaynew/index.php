<?php

session_start();

// Include RapidAPI Library
require('./lib/eWAY/RapidAPI.php');

$in_page = 'before_submit';


	$request->Payment->TotalAmount = '100';
	$request->Payment->InvoiceNumber = 'INV120394';

    $request->Customer->FirstName = 'Firstname';
    $request->Customer->LastName = 'Lastname';
    $request->Customer->JobDescription = 'Testing';
    $request->Payment->InvoiceDescription = 'Testing';
    $request->Customer->PostalCode = '2609';
    $request->Customer->Email = 'name@xyz.com.au';

	
	$request->Customer->CardDetails->Name = 'John Smith';
    $request->Customer->CardDetails->Number = '5105105105105100';
    $request->Customer->CardDetails->ExpiryMonth = '12';
    $request->Customer->CardDetails->ExpiryYear = '15';
    $request->Customer->CardDetails->CVN = '123';

	$request->Method = 'ProcessPayment';
    $request->TransactionType = 'Purchase';
	

    // Call RapidAPI
    $eway_params = array();
	include_once('EwayConfig.php');
	$eway_params['sandbox'] = false;
    $service = new eWAY\RapidAPI(CUSTOMER_ID, CUSTOMER_PWD, $eway_params);
    $result = $service->DirectPayment($request);

    // Check if any error returns
    if(isset($result->Errors)) {
        // Get Error Messages from Error Code. Error Code Mappings are in the Config.ini file
        $ErrorArray = explode(",", $result->Errors);
        $lblError = "";
        foreach ( $ErrorArray as $error ) {
            $error = $service->getMessage($error);
            $lblError .= $error . "<br />\n";;
        }
    } else {
        $in_page = 'view_result';
    }


?>


<?php
    if ($in_page === 'view_result') {
?>

    <div id="titlearea">
        <h2>Sample Response</h2>
    </div>

    <div id="maincontent">
        <div class="response">
            <div class="fields">
                <label for="lblAuthorisationCode">
                    Authorisation Code</label>
                <label id="lblAuthorisationCode"><?php echo isset($result->AuthorisationCode) ? $result->AuthorisationCode:""; ?></label>
            </div>
            <div class="fields">
                <label for="lblInvoiceNumber">
                    Invoice Number</label>
                <label id="lblInvoiceNumber"><?php echo $result->Payment->InvoiceNumber; ?></label>
            </div>
            <div class="fields">
                <label for="lblInvoiceReference">
                    Invoice Reference</label>
                <label id="lblInvoiceReference"><?php echo $result->Payment->InvoiceReference; ?></label>
            </div>
            <div class="fields">
                <label for="lblResponseCode">
                    Response Code</label>
                <label id="lblResponseCode"><?php echo $result->ResponseCode; ?></label>
            </div>
            <div class="fields">
                <label for="lblResponseMessage">
                    Response Message</label>
                <label id="lblResponseMessage">
                 <?php
                        if(isset($result->ResponseMessage))
                        {
                            //Get Error Messages from Error Code. Error Code Mappings are in the Config.ini file
                            $ResponseMessageArray = explode(",", $result->ResponseMessage);
                            $responseMessage = "";
                            foreach ( $ResponseMessageArray as $message ) {
                                $real_message = $service->getMessage($message);
                                if($message != $real_message)
                                    $responseMessage .= $message . " " . $real_message . "<br>";
                                else
                                    $responseMessage .= $message;
                            }
                            echo $responseMessage;
                        }

                 ?>
                </label>
            </div>
            <div class="fields">
                <label for="lblTokenCustomerID">
                    TokenCustomerID
                </label>
                <label id="lblTokenCustomerID"><?php
                    if (isset($result->Customer->TokenCustomerID)) {
                            echo $result->Customer->TokenCustomerID;
                    }
                ?></label>
            </div>
            <div class="fields">
                <label for="lblTotalAmount">
                    Total Amount</label>
                <label id="lblTotalAmount"><?php
                    if (isset($result->Payment->TotalAmount)) {
                        echo $result->Payment->TotalAmount;
                    }
                ?></label>
            </div>
            <div class="fields">
                <label for="lblTransactionID">
                    TransactionID</label>
                <label id="lblTransactionID"><?php
                    if (isset($result->TransactionID)) {
                            echo $result->TransactionID;
                    }
                ?></label>
            </div>
            <div class="fields">
                <label for="lblTransactionStatus">
                    Transaction Status</label>
                <label id="lblTransactionStatus"><?php
                    if (isset($result->TransactionStatus) && $result->TransactionStatus && (is_bool($result->TransactionStatus) || $result->TransactionStatus != "false")) {
                        echo 'True';
                    } else {
                        echo 'False';
                    }
                ?></label>
            </div>
            <div class="fields">
                <label for="lblBeagleScore">
                    Beagle Score</label>
                <label id="lblBeagleScore"><?php
                    if (isset($result->BeagleScore)) {
                        echo $result->BeagleScore;
                    }
                ?></label>
            </div>
        </div>
    </div>

        <br />
        <br />
        <a href="index.php">[Start Over]</a>

    <div id="maincontentbottom">
    </div>

<? }
?>