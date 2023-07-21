<?php

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
$promoCode  = $_POST['promo-code'];

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 10000, // no decimal allowed for creditcard
);


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
);

$snapToken = Snap::getSnapToken($transaction);
echo "snapToken = ".$snapToken;
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#9A2B59">
    <title>Sewa Virtual Office Jakarta & Serviced Office Lokasi Strategis</title>

    <meta name="description" content="Sewa Virtual Office Jakarta ✓ Serviced Office ✓ Meeting Room ✓
    Company Incorporation/Pembuatan PT & CV ✓ Dedicated Phone and Fax number ✓ Event Space ✓"/>
    <meta name="facebook-domain-verification" content="vy5hosbnbzlbl8jmwfybxvv0b16smc" />
    <meta name="google-site-verification" content="vIGs5sNCD8WA19fvxSzfVLWcxMh38ZEjiHCwcSYPUGA"/>
    <meta name="robots" content="index,follow"/>
    <meta name="author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Raleway:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/card.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/extra.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/testi.css" rel="stylesheet" type="text/css">
    <link href="css/ourpartner.min.css" rel="stylesheet" type="text/css">
    <!--slide carousel-->
    <link href="plugins/OwlCarousel2/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/OwlCarousel2/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <script type="application/ld+json">
    
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name" : "vOffice",
      "url": "https://www.voffice.co.id",
      "logo": "https://voffice.co.id/jakarta-virtual-office/img/voffice-indonesia.png",
      "contactPoint":
      [
        {
          "@type": "ContactPoint",
          "telephone": "+6221 2922 2999",
          "contactType": "customer service"
        }
      ]
    }

    </script>
    <style media="screen">.footer_mobile_cta ul li {
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
        .nav-tabs{
          border:none;
        }
        .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
          font-size: 16px;
          color:#951942;
          border:none;
          border-bottom:2px solid #951942;
        }
        .nav-tabs>li>a{
          margin-right:0px !important;
          font-size: 16px;
          color:#a7a7a7;
          border:none;
          border-bottom:2px solid #c9c9c9;
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
      </style>
</head>
<body>

<?php include "header.html" ?>

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

            <form action="index.php" method="post">
                <div class="col-md-6">
                    <h4>Account Details</h4>

                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="fname" id="fname" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="lname" id="lname" placeholder="Last Name" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                    </div>

                    <textarea name="address" id="address" rows="3" class="" placeholder="Address"></textarea>

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
                        <select name="location" id="location" class="">
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
                        <input type="text" name="promo-code" id="promo-code" placeholder="Promo Code">
                    </div>

                    <div class="form-group ml-1">
                        <label for="termsandcondition">
                            <input type="checkbox" id="termsandcondition" name="termsandcondition" required> I accept <a data-toggle="modal" data-target="#tac-modal">terms and conditions.</a>
                        </label>
                    </div>

                    <div class="submit-btn col-md-12 p0">
                        <button type="submit" class="lang">Submit</button>
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
                            <p class="data-desc">: <?= $fname ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="data-title">Last name</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="data-desc">: <?= $lname ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Email</p>
                </div>
                <p class="col-sm-9">: <?= $email ?></p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Phone Number</p>
                </div>
                <p class="col-sm-9">: <?= $phone ?></p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Address</p>
                </div>
                <p class="col-sm-9">: <?= $address ?></p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="data-title">City</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="data-desc">: <?= $city ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="data-title">State</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="data-desc">: <?= $state ?></p>
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
                            <p class="data-desc">: <?= $postCode ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="data-title">Country</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="data-desc">: <?= $country ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <h4>Plan Details</h4>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Location</p>
                </div>
                <p class="col-sm-9">: <?= $location ?></p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Plan</p>
                </div>
                <p class="col-sm-9">: <?= $plan ?></p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Terms</p>
                </div>
                <p class="col-sm-9">: <?= $terms ?></p>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p class="data-title">Promo Code</p>
                </div>
                <p class="col-sm-9">: <?= $promoCode ?></p>
            </div>
            <button class="btn btn-default" id="pay-button" onclick="snap.pay('<?php echo $snapToken ?>')">Continue</button>
            <small>by clicking continue, you're agree with our terms and condition</small>
        <H1><?php echo $snapToken?></H1>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
</div>    

<a href="http://bit.ly/voffice-webnew" class="back-to-top" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
<script src="js/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/scripts.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/ourpartner.min.js"></script>
<script src="plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>

<!-- midtrans -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-nvRfIHVDdN2-X4rn"></script>
<!-- <script src="js/dynamicWA.js"></script> -->
<!-- <script src="js/tac.js"></script> -->

<!--pop up-->
<?php include("popup-tac.html"); ?>

<script type="text/javascript">

// $(window).on('load', function() {
//     $('#pay-modal').modal('show');
// });

// submit ajax
$('#form-test').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'index.php',
            type: 'post',
            data:$('#form-test').serialize(),
            success:function(){
                // Whatever you want to do after the form is successfully submitted
                    jQuery('#myModal').modal('show');
            }
        });
    });

// midtrans
document.getElementById('pay-button').onclick = function(){
    // SnapToken acquired from previous step
    snap.pay('<?php echo $snapToken?>');
};

setTimeout(function () {
        $("#broadcast").fadeIn();
    }, 3000);
    $("#close").click(function () {
        $("#broadcast").fadeOut();
    });
    $(document).ready(function () {
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
    $(window).load(function () {
        $('#quote-carousel').carousel({pause: true, interval: 12000,});
        $('#quote-carouseltwo').carousel({pause: true, interval: 4000,});
        setTimeout(function () {
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
            0: {items: 1},
            600: {items: 1},
            1000: {items: 1}
        }
    });
    $('#pause-button').click(function () {
        $('#youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
    });
    $(window).on('load', function () {
        $('#popup2').modal('show');
    });
</script>
</body>
</html>

