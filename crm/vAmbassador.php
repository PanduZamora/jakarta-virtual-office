<?php function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    return $ip;
}

$user_ip = getUserIP();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Feedback vOffice Indonesia</title>

    <meta name="description" content="Virtual Office dan Serviced Office Jakarta | Sewa Ruang Kantor Jakarta | Office Space Jakarta Indonesia - Call Answering,
Address, Meeting Room, Company Incorporation, Pembuatan PT & PMA, Akunting & Pembukuan
Dedicated Phone and Fax number, vOffice - Indonesia"/>

    <meta name="keywords" content="virtual office jakarta, indonesia, ruang kantor, office space,
serviced office, temporary office, shared office, office virtual,
indonesia virtual office, start business, cheap office, short term office, kantor virtual jakarta, sewa kantor, ruang
kantor, jakarta, indonesia, kantor murah, virtual office, virtual
address jakarta, address, business office, receptionist, courier,
personal assistant"/>

    <meta name="google-site-verification" content="vIGs5sNCD8WA19fvxSzfVLWcxMh38ZEjiHCwcSYPUGA"/>

    <meta name="robots" content="index,follow"/>
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-feedback.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">
</head>
<body>

            <section class="benefits">
                <div class="container">
                    <div class="row text-center">
                        <div class="container">
                         <div class="col-sm-12">
                                <img class="logo logo-dark mtmin10" alt="vOffice Indonesia" src="images/vAmbassador_logoFA-03.png"
                                     style="width: 200px; margin-bottom: -3%;">
                                    <h3 class="bold mtmin10 mb0">Siapa yang dapat Menjadi vAmbassador?</h3>
                                <p class="article color-black mb40">
                                   Seluruh klien aktif vOffice dapat menjadi vAmbassador.
                                <p>
                            </div>
                        </div>
                    </div>
                    <div class="row v-align-children">
                      <div class="container">
                            <div class="col-md-6 col-sm-6 text-center mb-xs-24">
                                <img alt="Screenshot" src="images/section_1.PNG" style="width: 110%">
                            </div>
                            <div class="col-md-6 col-sm-6 ">
                                <h3 class="bold">Apa itu vAmbassador?</h3>
                                <p class="article color-black bold">
                                    vAmbassador adalah klien aktif kami yang peduli dan ingin berbagi pengetahuan mengenai dan keuntungan "SMARTER BUSINESS - BETTER LIFE" dari vOffice kepada kolega, teman dan keluarga atau siapa saja yang ingin menjadi pengusaha smart dan ingin mencapai kesuksesan bisnis.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="container">
                         <div class="col-sm-12">
                                    <h3 class="bold mb0">Apa yang Dilakukan vAmbassador sebagai sebuah Komunitas?</h3>
                                <p class="article color-black mb0">
                                   Kami mengadakan berbagai acara seperti bakti sosial, acara networking, seminar
                                <p>
                            </div>
                        </div>
                    </div>   
                     <div class="row v-align-children">
                       <div class="container">
                        <div class="col-md-12 col-offset-md-1">
                            <div class="row">
                                <div class="col-md-3 mb10">
                                      <div class="w3-card-4">
                                        <img src="images/charity.jpg" alt="Norway" style="width:100%">
                                        <div class="w3-container w3-center">
                                          <p class="color-black p10">Bakti Sosial</p>
                                        </div>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="w3-card-4">
                                        <img src="images/event-6.JPG" alt="Norway" style="width:100%">
                                        <div class="w3-container w3-center">
                                          <p class="color-black p10">Networking</p>
                                        </div>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="w3-card-4">
                                        <img src="images/event-4.JPG" alt="Norway" style="width:100%">
                                        <div class="w3-container w3-center">
                                          <p class="color-black p10">Seminar</p>
                                        </div>
                                      </div>
                                </div>
                                 <div class="col-md-3 mb10">
                                      <div class="w3-card-4">
                                        <img src="images/event-1.jpg" alt="Norway" style="width:100%">
                                        <div class="w3-container w3-center">
                                          <p class="color-black p10">Events</p>
                                        </div>
                                      </div>
                                </div>
                        </div>

                    </div>

                         <div class="col-md-4 pl30 visible-xs">
                             <h3 class="bold">Apa yang Dilakukan vAmbassador sebagai sebuah Komunitas?</h3>
                            <p class="article color-black bold">
                                Kami mengadakan berbagai acara seperti bakti sosial, acara networking, seminar
                            </p>
                        </div>
                    </div>
                    </div>


                      <div class="row v-align-children pt5-persen">
                        <div class="container">
                            <div class="col-md-6 col-sm-6 ">
                                <h3 class="bold">Apa saja keuntungan menjadi vAmbassador?</h3>
                               <p class="article color-black bold">
                                  vAmbassador yang menyarankan siapa saja untuk menggunakan layanan vOffice akan diberikan imbalan menarik dan di saat yang sama vAmbassador dapat memberikan diskon spesial kepada kolega, teman dan keluarga untuk menggunakan layanan vOffice.
                                </p>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center mb-xs-24">
                                <img alt="Screenshot" src="images/sectioon_3.PNG" style="width: 110%">
                            </div>
                            
                        </div>
                    </div>



                </div>

            </section>

            <a name="contactus"></a>
            <section class="bg-picture">
                <div class="container text-center">

                    <div class="col-md-6 col-md-offset-3">
                    <div class="feature boxed1">
                       <h5 class="bold mb10 color-black">Apa yang harus dilakukan vAmbassador untuk merekomendasikan layanan vOffice?</h5>
                        <p class="color-black bold">Kami akan melakukan follow-up secara langsung untuk mendaftarkan rekomendasi Anda.</p>
                        <form class="form-email"
                              data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                              data-error="Please fill all fields correctly.">
                             <input type="text" name="ip" value="<?=$user_ip;?>" hidden>
                            <input type="text" name="vAmbassador_form" hidden="hidden"
                                   value="vAmbassador_form"
                                   id="vAmbassador_form">
                            <input type="text" class="validate-required" name="name" placeholder="Name*">
                            <input type="text" class="validate-required" name="phone" placeholder="Phone*">

                            <input type="text" class="validate-required validate-email" name="email"
                                   placeholder="Email Address*">

                            <!--                            <div class="select-option p0">-->
                            <!--                                <i style="color: #000;" class="ti-angle-down"></i>-->
                            <!--                                <select class="validate-required" name="service" tabindex="5">-->
                            <!--                                    <option value="" selected disabled>-- Services Inquiries --</option>-->
                            <!--                                    <option value="Serviced Office">Serviced Office</option>-->
                            <!--                                    <option value="Virtual Office">Virtual Office</option>-->
                            <!--                                </select>-->
                            <!--                            </div>-->

                            <textarea class="validate-required" name="message" rows="4"
                                      placeholder="Message"></textarea>
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>


                </div>
            </section>

        </div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/moment.js"></script>
<script src="js/daterangepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var zindex = 10;

        $("div.card").click(function (e) {
            e.preventDefault();

            var isShowing = false;

            if ($(this).hasClass("show")) {
                isShowing = true
            }

            if ($("div.cards").hasClass("showing")) {
                // a card is already in view
                $("div.card.show")
                    .removeClass("show");

                if (isShowing) {
                    // this card was showing - reset the grid
                    $("div.cards")
                        .removeClass("showing");
                } else {
                    // this card isn't showing - get in with it
                    $(this)
                        .css({zIndex: zindex})
                        .addClass("show");

                }

                zindex++;

            } else {
                // no cards in view
                $("div.cards")
                    .addClass("showing");
                $(this)
                    .css({zIndex: zindex})
                    .addClass("show");

                zindex++;
            }

        });
    });

</script>
<script src="js/wow.js" type="text/javascript"></script>
  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  </script>
<script src="js/scripts.js"></script>

<!--Google Analytics-->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-32797576-1']);
    _gaq.push(['_trackPageview']);
    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>
<!--Start of Tawk.to Script-->
<!--<script type="text/javascript">-->
<!--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--(function(){-->
<!--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--s1.async=true;-->
<!--s1.src='https://embed.tawk.to/5a4374baf4461b0b4ef8acfd/default';-->
<!--s1.charset='UTF-8';-->
<!--s1.setAttribute('crossorigin','*');-->
<!--s0.parentNode.insertBefore(s1,s0);-->
<!--})();-->
<!--</script>-->
<!--End of Tawk.to Script-->
</body>
</html>
