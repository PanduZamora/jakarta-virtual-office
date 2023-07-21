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
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/> -->
    <link href="css/card.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.theme.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/testimonial.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all"/>
    <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,800" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name" : "vOffice",
      "url": "http://www.voffice.co.id",
      "logo": "http://voffice.co.id/jakarta-virtual-office/img/voffice-indonesia.png",
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
</head>
<body>

<?php include "header-redesign.html"?>

<div class="main-container">

 <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/redesign/headercontact-49.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <a href="contact"> <h1 class="bold"> Contact <span> Us </span> </h1> </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section>
      <div class="container">
      <a name="contact"></a>
            <div class="row">
                <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <div class="col-sm-6 col-md-7">
                        <h4 class=" bold mt40 mb0 color-black" key="sectionone1">Anda Punya Pertanyaan ?</h4>
                        <p>Anda hanya perlu mengisi formulir di bawah ini jika memiliki
                            pertanyaan atau ingin
                            menggunakan layanan kami. Jika terjadi kesalahan pada formulir, atau Anda tidak ingin
                            mengisi formulir, silakan hubungi kami menggunakan rincian kontak.</p>
                        <input type="hidden" name="contact_us_refer" value="contact_us_refer">
                        <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*"
                               tabindex="1">
                        <input type="text" class="validate-required" name="phone"
                               placeholder="Phone*"
                               tabindex="2">
                        <input type="text" class="validate-required validate-email" name="email"
                               placeholder="Email*" tabindex="3">
                        <input type="text" name="coname"
                               placeholder="Nama Perusahaan"
                               tabindex="4">
                        <div class="select-option p0">
                            <i class="ti-angle-down"></i>
                            <select class="validate-required" name="subject" tabindex="5">
                                <option value="" selected disabled>-- Pilih Service yang Anda inginkan --</option>
                                <option value="Serviced Office">Serviced Office</option>
                                <option value="Virtual Office">Virtual Office</option>
                                <option value="Pembuatan PT & CV">Pembuatan PT & CV</option>
                                <option value="Ruang Meeting">Ruang Meeting</option>
                                <option value="Event Space">Event Space</option>
                                <option value="Flexi Desk">Flexi Desk</option>
                                <option value="Dedicated Desk">Dedicated Desk</option>
                                <option value="Coworking Space">Coworking Space</option>
                                <option value="Akunting & Pembukuan">Akunting & Pembukuan</option>
                                <option value="Layanan Penjawab Telepon">Layanan Penjawab Telepon</option>
                                <!--                                <option value="Others">Others</option>-->
                            </select>

                        </div>
                        <textarea name="message" rows="4"
                                  placeholder="Message" tabindex="6"></textarea>

                        <button type="submit" tabindex="13" class="lang" key="sectiionone4">SEND</button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-offset-1">


                        <div class="feature text-center boxed3">
                            <i class="ti-headphone-alt icon-lg inline-block color-primary mb16"></i>
                            <h5 class=" mb5 bold" >Melalui  Telepon</h5>
                            <p class="lang" key="sectionone6">
                                Anda dapat menghubungi kami kapan saja di <a href="tel:+622129222999">+6221 2922
                                    2999</a> selama jam kerja. Customer Service kami akan siap membantu Anda.
                            </p>
                        </div>

                        <div class="feature text-center boxed3">
                            <i class="ti-email icon-lg inline-block color-primary mb16"></i>
                            <h5 class=" mb5 bold" >Melalui Email</h5>
                            <p class="lang" key="sectionone8">
                                Anda juga bisa mengirimkan email ke <span class="color-primary">cs@voffice.co.id</span>.
                                Kami akan membalas email Anda secepatnya.
                            </p>
                        </div>

                        <div class="feature text-center boxed3">
                            <i class="ti-comments icon-lg inline-block color-primary mb16"></i>
                            <h5 class=" mb5 bold" >Melalui Live Chat</h5>
                            <p class="lang" key="sectionone10">
                                Gunakan tombol chat di bawha layar untuk berbicara melalui live chat.
                            </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </section>

     <section class="bg-primary hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="feature feature-3 mb-xs-16">
                        <div class="left">
                            <i class="ti-location-pin icon-sm"></i>
                        </div>
                        <div class="right">
                            <h5 class="uppercase mb0">Empire Tower</h5>
                            <p>
                                Block A, Level 5, Empire Tower, SS16/1, Subang Jaya, 47500 Selangor
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature feature-3 mb-xs-16">
                        <div class="left">
                            <i class="ti-location-pin icon-sm"></i>
                        </div>
                        <div class="right">
                            <h5 class="uppercase mb0">Plaza Mont Kiara</h5>
                            <p>
                                Bock B, Level 5, Plaza Mont Kiara, Mont Kiara, 50480 Kuala Lumpur
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature feature-3 mb-xs-16">
                        <div class="left">
                            <i class="ti-location-pin icon-sm"></i>
                        </div>
                        <div class="right">
                            <h5 class="uppercase mb0">UOA Damansara II</h5>
                            <p>
                                Level 9, Wisma UOA Damansara II, Damansara Heights, 50490 Kuala Lumpur
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="feature feature-3 mb-xs-16">
                        <div class="left">
                            <i class="ti-location-pin icon-sm"></i>
                        </div>
                        <div class="right">
                            <h5 class="uppercase mb0">Wisma Genting</h5>
                            <p>
                                Level 7-1, Wisma Genting (New Wing), 28, Jln Sultan Ismail, 50250 Kuala Lumpur
                            </p>
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
                    <h6 class="uppercase">vOffice Around The World</h6>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-xs-24">
                    <h6 class="bold-h6 color-primary mb0">Australia</h6>
                    <p class="mb8">S.5.04, 365 Little Collins Street<br>
                        Melbourne, Victoria 3000, Australia</p>
                    <p>P: +613 9005 1990</p>
                </div>
                <div class="col-sm-4 mb-xs-24">
                    <h6 class="bold-h6 color-primary mb0">Hong Kong</h6>
                    <p class="mb8">Central Tower, 28 Queen's Road Central<br>
                        Hongkong</p>
                    <p>P: +852 3973 3780</p>
                </div>
                <div class="col-sm-4">
                    <h6 class="bold-h6 color-primary mb0">Indonesia</h6>
                    <p class="mb8">Menara Rajawali, Level 7-1, JL. Lot No.5.1 Mega Kuningan<br>
                        Jakarta Selatan 12950, Indonesia</p>
                    <p>P: +6221 29222 999</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb-xs-24">
                    <h6 class="bold-h6 color-primary mb0">Philippines</h6>
                    <p class="mb8">Level 10-1, Fort Legend Tower, 3rd Avenue & 31st Street<br>
                        Bonifacio Global City, Taguig 1632</p>
                    <p>P: +63 2 224 2000 </p>
                </div>
                <div class="col-sm-4 mb-xs-24">
                    <h6 class="bold-h6 color-primary mb0">Thailand</h6>
                    <p>95 Empire Tower, 47th Fl, Park Wing<br>
                        South Sathorn Rd, Yanawa, Sathorn, Bangkok 10120, Thailand</p>
                </div>
                <div class="col-sm-4">
                    <h6 class="bold-h6 color-primary mb0">Vietnam</h6>
                    <p class="mb8">R.802, Vietnam Business Center, 57-59 Ho Tung Mau<br>
                        Ben Nghe ward dist 1. HCM City</p>
                    <p>P: +84 836026 855</p>
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
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
<script src="js/language.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

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