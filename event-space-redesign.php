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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Raleway:400,800" rel="stylesheet">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">
</head>

<body>

<?php include "header-redesign.html"?>

<div class="main-container">

 <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/redesign/headerevent-53.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                          <h1 class="bold mb0"> Event  </h1>
                          <h2> Space </h2>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section>
      <div class="container">
        <div class="row mb20">
                <div class="col-sm-12">
                    <div class="col-sm-4">
                       <div class="hr mb20-lg mb10-xs"></div>
                        <h2 class="About-us mb5 bold color-black font-size-60"> Help</h2>
                        <h2 class=" text-style-1 About-us font-size-60 mb5"> You </h2>
                        <h5 class="padding-5 color-black">We can also assist you with your event <br> planning, conceptualizing, invitation, hosting and more</h5>
                    </div>
                    <div class="col-sm-4 text-left">
                        <div class="row mb20">
                                <div class="col-sm-3 col-xs-3 mb20">
                                    <img src="img/plan/seminar.png" width="80%">
                                </div>
                                <div class="col-md-9 col-xs-9 mb20">
                                    <h5 class="bold color-black" key="seminar">Seminar</h5>
                                </div>
                        </div>
                        <div class="row mb20">
                                <div class="col-sm-3 col-xs-3 mb10">
                                    <img src="img/plan/party.png" width="80%">
                                </div>
                                <div class="col-md-9 col-xs-9 mb10">
                                    <h5 class="bold color-black" key="seminar">Suprise <br> Party</h5>
                                </div>
                        </div>
                        <div class="row  mb20">
                                <div class="col-sm-3 col-xs-3 mb20">
                                    <img src="img/plan/launch.png" width="80%">
                                </div>
                                <div class="col-md-9  col-xs-9 mb20">
                                    <h5 class="bold color-black" key="seminar">Product <br> Launching</h5>
                                </div>
                        </div>

                    </div>
                    <div class="col-sm-4 text-left">
                        <div class="row mb20">
                          <div class="col-sm-3 col-xs-3 mb20">
                              <img src="img/plan/meeting.png" width="80%">
                          </div>
                          <div class="col-md-9 col-xs-9 mb20">
                              <h5 class="bold color-black" key="seminar">Meeting</h5>
                          </div>
                        </div>
                        <div class="row mb20">
                          <div class="col-sm-3 col-xs-3 mb10">
                              <img src="img/plan/movie.png" width="80%">
                          </div>
                          <div class="col-md-9 col-xs-9 mb10">
                              <h5 class="bold color-black" key="seminar">Movie  <br> Screening</h5>
                          </div>
                        </div>
                        <div class="row mb20">
                          <div class="col-sm-3 col-xs-3 mb20">
                              <img src="img/plan/videos.png" width="80%">
                          </div>
                          <div class="col-md-9 col-xs-9 mb20">
                              <h5 class="bold color-black" key="seminar">Creativity  <br> Videos</h5>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <section class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb20 text-center">
                    <h2 class="bold mb0 color-black"> Successfully  Organised   </h2>
                    <h5>Over <b> 300 </b> Event</h5>
                </div>
            </div>
            <div class="row mb24">
              <div class="col-sm-12 text-center">
                <div class="popupgallery">
                  <div class="owl-carousel">
                    <div class="item">
                        <a href="images/events/1.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/1.jpg" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/2.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/2.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/3.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/3.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/4.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/4.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/5.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/5.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/6.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/6.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/7.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/7.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/8.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/8.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/9.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/9.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/10.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/10.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/11.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/11.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/12.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/12.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/13.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/13.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/14.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/14.jpg"/>
                        </a>
                    </div>
                    <div class="item">
                        <a href="images/events/15.jpg" class="popupgallery"
                           data-effect="mfp-zoom-out">
                            <img src="images/events/15.jpg"/>
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
               <div class="row">
                  <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h5 class=" mb5 color-primary bold">Press Conference • Product Launches • Team Building • Seminars • Workshops Classes • Certifications • Others
                    </h5>
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
                            <h2 class="About-us mb5 bold color-black font-size-60"> Why</h2>
                            <h2 class=" text-style-1 About-us font-size-60 mb5"> Us </h2>
                            <p class="padding-5 color-black">vOffice event space is designed to suit all kinds of event setup. With vOffice you don't have to go some place else for all the equipment for your events because we provide all facilities you need to organize your events with no hassle. We know what you need, even before you need them.</p>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <img src="img/redesign/icon/calendar.png" width="20%" class="mb10">
                            <h3 class="bold color-black mb20"> Free Facilites </h3>
                            <p class="mb5">&hearts; 50 mbps wireless broadband connection</p>
                            <p class="mb5"> &hearts; Microphone & Bose & JBL sound system</p>
                            <p class="mb5">&hearts; White board and colored marker</p>

                            <p class="mb5">&hearts; Free flow mineral drink, tea and coffee</p>
                        </div>
                        <div class="col-sm-3">
                            <h3 class="bold color-black mb10 hidden-xs"> &nbsp;    </h3>
                            <h3 class="bold color-black mb5  hidden-xs"> &nbsp;    </h3>
                            <h3 class="bold color-black mb5  hidden-xs"> &nbsp;    </h3>
                            <p class="mb5">&hearts; Pointer</p>
                            <p class="mb5">&hearts; Stationary</p>
                            <p class="mb5">&hearts; Flip chart</p>
                            <p class="mb5">&hearts; Projector & screen</p>
                        </div>
                </div>
            </div>
        </section>

    <section class="bg-secondary">
      <div class="container">
        <div class="row mb20">
            <div class="col-sm-12">
                <div class="col-sm-6 mb10">
                  <div class="item popupgallery mb20">
                      <a href="images/locations/ct.jpg" class="popupgallery"
                         data-effect="mfp-zoom-out">
                          <img src="images/locations/ct.jpg" class="border-radius-5" />
                      </a>
                  </div>
                </div>
                <div class="col-sm-4 mb0">
                   <div class="hr mb20-lg mb10-xs"></div>
                    <h2 class="About-us mb5 bold color-black font-size-60"> Centennial</h2>
                    <h2 class=" text-style-1 About-us font-size-60 mb10"> Tower </h2>
                    <p class="mb0 padding-5">Level 29, Jl. Jendral Gatot Subroto Karet Semanggi</p>
                    <p class="mb5 padding-5">Jakarta Selatan, 12950, Indonesia</p>
                    <h3 class="padding-5 mb0"> <b> 1.5jt/hours </b> </h3>
                    <h5 class="padding-5 color-black">For 80 People</h5>
                </div>
            </div>
            <div class="col-sm-12 text-center">
              <div class="col-sm-12">
                <div class="popupgallery">
                  <div class="row">
                    <div class="col-sm-3 mb-xs-24">
                      <a href="images/eventspace/event-space1.jpg" class="popupgallery"
                        data-effect="mfp-zoom-out">
                      <img src="images/eventspace/event-space1.jpg" />
                      </a>
                    </div>
                    <div class="col-sm-3 mb-xs-24">
                      <a href="images/eventspace/event-space3.jpg" class="popupgallery"
                      data-effect="mfp-zoom-out">
                      <img src="images/eventspace/event-space3.jpg"/>
                    </a>
                    </div>
                    <div class="col-sm-3 mb-xs-24">
                      <a href="images/eventspace/event-space4.jpg" class="popupgallery"
                      data-effect="mfp-zoom-out">
                      <img src="images/eventspace/event-space4.jpg"/>
                    </a>
                    </div>
                    <div class="col-sm-3 mb-xs-24">
                        <a href="images/eventspace/event-space6.jpg" class="popupgallery"
                        data-effect="mfp-zoom-out">
                        <img src="images/eventspace/event-space6.jpg"/>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
         <div class="row text-center">
            <div class="col-sm-12 col-xs-12">
                <a href="#contactus" class="btn btn-filled lang" key="contact">Contact Us Now</a>
            </div>
        </div>
    </div>
</section>
  <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb20 text-center">
                    <h2 class="bold mb0 color-black"> Event Planning  </h2>
                    <h4>Services</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mb20">
                    <div class="col-sm-4">
                        <div class="col-sm-12 card-plan pt">
                             <img src="images/services/marketing-service.jpg" alt="John" style="width:100%" class="mb20">
                            <h5 class="bold mb10 color-primary text-left">Marketing Services</h5>
                            <hr>
                            <div class="row text-left pl">
                                <div class="col-md-6">
                                    <p class="mb8 bold">Online </p>
                                    <ul class="mb8 bullets">
                                        <li> Social Media Event
                                            Marketing
                                        </li>
                                        <li>Influencer Marketing
                                        </li>
                                        <li> Event Website Development
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <p class="mb8 bold">Offline </p>
                                    <ul class="bullets">
                                        <li>Flyers
                                        </li>
                                        <li> Billboard
                                        </li>
                                       <li> Digital Ads on TVs
                                        </li>
                                        <li> Connect to Community
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card-plan pt">
                         <img src="images/services/press.jpg" alt="John" style="width:100%"  class="mb20">
                          <h5 class="bold mb10 color-primary text-left">Press & Media Arrangement </h5>
                          <hr>
                          <div class="row text-left pl">
                              <div class="col-md-6">
                                  <ul class="mb8 bullets">
                                      <li> TV Coverages
                                      </li>
                                      <li>Media Coverages
                                      </li>
                                      <li> Gather bloggers
                                      </li>
                                      <p> &nbsp; </p>
                                      <p> &nbsp; </p>
                                  </ul>
                              </div>

                              <div class="col-md-6">
                                  <ul class="bullets">
                                      <li>Press Releases
                                      </li>
                                      <li> One-on-One TV interview
                                      </li>
                                      <p> &nbsp; </p>
                                      <p> &nbsp; </p>
                                  </ul>
                              </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card-plan pt">
                             <img src="images/services/concierge.jpg" alt="John" style="width:100%" class="mb20">
                              <h5 class="bold mb10 color-primary text-left">Concierge Service </h5>
                              <hr>
                              <div class="row text-left pl">
                                <div class="col-md-6">
                                    <ul class="mb8 bullets">
                                        <li> Site Supervising
                                        </li>
                                        <li>Transport Arrangemen
                                        </li>
                                        <li> Accommodation Arrangement
                                        </li>
                                        <p> &nbsp; </p>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="bullets">
                                        <li>Guest Registration
                                        </li>
                                        <li> Reception Service
                                        </li>
                                        <li> Guest Waiting Service</li>
                                        <p> &nbsp; </p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <div class="row">
                <div class="col-sm-12">
                  <div class="col-sm-4">
                    <div class="col-sm-12 card-plan pt">
                       <img src="images/services/creatives.jpg" alt="John" style="width:100%"
                                             class="mb20">
                        <h5 class="bold mb10 color-primary text-left">Creative & Design</h5>
                        <hr>
                        <div class="row text-left pl">
                            <div class="col-md-6">
                                <ul class="mb8 bullets">
                                    <li> Marketing Collateral Design
                                    </li>
                                    <li>Conceptual Design
                                    </li>
                                    <li> Stage Design
                                    </li>
                                    <li> Floral Design </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="bullets">
                                    <li>Photography
                                    </li>
                                    <li> Videography
                                    </li>
                                   <li> Live Streaming
                                    </li>
                                    <li> 360 Photos and Videos
                                    </li>
                                </ul>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="col-sm-12 card-plan pt">
                             <img src="images/services/entertaint.jpg" alt="John" style="width:100%" class="mb20">
                            <h5 class="bold mb10 color-primary text-left">Emcee & Entertainmente</h5>
                            <hr>
                            <div class="row text-left pl">
                                <div class="col-md-6">
                                    <ul class="mb8 bullets">
                                        <li> Marketing Collateral
                                        </li>
                                        <li>Conceptual Design
                                        </li>
                                        <li> Stage Design
                                        </li>
                                         <li> Floral Design
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="bullets">
                                        <li> Photography
                                        </li>
                                        <li>Videography
                                        </li>
                                        <li> Live Streaming
                                        </li>
                                         <li> 360 Photos and Videos
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="col-sm-12 card-plan pt">
                          <img src="images/services/catering.jpg" alt="John" style="width:100%" class="mb20">
                            <h5 class="bold mb10 color-primary text-left">Catering </h5>
                            <hr>
                            <div class="row text-left pl">
                                <div class="col-md-6">
                                    <ul class="mb8 bullets">
                                        <li> International Cuisine
                                        </li>
                                        <li>Western Food
                                        </li>
                                        <p class="mb10"> &nbsp; </p>
                                         <p class="mb5"> &nbsp; </p>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <ul class="bullets">
                                         <li> Local Food
                                        </li>
                                        <li>Snacks
                                        </li>
                                         <p class="mb0"> &nbsp; </p>
                                    </ul>
                                </div>
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
                  <h4 class="bold langt text-center mb40">Available Setup Options For Our Event
                      Space</h4>

                  <div class="row text-center">
                      <div class="col-sm-offset-1 col-sm-2 col-xs-6">
                          <img src="img/setup/theatre.png">
                          <p class="small bold lang" key="theater">Theater /Cinema</p>
                      </div>
                      <div class="col-sm-2 col-xs-6">
                          <img src="img/setup/classroom.png">
                          <p class="small bold lang" key="ruang_kelas">Classroom</p>
                      </div>
                      <div class="col-sm-2 col-xs-6">
                          <img src="img/setup/team.png">
                          <p class="small bold lang" key="meja">Team Tables</p>
                      </div>
                      <div class="col-sm-2 col-xs-6">
                          <img src="img/setup/standing.png">
                          <p class="small bold lang" key="resepsi">Cocktail /Standing Reception</p>
                      </div>
                      <div class="col-sm-2 col-xs-6">
                          <img src="img/setup/buffet.png">
                          <p class="small bold lang" key="prasmanan">Buffet with Table</p>
                      </div>
                  </div>
                  <div class="row mb16">
                      <div class="col-sm-12">
                          <h5 class="lang text-center bold" key="setupeventspacecaption">
                              We can setup our event space in anyway you want. Below are the common
                              setup that
                              we have helped arranged previously.
                          </h5>
                          <hr class="fade-3-4 mb24 mt24">
                      </div>
                  </div>
               </div>
            </div>
             <div class="row text-center">
              <div class="col-sm-12 col-xs-12">
                  <a href="#contactus" class="btn btn-filled lang" key="contact">Contact Us Now</a>
              </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
             <a name="contactus"></a>
                            <!--<div class="row">-->
                            <div class="col-md-offset-3 col-md-6 well bg-white">
                                <h4 class="text-center bold">Keep in Touch</h4>
                                <p class="text-center bold"><span style="color: green" class="fa fa-whatsapp"></span>
                                    Whatsapp
                                    Number :
                                    <a href="tel:+6282299980022"> 0822-9998-0022</a>
                                </p>
                                <p class="lang" key="wacaption">Whether it is an enquiries, a suggestion, or a
                                    complaint, please don't hesitate in contacting
                                    us. We will be more than glad to hear from you and we will respond to your request
                                    as soon
                                    as we can.</p>
                                <form class="form-email"
                                      data-success="Thanks for your submission, we will be in touch shortly."
                                      data-error="Please fill all fields correctly.">
                                    <input type="text" name="eventspace_inquiry" hidden="hidden"
                                           value="eventspace_inquiry"
                                           id="eventspace_inquiry">
                                    <input hidden="" name="tracker" id="tracker" type="text" value="eventspace">
                                    <input type="text" class="validate-required" name="name" placeholder="Name">
                                    <input type="text" class="validate-required" name="phone" placeholder="Phone">
                                    <input type="text" class="validate-required validate-email" name="email"
                                           placeholder="Alamat Email">
                    <textarea class="validate-required" name="message" rows="4"
                              placeholder="Pertanyaan atau komentar Anda"></textarea>
                                    <button type="submit" class="lang" key="send">Send</button>
                                </form>
                            </div>
                            <!--</div>-->
                </div>
        </div>
    </section>
    <?php include 'footer-redesign.html'; ?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
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
        $("#event-space-gallery").owlCarousel({
            items: 3,
            pagination: true,
            navigation: true,
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
</body>
</html>
