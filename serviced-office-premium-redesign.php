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
                    <img alt="image" class="background-image" src="img/redesign/headerservices-52.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Premium  </h1>
                          <h2> Serviced Office </h2>
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
                        <h2 class="About-us mb5 bold color-black font-size-60"> Premium</h2>
                        <h2 class=" text-style-1 About-us font-size-60 mb10"> Plan </h2>
                         <p class="text-left bold padding-5 mb5"><span style="color: green" class="fa fa-whatsapp"></span> Whatsapp
                            Number :
                            <a href="tel:+6281296747317"><br> 0812-9674-7317</a>
                        <h5 class="padding-5 mb5"> Our fully furnished Premium Serviced Office is designed to accommodate companies for maximum performance, comfort and elegance yet still in a cost-effective option.</h5>
                        <a class="btn btn-filled" href="#contactus">Contact Us Now</a>
                    </div>
                    <div class="col-sm-6">
                         <div class="image-slider slider-arrow-controls controls-inside">
                                 <ul class="slides">
                                      <li>
                                         <img class="mb8 border-radius-5" src="img/meet-cen-serviced.JPG">
                                    </li>
                                    <li>
                                        <img  class="mb8 border-radius-5" src="img/gallery/mr-lounge.jpg">
                                    </li>
                                     <li>
                                        <img  class="mb8 border-radius-5" src="img/gallery/tct-lounge2.jpg">
                                    </li>
                                     <li>
                                        <img  class="mb8 border-radius-5" src="img/locations/office8/office8-so2.jpg">
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
                <div class="col-sm-12 mb40 text-center">
                    <h2 class="bold mb0 color-black"> Package Includes  </h2> 
                    <h5 class="mb20">of Premium Plan</h5>  
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb20">
                    <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/registered.png" width="50px">
                            <p class="color-black bold" key="sectionplannine6">Business Address</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/receptionist.png " width="50px">
                            <p class="color-black bold" key="sectionplannine7">Elegant receptionist service</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/workspace.png" width="50px">
                            <p class="color-black bold" key="sectionplannine8">Mail/document receipt on your behalf</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/phone.png" width="50px">
                            <p class="color-black bold" key="sectionplannine9">Dedicated local phone number</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/comm.png " width="50px">
                            <p class="color-black bold" key="sectionplannine10">Call Center team service to answer your calls in your business name</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 text-center mb20">
                            <img src="img/material/access.png " width="50px">
                            <p class="color-black bold" key="sectionplannin11"> Local & International Call Transfer service</p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb20">
                      <div class="col-sm-2 col-xs-6 mb20 text-center">
                           <img src="img/material/audio.png" width="50px">
                            <p class="color-black bold" key="sectionplannine12">Dedicated local Fax number  </p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                             <img src="img/material/coffee.png" width="50px">
                            <p class="color-black bold" key="sectionplannine13">Daily refreshment (coffee, tea, mineral water)</p>
                        </div>
                           <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/high.png " width="40px">
                            <p class="color-black bold">Free wi-fi in all office area</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/meeting.png" width="40px">
                            <p class="color-black bold">Extra hours for Meeting room usage every month</p>
                        </div>


                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                             <img src="img/material/breakfast.png" width="50px">
                            <p class="color-black bold" key="sectionplannine14">Breakfast treatment every Monday </p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                           <img src="img/material/AC.png" width="50px">
                            <p class="color-black bold" key="sectionplannine14">Electricity & AC during standard business hours</p>
                        </div>

                </div>
            </div>
             <div class="row">
                <div class="col-sm-12 mb20">
                       <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/domicile.png" width="50px">
                            <p class="color-black bold" key="sectionplannine17">Domicile letter arrangement</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/printer.png" width="50px">
                            <p class="color-black bold" key="sectionplannine12">Access to photocopy and printing services  </p>
                        </div>

                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/invitation.png" width="50px">
                            <p class="color-black bold" key="sectionplannine13">Free invitation to our weekly special events</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/access_private.png" width="50px">
                            <p class="color-black bold" key="sectionplannine14">Access to use our private office/hotdesking space at any of vOffice locations across Jakarta</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/events.png " width="50px">
                            <p class="color-black bold" key="sectionplannine15">Free use of our event space</p>
                        </div>
                        <div class="col-sm-2 col-xs-6 mb20 text-center">
                            <img src="img/material/access_card.png" width="50px">
                            <p class="color-black bold" key="sectionplannine16">Building access card</p>
                        </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                      <h5 class=" mb5 color-primary bold"> Include All Standard Furniture <br> (worktable, chairs, phone, storage space, dustbin)</h5>
                        <a href="download/virtual-office-plan-2017-voffice.pdf" target="_blank">
                            <span class=" fa fa-file-pdf-o"></span> Download Brochure</a>

                </div>
            </div>  
        </div>
    </section>
      <section class="bg-secondary">
        <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center">
                  <h2 class="bold mb0"> Locations </h2>
                    <h5 class="mb40">of Serviced Office at vOffice</h5>  

              </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-6 mb40">
                 <h3 class="bold mb40"> Jakarta Selatan </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/ct.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Centennial Tower</h5>
                          <p class="mb0">Level 29, Jl. Jendral Gatot Subroto</p>
                          <p class="mb0">Karet Semanggi, 12950.</p>
                      </div>
                  </div>
                   <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                        <a><img src="img/tower/ceo.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">The Ceo</h5>
                            <p class="mb0">Level 12, Jl TB Simatupang No. 18C, 12430.</p>
                      </div>
                  </div>
                   <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/off8.jpg"/></a>

                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Office 8</h5>
                          <p class="mb0">Level 18 - A, Jl Jend Sudirman Kav. 52-53</p>
                          <p class="mb0">Sudirman Central Business District, 12190.</p>
                      </div>
                  </div>
                  <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                        <a><img src="img/tower/mr.jpg"/></a>


                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Menara Rajawali</h5>
                          <p class="mb0">Level 7-1, Jl. DR Ide Anak Agung Gde Agung </p>
                          <p class="mb0">Kawasan Mega
                                    Kuningan, 12950.</p>
                      </div>
                  </div>
                  <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                        <a><img src="img/tower/mk.jpg"/></a>

                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Menara Kuningan</h5>
                          <p class="mb0">Jl. H. R. Rasuna Said, Kav. 5</p>
                                <p class="mb0">Karet Kuningan, 12940.</p>
                      </div>
                  </div>
                   <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                       <a><img src="img/tower/g-surveyor.jpg"/></a>


                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Graha Surveyor</h5>
                          <p class="mb0">Level 12, Jl Jend Gatot Subroto <br> Kav 56, 12950.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 mb40">
                <h3 class="bold mb40 "> Jakarta Barat </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                      <a><img src="img/tower/kencana.jpg"/></a></a>

                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Kencana Tower</h5>
                          <p class="mb0">Level Mezannine, Business Park</p>
                          <p class="mb0"> Kebon Jeruk, Jl Raya Meruya Ilir No. 88, 11620.</p>
                      </div>
                  </div>
                   <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                      <a><img src="img/tower/gst.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Graha Slipi Tower</h5>
                          <p class="mb0">Level 42G - H, Jl S Parman Kav 22 - 24, Slipi, 11480.</p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-6 mb40">
                 <h3 class="bold mb40"> Jakarta Timur </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/rawamangun.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Eastlink</h5>
                          <p class="mb0">jl. Perserikatan No. 1 Blok A Kav. 261, Rawamangun</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6">
                <h3 class="bold mb40"> Jakarta Pusat </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                      <a><img src="img/tower/tct.jpg"/></a>


                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">The City Tower</h5>
                          <p class="mb0">Level 12 Unit 1-N, JL.M H Thamrin No.81, 10310.</p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
         <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-6 mb40">
                 <h3 class="bold mb40"> Jakarta Utara </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                          <a><img src="img/tower/kirana-2.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Kirana 2 Tower</h5>
                          <p class="mb0">Level 10, Jl Boulevard Timur No.88 Kelapa Gading, 14230.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 mb40">
                <h3 class="bold mb40"> Tangerang </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                      <a><img src="img/tower/bsd.jpg"/></a>


                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">BSD Green Office Park</h5>
                          <p class="mb0">My Republic Plaza (d/h Green Office Park 6), 15345.</p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
         <div class="row">
            <div class="col-sm-12">
              <div class="col-sm-6 mb40">
                 <h3 class="bold mb40"> Surabaya  </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/bumi-mandiri-tower.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">JAPFA Tower II</h5>
                           <p class="mb0">Level 12, Jl Panglima Sudirman</p>
                                <p class="mb0">Kav 66-68, Surabaya Pusat</p>
                      </div>
                  </div>
                    <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/intiland-tower.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Intiland Tower</h5>
                          <p class="mb0">Level 3, Jl Panglima Sudirman No.101-103</p>
                                <p class="mb0">Surabaya 60271</p>
                      </div>
                  </div>
                    <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                         <a><img src="img/tower/spazio.jpg"/></a>
                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Spazio</h5>
                          <p class="mb0">Level 5, Kompleks Graha Festival</p>
                                <p class="mb0">Jl. Mayjend Yono Soewoyo Kav 3</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 mb40">
                <h3 class="bold mb40"> Bali </h3>
                 <div class="row mb20">
                      <div class="col-sm-2 col-xs-2">
                      <a><img src="img/tower/ibiz-styles.jpg"/></a></a>

                      </div>
                      <div class="col-sm-10 col-xs-10">
                          <h5 class="bold mb0">Ibiz Styles Business Complex</h5>
                           <p class="mb0">Unit 3 & 4, Jl. Teuku Umar No 177</p>
                                <p class="mb0">Denpasar, Bali</p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
                  </div>
                </div>
              </section>


              <section>
        <div class="container">
            <a name="contactus"></a>
            <div class="row">
                <div class="col-md-6 well bg-white">
                    <h4 class="text-center bold mb5 color-black">Talk to Us on how we can help you </h4>
                    <p class="text-center  mb10 color-black"><span style="color: green"
                                                                       class="fa fa-whatsapp color-black"></span>
                        Whatsapp
                        Number
                    <h4 class="bold number text-center"><a href="tel:+6281296747317">0812-9674-7317</a></h4>
                    </p>
                    <h6 class="bold text-center number"> </h6>
                    <form class="form-email"
                          data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" name="crm" hidden="hidden" value="crm"
                               id="crm">
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
                                   <span class="color-primary bold"><br> 0812-9674-7317
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
                                class="color-primary bold">cs@voffice.co.id</span>.
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