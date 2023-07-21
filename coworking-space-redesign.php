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

     <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

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
                    <img alt="image" class="background-image" src="img/redesign/headerworkspace-56.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Coworking  </h1>
                          <h1> Space </h1>
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
                        <h2 class="About-us mb5 bold color-black font-size-60"> Coworking</h2>
                        <h3 class=" text-style-1 About-us mb5"> Space Adalah </h3>
                        <h5 class="padding-5">cara kerja fleksibel dengan tempat kerja yang saling berbagi, berbeda dengan cara kerja pada umumnya. Coworking Space lebih mengedepankan kolaborasi, berbagi. dimana pekerja disana selain berbagi tempatjuga bisa berbagi informasi & pengalaman.</h5>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1 ">
                        <img src="images/virtualoffice/event5.jpg" alt="apa itu coworking space" class="border-radius-5">


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6 hidden-xs">
                         <img src="images/virtualoffice/event2.jpg"
                                               alt="manfaat coworking space" class="border-radius-5">
                    </div>
                    <div class="col-sm-6">
                         <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> Manfaat</h2>
                        <h3 class=" text-style-1 About-us mb5"> Coworking Space </h3>

                        <ul class="bullets padding-5">
                        <li class="article">Lingkungan kerja yang kondusif</li>
                        <li class="article">Berbagi pengetahuan, pengalaman & wawasan dengan penghuni lain</li>
                        <li class="article">Membangun komunitas</li>
                        <li class="article">Meningkatkan peluang kerja sama dengan penghuni lainnya</li>
                        <li class="article">Kalian akan mendapatkan semua yang anda butuhkan untuk bekerja</li>
                        <li class="article">Harga cenderung lebih murah dibanding kantor konvensional</li>
                        <li class="article">Menghilangkan jenuh karena suasana kantor yang menyenangkan</li>
                    </ul>

                    </div>
                     <div class="col-sm-6 visible-xs">
                         <img src="images/virtualoffice/event2.jpg"
                                               alt="manfaat coworking space" class="border-radius-5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="col-sm-6 text-left">
                        <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb5 bold color-black font-size-60"> Apa</h2>
                            <h2 class=" text-style-1 About-us mb40"> yang di dapatkan</h2>
                    </div>

                    <div class="col-sm-2 col-xs-6 text-left mb20">
                         <img src="img/material/high.png" alt="Wifi" width="25%" class="mb10">
                            <h5 class="bold mb8 color-black">Wifi internet</h4>
                            <p class="color-black">Internet yang cepat untuk membantu pekerjaan anda.</p>


                    </div>
                    <div class="col-sm-2 col-xs-6 text-left mb20">
                        <img src="img/material/fully.png" alt="Meja Bekerja" width="25%" class="mb10">
                            <h5 class="bold mb8 color-black">Meja bekerja</h5>
                            <p class="color-black">Pilih tempat dimana anda nyaman bekerja.</p>

                    </div>

                    <div class="col-sm-2 col-xs-6 text-left mb20">
                       <img src="img/material/printer.png" alt="Printing & Scanning" width="25%" class="mb10">
                           <h5 class="bold mb8 color-black">Printing & Scanning</h5>
                            <p class="color-black">Printer, Scanner untuk menunjang kebutuhan kerja</p>
                    </div>


                     <div class="col-sm-2 col-xs-6 text-left mb20 visible-xs">
                         <img src="img/material/premiumcoffee_icon.png" alt="Kopi & Tea" width="25%" class="mb10">
                          <h5 class="bold mb8 color-black">Gratis kopi & tea</h4>
                           <p class="color-black">Gratis minum kopi & teh untuk menemani anda bekerja</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                     <div class="col-sm-2 col-xs-6 text-left mb20 hidden-xs">
                         <img src="img/material/premiumcoffee_icon.png" alt="Kopi & Tea" width="25%" class="mb10">
                          <h5 class="bold mb8 color-black">Gratis kopi & tea</h4>
                           <p class="color-black">Gratis minum kopi & teh untuk menemani anda bekerja</p>
                    </div>
                    <div class="col-sm-2 col-xs-6  text-left">
                      <img src="img/material/events.png" alt="Networking Event" width="25%" class="mb10">
                             <h5 class="bold mb8 color-black">Networking <br> Event</h4>
                            <p class="color-black">Event bulanan untuk menambah wawasan anda</p>

                    </div>
                    <div class="col-sm-2 col-xs-6 text-left">
                      <img src="img/material/domicile.png" alt="Penerimaan surat & paket" width="25%"
                                 class="mb10">
                            <h5 class="bold mb8 color-black">Penerimaan surat & paket</h5>
                            <p class="color-black">Layanan penerimaan surat & paket yang ditujukan kepada anda</p>


                    </div>

                    <div class="col-sm-2 col-xs-6 text-left">
                        <img src="img/material/community_icon.png" alt="Global Network" width="25%" class="mb10">
                             <h5 class="bold mb8 color-black">Global <br> Network</h4>
                            <p class="color-black">Global networking untuk memperluas jejaring bisnis anda</p>


                    </div>
                    <div class="col-sm-2 col-xs-6 text-left">
                             <img src="img/material/receptionist.png" alt="Layanan Resepsionis Profesional" width="25%"
                                 class="mb10">
                           <h5 class="bold mb8 color-black">Layanan Resepsionis</h4>
                            <p class="color-black">Resepsionis Profesional yang akan membantu hari-hari anda</p>


                    </div>
                    <div class="col-sm-2 col-xs-6 text-left">
                      <img src="img/material/passport.png" alt="meeting room" width="25%" class="mb10">
                             <h5 class="bold mb8 color-black">Meeting <br> Room</h4>
                            <p class="color-black">Akses Lebih dari 100 Meeting Room di 50 Lokasi untuk kebutuhan bisnis
                                anda</p>


                    </div>
                </div>  
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">

                                <div class="image-slider slider-arrow-controls controls-inside">
                                    <ul class="slides">
                                        <li>
                                            <img class="mb8 border-radius-5" src="images/coworking-space/coworking1.jpg">
                                        </li>
                                        <li>
                                            <img class="mb8 border-radius-5" src="images/coworking-space/coworking2.jpg">
                                        </li>
                                        <li>
                                            <img class="mb8 border-radius-5" src="images/coworking-space/coworking3.jpg">
                                        </li>
                                        <li>
                                            <img class="mb8 border-radius-5" src="img/gallery/tct-meet.jpg">
                                        </li>
                                    </ul>
                                </div>

                    </div>
                    <div class="col-sm-6">
                         <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> You Very</h2>
                        <h3 class=" text-style-1 About-us mb5"> Own Desk </h3>
                        <p class="color-black mb0"> Temukan tempat yang nyaman & fleksibel untuk Anda, bekerja bersama dengan para profesional yang berpikiran serupa dan dapatkan kesempatan untuk berinteraksi dan berkolaborasi satu sama lain.</p>
                        <h5 class="color-black">Bawa laptop Anda, pilih meja Anda dan mulai bekerja</h5>
                        <div class="col-sm-5 col-xs-6 card-plan pt">
                            <div class="col-sm-12">
                                <h4 class="color-primary bold"> Daily Plan </h4>
                                <h5 class="bold color-black">Rp 150.000,-</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="col-sm-12 card-plan pt">
                                <h4 class="color-primary bold"> Weekly Plan </h4>
                                 <h5 class="bold color-black">Rp 100.000,-</h5>
                            </div>
                        </div>
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
                    <h2 class="mb0 color-white">Bergabunglah dengan kami </h2>
                    <h4 class=" color-white mb0">& terhubung dengan</h4>
                    <h3 class="mb0 bold color-white mb20">35.000 pemilik bisnis lainnya</h3>
                    <a href="#contactus" class="btn btn-filled"> Contact Us </a>
                </div>
            </div>
        </div>
    </section>

    <a name="contactus"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <p class="text-center"><img src="img/new/vambassador.jpg" class="border-radius-5"></p>
                    <h5>
                        Dapat dipastikan bahwa kantor anda akan dikelola oleh Virtual Office dan Serviced Office
                        provider paling berpengalaman di
                        Indonesia dan Anda dapat dengan mudah memanfaatkan lebih dari 35.000 klien aktif dari jaringan
                        vOffice. Kami juga memiliki tim ahli untuk membantu anda mengembangkan bisnis di Indonesia.
                    </h5>

                    </div>
                    <div class="col-sm-6">
                         <div class="feature boxed3">
                        <h4 class="mb8 bold text-center color-black">Hubungi Kami</h4>
                        <p class="text-center mb32">Isi formulir di bawah ini
                            lalu tim kami akan segera menghubungi Anda. Terima kasih</p>

                        <form class="form-email"
                              data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                              data-error="Please fill all fields correctly.">

                            <input type="text" name="coworkingspace" hidden="hidden"
                                   value="coworkingspace"
                                   id="coworkingspace">

                            <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                            <input type="text" class="validate-required" name="phone"
                                   placeholder="Nomor Telepon / Whatsapp*">
                            <input type="text" class="validate-required validate-email" name="email"
                                   placeholder="Alamat Email*">

                            <textarea style="color: #0a0a0a" name="message" rows="4"
                                      placeholder="Message"></textarea>

                            <button id="submit-form" type="submit" name="submit">Contact Us Now!</button>
                        </form>

                    </div>

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