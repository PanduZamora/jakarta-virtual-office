<?php
session_start();

include 'adminClass.php';
$adminclass = new adminClass;
if ($_GET['ref'] != '') {
    if ($_SESSION["referral"] == '') {
        $_SESSION["referral"] = $_GET['ref'];
    }
    $result          = $adminclass->reConnectClientClassDB();
    $result          = $adminclass->SearchByNumber($_SESSION["referral"]);
    $row             = mysql_fetch_assoc($result);
    $row['visitors'] = $row['visitors'] + 1;
    $result          = $adminclass->updateClientBarcodeVisitor($row['visitors'], $_SESSION["referral"]);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,800" rel="stylesheet">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/language.js"></script>
</head>

<body>

    <?php include "header-redesign.html" ?>

    <div class="main-container">

        <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0">
            <ul class="slides">
                <li class="image-bg pt-xs-120">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="img/redesign/headeracc-49.jpg">
                    </div>
                    <div class="container v-align-transform">
                        <div class="row text-left">
                            <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                                <h1 class="bold mb0"> Accounting </h1>
                                <h2> Platform </h2>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb5 bold color-black font-size-60">About </h2>
                            <h2 class=" mb10"> Us </h2>
                            <h5 class="padding-5 color-black"> Subscription based with support and advise that is always reachable. You will be able to monitor movement of inventory and cash flow at all times so you can know the financial state of your business at all times You can minimize the paperwork involved and ease yourself to keep track of transactions and avoid too much time wasted in administration. </h5>
                        </div>
                        <div class="col-sm-6">
                            <img src="img/redesign/icon/accounting/accounting-01.png" width="80%">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb20">
                        <h2 class="bold mb40 color-black"> Benefits </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4 mb20">
                            <div class="col-sm-3 col-xs-3">
                                <img src="img/redesign/icon/accounting/team.png">
                            </div>
                            <div class="col-sm-9 col-xs-9 mb40">
                                <h5 class="bold color-primary mb10">Easing The Collaboration Of Stakeholder</h5>
                            </div>
                        </div>
                        <div class="col-sm-4 mb20">
                            <div class="col-sm-3 col-xs-3">
                                <img src="img/redesign/icon/accounting/shield.png">
                            </div>
                            <div class="col-sm-9 col-xs-9 mb40">
                                <h5 class="bold color-primary mb10">No Installation Fee & Easy to Use</h5>
                            </div>
                        </div>
                        <div class="col-sm-4 mb20">
                            <div class="col-sm-3 col-xs-3">
                                <img src="img/redesign/icon/accounting/wallet.png">
                            </div>
                            <div class="col-sm-9 col-xs-9 mb40">
                                <h5 class="bold color-primary mb10">No Fees In Advanced (Free Trial, Pay as you Go) </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="bold mb40 color-black"> Pricelist </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="col-sm-12 card-plan pt">
                                <h3 class="color-black bold text-center mb10"> Pro </h3>
                                <h4 class="color-primary text-center bold mb20"> Rp 195 Ribu</h4>
                                <hr>
                                <ul class="text-left bullets">
                                    <li>User : 4</li>
                                    <li>Inventory : 2</li>
                                    <li>Basic Accounting Feature</li>
                                    <li>Bank Reconciliation</li>
                                    <li>Limited Quotation</li>
                                    <p> &nbsp; </p>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-filled mb10 text-center" href="#" data-toggle="modal" data-target="#contactus"> Minta Proposal </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-sm-12 card-plan primary">
                                <h3 class=" bold text-center mb10 color-white"> Enterprise </h3>
                                <h4 class="color-primary text-center bold mb20 color-white"> Rp 295 Ribu</h4>
                                <hr>
                                <ul class="text-left bullets color-white">
                                    <li>User : 6</li>
                                    <li>Inventory : 4</li>
                                    <li>Basic Accounting Feature</li>
                                    <li>Bank Reconciliation</li>
                                    <li>API Integration</li>
                                    <li>Limited Quotation</li>
                                </ul>
                                <div class="text-center">
                                    <a class="btn btn-lg btn-whiteblack mb10 text-center" href="#" data-toggle="modal" data-target="#contactus"> Minta Proposal </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container">
                <div class="row mb40-lg mb20-xs">
                    <div class="col-sm-12">
                        <div class="col-sm-6">
                            <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb10 bold color-black font-size-60"> Mengapa </h2>
                            <h2 class=" text-style-1 About-us font-size-60 mb20"> Memilih Kami? </h2>
                            <h5 class="padding-5">
                                Kami melayani lebih dari 24.000 bisnis sejak tahun 2003. Kami juga memiliki tim ahli untuk membantu anda mengembangkan bisnis di Indonesia.
                            </h5>
                        </div>
                        <a name="contactus"></a>
                        <div class="col-sm-6 ">
                            <div class="feature boxed3">
                                <h4 class="mb8 bold text-center color-black">We are here to assist your business success</h5>
                                    <p class="text-center mb32">Isi formulir di bawah ini untuk mendapatkan proposal penawaran
                                        dan kami akan segera menghubungi Anda. Terima kasih!</p>
                                    <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                                        <input type="text" name="acc" hidden="hidden" value="acc" id="acc">
                                        <input hidden="" name="tracker" id="tracker" type="text" value="call">

                                        <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                                        <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">

                                        <input type="text" class="validate-required validate-email" name="email" placeholder="Alamat Email*">

                                        <textarea style="color: #0a0a0a" name="message" rows="4" placeholder="Message"></textarea>
                                        <input type="text" name="url" value="http://voffice.co.id/jakarta-virtual-office/virtual-office-pt-revisi.php" hidden>
                                        <button id="submit-form" type="submit" name="submit">Claim Your Benefit</button>
                                    </form>
                            </div>
                        </div>

                    </div>
                </div>
        </section>
    </div>


    <?php include('footer.html'); ?>
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


    <!--Magnific Pop Up-->
    <script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.popupgallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function(item) {
                        return item.el.attr('title') + '<a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank"></a>';
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function(element) {
                        return element.find('img');
                    }
                }

            });
        });
    </script>

    <!--slide-->
    <script src="plugins/carousel/js/partner.owl.carousel.min.js"></script>
    <script src="plugins/carousel/js/theme-scripts.js"></script>

    <!--pop up-->
    <script type="text/javascript">
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


    <script>
        $(document).ready(function() {

            $(".filter-button").click(function() {
                var value = $(this).attr('data-filter');

                if (value == "all") {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                } else {
                    //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                    //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.' + value).hide('3000');
                    $('.filter').filter('.' + value).show('3000');

                }
            });

            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");

        });
    </script>


    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-white";
        }
    </script>

</body>

</html>
</body>