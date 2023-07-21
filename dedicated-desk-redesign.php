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
                    <img alt="image" class="background-image" src="img/redesign/headerworkspace-55.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Dedicated  </h1>
                          <h1> Desk </h1>
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
                <h2 class="About-us mb5 bold color-black font-size-60"> Standard</h2>
                <h2 class=" text-style-1 About-us mb20"> Benefits </h2>
                <div class="col-sm-6  col-xs-6 mb20 text-left">
                   <img src="img/logo/Corporate Desking_r2-04.png" style="width:30%;">
                                        <h5 class="mt0 color-black"> Meeting Room <br>8 Hours </h5>
                </div>  
                <div class="col-sm-6 col-xs-6  mb20 text-left">
                  <img src="img/logo/Corporate Desking_r2-05.png" style="width:30%;">
                                        <h5 class="mt0 color-black"> Dedicated Phone <br>  Number </h5>
                </div>

                <div class="col-sm-6  col-xs-6  mb20 text-left">
                  <img src="img/logo/Corporate Desking_r2-07.png" style="width:30%;">
                                        <h5 class="mt0 color-black"> Free Signage </h5>
                </div>
                <div class="col-sm-6  col-xs-6  mb20 text-left">
                   <img src="img/logo/Corporate Desking_r2-06.png" class="mbmin10" style="width:30%;">
                                        <h5 class="mt0 color-black"> Free Call Forwarding <br>  Services </h5>
                </div>  
            </div>
            <div class="col-sm-6">
                <img src="img/serviced-office/ceo-so.jpg" class="border-radius-5 mb5">
                


              <p class="color-black mb5"> Our dedicated desk selection includes workstations, desk and cubicle to give you privacy and comfortable for your company, free drink everyday, and wifi.</p>
            </div>
          </div>  
        </div>
      </div>  
    </section>

<section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
           
            <div class="col-sm-6">
                <img src="img/serviced-office/cen-so.jpg" class="border-radius-5 mb5">



              <p class="color-black mb20"> Our Corporate Desking Plan empowers your company with legal Domicile with a physical office space. You can now conveniently conduct & grow your business.</p>
            </div>
             <div class="col-sm-6">
                <div class="hr mb20-lg mb10-xs"></div>
                <h2 class="About-us mb5 bold color-black font-size-60"> Corporate </h2>
                <h2 class=" text-style-1 About-us mb20"> Benefits </h2>
               <div class="col-md-4 col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-02.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black"><b> Free Domicile Letter* </b></p>
                                    </div>
                                    <div class="col-md-4 col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-03.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black"><b> Tax and Permit Ready </b></p>
                                    </div>
                                    <div class="col-md-4 col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-04.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black"> Meeting Room 8 Hours </p>
                                    </div>
                                     <div class="col-md-4 col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-05.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black"> Dedicated Phone Number </p>
                                    </div>
                                    <div class="col-md-4 col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-06.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black" > Free Call Forwarding Services </p>
                                    </div>
                                    <div class="col-md-4  col-xs-6 text-left">
                                        <img src="img/logo/Corporate Desking_r2-07.png" class="mbmin10" style="width:50%;">
                                        <p class="mt0 color-black"> Free Signage</p>
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