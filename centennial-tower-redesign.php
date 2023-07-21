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
                    <img alt="image" class="background-image" src="img/redesign/headerlocations-57.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Virtual Office  </h1>
                          <h3> Centennial Tower </h3>
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
                        <h2 class="About-us mb5 bold color-black font-size-60"> Centennial</h2>
                        <h3 class=" text-style-1 About-us mb5"> Tower </h3>
                        <h5 class="padding-5 mb10"> Jl. Jend. Gatot Subroto, No 27, Karet Semanggi, Jakarta Selatan, 12950, Indonesia</h5>
                        <p class="padding-5 color-black mb0">Our Serviced Offices are located in a new grade A building in Gatot Subroto with excellent transport and telecommunication connectivity, vOffice Serviced Offices are wired with very Fast Internet and our tenants have global access to all vOffice centers. There will be 2 get-together event hosted by us every month to promote a happy, healthy working here in vOffice.</p>
                         
                    </div>
                    <div class="col-sm-6  col-sm-offset-1">
                        <img src="img/virtual-office/centennial_tower.jpg" class="border-radius-5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row mb40">
                 <div class="col-sm-12 mb40 text-center">
                    <h2 class="bold mb0 color-black"> The Inclusions  </h2> 
                    <h5 class="mb20">of Virtual Office</h5>  
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6 mb20">
                        <div class="col-sm-12 card-plan pt">
                            <div class="col-sm-4">
                                <h5 class="bold  color-primary">Business Address</h5>
                                <img src="img/redesign/icon/map.png" width="30%">
                            </div>
                            <div class="col-sm-8">
                                <ul class="bullets">
                                    <li>Strategically located at Gatot Subroto, Jakarta Selatan</li>
                                    <li>Receive mails & parcels on your behalf</li>
                                    <li> SMS or email notiﬁcations Local & International mail forwarding*</li>
                                    <li>Scan mails or letters upon request</li>
                                    <li>Guest welcoming and reception service</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb20">
                         <div class="col-sm-12 card-plan pt">
                             <div class="col-sm-4">
                                <h5 class="bold  color-primary">Call Handling & <br>  Fax Services</h5>
                                <img src="img/redesign/icon/customer-service.png" width="30%">
                            </div>
                            <div class="col-sm-8">
                                <ul class="bullets">
                                    <li>Dedicated local telephone number</li>
                                    <li>Professional call answering</li>
                                    <li>  SMS or email notiﬁcation</li>
                                    <li>Call screening and transfer</li>
                                    <li>Personalized voicemail</li>
                                    <p class="mb40">&nbsp; </p>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3 mb20">
                        <div class="col-sm-12 card-plan pt">
                            <h5 class="bold color-primary mb10">Access</h5>
                            <p class="color-black mb-40-persen">We don’t restrict you to just one location. You have access to our network and facilities, in Jakarta, Kuala Lumpur and Manila.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 mb20">
                        <div class="col-sm-12 card-plan pt">
                            <h5 class="bold color-primary mb10">Dedicated Private Lounge</h5>
                            <p class="color-black  mb-50-persen">With us, you can feel the cozy and elite atmosphere through dedicated private lounge.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 mb20">
                        <div class="col-sm-12 card-plan pt">
                            <h5 class="bold color-primary mb10">Curated Connections</h5>
                            <p class="color-black">Our dedicated team plugs you into the community of hundreds of committed professionals. Through “Entreprenity” a global online platform for professionals to connect and build the next big thing.</p>
                        </div>
                    </div>
                    <div class="col-sm-3 mb20">
                        <div class="col-sm-12 card-plan pt">
                            <h5 class="bold color-primary mb10">Meeting Room</h5>
                            <p class="color-black  mb-60-persen">15 Hours Meeting room usage at all vOfﬁce x CRE8 locations globally.</p>
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
                    <div class="col-sm-4">
                             <div class="hr mb20-lg mb10-xs"></div>
                         <h2 class="About-us mb5 bold color-black font-size-60"> The</h2>
                        <h2 class=" text-style-1 About-us font-size-60 mb40"> Benefits </h2>
                    </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                             <img src="img/material/receptionist.png" width="50px">
                             <p class="small bold">Professional Receptionist</p>
                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                            <img src="img/material/high.png" width="50px">
                                        <p class="small bold">High Speed Internet</p>
                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                             <img src="img/material/vbuttler.png" width="50px">
                                        <p class="small bold">vButtler</p>
                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                              <img src="img/material/comm.png" width="50px">
                                        <p class="small bold">Events, Community & Workshops</p>
                        </div>
                         <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/phone.png" width="50px">
                                    <p class="small bold">Phone Number/Call Answering Service</p>
                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                            <img src="img/material/daily.png" width="50px">
                                    <p class="small bold">Daily Cleaning & Office Maintenance</p>
                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                            <img src="img/material/en.png" width="50px">
                                    <p class="small bold">Free Access to "Entreprenity" Our Global Online Platform</p>
                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                              <img src="img/material/privilege.png" width="50px">
                                    <p class="small bold">Privileges Card</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">

                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                             <img src="img/material/private.png" width="50px">
                                    <p class="small bold">Private Lounge</p>
                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                            <img src="img/material/coffee.png" width="50px">
                                    <p class="small bold">Speciality Coffee</p>
                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                                <img src="img/material/audio.png" width="50px">
                                    <p class="small bold">Audio & Visual Equipment</p>
                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                             <img src="img/material/fully.png" width="50px">
                                    <p class="small bold">Fully Furnished Room</p>
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-2  col-xs-6 mb20 text-center">
                              <img src="img/material/meeting.png" width="50px">
                                    <p class="small bold">Free 15 Hours Meeting Rooms</p>
                        </div>
                          <div class="col-sm-2  col-xs-6 mb20 text-center">
                                 <img src="img/material/workspace.png" width="50px">
                                    <p class="small bold">Workspace</p>
                        </div>
                         <div class="col-sm-2  col-xs-6 mb20 text-center">
                              <img src="img/material/eventspace.png" width="50px">
                                    <p class="small bold">1 session of Event Space usage per month</p>
                        </div>

                          <div class="col-sm-2  col-xs-6 mb20 text-center">
                                 <img src="img/material/access.png" width="50px">
                                    <p class="small bold">Access to Cre8 Coworking Space</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>


    <section>
        <div class="container">
            <div class="row">
                 <div class="col-sm-12 mb40 text-left">
                     <div class="col-sm-6">
                             <div class="hr mb20-lg mb10-xs"></div>
                         <h2 class="About-us mb5 bold color-black font-size-60"> Building &</h2>
                        <h3 class=" text-style-1 About-us mb10"> Nearby Amenities </h3>
                        <h5 class="color-black">Strategically located in one of the best spot in Jakarta, Centennial Tower is minutes away from Mega Kuningan where Ritz Carlton, JW Marriott, Oakwood Residences are located and plenty of great eateries, bar and cafe. Most banks are within walking distance and Placific Place is just 5 minutes away</h5>
                    </div>
                    <div class="col-sm-6">
                         <h4 class="bold text-center mb5">Floor Plan</h4>
                        <a href="img/locations/centennial-tower/floorplan-ct.jpg" class="popupgallery"
                           title="Floor Plan Centennial Tower"
                           data-effect="mfp-zoom-out">
                            <center><img src="img/locations/centennial-tower/floorplan-ct.jpg" width="auto" height="300px"/></center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb10">
                     <h2 class="bold mb0 color-black"> Gallery  </h2> 
                    <h5 class="mb20">of Centennial Tower</h5>
                </div>
            </div>
              <div class="row popupgallery mb32">
                        <div class="col-sm-12 text-center">
                            <div class="owl-carousel">
                                <div class="item">
                                    <a href="img/locations/centennial-tower/lounge.jpg" class="popupgallery"
                                       alt="Lounge" title="Lounge" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/lounge.jpg"/>
                                    </a>
                                    <p class="bold mt16">Lounge</p>
                                </div>

                                <div class="item">
                                    <a href="img/locations/centennial-tower/event-area.jpg" class="popupgallery"
                                       alt="Event Area" title="Event Area" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/event-area.jpg"/>
                                    </a>
                                    <p class="bold mt16">Event Area</p>
                                </div>

                                <div class="item">
                                    <a href="img/locations/centennial-tower/koridor.jpg" class="popupgallery"
                                       alt="Koridor" title="Koridor" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/koridor.jpg"/>
                                    </a>
                                    <p class="bold mt16">Koridor</p>
                                </div>

                                <div class="item">
                                    <a href="img/locations/centennial-tower/meeting-room.jpg" class="popupgallery"
                                       alt="Meeting Room" title="Meeting Room" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/meeting-room.jpg"/>
                                    </a>
                                    <p class="bold mt16">Meeting Room</p>
                                </div>

                                <div class="item">
                                    <a href="img/locations/centennial-tower/office-room.jpg" class="popupgallery"
                                       alt="Office Room" title="Office Room" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/office-room.jpg"/>
                                    </a>
                                    <p class="bold mt16">Office Room</p>
                                </div>

                                <div class="item">
                                    <a href="img/locations/centennial-tower/recepton.jpg" class="popupgallery"
                                       alt="Receptionist" title="Receptionist" data-effect="mfp-zoom-out">
                                        <img src="img/locations/centennial-tower/recepton.jpg"/>
                                    </a>
                                    <p class="bold mt16">Receptionist</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </section>

    <section>
        <div class="container">
             <div class="row">
                <div class="col-sm-4 text-center mb-xs-32">
                    <h4 class="bold title">Virtual Office</h4>
                    <img class="mb-xs-16 mb10" src="img/virtual-office-asmirandah.png" width="200px">
                    <h4>Mulai dari <br> IDR<span class=" bold"> 600.000</span>/bln</h4>
                    <a class="btn-lg btn-filled btn" href="virtual-office-indonesia-plans.php">Lihat Paket</a>
                </div>
                <hr class="fade-3-4 mb24 visible-xs">
                <div class="col-sm-4 text-center mb-xs-32">
                    <h4 class="bold title">Serviced Office</h4>
                    <img class="mb-xs-16 mb10" src="img/so1.png" width="200px">
                    <h4>Mulai dari <br> IDR<span class=" bold"> 2,5 Juta</span>/bln</h4>
                    <a class="btn-lg btn-filled btn" href="serviced-office-indonesia.php">Lihat Rincian Layanan</a>
                </div>
                <hr class="fade-3-4 mb24 visible-xs">
                <div class="col-sm-4 text-center">
                    <h4 class="bold title">Pembuatan PT,CV & PMA</h4>
                    <img class="mb-xs-16 mb10" src="img/pt1.png" width="200px">
                    <h4>Mulai dari <br> IDR<span class=" bold"> 4,3 Juta</span></h4>
                    <a class="btn-lg btn-filled btn" href="indonesia-company-registration.php">Lihat Paket</a>
                </div>
            </div>

        </div>  
    </section>

    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                          <div class="feature boxed1">
                        <h5 class="mb0 text-center bold">Quick Form</h5>
                        <p class="text-center mb8">Isi formulir di bawah ini dan kami akan segera menghubungi Anda.
                            Terima kasih!</p>
                        <p class="text-center"><a href="tel:+622129222999"> &nbsp; +6221 2922 2999</a></p>
                        <form class="form-email"
                              data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                              data-error="Please fill all fields correctly.">
                            <input type="text" name="servicedoffice_inquiry" hidden="hidden"
                                   value="servicedoffice_inquiry"
                                   id="servicedoffice_inquiry">
                            <input type="text" class="validate-required" name="name" placeholder="Nama*">
                            <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">

                            <input type="text" class="validate-required validate-email" name="email"
                                   placeholder="Alamat Email*">

<!--                            <div class="select-option p0">-->
<!--                                <i style="color: #000;" class="ti-angle-down"></i>-->
<!--                                <select class="validate-required" name="service" tabindex="5">-->
<!--                                    <option value="" selected disabled>-- Services Inquiries --</option>-->
<!--                                    <option value="Serviced Office">Serviced Office</option>-->
<!--                                    <option value="Virtual Office">Virtual Office</option>-->
<!--                                </select>-->
<!--                            </div>-->

                            <textarea class="validate-required" name="message" rows="4"
                                      placeholder="Kebutuhan saya : misalnya saya butuh serviced office di centennial tower untuk 3 orang selama 1 tahun"></textarea>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
                    </div>  
                    <div class="col-sm-6">
                         <h4 class="bold mb5">Location</h4>
                        <div class="iframe-container mb24">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.253940484287!2d106.81873491426882!3d-6.230215362747279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e25353c7bb%3A0x6b9e37a743c4f59f!2sCentennial+Tower!5e0!3m2!1sid!2sid!4v1492080226614"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen>
                            </iframe>
                        </div>
                            <div class="feature bordered">
                        <h4 class="bold mb5">Contact Us</h4>
                        <p class="mb0">Centennial Tower</p>
                        <p class="mb0">Level 29, Jl. Jendral Gatot Subroto Karet Semanggi</p>
                        <p>Jakarta Selatan, 12950, Indonesia</p>

                        <ul class="social-list">
                            <li class="small">
                                <a href="tel:+622129222999">
                                    <i class="fa fa-phone"></i> <span>+6221 2922 2999</span>
                                </a>
                            </li>
                            <li class="small">
                                <a href="mailto:cs@voffice.co.id">
                                    <i class="ti-email"></i> <span>cs@voffice.co.id</span>
                                </a>

                            </li>
                            <li class="small">
                                <a href="http://voffice.co.id/" target="_blank">
                                    <i class="ti-world"></i> <span>www.voffice.co.id</span>
                                </a>
                            </li>
                        </ul>
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