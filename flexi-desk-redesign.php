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
                    <img alt="image" class="background-image" src="img/redesign/headerworkspace-54.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Flexi  </h1>
                          <h1> Desk </h1>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section>
      <div class="container">
        <div class="row mb40">
          <div class="col-sm-12">
            <div class="col-sm-6 mb10">
              <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> More</h2>
                        <h2 class=" text-style-1 About-us mb5"> Hours? </h2>
                        <h5 class="padding-5"> Need more hours to work? Manage and accelerate your business with our flexible workspace plan with access to meeting rooms, beverages and exclusive pass to our networking and regular events.</h5>
              </div>
              <div class="col-sm-6">
                <div class="col-sm-12 card-plan pt">
                    <div class="col-sm-4">
                       <p class="sub mb8">Starts from</p>
                               <h4> RP <span class="number color-primary"> 1.8 Juta </span> <span class=" font-size-16">/ Month </span></h4>
                                <img src="images/icon-dd.png" class="mb16 image-small">
                    </div>
                    <div class="col-sm-8">
                       <h5 class="uppercase bold mb24"><span class="thin">Flexi Desk</span> | Indonesia
                                    Passport
                                    Access
                                </h5>
                             <p class="mb0">Applicable at :</p>
                                <p class="mb24 color-black">PIK Avenue, Metropolitan Tower, The City Tower, Office 8, Kirana Tower,
                                    Grand Slipi Tower, Centennial Tower, CEO Building, Kencana Tower, Bumi Mandiri
                                    (Surabaya), Ibis Style (Denpasar)</span>.</p>
                             <a class="btn btn-filled text-center" href="signup.php">Signup Now !</a>
                    </div>
                </div>
              </div>
          </div>
        </div>
         <div class="row mb40">
          <div class="col-sm-12">
            <div class="col-sm-6 mb10">
             <div class="col-sm-12 card-plan pt">
                    <div class="col-sm-4">
                       <p class="sub mb8">Starts from</p>
                               <h4> RP <span class="number color-primary"> 1.5 Juta </span> <span class=" font-size-16">/ Month </span></h4>
                              <img src="images/icon-fd.png" class="mb16 image-small">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="uppercase bold mb24"><span class="thin">Flexi Desk</span> | Single Location
                                </h5>
                             <p class="mb0">Applicable at :</p>
                                 <p class="color-black">The location you signed up for only.</p>
                             <a class="btn btn-filled text-center" href="signup.php">Signup Now !</a>
                    </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="col-sm-12 card-plan pt">
                    <div class="col-sm-4">
                       <p class="sub mb8">Starts from</p>
                               <h4> RP <span class="number color-primary"> 2.5 Juta </span> <span class=" font-size-16">/ Month </span></h4>
                               <img src="images/icon-usmember.png" class="mb16 image-small">
                    </div>
                    <div class="col-sm-8">
                       <h5 class="uppercase bold mb24"><span class="thin">Flexi Desk</span> | Global Passport
                                    Access
                                </h5>
                             <p class="mb0">Applicable at :</p>
                               <p class="mb24 color-black">Jakarta, Surabaya, Bali, Makati, Bonifacio Global
                                    City, Kuala Lumpur, Selangor</span>.</p>
                             <a class="btn btn-filled text-center" href="signup.php">Signup Now !</a>
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
          <div class="col-sm-12">
              <div class="col-sm-6">
                    <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb5 bold color-black font-size-60"> AT A</h2>
                            <h2 class=" text-style-1 About-us mb5"> GLANCE </h2>
                            <p class="padding-5 color-black">Our Flexi Desk plans give you the opportunity to connect with the UnionSPACE community while staying true to yourself. It’s perfect for those who need flexible workspace, but not necessarily a private office, or even the same desk every day. A new seat each day means new conversations with future collaborators, with the peace-of-mind of always having an outlet for your computer and access to impressive conference rooms whenever you need them.</p>
                    </div>
            <div class="col-sm-6">
                  <div class="col-sm-12">
                    <div class="col-sm-4 col-xs-4">
                      <img src="img/redesign/icon/map.png" width="50%" class="mb20">
                    </div>
                  </div>
                  <div class="col-sm-12">
                        <div class="col-sm-3">
                            <h5 class="uppercase bold">Access</h5>
                        </div>
                        <div class="col-sm-8">
                            <p class="color-black">Self service entry via our App</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <h5 class="uppercase bold">Location</h5>
                        </div>
                        <div class="col-sm-8">
                           <p class="color-black">Based on the Flexi Desk plan that you sign up for, you can work from a single locations
                                or as many as 40 other locations globally.</p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <h5 class="uppercase bold">Add-ons</h5>
                        </div>
                        <div class="col-sm-8">
                            <p class="color-black">As a Flexi Desk member, you get to enjoy all other services or facilities such as meeting
                                room, private lounge, coffee and etc at a discounted members rate.</p>
                        </div>
                    </div>

            </div>
          </div>
        </div>
      </div>  
    </section>

    <section>
      <div class="container">
        <div class="row mb20"> 
          <div class="col-sm-12 text-center">
                  <h2 class="bold mb0 color-black"> Gallery </h2> 
                    <h5 class="mb20">of Flexi Desk</h5>  
           </div>
        </div>
         <div class="row mb24">
                        <div class="col-sm-12 text-center">
                            <div class="popupgallery">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-dek1.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-dek1.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk2.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk2.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk3.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk3.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk4.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk4.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk5.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk5.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk6.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk6.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/flexi-desk/flexi-desk7.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="images/flexi-desk/flexi-desk7.jpg" alt="vOffice serviced office"/>
                                        </a>
                                    </div>

                                    <div class="item">
                                        <a href="img/meeting-room/mt-meet.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="img/meeting-room/mt-meet.jpg"
                                                 alt="vOffice serviced office"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="img/meeting-room/off-meet.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="img/meeting-room/off-meet.jpg"
                                                 alt="coworking space cre8"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="img/meeting-room/pik-meet.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="img/meeting-room/pik-meet.jpg"
                                                 alt="coworking space jakarta"/>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="img/meeting-room/tct-meet.jpg" class="popupgallery"
                                           data-effect="mfp-zoom-out">
                                            <img src="img/meeting-room/tct-meet.jpg" alt="cre8"/>
                                        </a>
                                    </div>

                                </div>
                            </div>
      </div>
    </section>

    <section class="bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <div class="col-sm-4">
                   <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb5 bold color-black font-size-60"> ENJOY </h2>
                            <h4 class=" text-style-1 About-us mb5"> All Inclusive Amenities </h4>
              </div>
              <div class="col-sm-8">
                 <div class="row mb-xs-24">
                        <div class="col-md-3 col-sm-12">
                            <h5 class="bold">Super-Fast Internet</h5>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p class="color-black">Hook yourself up to hard-wired Ethernet or secure Wi-Fi, including IT support and guest
                                log-in functionality.</p>
                        </div>
                    </div>
                    <hr class="fade-1-4">
                    <div class="row mb-xs-24">
                        <div class="col-md-3 col-sm-12">
                            <h5 class="bold">Spacious, Unique Common Areas</h5>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p  class="color-black">The heart-and-soul of our locations, our lounges feature custom art and furniture
                                designed for creativity, comfort, and productivity.</p>
                        </div>
                    </div>
                    <hr class="fade-1-4">
                    <div class="row mb-xs-24">
                        <div class="col-md-3 col-sm-12">
                            <h5 class="bold">Free Refreshments</h5>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p  class="color-black">Enjoy complimentary fresh fruit water, speciality coffee, and tea, or prep your lunch
                                with refrigerators and microwaves.</p>
                        </div>
                    </div>
                    <hr class="fade-1-4">
                    <div class="row mb-xs-24">
                        <div class="col-md-3 col-sm-12">
                            <h5 class="bold">Onsite Staff</h5>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p  class="color-black">Our team is here for you throughout the workweek, from front-desk service to
                                personalized
                                support and mail handling.</p>
                        </div>
                    </div>
                    <hr class="fade-1-4">
                    <div class="row mb48 mb-xs-24">
                        <div class="col-md-3 col-sm-12">
                            <h5 class="bold">Cleaning Services</h5>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <p  class="color-black">Around the clock, our cleaning crew helps keep common areas, meeting rooms, and
                                private
                                offices looking their spiffiest.</p>
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
          <div class="col-sm-12">
            <div class="col-sm-4 mb20">
                     <div class="hr mb20-lg mb10-xs"></div>
                            <h2 class="About-us mb5 bold color-black font-size-60"> LET'S </h2>
                            <h4 class=" text-style-1 About-us mb5"> Thrive Together </h4>
                      <p>With a Flexi Desk plan, you can connect online and in person, while staying as agile as you need to be</p>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="col-sm-4">
                  <div class="item popupgallery mb8">
                                <a href="images/flexi-desk/flexi-dek1.jpg" class="popupgallery"
                                   data-effect="mfp-zoom-out">
                                    <img src="images/flexi-desk/flexi-dek1.jpg" class="border-radius-5" />
                                </a>
                            </div>
                            <h5 class="bold mb0">25,000 Strong</h5>
                            <p>Connect with all our members anytime you want. We are a diverse group of do-ers who
                                choose to come together to thrive togehter.</p>
              </div>
              <div class="col-sm-4">
                 <div class="item popupgallery mb8">
                                <a href="images/flexi-desk/flexi-desk2.jpg" class="popupgallery"
                                   data-effect="mfp-zoom-out">
                                    <img src="images/flexi-desk/flexi-desk2.jpg" class="border-radius-5" />
                                </a>
                            </div>
                            <h5 class="bold mb0">Collaborative Spirit</h5>
                            <p>There’s no networking quite like the organic conversations that happen when companies
                                work in shared space. It’s no surprise that 70% of our members have done business
                                together.</p>
              </div>
              <div class="col-sm-4">
                <div class="item popupgallery mb8">
                                <a href="images/flexi-desk/flexi-desk5.jpg" class="popupgallery"
                                   data-effect="mfp-zoom-out">
                                    <img src="images/flexi-desk/flexi-desk5.jpg" class="border-radius-5"/>
                                </a>
                            </div>
                            <h5 class=" bold mb0">Global Connection</h5>
                            <p>On our online member network, connect to businesses from all over the world for service
                                provider recommendations, operational tips, branding design, and more.</p>
              </div>
          </div>
      </div>  
    </section>

    <section class="bg-secondary">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="col-sm-6">
              <div class="feature bordered well-list">

                         <h5 class="mb0 text-center bold">Daftar Sekarang</h5>
                        <p class="text-center mb8">Isi formulir di bawah ini untuk mendapatkan promo dan kami akan
                            segera menghubungi Anda.
                            Terima kasih!</p>
                        <p class="text-center">
                            <span class="fa fa-phone"></span><a href="tel:+622129222999"> +6221 2922 2999 &nbsp;&nbsp;&nbsp;</a>
                            <span class="fa fa-whatsapp"></span><a href="tel:+6281280055105"> 0812-8005-5105</a>
                        </p>
                        </p>

                         <form class="form-email"
                              data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                              data-error="Please fill all fields correctly.">
                            <input type="text" name="buatpt+vo" hidden="hidden"
                                   value="buatpt+vo"
                                   id="buatpt+vo">
                            <input type="text" class="validate-required" name="name" placeholder="Nama*">
                            <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">

                            <input type="text" class="validate-required validate-email" name="email"
                                   placeholder="Alamat Email*">

                            <textarea style="color: #0a0a0a" class="validate-required" name="message" rows="4"
                                      placeholder="Message"></textarea>
                            <button type="submit">Kirim</button>
                        </form>
                    </div>
            </div>
            <div class="col-md-6">
              <div class="col-sm-12 card-plan pt mb20 text-center">
                  <h1 class="bold mb0"> Month </h1>
                  <h4 class="mb0"> to Month Billing</h4>
              </div>
              <div class="col-sm-12 card-plan primary mb20 text-center">
                   <h1 class="bold mb0 color-white"> 15% <span class="font-size-16 bold mb0">Disount </span></h1>
                  <h4 class="mb0 color-white"> For <b> 3 Months </b> Lump <br> Sum Payment </h4>
              </div>
              <div class="col-sm-12 card-plan pt mb20 text-center">
                  <h1 class="bold mb0 "> 30% <span class="font-size-16 bold mb0">Disount</span> </h1>
                  <h4 class="mb0 "> For <b> 6 Months </b> Lump <br> Sum Payment </h4>
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