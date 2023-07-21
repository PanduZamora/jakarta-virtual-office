<? session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Indonesia Virtual Office | Serviced Office | Sewa Kantor Jakarta | Surabaya | Bali</title>

    <meta name="description" content="Sewa Virtual Office dan Serviced Office Murah di Jakarta | Office Space for Rent |
    Sewa Kantor Jakarta | Meeting Room | Company Incorporation, Pembuatan PT, CV & PMA | Dedicated Phone and Fax number,
    hanya di vOffice Indonesia"/>

    <meta name="keywords" content="virtual office jakarta, indonesia, ruang kantor, office space,
serviced office, temporary office, shared office,
start business, cheap office, short term office, kantor virtual jakarta, sewa kantor, kantor murah, virtual
address jakarta, address, business office, receptionist, courier,
personal assistant"/>

    <meta name="google-site-verification" content="vIGs5sNCD8WA19fvxSzfVLWcxMh38ZEjiHCwcSYPUGA"/>

    <meta name="robots" content="index,follow"/>
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/testimoni.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

</head>
<body>

<?php include("header.html") ?>

<div class="main-container">

    <section class="bg-dark pt120">
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
                    <h2 class="color-primary">Payment Failure!!</h2>

                    <p>Unfortunately your order wasn't successful due to a payment error.</p>

                    <h6 class="bold-h6 mb8">The Summary of Your Order</h6>
                    <hr class="long-thick mb8">
                    <table class="table table-striped table-bordered mb24">
                        <!--thead>
                            <tr>
                                <th>Size</th>
                                <th>Measurement</th>
                            </tr>
                        </thead-->
                        <tbody>
                        <tr>
                            <th scope="row" width="50%">Reference Order No:</th>
                            <td><span class="number"><?= $paymentid; ?></span></td>
                        </tr>
                        <tr>
                            <th scope="row" width="50%">Bank Error:</th>
                            <td><span class="number"><?= $_SESSION['bankerror']; ?></span></td>
                        </tr>
                        </tbody>
                    </table>

                    <p>Please contact us at <a href="mailto:cs@voffice.co.id">cs@voffice.co.id</a> if you believe this
                        should not be the case or you can retry again.</p>
                </div>

            </div><!-- end col -->

            <div class="col-md-4 col-md-offset-1 col-sm-12">
                <div class="feature boxed3 text-center">

                    <h6 class="bold-h6">Any Further Inquiries?</h6>
                    <hr class="short-thick inline-block text-center">
                    <h5>Should you need to reach us or have any further enquiries, you may call us at <a
                            href="tel:+622129222999" class="number">+6221 2922 2999</a> or e-mail us at <a
                            href="mailto:cs@voffice.co.id">cs@voffice.co.id</a></h5>
                </div>
            </div><!--end col-->


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

<!--Google Analytics-->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32797576-1']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>
				
