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
                    <img alt="image" class="background-image" src="img/redesign/headerhaki-50.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold"> Hak Cipta </h1>
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
                        <h2 class="About-us mb5 bold color-black">The easy way <br> to protect</h2>
                        <h3  class=" text-style-1 About-us mb10"> Your Brand </h3>
                        <p class="color-black"> hak cipta secara spesifik memberikan pelayanan guna melindungi hasil intelektual anda berupa merek, hak cipta, desain industri, dan paten. Kami menyediakaan jasa mulai dari konsultasi, pendaftaran, hingga terbitnya sertifikat dengan cara yang mudah. </p>
                    </div> 
                    <div class="col-sm-6">
                        <img src="img/redesign/icon/hak_cipta/hak-cipta.png" width="70%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="row mb40">
                <div class="col-sm-12 ">
                    <div class="col-sm-6">
                        <div class="hr mb20-lg mb10-xs "></div>
                       <h2 class="bold mb0 color-black"> Pentingnya   </h2>
                       <h5 class="mb40 color-black">Pendaftaran hak cipta di vOffice</h5>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                     <div class="col-sm-3 col-xs-6 text-left mb20">
                            <img src="img/redesign/icon/hak_cipta/meningkatkan-icon.png" width="20%" class="mb20">
                           <h5 class="color-black">  Meningkatkan nilai jual <br> produk</h5>
                    </div>

                    <div class="col-sm-3 col-xs-6 text-left mb20">
                            <img src="img/redesign/icon/hak_cipta/melindungi-icon.png" width="20%" class="mb20">
                           <h5 class="color-black">  Melindungi produk dan hasil karya anda dari plagiarisme</h5>
                    </div>
                     <div class="col-sm-3 col-xs-6 text-left mb20">
                            <img src="img/redesign/icon/hak_cipta/pengenal-icon.png" width="25%" class="mb20">
                            <h5 class="color-black"> Sebagai tanda pengenal produk anda</h5>
                    </div>
                     <div class="col-sm-3 col-xs-6 text-left mb20">
                            <img src="img/redesign/icon/hak_cipta/perlindungan-icon.png" width="25%" class="mb20">
                            <h5 class="color-black"> Memberikan perlindungan hukum</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                       <h2 class="bold mb0 color-black"> Pendaftaran   </h2>
                       <h5 class="mb40 color-black">Merek, Hak Cipta & Desain Industri</h5>  
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4   ">
                        <div class="col-sm-12 card-plan pt">
                            <h3 class="color-black bold text-center mb10"> MEREK </h3>
                            <h4 class="color-primary text-center bold mb50"> Rp 4.8 Juta</h4>
                            <hr>
                              <ul class="text-left bullets">
                                <li>Q&A pra permohonan</li>
                                <li>Persiapan pendaftaran Merek</li>
                                <li>Pengecekan merek</li>
                                <li>Permohonan pendaftaran</li>
                                <li>Monitoring</li>
                                <li>Sertifikat Merek</li>
                            </ul>
                            <div class="text-center">
                             <a class="btn btn-filled mb10 text-center" href="#" data-toggle="modal"
                                   data-target="#contactus"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card-plan pt">
                             <h3 class="color-black bold text-center mb10"> HAK CIPTA </h3>
                             <div class="col-sm-6 ">
                                <h5 class="color-primary text-center bold mb0"> Rp 1.8 Juta</h5>
                                <p class="text-center bold mb20"> Diluar program computer</p>
                            </div>
                            <div class="col-sm-6 ">
                                 <h5 class="color-primary text-center bold mb0"> Rp 2.3 Juta</h5>
                                <p class="text-center bold mb20">  Program computer</p>
                            </div>
                            <hr>
                             <ul class="text-left bullets">
                                <li>Q&A pra permohonan</li>
                                <li>Persiapan pendaftaran Hak Cipta</li>
                                <li>Permohonan pendaftaran</li>
                                <li>Monitoring</li>
                                <li>Sertifikat Hak Cipta</li>
                                <p>&nbsp;</p>
                            </ul>
                             <div class="text-center">
                             <a class="btn btn-filled mb10 text-center" href="#" data-toggle="modal"
                                   data-target="#contactus"> Minta Proposal </a>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-4">
                         <div class="col-sm-12 card-plan pt">
                              <h3 class="color-black bold text-center mb10"> INDUSTRI </h3>
                            <h4 class="color-primary text-center bold mb50"> Rp 3.7 Juta</h4>
                            <hr>
                              <ul class="text-left bullets">
                                <li>Q&A pra permohonan</li>
                                <li>Pengecekan Desain Industri</li>
                                <li>Persiapan pendaftaran Desain Industri</li>
                                <li>Permohonan Desain Industri</li>
                                <li>Monitoring</li>
                                <li> Sertifikat Desain Industri</li>
                            </ul>
                             <div class="text-center">
                             <a class="btn btn-filled mb10 text-center" href="#" data-toggle="modal"
                                   data-target="#contactus"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
             <div class="row">
                <div class="col-sm-12 text-center mb40">
                       <h2 class="bold mb0 color-black"> Permohonan Paten   </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                        <img src="img/redesign/icon/hak_cipta/hakcipta.JPG" class="border-radius-5">
                        <p>* Gambar hanya illustrasi</p>
                    </div>
                     <div class="col-sm-4">
                          <div class="col-sm-12 card-plan pt">
                            <h3 class="color-black bold text-center mb0"> Pengecekan </h3>
                            <h5 class="color-black text-center mb5" >Paten / invensi </h5>
                            <h4 class="color-primary text-center bold mb10"> Rp 3.5 Juta</h4>
                            <hr>
                            <h3 class="color-black bold text-center mb0"> Pembuatan  </h3>
                            <h5 class="color-black text-center mb5" >Draft Paten / invensi </h5>
                            <h4 class="color-primary text-center bold mb10"> Rp 13 - 20 Juta</h4>
                            <hr>
                            <h3 class="color-black bold text-center mb0"> Permohonan   </h3>
                            <h5 class="color-black text-center mb5" > Paten / invensi </h5>
                            <h4 class="color-primary text-center bold mb10"> Rp 5 Juta</h4>
                            <hr>
                            <h3 class="color-black bold text-center mb0"> Pemeriksaan    </h3>
                            <h5 class="color-black text-center mb5" > Substantif / invensi </h5>
                            <h4 class="color-primary text-center bold mb10"> Rp 5 Juta</h4>
                            <hr>
                            <h3 class="color-black bold text-center mb0"> Tarif Resmi    </h3>
                            <h5 class="color-black text-center mb5" > + 50% </h5>
                            <h4 class="color-primary text-center bold mb10"> Miscellaneous Fee </h4>
                            <div class="text-center">
                             <a class="btn btn-filled mb10 text-center" href="#" data-toggle="modal"
                                   data-target="#contactus"> Minta Proposal </a>
                            </div>

                        </div>
                    </div>
                     <div class="col-sm-4">
                          <div class="col-sm-12 card-plan pt">
                                 <h3 class="color-black bold text-center mb40"> What's Include </h3>
                                 <ul class="text-left bullets">
                                    <li>Q&A pra permohonan</li>
                                    <li>Pengecekan Patentabilitas</li>
                                    <li>Persiapan pendaftaran Paten</li>
                                    <li>Permohonan Paten</li>
                                    <li>Monitoring</li>
                                    <li> Sertifikat Paten</li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </di>
    </section>

    <section>   
        <div class="container">
            <div class="row mb40-lg mb20-xs">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb10 bold color-black font-size-60"> Mengapa </h2>
                        <h2 class=" text-style-1 About-us font-size-60 mb20">  Memilih Kami? </h2>
                         <h5 class="padding-5">
                        Kami melayani lebih dari 24.000 bisnis sejak tahun 2003. Kami juga memiliki tim ahli untuk membantu anda mengembangkan bisnis di Indonesia.
                        </h5>
                    </div>
             <a name="contactus"></a>
                <div class="col-sm-6 well bg-white">
                    <!-- <div class="feature boxed3"> -->
                        <h4 class="mb8 bold text-center color-black">We are here to assist your business success</h5>
                            <p class="text-center mb32">Isi formulir di bawah ini untuk mendapatkan proposal penawaran
                                dan kami akan segera menghubungi Anda. Terima kasih!</p>
                            <form class="form-email"
                                  data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                                  data-error="Please fill all fields correctly.">
                                <input type="text" name="hak_cipta" hidden="hidden"
                                       value="hak_cipta"
                                       id="hak_cipta">
                                <input hidden="" name="tracker" id="tracker" type="text" value="call">

                                <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                                <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">

                                <input type="text" class="validate-required validate-email" name="email"
                                       placeholder="Alamat Email*">

                                <textarea style="color: #0a0a0a" name="message" rows="4"
                                          placeholder="Message"></textarea>
                                <input type="text" name="url"
                                       value="http://voffice.co.id/jakarta-virtual-office/virtual-office-pt-revisi.php"
                                       hidden>
                                <button id="submit-form" type="submit" name="submit">Claim Your Benefit</button>
                            </form>
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