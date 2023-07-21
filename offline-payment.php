<?php session_start(); ?>
<?php
if ($_SESSION["splan"] == "VirtualOfficeSilver")
    $plan = "Silver";
elseif ($_SESSION["splan"] == "VirtualOfficeGold")
    $plan = "Gold";
elseif ($_SESSION["splan"] == "VirtualOfficePlatinum")
    $plan = "Platinum";
elseif ($_SESSION["splan"] == "VirtualOfficePlatinumPlus")
    $plan = "Platinum Plus";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Indonesia Virtual Office | Sewa Kantor | Jakarta | Surabaya | Denpasar</title>

    <meta name="description" content="Jakarta Virtual Office, Jakarta Serviced
Office, Indonesia Office - Instant Office di Jakarta, Indonesia -
Shared Office and Virtual Office Service in Jakarta Indonesia by
JakartartutualOffice.com"/>

    <meta name="Title" CONTENT="Virtual Office Indonesia - Call Answering,
Address, Serviced Office, Meeting Room, Company Incorporation
Dedicated Phone and Fax number, Virtual Address - Indonesia"/>

    <meta name="keywords" content="virtual office jakarta, indonesia,
serviced office, temporary office, shared office, office virtual,
indonesia virtual office, start business, cheap office, short term office, kantor virtual jakarta, sewa kantor, ruang
kantor, jakarta, indonesia, kantor murah, virtual office, virtual
address jakarta, address, business office, receptionist, courier,
personal assistant"/>

    <meta name="robots" content="index,follow"/>
    <META name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet"
          type="text/css">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-23514398-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>

<?php include("header.html") ?>

<div class="main-container">

    <section class="bg-dark pt120 pb64">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="mb8">Thank you for your order!</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="col-md-7 col-sm-12">
                <div class="row">
                    <h2 class="color-primary">Offline Payment</h2>

                    <p>You have chosen Offline Payment Method for your order.</p>

                    <h6 class="bold-h6 mb8">The Summary of Your Order</h6>
                    <hr class="long-thick mb8">
                    <table class="table table-striped table-bordered mb24">
                        <!--                        <thead>-->
                        <!--                            <tr>-->
                        <!--                                <th>Size</th>-->
                        <!--                                <th>Measurement</th>-->
                        <!--                            </tr>-->
                        <!--                        </thead>-->
                        <tbody>
                        <tr>
                            <th scope="row" width="50%">Reference Order No:</th>
                            <td><span class="number"><?php echo $_SESSION["refid"]; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="row">Selected Plan:</th>
                            <td><span class="number">Virtual Office <?php echo $plan; ?> Plan</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Term:</th>
                            <td><span class="number"><? echo $_SESSION["sterm"]; ?> Month(s)</span></td>
                        </tr>
                        <!--<tr>
					<th scope="row">Location:</th>
					<td><? $_SESSION["saddon"]; ?></td>
				</tr>-->
                        <tr>
                            <th scope="row">Total Paid Amount:</th>
                            <td><span
                                    class="number"><?php echo $_SESSION["scurrency"] . " " . number_format($_SESSION["stotal"]); ?></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <p>Thank you for choosing vOffice.co.id and we look forward in having a successful business
                        relationship with your organization. Please contact us at <a href="mailto:cs@voffice.co.id">cs@voffice.co.id</a>
                        if you believe this should not be the case or you can retry again.</p>
                </div>
            </div><!-- end col -->

            <div class="col-md-4 col-md-offset-1 col-sm-12">
                <div class="feature boxed3 text-center">

                    <h6 class="bold-h6">Any Further Inquiries?</h6>
                    <hr class="short-thick inline-block text-center">
                    <h5>Should you need to reach us or have any further enquiries, you may call us at <a class="number bold"
                            href="tel:+622129222999">+6221 2922 2999</a> or e-mail us at <a
                            href="mailto:cs@voffice.co.id">cs@voffice.co.id</a>
                    </h5>
                </div>
            </div><!--end col-->

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="color-primary">For the meantime, you may remit your payment for this order through Direct
                        Deposit, Cheque or Money Order</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">Option 1: Payment by way of Bank-In & TT Transfer (International Customer)</h4>
                    <table class="info" align="center" width="50%">
                        <tr>
                            <td width="50%"><p>Account No:</p></td>
                            <td><p class="color-primary bold">6560 133 888</p></td>
                        </tr>
                        <tr>
                            <td><p>Account Name:</p></td>
                            <td><p class="color-primary bold uppercase">PT vOffice</p></td>
                        </tr>
                        <tr>
                            <td><p>Swift No:</p></td>
                            <td><p class="color-primary bold">CENAIDJA</p></td>
                        </tr>
                        <tr>
                            <td><p>Bank Details:</p></td>
                            <td>
                                <p><span class="color-primary bold uppercase">Bank Central Asia (BCA)</span><br/>
                                    Komp. Taman Kebon Jeruk,<br/>
                                    Jl. Meruya Ilir Blok B 6-9,<br/>
                                    Jakarta Barat, DKI Jakarta, Indonesia</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><p class="bold">OR</p></td>
                        </tr>

                        <tr>
                            <td width="50%"><p>Account No:</p></td>
                            <td><p class="color-primary bold">165-00-0034025-8</p></td>
                        </tr>
                        <tr>
                            <td><p>Account Name:</p></td>
                            <td><p class="color-primary bold uppercase">PT vOffice</p></td>
                        </tr>
                        <tr>
                            <td><p>Swift No:</p></td>
                            <td><p class="color-primary bold">BEIIIDJA</p></td>
                        </tr>
                        <tr>
                            <td><p>Bank Details:</p></td>
                            <td>
                                <p><span class="color-primary bold uppercase">BANK MANDIRI</span></p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">For remitting in US Dollars</h4>
                    <table class="info" align="center" width="50%">
                        <tr>
                            <td width="50%"><p>Account No:</p></td>
                            <td><p class="color-primary bold">6560 777 688</p></td>
                        </tr>
                        <tr>
                            <td><p>Account Name:</p></td>
                            <td><p class="color-primary bold uppercase">PT vOffice</p></td>
                        </tr>
                        <tr>
                            <td><p>Swift No:</p></td>
                            <td><p class="color-primary bold">CENAIDJA</p></td>
                        </tr>
                        <tr>
                            <td><p>Bank Details:</p></td>
                            <td>
                                <p><span class="color-primary bold uppercase">Bank Central Asia (BCA)</span><br/>
                                    Komp. Taman Kebon Jeruk,<br/>
                                    Jl. Meruya Ilir Blok B 6-9,<br/>
                                    Jakarta Barat, DKI Jakarta, Indonesia</p>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Please remember to email to us the bank-in slip,
                                    ensuring that the following can be clearly read</p></td>
                            <td>
                                <ol>
                                    <li><span class="color-primary bold">CHEQUE NUMBER</span></li>
                                    <li><span class="color-primary bold">AMOUNT PAID</span></li>
                                    <li><span class="color-primary bold">BANK-IN SLIP NUMBER</span></li>
                                    <li><span class="color-primary bold">INVOICE NUMBER</span> for which this payment is
                                        meant
                                    </li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Phone No:</p></td>
                            <td><p class="color-primary bold">+6221 2922 2999</p></td>
                        </tr>
                        <tr>
                            <td><p>Fax:</p></td>
                            <td><p class="color-primary bold">+6221 2922 2990</p></td>
                        </tr>
                        <tr>
                            <td><p>Email:</p></td>
                            <td><p class="color-primary bold">paid@vOffice.co.id</p></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">Option 2: Payment by way of a Cheque</h4>
                    <table class="info" align="center" width="50%">
                        <tr>
                            <td width="50%"><p>Please ensure that you write on the back of cheque</p></td>
                            <td>
                                <ol>
                                    <li>Your <span class="color-primary bold">COMPANY NAME</span></li>
                                    <li><span class="color-primary bold">INVOICE NUMBER</span> for which this cheque is
                                        meant
                                    </li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td><p>Mail the cheque to:</p></td>
                            <td>
                                <p><span class="color-primary bold uppercase">PT vOffice</span><br/>
                                    Menara Rajawali Level 7-1,<br/>
                                    Jl. Mega Kuningan Lot No. 5.1<br/>
                                    Mega Kuningan, Jakarta Selatan<br/>
                                    12950</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <!--<div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">Option 3: Payment by Credit Card (VISA, MASTERCARD, AMEX)</h4>
                    <table class="info" align="center" width="50%">
                        <tr>
                            <td width="50%"><p>Online Credit Card Payment</p></td>
                            <td><p>You may make your payment using a valid credit card through our Secure Payment Page
                                    at <a class="color-primary bold" href="https://voffice.co.id/pay/">https://voffice.co.id/pay/</a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>-->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="bold">Option 3: Payment by Western Union Money Transfer (International Customer)</h4>
                    <table class="info" align="center" width="50%">
                        <tr>
                            <td width="50%"><p>Please contact us for transfer detail</p></td>
                            <td><p>Email to <a href="mailto:cs@vOffice.co.id"><span class="color-primary bold">cs@vOffice.co.id</span></a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h2 class="bold text-center">Any Further Inquiries?</h2>
                    <table class="info" align="center">
                        <tr>
                            <td colspan="2"><p>Should you need to reach us or have any further enquiries, you may call
                                    us at <a href="tel:+622129222999">+6221 2922 2999</a> or e-mail us at <a href="mailto:cs@vOffice.co.id">cs@vOffice.co.id</a></p></td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <hr class="fade-half">

    <?php include("footer.html") ?>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/masonry.min.js"></script>
<script src="js/twitterfetcher.min.js"></script>
<script src="js/spectragram.min.js"></script>
<script src="js/ytplayer.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php session_unset(); ?>
