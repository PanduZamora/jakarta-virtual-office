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
                    <img alt="image" class="background-image" src="img/redesign/headerbd-49.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Jadi Rekan </h1>
                          <h2> Bisnis Kami </h2>
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

                        <h5 class="mb0">dan dapatkan lebih dari </h5>
                        <h1 class="About-us mb0 bold color-black ">IDR 20 Million<span class="font-size-16"> per bulan!</span>
                            </h1>

                        <h5>Bantu sesama entrepreneur dan bisnis lainnya berkembang. Beri tahu rekan Anda mengenai solusi bisnis pintar vOffice dan temukan cara baru dan mudah untuk mendapat imbalan yang besar!</h5>
                    </div>
                     <div class="col-sm-6">

                                <div class="image-slider slider-arrow-controls controls-inside">
                                    <ul class="slides">
                                        <li>
                                            <img class="mb8 border-radius-5" src="img/bd_picture.JPG">
                                        </li>
                                        <li>
                                            <img class="mb8 border-radius-5" src="img/ka_tefta2.jpeg">
                                        </li>
                                    </ul>
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
                    <h1 class="bold mb0 color-black "> Kenapa   </h1>
                    <h5>Saya harus Menjadi Rekan <b class="color-black"> Bisnis vOffice? </b></h5>
                </div>
                <div class="col-sm-12 mb20">
                    <div class="col-sm-6  mb20">
                         <div class="col-sm-12 card-what-serviced-office">
                            <div class="col-sm-2 col-xs-3 mb20">
                                <left><img src="img/agen/beneficial.png" class="mb10"></left>
                            </div>
                            <div class="col-sm-10 col-xs-9 mb20">
                                <h4 class=" mb10 color-primary text-left"><b> Menguntungkan untuk Bisnis dengan Pasar yang Luas</b></h4>                                
                            </div>
                            <div class="col-sm-12">
                                <div class="container-what-serviced-office">
                                    <input type="checkbox" class="read-more-state text-center" id="post-1" />
                                    <p class="read-more-wrap article justify mb20" >Setiap bisnis kini dapat memiliki ruang kerja fleksibel, kreatif dengan lingkungan yang ramah dari vOffice di berbagai lokasi dan gedung perkantoran eksklusif. vOffice menyediakan <span class="read-more-target" style="margin-bottom: 8%;"> solusi pintar 'Low Cost - High Impact' dalam membantu bisnis dan perusahaan untuk memulai, tumbuh dan berkembang. Kami menyediakan ruang kerja fleksibel agar bisnis Anda dapat berkembang di lingkungan bisnis yang profesional. Dengan ruang kerja berfurnitur dan peralatan lengkap: Anda hanya perlu datang, mendaftar dan langsung bekerja, ditemani dengan entrepreneur lainnya yang juga mencari kesempatan dan kesuksesan bisnia di pasar Indonesia. Kami juga akan membantu Anda dengan urusan administrasi Pemerintah seperti surat Domisili, Hak Cipta, Merek Dagang dan Paten untuk melindungi merek atau PT Anda.</span></p>
                                    <label for="post-1" class="read-more-trigger text-center mb10"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6  mb20">
                        <div class="col-sm-12 card-what-serviced-office">
                            <div class="col-sm-2 col-xs-3 mb20">
                                <left><img src="img/agen/reliable.png" class="mb10"></left>
                            </div>
                            <div class="col-sm-10 col-xs-9 mb20">
                                <h4 class=" mb0 color-primary text-left"><b> Dapat Diandalkan </b></h4>
                                 <h4 class=" mb10 color-primary text-left"> <b>& Transparan </b></h4>                        
                            </div>
                            <div class="col-sm-12">
                                <div class="container-what-serviced-office">
                                    <input type="checkbox" class="read-more-state text-center" id="post-2" />
                                    <p class="read-more-wrap article justify mb20" >Tim kami akan selalu ada untuk memenuhi kebutuhan Anda dan klien Anda. Kami sangat terbuka mengenai masalah atau hal yang terkait dengan klien dari Anda, dan sebagai Rekan Bisnis kami<span class="read-more-target" style="margin-bottom: 8%;"> Anda akan menerima update secara rutin mengenai penawaran, promosi dan berita vOffice. Kami sangat transparan mengenai seluruh proses rekomendasi. Kami cocok untuk berbagai jenis usaha, sehingga akan mudah bagi Anda untuk merekomendasikan kami. 150 staf kami yang terlatih akan menangani seluruh detail dan prosedur, sehingga Anda dapat fokus menangani persoalan yang lebih besar, yaitu untuk membantu sesama entrepreneur menemukan solusi ruang kerja dengan biaya terjangkau. </span></p>
                                    <label for="post-2" class="read-more-trigger text-center mb10"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-sm-12">
                    
                    <div class="col-sm-6  mb20">
                         <div class="col-sm-12 card-what-serviced-office">
                            <div class="col-sm-2 col-xs-3 mb20">
                                <left><img src="img/agen/trusted.png" class="mb10"></left>
                            </div>
                            <div class="col-sm-10 col-xs-9 mb20">
                                <h4 class=" mb10 color-primary text-left"><b> Terpercaya & <br> Bertanggung Jawab</b></h4>                                
                            </div>
                            <div class="col-sm-12">
                                <div class="container-what-serviced-office">
                                    <input type="checkbox" class="read-more-state text-center" id="post-3" />
                                    <p class="read-more-wrap article justify mb20" >vOffice adalah Rekan Bisnis Anda yang terpercaya dan bertanggung jawab, kami menjamin bahwa <span class="read-more-target" style="margin-bottom: 8%;"> Anda akan menerima komisi Anda tepat waktu. Kami memiliki manajemen yang baik, karena kami sudah melakukannya selama 14 tahun.</span></p>
                                    <label for="post-3" class="read-more-trigger text-center mb10"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-sm-6  mb20">
                        <div class="col-sm-12 card-what-serviced-office">
                            <div class="col-sm-2 col-xs-3 mb20">
                                <left><img src="img/agen/easy.png" class="mb10"></left>
                            </div>
                            <div class="col-sm-10 col-xs-9 mb20">
                                <h4 class=" mb0 color-primary text-left"><b> Mudah  </b></h4>
                                <h4 class=" mb10 color-primary text-left"><b>  & Sederhana </b></h4>                   
                            </div>
                            <div class="col-sm-12">
                                <div class="container-what-serviced-office">
                                    <input type="checkbox" class="read-more-state text-center" id="post-4" />
                                    <p class="read-more-wrap article justify mb20" >Rekan bisnis kami tidak akan melalui prosedur rumit dalam merekomendasikan solusi bisnis vOffice kepada siapa saja  <span class="read-more-target" style="margin-bottom: 8%;"> yang Anda temui. Kami akan memberikan Anda materi pemasaran dan penjualan yang dibutuhkan serta pelatihan singkat untuk membantu Anda merekomendasikan kami. Tim spesialis kami dari divisi Business Decelopment akan menangani segalanya dari kontak pertama kali hingga akhir penjualan dengan klien dari Anda. </span></p>
                                    <label for="post-4" class="read-more-trigger text-center mb10"></label>
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
                    <h2 class="mb0 color-white">Ingin Menjadi </h2>
                    <h1 class="bold color-white mb0">Rekan Bisnis Kami</h1>
                    <h4 class="mb0 color-white mb20">dan Meraup Keuntungan?</h4>
                    <a href="#contactus" class="btn btn-filled"> Contact Us </a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <a name="contactus"></a>
            <div class="row">
                <div class="col-md-6 well bg-white">
                    <h4 class="text-center bold mb0">Jadi Rekan Bisnis Kami </h4>
                    <p class="text-center bold mb10 color-black"><span style="color: green"
                                                                       class="fa fa-whatsapp color-black"></span>
                        Whatsapp
                        Number
                    <h4 class="bold number text-center"><a href="tel:+628119222908"> 0811-9222-908</a></h4>
                    </p>
                    <h6 class="bold text-center number">Dengan tingkat pertumbuhan perusahaan kami yang cepat, vOffice membutuhkan bantuan Anda. Bersama dengan vOffice, Anda bisa mendapatkan lebih dari Rp 20 juta setiap bulannya. </h6>
                    <form class="form-email"
                          data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" name="business_partner" hidden="hidden" value="business_partner"
                               id="business_partner">
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
                        <img src="images/logo-whatsapp.png" style="width: 25%;">
                        <h5 class="uppercase mb0 lang" key="sectionone9">MELALUI WHATSAPP</h5>
                        <p class="lang" key="sectionone10">
                            Dengan menyimpan no kami, anda akan cepat dan mudah menghubungi kami secara personal
                                   <span class="color-primary bold">0811 9222 908
                        </p>
                    </div>

                    <div class="feature text-center boxed3">
                        <i class="ti-headphone-alt icon-lg inline-block color-primary mb16"></i>
                        <h5 class="uppercase mb0 lang" key="sectionone5">MELALUI TELEPON</h5>
                        <p class="lang" key="sectionone6">
                            Anda dapat menghubungi kami kapan saja di <a href="tel:+622129222999"
                                                                         class="color-primary bold">+6221
                                2922
                                2999</a> selama jam kerja. Customer Service kami akan siap membantu Anda.
                        </p>
                    </div>

                    <div class="feature text-center boxed3">
                        <i class="ti-email icon-lg inline-block color-primary mb16"></i>
                        <h5 class="uppercase mb0 lang" key="sectionone7">MELALUI EMAIL</h5>
                        <p class="lang" key="sectionone8">
                            Anda juga bisa mengirimkan email ke <span
                                class="color-primary bold">rizqi@voffice.co.id</span>
                            atau
                            <span class="color-primary bold">yunice@voffice.co.id</span>.
                            Kami akan membalas email Anda secepatnya.
                        </p>
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