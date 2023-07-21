<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Promotion vOffice</title>

    <meta name="description" content="Promo Virtual Office vOffice" />

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/coupon.css" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">

</head>

<body>

    <?php include("header.html") ?>

    <div class="main-container">

        <a name="home"></a>
        <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0 background-multiply">
            <ul class="slides">
                <li class="image-bg pt-xs-120">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="img/bg-jakarta.jpg">
                    </div>
                    <div class="container v-align-transform">
                        <div class="row text-left">
                            <div class="col-md-10 mt88 mt-xs-36">
                                <h4 class="mb8 number bold uppercase">oktober Special Deals</h4>

                                <h2 class="mb8 number pt-xs-36 bold mb24">Get Additional Free 2 months for every sign up!</h2>
                                <!-- <h4 class="mb8 number bold">Just show you Election Finger Mark</h4> -->
                                <a class="btn btn-lg btn-filled" href="#seemore">Lihat Selengkapnya!</a>
                                <!-- <p class="small pb-xs-16 mb0">(Promo Valid until 7 January 2019)</p> -->
                                <p class="visible-xs">&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <a name="seemore"></a>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb20">

                        <h4 class="bold mb0 color-black">The correct Virtual Office <br> will boost your efficiency and
                            productivity! </h4>
                        <p class="mb20">Enjoy all the exclusive benefit including support from 16 prestigious locations all
                            across <b class="color-black"> Jakarta and one-stop business services</b></p>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-6 mb20">
                            <img src="images/promo-oktober-2020.jpeg">
                        </div>
                        <div class="col-sm-6">
                            <div class="feature boxed3">
                                <h4 class="mb8 bold text-center color-black">Daftar Sekarang</h5>
                                    <p class="text-center mb32">Isi formulir di bawah ini untuk mendapatkan promo dan kami
                                        akan
                                        segera menghubungi Anda.
                                        Terima kasih!</p>
                                    <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                                        <input type="text" name="promo-vo-juni" hidden="hidden" value="promo-vo-juni" id="promo-vo-juni">
                                        <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                                        <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">

                                        <input type="text" class="validate-required validate-email" name="email" placeholder="Alamat Email*">


                                        <textarea style="color: #0a0a0a" name="message" rows="4" placeholder="Message"></textarea>

                                        <!-- <div class="input-coupon-cont">
                                  <input type="text" name="coupon" onkeyup="validate(coupon)" onfocusout="unvalidate()" id="inputPromo" class="coupon" title="Enter coupon" placeholder="Promo Code" inputcode="1">
                                  <span id="message"></span>
                                  <span id="err"></span>
                                </div> -->

                                        <button type="submit">Kirim</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="inline-block bold number p32 p0-xs">Check Our Virtual Office Plan</h2><br>
                        <a class="btn-lg btn btn-whiteblack" href="virtual-office-di-jakarta.php">
                            Click Here</a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php include("footer-vo.html") ?>

    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/coupon.js"></script>


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


</body>

</html>