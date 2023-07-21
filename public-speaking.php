<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Merry Riana Public Speaking</title>

<!--    <meta name="description" content="Sewa ruang kantor BSD Tangerang, Virtual Office, Serviced Office, Office Space for Rent,-->
<!--    Meeting Room, Business Center Banten, BSD, Tangerang"/>-->

    <meta name="robots" content="index,follow"/>
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link 
        href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet"
          type="text/css">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">

</head>
<body>

<?php include("header.html") ?>

<div class="main-container">

    <a name="home"></a>
    <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-100 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-merry.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-10 mt88 mt-xs-30">
                            <img src="img/merry/logo.png" width="10%;">
                            <h2 class="mb8 bold number">Public Speaking Classes, <br> Merry Riana Learning Center</h2>
                            <h5 class="mb8 number">vOffice Business Centre</h5>
                            <a class="btn btn-lg btn-filled" href="#amenities">Lihat Selengkapnya!</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

<a name="amenities"></a>
 <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3 class="bold mb5">What Did You Get</h3>
                        <hr class="center-custom">
                </div>
            </div>
            <div class="row mb20">
                <div class="col-sm-12 text-center">
                    <div class="col-sm-4">
                        <img src="img/merry/m_1.png" width="40%">
                        <h5 class="bold">The Art Of Public Speaking</h5>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/merry/M_2.png" width="40%">
                        <h5 class="bold">Speaking With Impact</h5>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/merry/M_3.png" width="40%">
                        <h5 class="bold">Stage Time</h5>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="col-sm-4">
                        <img src="img/merry/M_4.png" width="40%">
                        <h5 class="bold">Presentasion Dynamic</h5>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/merry/M_5.png" width="40%">
                        <h5 class="bold">Capativate Your Audience</h5>
                    </div>
                    <div class="col-sm-4">
                        <img src="img/merry/M_6.png" width="40%">
                        <h5 class="bold">Communicate Using NLP</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6 text-center mb-xs-32 mb10 pt104 pt-xs-0">
                        <h3 class="bold mb5">Public Speaking Classes</h3>
                        <hr class="center-custom">
                        <p class="article">Ingin mampu percaya diri dalam berkomunikasi dengan banyak orang bahkan klien perusahaan anda? Dapatkan Kesempatan untuk belajar dengan Para Expert Merry Riana Learning Center. </p>
                    </div>

                    <div class="col-sm-6">
                        <img src="img/merry/poster_merry.jpeg">
                    </div>  
                </div>
            </div>
        </div>
    </section>


    <?php include("public-foot.php") ?>

</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>


<!--Magnific Pop Up-->
<script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.popupgallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function (item) {
                    return item.el.attr('title') + '<a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank"></a>';
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function (element) {
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