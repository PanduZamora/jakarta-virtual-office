<?php
session_start();

include 'adminClass.php';
$adminclass = new adminClass;
if ($_GET['ref'] != '')
{
    if ($_SESSION["referral"] == '')
    {
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
  <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,800" rel="stylesheet">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/language.js"></script>
</head>

<body>

<?php include "header-redesign.html"?>

<div class="main-container">

 <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/redesign/headervambass-49.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0 mtmin10"> Siapa Saja </h1>
                          <h3 class="mb5"> Anggota VAmbassador? </h3>
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
                    <div class="col-sm-5">
                       <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> Seluruh</h2>
                        <h2 class=" text-style-1 About-us font-size-60 mb20"> Client vOffice </h2>
                        <h5>VAmbassador adalah klien aktif kami yang peduli dan ingin berbagi pengetahuan mengenai dan keuntungan <b> "SMARTER BUSINESS - BETTER LIFE" </b> dari vOffice kepada kolega, teman dan keluarga atau siapa saja yang ingin menjadi pengusaha smart dan ingin mencapai kesuksesan bisnis.</h5>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                         <img src="img/new/vambassador.jpg" class="border-radius-5">
                    </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb20 text-center">
                    <h2 class="bold color-black mb0"> VAmbassador </h2>
                    <h5> Apa yang Dilakukan VAmbassador sebagai  sebuah Komunitas?</h5>
                </div>
            </div>
               <div class="row">
                       <div class="container">
                        <div class="col-md-12 col-offset-md-1">
                            <div class="row">
                                <div class="col-md-3 mb10">
                                    <div class="feature text-center boxedcrm">
                                        <img src="img/crm/charity.jpg" style="width:100%" class="mb10 border-radius-5">
                                          <h5 class="color-black bold p10">  &hearts; Bakti Sosial</h5>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="feature text-center boxedcrm">
                                        <img src="img/crm/event-6.JPG" alt="Norway" style="width:100%" class="mb10 border-radius-5">
                                          <h5 class="color-black bold p10">     &hearts; Networking</h5>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="feature text-center boxedcrm">
                                        <img src="img/crm/event-4.JPG" alt="Norway" style="width:100%" class="mb10 border-radius-5">
                                          <h5 class="color-black bold p10">  &hearts; Seminar</h5>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="feature text-center boxedcrm">
                                        <img src="img/crm/event-1.jpg" alt="Norway" style="width:100%" class="mb10 border-radius-5">
                                          <h5 class="color-black bold p10">  &hearts; Events</h5>
                                      </div>
                                </div>
                        </div>
                    </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="col-sm-6 mb20">
                         <img src="img/new/vambassador.jpg" class="border-radius-5">
                    </div>
                    <div class="col-sm-5">
                       <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> Keuntungan</h2>
                        <h4 class=" text-style-1 About-us mb20"> menjadi VAmbassador </h4>
                        <h5>VAmbassador yang menyarankan siapa saja untuk menggunakan layanan vOffice akan diberikan imbalan menarik dan di saat yang sama VAmbassador dapat memberikan diskon spesial kepada kolega, teman dan keluarga untuk menggunakan layanan vOffice.</h5>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <a name="contactus"></a>
            <div class="row">
                <div class="col-md-6 well ">
                    <h4 class="text-center bold mb0">Apa yang harus dilakukan VAmbassador <br> untuk merekomendasikan layanan vOffice? </h4>
                    <p class=" text-center mb10"> Kami akan melakukan follow-up secara langsung untuk mendaftarkan rekomendasi Anda. </p>
                    <p class="text-center bold mb10 color-black"><span style="color: green"
                                                                       class="fa fa-whatsapp color-black"></span>
                        Whatsapp
                        Number
                    <h4 class="bold number text-center"><a href="tel:+6281299327744">0812-9932-7744</a></h4>
                    </p>
                    <h6 class="bold text-center number"> </h6>
                    <form class="form-email"
                          data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" name="vambassador" hidden="hidden" value="vambassador"
                               id="vambassador">
                        <input type="text" name="ip" value="" hidden>
                        <input type="text" class="validate-required" name="name" placeholder="Name">
                        <input type="text" class="validate-required" name="phone" placeholder="Phone">
                        <input type="text" class="validate-required validate-email" name="email"
                               placeholder="Email Address">
                          <textarea class="validate-required" name="message" rows="4"
                                    placeholder="Message"></textarea>
                        <button type="submit" class="lang" key="send">Send</button>
                    </form>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="feature text-center boxed3">
                        <img src="img/crm/logo-whatsapp.png" style="width: 25%;">
                        <h5 class="mb5 bold color-black">Melalui Whatsapp</h5>
                        <p class="lang" key="sectionone10">
                            Dengan menyimpan no kami, anda akan cepat dan mudah menghubungi kami secara personal
                                   <span class="color-primary bold"><br> 0812-9932-7744
                        </p>
                    </div>

                    <div class="feature text-center boxed3">
                        <i class="ti-headphone-alt icon-lg inline-block color-primary mb16"></i>
                         <h5 class="mb5 bold color-black">Melalui Telepon</h5>
                        <p class="lang" key="sectionone6">
                            Anda dapat menghubungi kami kapan saja di <a href="tel:+622129222999"
                                                                         class="color-primary bold">+6221
                                2922
                                2999</a> selama jam kerja. Customer Service kami akan siap membantu Anda.
                        </p>
                    </div>

                    <div class="feature text-center boxed3">
                        <i class="ti-email icon-lg inline-block color-primary mb16"></i>
                         <h5 class="mb5 bold color-black">Melalui Email</h5>
                        <p class="lang" key="sectionone8">
                            Anda juga bisa mengirimkan email ke <span
                                class="color-primary bold">hello@voffice.co.id</span>.
                            Kami akan membalas email Anda secepatnya.
                        </p>
                    </div>
                </div>
            </span>
        </p>
    </div>
</div>
</div>
</div>
</section>

</div>


  

    <?php include ('footer.html'); ?>
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

<!--pop up-->
<script type="text/javascript">
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
        $('#quote-carousel').carousel({
            pause: true,
            interval: 12000,
        });
        $('#quote-carouseltwo').carousel({
            pause: true,
            interval: 4000,
        });
        setTimeout(function () {
            $('#myModalHorizontal').modal('show');
        }, 5000);
    });
</script>


<script>
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
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
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
</body>