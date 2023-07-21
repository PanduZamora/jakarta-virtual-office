<?php
// midtrans started
namespace Midtrans;

use Error;

require_once dirname(__FILE__) . '/vendor/autoload.php';
require_once dirname(__FILE__) . '/vendor/midtrans/midtrans-php/Midtrans.php';

// get value by post method
date_default_timezone_set("Asia/Jakarta");
$trs_id = 'VO-' . mt_rand(10, 99) . date("mds");

$transaction_id = $trs_id; // $_POST['transaction_id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$whatsapp = $_POST['whatsapp'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$postCode = $_POST['postcode'];
$country = $_POST['country'];
$location = $_POST['location'];
$plan = $_POST['plan'];
$terms = $_POST['terms'];
$promoCode = $_POST['promo'];
$priceBeforeTax = $_POST['priceBeforeTax'];
$priceAfterTax = $_POST['priceAfterTax'];
$priceDiscount = $_POST['priceDiscount'];

// kondisi jika ada diskon
if ($priceDiscount != '0') {
    $discount = (int)$priceBeforeTax - (int)$priceDiscount;
    $hidden = '';
    $titleDiscount = 'Price';
} else {
    $discount = '-';
    $hidden = 'hidden';
    $titleDiscount = 'Subtotal';
}

// Kondisi untuk alamat yang ditampilkan
if ($address != '') {
    $showedAddress = $address . ', ';
} else {
    $showedAddress = '';
}
if ($city != '') {
    $showedCity = $city . ', ';
} else {
    $showedCity = '';
}
if ($state != '') {
    $showedState = $state . ', ';
} else {
    $showedState = '';
}
if ($postCode != '') {
    $showedPostCode = 'kode pos: ' . $postCode . ', ';
} else {
    $showedPostCode = '';
}
if ($country != '') {
    $showedCountry = $country;
} else {
    $showedCountry = '';
}

$completedAddress = $showedAddress . $showedCity . $showedState . $showedPostCode . $showedCountry;

// Set Server Key <CHANGE WHEN GOING TO PRODUCTION>
// \Midtrans\Config::$serverKey = 'SB-Mid-server-VUFSYp7PcN-Kqofl0qoE-1IK';
\Midtrans\Config::$serverKey = 'Mid-server-6af_SctTHx4l0MT3ShiuKvk7';
// Set Development or Sandbox <CHANGE WHEN GOING TO PRODUCTION>
\Midtrans\Config::$isProduction = true;
// Set sanitazation ?
\Midtrans\Config::$isSanitized = true;
// 3DS for CC
\Midtrans\Config::$is3ds = true;
// Set Overriden Notif URL (for email notification)
\Midtrans\Config::$overrideNotifUrl = 'https://voffice.co.id/jakarta-virtual-office/payment/notification/notification-voffice.php';

// Required from Midtrans
$transaction_details = array(
    'order_id' => $transaction_id,
    'gross_amount' => 0,
);

$item1_details = array(
    'id' => $plan . ' - ' . $terms,
    'price' => $priceAfterTax,
    'quantity' => 1,
    'name' => $plan,
    'category' => $terms
);

$item_details = array($item1_details);

$billing_address = array(
    'first_name' => $fname,
    'last_name' => $lname,
    'address' => $address,
    'city' => $city,
    'postal_code' => $postCode,
    'phone' => $phone,
);

$customer_details = array(
    'first_name' => $fname,
    'last_name' => $lname,
    'email' => $email,
    'phone' => $phone,
    'billing_address' => $billing_address,
);

$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snapToken = Snap::getSnapToken($transaction);

// Midtrans done, Data send to database

include('includes/conn.php');

// insert data to DB
$sql = "INSERT INTO `payment-data` (id, snap_token, transaction_id, price_gross, fname, lname, email, phone, whatsapp, `address`, city, `state`, postcode, country, `location`, plan, terms, `promo`)
VALUES ('', '$snapToken', '$transaction_id', '$priceAfterTax', '$fname', '$lname', '$email', '$phone', '$whatsapp', '$address', '$city', '$state', '$postCode', '$country', '$location', '$plan', '$terms', '$promoCode')";

if ($conn->query($sql) === TRUE) {
    echo "Loading your payment";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9A2B59">
    <title>Checkout</title>

    <meta name="description" content="vOffice Buy Now Checkout Product" />
    <meta name="facebook-domain-verification" content="vy5hosbnbzlbl8jmwfybxvv0b16smc" />
    <meta name="google-site-verification" content="vIGs5sNCD8WA19fvxSzfVLWcxMh38ZEjiHCwcSYPUGA" />
    <meta name="robots" content="index,follow" />
    <meta name="author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script id="client-key" type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-nvRfIHVDdN2-X4rn"></script> -->
    <script src="https://app.midtrans.com/snap/snap.js" id="client-key" type="text/javascript" data-client-key="Mid-client-4BlC444gvNobfJOs"></script>

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

    <!-- autonumeric -->
    <script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>

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

        .box-container {
            padding: 35px 35px 20px 35px;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2);
            background: rgb(251, 251, 251);
        }

        .box-container.plan,
        .box-container.plan h3 {
            color: #fff !important;
        }

        .group-details {
            margin-bottom: 36px;
            font-family: "Helvetica Neue", "Montserrat", Helvetica, Arial, sans-serif;
            font-weight: normal !important;
            font-size: 1.1em;
        }

        .group-details .pr0 {
            padding-right: 0 !important;
        }

        .box-container.client .group-details .placeholder {
            font-weight: 500;
            color: rgba(0, 0, 0, .4);
            font-size: 0.8em;
            text-transform: uppercase;
        }

        .box-container.plan .group-details .placeholder {
            font-weight: 500;
            color: #fff;
            font-size: 0.8em;
            text-transform: uppercase;
        }

        .group-details .value-text {
            font-size: 1.2em;
        }

        .price-details {
            margin-bottom: 14px;
            font-family: "Helvetica Neue", "Montserrat", Helvetica, Arial, sans-serif;
            font-weight: normal !important;
            font-size: 1.1em;
        }

        .price-details .placeholder {
            font-weight: 500;
            font-size: 0.8em;
            text-transform: uppercase;
        }

        .price-details .value-text {
            font-size: 1.2em;
        }

        .btn:hover {
            border: 2px solid #fff;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.html'; ?>

    <div class="main-container" style="margin-top: 180px;">
        <section id="index-header" class="pt0 pb0">
            <h1 class="text-center mb5">
                <b>Check</b>out
            </h1>

            <h4 class="text-center">Make sure your data is correct</h4>
        </section>
    </div>

    <section class="index-body">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="box-container client">
                        <h4 class="text-center bold">Client Details</h4>

                        <hr>

                        <div class="group-details">
                            <div class="mb-1">
                                <span class="placeholder text-muted">Full Name</span>
                            </div>
                            <div class="">
                                <span class="value-text bold"><?= $fname . ' ' . $lname ?></span>
                            </div>
                        </div>

                        <div class="group-details">
                            <div class="mb-1">
                                <span class="placeholder text-muted">Email</span>
                            </div>
                            <div class="">
                                <span class="value-text bold"><?= $email ?></span>
                            </div>
                        </div>

                        <div class="group-details row">
                            <div class="col-xs-6">
                                <div class="mb-1">
                                    <span class="placeholder text-muted">Phone Number</span>
                                </div>
                                <div class="">
                                    <span class="value-text"><?= $phone ?></span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="mb-1">
                                    <span class="placeholder">WhatsApp Number</span>
                                </div>
                                <div class="">
                                    <span class="value-text"><?= $whatsapp ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="group-details">
                            <div class="mb-1">
                                <span class="placeholder">Address</span>
                            </div>
                            <div class="">
                                <span class="value-text"><?= $completedAddress ?></span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-5">
                    <div class="box-container plan" style="background-color: #951942;">
                        <h4 class="text-center bold" style="color: #fff;">Plan Details</h4>

                        <hr>

                        <div class="group-details">
                            <div class="mb-1">
                                <span class="placeholder">Order id</span>
                            </div>
                            <div class="">
                                <span class="value-text bold"><?= $transaction_id ?></span>
                            </div>
                        </div>

                        <div class="group-details">
                            <div class="mb-1">
                                <span class="placeholder">Your Plan</span>
                            </div>
                            <div class="">
                                <span class="value-text bold"><?= $plan ?></span>
                            </div>
                        </div>

                        <div class="group-details row">
                            <div class="col-xs-6">
                                <div class="mb-1">
                                    <span class="placeholder text-muted">Location</span>
                                </div>
                                <div class="">
                                    <span class="value-text"><?= $location ?></span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="mb-1">
                                    <span class="placeholder">Terms</span>
                                </div>
                                <div class="">
                                    <span class="value-text"><?= $terms ?></span>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="price-details row mb-1">
                            <div class="col-xs-3">
                                <span class="placeholder"><?= $titleDiscount ?> <span class="float-right">:</span></span>

                            </div>
                            <div class="col-xs-9">
                                <span class="value-text float-right rp"><?= $priceBeforeTax ?></span>
                            </div>
                        </div>

                        <div class="price-details row">
                            <div class="col-xs-3">
                                <span class="placeholder">Discount<span class="float-right">:</span></span>
                            </div>
                            <div class="col-xs-9">
                                <span class="value-text float-right rp"><?= $discount ?></span>
                            </div>
                        </div>

                        <div class="price-details row" <?= $hidden; ?>>
                            <div class="col-xs-3">
                                <span class="placeholder">Subtotal<span class="float-right">:</span></span>
                            </div>
                            <div class="col-xs-9">
                                <span class="value-text float-right rp"><?= $priceDiscount ?></span>
                            </div>
                        </div>

                        <div class="price-details row">
                            <div class="col-xs-3">
                                <span class="placeholder">VAT <span class="float-right">:</span></span>
                            </div>
                            <div class="col-xs-9">
                                <span class="value-text float-right">10%</span>
                            </div>
                        </div>

                        <hr>

                        <div class="price-details row">
                            <div class="col-xs-3">
                                <span class="placeholder">Total<span class="float-right">:</span></span>
                            </div>
                            <div class="col-xs-9">
                                <span class="value-text float-right rp"><?= $priceAfterTax ?></span>
                            </div>
                        </div>

                        <button class="btn btn-block my-3" type="submit" id="pay-button">Proceed to Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.html'); ?>

    <a href="http://bit.ly/voffice-webnew" class="back-to-top" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/flexslider.min.js"></script>
    <script src="js/scripts.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ourpartner.min.js"></script>
    <script src="plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>

    <script>
        const autoNumericRupiah = {
            currencySymbol: 'Rp ',
            decimalPlaces: '0',
            decimalCharacter: ',',
            digitGroupSeparator: '.'
        }
        new AutoNumeric.multiple('.rp', autoNumericRupiah);

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
    </script>

    <script>
        setTimeout(function() {
            $('#broadcast').fadeIn();
        }, 3000);
        $('#close').click(function() {
            $('#broadcast').fadeOut();
        });
        $(document).ready(function() {
            $('#testimonial-slider').owlCarousel({
                items: 1,
                itemsDesktop: [1000, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                pagination: true,
                navigation: true,
                navigationText: ['', ''],
                slideSpeed: 1000,
                autoPlay: true
            });
        });
        $(window).load(function() {
            $('#quote-carousel').carousel({
                pause: true,
                interval: 12000
            });
            $('#quote-carousel').carousel({
                pause: true,
                interval: 4000,
            });
            setTimeout(function() {
                $('myModalHorizontal').modal('show');
            }, 5000);
        });

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