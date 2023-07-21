<?php

// // midTrans Started
// namespace Midtrans;

// use Error;

// /**
//  * Include test library if you are using composer
//  * Example: Psysh (debugging library similar to pry in Ruby)
//  */
// require_once dirname(__FILE__) . '/vendor/autoload.php';

// require_once dirname(__FILE__) . '/vendor/midtrans/midtrans-php/Midtrans.php';

// // get value by post method
// $transaction_id = $_POST['transaction_id'];
// $fname      = $_POST['fname'];
// $lname      = $_POST['lname'];
// $email      = $_POST['email'];
// $phone      = $_POST['phone'];
// $wa         = $_POST['whatsapp'];
// $address    = $_POST['address'];
// $city       = $_POST['city'];
// $state      = $_POST['state'];
// $postCode   = $_POST['postcode'];
// $country    = $_POST['country'];
// $location   = $_POST['location'];
// $plan       = $_POST['plan'];
// $terms      = $_POST['terms'];
// $promoCode  = $_POST['promo'];
// $math       = $_POST['priceInt'];
// // $tax        = $_POST['tax'];
// // show only
// $priceShw   = $_POST['priceShw'];

// // Set your Merchant Server Key
// \Midtrans\Config::$serverKey = 'SB-Mid-server-VUFSYp7PcN-Kqofl0qoE-1IK';
// // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
// \Midtrans\Config::$isProduction = false;
// // Set sanitization on (default)
// \Midtrans\Config::$isSanitized = true;
// // Set 3DS transaction for credit card to true
// \Midtrans\Config::$is3ds = true;
// // Set Overriden Notif URL
// \Midtrans\Config::$overrideNotifUrl = 'https://voffice.co.id/jakarta-virtual-office/payment/notification/notification-voffice.php';



// // if($plan == 'Virtual Office Silver' and $terms == '12 Months'){
// //   $math = 6500000;
// // } elseif($plan == 'Virtual Office Silver' and $terms == '24 Months'){
// //   $math = 12000000;
// // } elseif($plan == 'Virtual Office Gold' and $terms == '12 Months'){
// //   $math = 8910000;
// // } elseif($plan == 'Virtual Office Gold' and $terms == '24 Months'){
// //   $math = 16236000;
// // } elseif($plan == 'Virtual Office Platinum' and $terms == '12 Months'){
// //   $math = 11616000;
// // } elseif ($plan == 'Virtual Office Platinum' and $terms == '24 Months') {
// //   $math = 19272000;
// // } elseif ($plan == 'Virtual Office 4.0' and $terms == '12 Months') {
// //   $math = 14900000;
// // } elseif ($plan == 'Virtual Office 4.0' and $terms == '24 Months') {
// //   $math = 27000000;
// // }

// $price_gross = $math;


// // Required
// $transaction_details = array(
//     'order_id' => $transaction_id,
//     'gross_amount' => 0, // no decimal allowed for creditcard
// );

// $item1_details = array(
//     'id' => 'a1',
//     'price' => $price_gross,
//     'quantity' => 1,
//     'name' => $plan,
//     'category' => $terms
// );


// $item_details = array($item1_details);

// // Optional
// $billing_address = array(
//     'first_name'    => $fname,
//     'last_name'     => $lname,
//     'address'       => $address,
//     'city'          => $city,
//     'postal_code'   => $postCode,
//     'phone'         => $phone,
// );

// // Optional
// $customer_details = array(
//     'first_name'    => $fname,
//     'last_name'     => $lname,
//     'email'         => $email,
//     'phone'         => $phone,
//     'billing_address'  => $billing_address,
// );

// $transaction = array(
//     'transaction_details' => $transaction_details,
//     'customer_details' => $customer_details,
//     'item_details' => $item_details,
// );

// $snapToken = Snap::getSnapToken($transaction);

// // snaptoken to db
// $snap_token = $snapToken;

// include('includes/conn.php');

// // inser data to DB
// $sql = "INSERT INTO `payment-data` (id, snap_token, transaction_id, price_gross, fname, lname, email, phone, whatsapp, `address`, city, `state`, postcode, country, `location`, plan, terms, `promo`)
// VALUES ('', '$snap_token', '$transaction_id', '$price_gross', '$fname', '$lname', '$email', '$phone', '$wa', '$address', '$city', '$state', '$postCode', '$country', '$location', '$plan', '$terms', '$promoCode')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9A2B59">
    <title>Sewa Virtual Office Jakarta & Serviced Office Lokasi Strategis</title>

    <meta name="description" content="Sewa Virtual Office Jakarta ✓ Serviced Office ✓ Meeting Room ✓
    Company Incorporation/Pembuatan PT & CV ✓ Dedicated Phone and Fax number ✓ Event Space ✓" />
    <meta name="facebook-domain-verification" content="vy5hosbnbzlbl8jmwfybxvv0b16smc" />
    <meta name="google-site-verification" content="vIGs5sNCD8WA19fvxSzfVLWcxMh38ZEjiHCwcSYPUGA" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script id="client-key" type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-nvRfIHVDdN2-X4rn"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Raleway:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/card.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/extra.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/testi.css" rel="stylesheet" type="text/css">
    <link href="css/ourpartner.min.css" rel="stylesheet" type="text/css">
    <!--slide carousel-->
    <link href="plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "vOffice",
            "url": "https://www.voffice.co.id",
            "logo": "https://voffice.co.id/jakarta-virtual-office/img/voffice-indonesia.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": "+6221 2922 2999",
                "contactType": "customer service"
            }]
        }
    </script>
    <style media="screen">
        .footer_mobile_cta ul li {
            float: left;
            font-weight: 600;
            font-size: 12px !important;
            width: 25%;
            height: 80px;
            border-left: 1px solid #fff;
        }

        .footer_mobile_cta:first-child {
            border: none;
        }

        .footer_mobile_cta ul li a {
            color: white !important;
        }

        .article {
            font-family: 'Raleway', sans-serif;
        }

        nav {
            background-color: rgba(0, 0, 0, 0.8);
            background: rgba(0, 0, 0, 0.8) !important;
        }

        .nav-tabs {
            border: none;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            font-size: 16px;
            color: #951942;
            border: none;
            border-bottom: 2px solid #951942;
        }

        .nav-tabs>li>a {
            margin-right: 0px !important;
            font-size: 16px;
            color: #a7a7a7;
            border: none;
            border-bottom: 2px solid #c9c9c9;
        }

        @media (min-width: 992px) {
            button.lang {
                vertical-align: bottom;
                position: absolute;
                bottom: -129px;
                padding: 0;
                left: 0;
            }
        }

        .modal-body .data-title {
            font-weight: normal;
        }

        .modal-body .data-desc {
            font-weight: bold;
        }

        .modal-body .summary {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;

        }

        .modal-body .summary .data-price {
            font-size: 3.5rem;
            font-weight: bold;
            padding-bottom: 14px;
            border-bottom: 1px black solid;
        }
    </style>
</head>

<body>

    <?php include "includes/header.html" ?>

    <div class="main-container" style="margin-top:200px;">

        <section id="index-header" class="pt0">
            <h1 class="text-center mb16">
                <b>Buy</b>
                Now
            </h1>

            <h4 class="text-center uppercase mb0">
                Secure online registration form
            </h4>

            <p class="text-center">You are second away from having perfect business</p>
        </section>

        <section class="index-body">
            <div class="container" style="padding:35px 35px 20px 35px;box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2);background:rgb(251, 251, 251);">
                <div class="row">

                    <form action="#" method="post" name="mainForm" id="form-data mainForm">
                        <div class="col-md-6">
                            <h4>Client Details</h4>

                            <?php $trs_id = rand(); ?>

                            <input type="hidden" name="transaction_id" id="transaction_id" value="<?php echo $trs_id ?>" required>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="WhatsApp Number">
                                </div>
                            </div>

                            <div class="col-sm-12 p0">
                                <textarea name="address" id="address" rows="3" class="" placeholder="Address"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="city" id="city" placeholder="City" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="state" id="state" placeholder="State" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" name="postcode" id="postcode" placeholder="Postcode" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="country" id="country" placeholder="Country" class="form-control">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <h4>Plan Details</h4>

                            <div class="select-option p0 mb15">
                                <i class="ti-angle-down"></i>
                                <select name="location" id="location" class="" onchange="changeFormAction();">
                                    <option value="" hidden>Select Location</option>

                                    <option value="Centennial Tower">Centennial Tower</option>
                                    <option value="Menara Rajawali">Menara Rajawali</option>
                                    <option value="Menara Kuningan">Menara Kuningan</option>
                                    <option value="The City Tower">The City Tower</option>
                                    <option value="Grand Slipi Tower">Grand Slipi Tower</option>
                                    <option value="Kirana Two Tower">Kirana Two Tower</option>
                                    <option value="Plaza Summarecon Bekasi">Plaza Summarecon Bekasi</option>
                                    <option value="The CEO Building">The CEO Building</option>
                                    <option value="Sudirman 7.8">Sudirman 7.8</option>
                                    <option value="Office 8">Office 8</option>
                                    <option value="Mensana Tower">Mensana Tower</option>
                                    <option value="BSD Green Office Tower">BSD Green Office Tower</option>
                                    <option value="vOffice East">vOffice East</option>
                                    <option value="Metropolitan Tower">Metropolitan Tower</option>
                                    <option value="GKM Tower">GKM Tower</option>
                                    <option value="Graha Surveyor Tower">Graha Surveyor Tower</option>
                                    <option value="Kembali Innovation Hub">Kembali Innovation Hub</option>
                                    <option value="Jimbaran Hub">Jimbaran Hub</option>
                                    <option value="JAPFA Tower II">JAPFA Tower II</option>
                                    <option value="The Prominence Office Tower">The Prominence Office Tower</option>
                                    <option value="Intiland Tower">Intiland Tower</option>
                                    <option value="Spazio">Spazio</option>
                                    <option value="Grand Jadi Junction">Grand Jati Junction</option>
                                    <option value="The Honey Lady">The Honey Lady</option>
                                    <option value="Kencana Tower">Kencana Tower</option>
                                </select>
                            </div>

                            <div class="select-option p0 mb15">
                                <i class="ti-angle-down"></i>
                                <select name="plan" id="plan" class="form-group">
                                    <option value="" hidden>Choose Plan</option>

                                    <option value="Virtual Office Silver">Virtual Office Silver</option>
                                    <option value="Virtual Office Gold">Virtual Office Gold</option>
                                    <option value="Virtual Office Premium">Virtual Office Premium</option>
                                    <option value="Virtual Office 4.0">Virtual Office 4.0</option>
                                </select>
                            </div>

                            <div class="select-option p0 mb15">
                                <i class="ti-angle-down"></i>
                                <select name="terms" id="terms" class="form-group">
                                    <option value="" hidden>Terms</option>

                                    <option value="12 Months">12 Months</option>
                                    <option value="24 Months">24 Months</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="text" name="promo" id="promo" placeholder="Promo Code">
                            </div>

                            <div class="form-group ml-1">
                                <label for="termsandcondition">
                                    <input type="checkbox" id="termsandcondition" name="termsandcondition" required> I accept <a data-toggle="modal" data-target="#tac-modal">terms and conditions.</a>
                                </label>
                            </div>

                            <div class="submit-btn col-md-12 p0">
                                <button type="submit" class="lang" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>





    <?php include('footer.html'); ?>




    <div id="pay-modal" class="modal fade" role="dialog" style="margin-bottom: auto;">
        <div class="modal-dialog">



            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close mb-0" data-dismiss="modal">&times;</button>
                    <h3 class="text-center mb-0">Payment</h3>
                </div>
                <div class="modal-body" style="overflow: auto; height: 300px;">
                    <h4>Account Details</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">First name</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-fname">: <?= $fname ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">Last name</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-lname">: <?= $lname ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Email</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-email">: <?= $email ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Phone Number</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-phone">: <?= $phone ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Address</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-address">: <?= $address ?></p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">City</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-city">: <?= $city ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">State</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-state">: <?= $state ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">Post Code</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-postcode">: <?= $postCode ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="data-title">Country</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="data-desc" id="modal-country">: <?= $country ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>Plan Details</h4>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Location</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-location">: <?= $location ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Plan</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-plan">: <?= $plan ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Terms</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-terms">: <?= $terms ?></p>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="data-title">Promo Code</p>
                        </div>
                        <p class="col-sm-9 data-desc" id="modal-promo">: <?= $promoCode ?></p>
                    </div>

                    <h4>Summary</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-sm-6" style="padding-left: 0;">
                                <p class="data-title">Transaction Id</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="data-desc">: <?= $transaction_id ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-sm-6">
                                <p class="data-title">Transaction Date</p>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                date_default_timezone_set("Asia/Jakarta");
                                ?>
                                <p class="data-desc">: <?= date('d M Y'); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="row summary">
                        <div class="col-sm-12">
                            <div class="col-sm-3" style="padding-left: 0;">
                                <p class="data-title">Total Price</p>
                            </div>
                            <p class="col-sm-9 data-price text-right"><?= $priceShw ?></p>
                            <small class="text-left" style="display: block;">*) harga sudah termasuk PPN (Pajak Pertambahan Nilai) 10%</small>
                        </div>
                    </div>

                    <input type="text" id="snap-token" value="<?= $snapToken ?>" hidden>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" id="pay-button">Continue</button>
                </div>
            </div>



        </div>
    </div>

    <a href="http://bit.ly/voffice-webnew" class="back-to-top" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/flexslider.min.js"></script>
    <script src="js/scripts.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ourpartner.min.js"></script>
    <script src="plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
    <!-- <script src="js/dynamicWA.js"></script> -->
    <!-- <script src="js/tac.js"></script> -->

    <!--pop up-->
    <?php include("popup-tac.html"); ?>

    <script type="text/javascript">
        // function changeMetaId() {
        //     var getMetaId = document.getElementById('client-key');
        //     var locTrigger = document.getElementById('location').value;
        //     if (locTrigger == 'Centennial Tower') {
        //         getMetaId.setAttribute('data-client-key', 'SB-Mid-server-VUFSYp7PcN-Kqofl0qoE-1IK')
        //     } else if (locTrigger == 'Menara Rajawali') {
        //         getMetaId.setAttribute('data-client-key', 'null')
        //     }
        // }

        // to DB by AJAX
        // $('#form-data').submit(function(e){
        //         e.preventDefault();
        //         $.ajax({
        //             url: 'to_db.php',
        //             type: 'post',
        //             data:$('#form-data').serialize(),
        //             success:function(){
        //                 // Whatever you want to do after the form is successfully submitted
        //                     // jQuery('#myModal').modal('show');


        //                     // get data
        //                     var trs_id = document.getElementById('transaction_id').value;
        //                     var ajax = new XMLHttpRequest();
        //                     ajax.open("GET", "data.php?trs_id="+trs_id, true);
        //                     ajax.send();

        //                     ajax.onreadystatechange = function() {
        //                         if (this.readyState == 4 && this.status == 200) {
        //                             var data = JSON.parse(this.responseText);
        //                             console.log(data);

        //                             var html = "";
        //                             for(var a = 0; a < data.length; a++) {
        //                                 var snap_token = data[a].snap_token;
        //                                 var transaction_id  = data[a].transaction_id;
        //                                 var fname   = data[a].fname;
        //                                 var lname   = data[a].lname;
        //                                 var email   = data[a].email;
        //                                 var phone   = data[a].phone;
        //                                 var address = data[a].address;
        //                                 var city    = data[a].city;
        //                                 var state   = data[a].state;
        //                                 var postcode= data[a].postcode;
        //                                 var country = data[a].country;
        //                                 var location= data[a].location;
        //                                 var plan    = data[a].plan;
        //                                 var terms   = data[a].terms;
        //                                 var promo   = data[a].promo;
        //                             }



        //                         }
        //                         document.getElementById("snap-token").value = snap_token;
        //                             document.getElementById("modal-fname").innerHTML = fname;
        //                             document.getElementById("modal-lname").innerHTML = lname;
        //                             document.getElementById("modal-email").innerHTML = email;
        //                             document.getElementById("modal-phone").innerHTML = phone;
        //                             document.getElementById("modal-address").innerHTML = address;
        //                             document.getElementById("modal-city").innerHTML = city;
        //                             document.getElementById("modal-state").innerHTML = state;
        //                             document.getElementById("modal-postcode").innerHTML = postcode;
        //                             document.getElementById("modal-country").innerHTML = country;
        //                             document.getElementById("modal-location").innerHTML = location;
        //                             document.getElementById("modal-plan").innerHTML = plan;
        //                             document.getElementById("modal-terms").innerHTML = terms;
        //                             document.getElementById("modal-promo").innerHTML = promo;
        //                     }; 

        //                     $('#pay-modal').modal('show');

        //             }

        //         });
        //     });



        // modal payment load on ready
        $(document).ready(function() {
            $('#pay-modal').modal('show');
        });


        // midtrans
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('<?php echo $snapToken ?>', {
                // Optional
                onSuccess: function(result) {
                    window.location.href = 'index.php';
                    alert("Payment Success")
                },
                // Optional
                onPending: function(result) {
                    window.location.href = 'index.php';
                    alert("Waiting for payment")
                },
                // Optional
                onError: function(result) {
                    window.location.href = 'index.php';
                    alert("Payment ERROR, please contact our customer services")
                }
            });
        };
        // var payButton = document.getElementById('pay-button');
        // payButton.addEventListener('click', function () {
        //     var snaptest = document.getElementById('snap-token').value;
        //     snap.pay(snaptest);
        // });

        $('#pay-modal').on('hidden.bs.modal', function(e) {
            window.location.href = 'index.php'
        });



        setTimeout(function() {
            $("#broadcast").fadeIn();
        }, 3000);
        $("#close").click(function() {
            $("#broadcast").fadeOut();
        });
        $(document).ready(function() {
            $("#testimonial-slider").owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: true,
                navigationText: ["", ""],
                slideSpeed: 1000,
                autoPlay: true
            });
        });
        $(window).load(function() {
            $('#quote-carousel').carousel({
                pause: true,
                interval: 12000,
            });
            $('#quote-carouseltwo').carousel({
                pause: true,
                interval: 4000,
            });
            setTimeout(function() {
                $('#myModalHorizontal').modal('show');
            }, 5000);
        });
    </script>

    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            items: 8,
            margin: 20,
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        $('#pause-button').click(function() {
            $('#youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
        });
        $(window).on('load', function() {
            $('#popup2').modal('show');
        });
    </script>
</body>

</html>