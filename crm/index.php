<?php function getUserIP()
{
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

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
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-feedback.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <!--slide carousel-->
    <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet">
    <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet">
</head>
<body>
<section class="benefits">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <img class="logo logo-dark mtmin10" alt="vOffice Indonesia" src="images/voffice-logo.png"
                     style="width: 150px;">
            </div>
            <!--                     <div class="col-sm-12 mb40">
                                    <div class="row v-align-children">
                                                 <div class="col-md-5 col-sm-5 mb-xs-24 visible-xs mb20">
                                                    <h3 class="bold text-left"> Why crm is here to serve our value clients! </h3>
                                                      <hr class="title-breaker left hidden-xs">
                                                </div>
                                                <div class="col-md-5 col-sm-5 mb-xs-24 hidden-xs">
                                                    <h3 class="bold text-left"> Why crm is here to serve our value clients! </h3>
                                                </div>

                                                <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 text-center ">
                                                    <img class="cast-shadow" alt="Screenshot" src="images/ka_vannesa.jpeg">
                                                </div>
                                            </div>

                                    </div>
                                </div> -->

            <div class="col-sm-12 mb40 text-center">
                <h4 class="bold"> Mengapa CRM hadir untuk membantu klien kami? </h4>
                <div class="col-sm-4">
                    <img class="cast-shadow" alt="Screenshot" src="images/ka_vannesa.jpeg">
                </div>
                <div class="col-sm-4">
                    <img class="cast-shadow hidden-xs" alt="Screenshot" src="images/ka_vanessa_2.jpeg">
                </div>
                <div class="col-sm-4">
                    <img class="cast-shadow  hidden-xs" alt="Screenshot" src="images/ka_vannesa_3.jpeg">
                </div>

            </div>


            <div class="col-sm-12 mb40">
                <div class="row v-align-children">
                    <div class="col-md-6 col-sm-6 text-center mb-xs-24">
                        <img alt="Screenshot" src="images/icons_crm-07.png" style="width: 80%;">
                    </div>
                    <div class="col-md-6 col-sm-6 text-left hidden-xs">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2 class="uppercase bold"> KAMI PEDULI! </h2>
                                <hr class="title-breaker left hidden-xs">
                            </div>
                            <div class="col-sm-7">
                                <img src="images/icons_crm-08.png" style="width: 40%;" class="text-xs-center">
                            </div>
                        </div>
                        <h3 class="mt28 mb0 bold">vOffice adalah tempat di mana persahabtan, cerita dan keajaiban terjadi</h3>
                        <h5 class="mb40">Orang tidak akan peduli apa yang Anda tahu sampai mereka tahu bahwa Anda peduli</h5>
                    </div>
                    <div class="col-md-6 col-sm-6 visible-xs text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h2 class="uppercase bold text-center"> KAMI PEDULI! </h2>
                                    <hr class="title-breaker left hidden-xs">
                                </div>
                                <div class="col-sm-7">
                                    <img src="images/icons_crm-08.png" style="width: 40%;" class="text-xs-center mb10">
                                </div>
                            </div>
                            <h3 class="mt28 mb0 bold text-center">vOffice adalah tempat di mana persahabtan, cerita dan keajaiban terjadi</h3>
                            <h5 class="mb40">Orang tidak akan peduli apa yang Anda tahu sampai mereka tahu bahwa Anda peduli</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center">
                <h3 class="mt28 mb0 bold justify">Yang dapat Klien Harapkan dari Kami</h3>
                <h5 class="mb40">Kami Peduli, Karena Bisnis Anda sangat Penting</h5>

            </div>
            <div class="col-sm-12 mb40 text-center ">

                <div class="col-sm-4">
                    <img src="images/EMPATHY.png" style="width: 50%;" class="mb10">
                    <h4 class="bold color-ungu mb0"> Empati </h4>
                    <h6 class="text-center"> Mencapai pemahaman emosional mengenai keadaan pelanggan </h6>
                </div>


                <div class="col-sm-4">
                    <img src="images/RESOLUTION.png" style="width: 50%;" class="mb10">
                    <h4 class="bold color-ungu mb0"> Resolusi </h4>
                    <h6 class="text-center"> Mengubah pengalaman yang biasa menjadi luar biasa </h6>
                </div>

                <div class="col-sm-4">
                    <img src="images/EXPECTATION.png" style="width: 50%;" class="mb10">
                    <h4 class="bold color-ungu mb0"> Ekspektasi </h4>
                    <h6 class="text-center"> Mengelola, memenuhi dan melampaui ekspektasi pelanggan</h6>
                </div>

            </div>
            <div class="col-sm-12 mb40 text-center">
                <div class="col-sm-4">
                    <img src="images/PERSONALISATION.png" style="width: 50%;" class="mb10">
                    <h4 class="bold mb0 color-ungu"> Personalisasi </h4>
                    <h6 class="text-center"> Memerhatikan kebutuhan setiap individu untuk memunculkan hubungan emosional </h6>
                </div>
                <div class="col-sm-4">
                    <img src="images/INTEGRITY.png" style="width: 50%;" class="mb10">
                    <h4 class="bold mb0 color-ungu"> Integritas </h4>
                    <h6 class="text-center">Menjadi terpercaya dan menumbuhkan saling percaya </h6>
                </div>

                <div class="col-sm-4">
                    <img src="images/TIME.png" style="width: 50%;" class="mb10">
                    <h4 class="bold mb0 color-ungu"> Waktu & Usaha </h4>
                    <h6 class="text-center"> Mengurangi kerepotan pelanggan dan menciptakan proses yang mudah </h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12  text-center">
                <h3 class="mt28 mb40 bold justify">Apa yang kami capai sebagai sebuah komunitas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mb40">
                <div class="popupgallery">
                    <div class="owl-carousel">
                        <div class="item">
                            <a href="images/crm-1-size.jpg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-1-size.jpg"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/crm-3.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-3.jpeg"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/crm-6.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-6.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/event-1.jpg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-1.jpg"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/event-2.JPG" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-2.JPG"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/event-3.JPG" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-3.JPG"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/event-4.JPG" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-4.JPG"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/event-5.JPG" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-5.JPG"/>
                            </a>
                        </div>

                        <div class="item">
                            <a href="images/event-6.JPG" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/event-6.JPG"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-5.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-5.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-7.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-7.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-8.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-8.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-9.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-9.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-10.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-10.jpeg"/>
                            </a>
                        </div>
                        <div class="item">
                            <a href="images/crm-1.jpeg" class="popupgallery"
                               title="feedback.voffice.co.id" data-effect="mfp-zoom-out">
                                <img src="images/crm-1.jpeg"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb16">
                    <div class="iframe-container mb24">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/OuZP7sZ5eIs" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="iframe-container mb24">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/76mqez0gEVM" frameborder="0"
                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-dark">

    <div class="col-sm-12 ptcontact text-center ">
        <h3 class="mt28 mb0 bold justify text-center">Bergabunglah dengan Komunitas Kami yang Peduli <br>  dengan menjadi vAmbassador</h3>
        <p class="mb0">Bantu sesama entrepreneur untuk menikmati keuntungan spesial dan dapatkan uang tunai.</p>
        <img class="logo mtmin10 mb0" alt="vOffice Indonesia" src="images/logo-light.png"
             style="width: 300px;">
        <div class="row">
            <a class="btn btn-filled btn-lg mb40 mtmin10" href="vAmbassador.php" style="padding: 0px;"> See More </a>
        </div>

    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="col-sm-5 visible-xs visible-sm mb0">
            <h4 class="uppercase text-left mt28 mb16 bold justify"> Sampaikan Pendapat Anda!</h4>
            <hr class="title-breaker left">
            <img class="mb-xs-24 text-center mb0" src="images/photo-new.JPG">
        </div>
        <div class="col-sm-7" style="margin-bottom: -6%;">
            <div class="cards">
                <div class="col-sm-6 col-xs-12">
                    <div class="card image-cursor">
                        <img src="images/feedback/idea.jpeg">
                        <div class="card-title">
                            <h2 class="mb20 text-center">
                                Idea
                            </h2>
                            <div class="text-center">
                                <a href="#" class="btn padding-1 text-center" data-toggle="modal"
                                   data-target="#idea">Tell Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="card image-cursor">
                        <img src="images/feedback/feedback.jpeg">
                        <div class="card-title">
                            <h2 class="mb20 text-center">
                                Feedback
                            </h2>
                            <div class="text-center">
                                <a href="#" class="btn padding-1" data-toggle="modal"
                                   data-target="#feedback">Tell Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="card image-cursor">
                        <img src="images/feedback/question.jpeg">
                        <div class="card-title">
                            <h2 class="text-center mb20">
                                Question
                            </h2>
                            <div class="text-center">
                                <a href="#" class="btn padding-1" data-toggle="modal"
                                   data-target="#question">Tell Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-xs-0 hidden-xs" style="margin-bottom: 120px;">
                    <div class="card image-cursor">
                        <img src="images/feedback/complain.jpeg">
                        <div class="card-title">
                            <h2 class="text-center mb20">
                                Complain
                            </h2>
                            <div class="text-center">
                                <a href="#" class="btn padding-1" data-toggle="modal"
                                   data-target="#complain">Tell Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-xs-0 visible-xs">
                    <div class="card image-cursor">
                        <img src="images/feedback/complain.jpeg">
                        <div class="card-title">
                            <h2 class="text-center mb20">
                                Complain
                            </h2>
                            <div class="text-center">
                                <a href="#" class="btn padding-1" data-toggle="modal"
                                   data-target="#complain">Tell Us!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5 hidden-xs hidden-sm">
            <h4 class="uppercase text-left mt28 mb16 bold justify"> Sampaikan Pendapat Anda!</h4>
            <hr class="title-breaker left hidden-xs">
            <div class="image-slider slider-arrow-controls controls-inside">
                <ul class="slides">
                    <li>
                        <img class="mb8" alt="Screenshot" src="images/photo-new.JPG">
                    </li>
                    <li>
                        <img class="mb8" alt="Screenshot" src="images/slider_photos-02.jpg">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section>


<section class="ptmin5">
    <div class="container">
        <div class="col-md-12 mt-xs-24 text-center ptcontact">
            <div class="col-md-4">
                <div class="feature text-center boxed3">
                    <i class="ti-headphone-alt icon-lg inline-block color-primary mb16"></i>
                    <h5 class="uppercase mb5 mt5 lang" key="sectionone5">MELALUI TELEPON</h5>
                    <p class="lang  color-black" key="sectionone6">
                        Anda dapat menghubungi kami kapan saja di <a href="tel:+622129222999"
                                                                     class="color-primary bold">+6221 2922
                            2999</a> selama jam kerja. Customer Service kami akan siap membantu Anda.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature text-center boxed3">
                    <i class="ti-email icon-lg inline-block color-primary mb16"></i>
                    <h5 class="uppercase mb5 lang" key="sectionone7">MELALUI EMAIL</h5>
                    <p class="lang  color-black" key="sectionone8">
                        Anda juga bisa mengirimkan email ke <span class="color-primary bold">hello@voffice.co.id</span>.
                        Kami akan membalas email Anda secepatnya.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature text-center boxed3">
                    <img src="images/logo-whatsapp.png" style="width: 35%;">
                    <h5 class="uppercase mb5 lang" key="sectionone9">MELALUI WHATSAPP</h5>
                    <p class="lang  color-black" key="sectionone10">
                        Dengan mengesave no kami, anda akan cepat dan mudah menghubungi kami secara personal
                                   <span class="color-primary bold">081299327744

                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="bg-ungu" style="background-color: #782747;">
    <div class="row2">

        <div class="col-sm-offset-2 col-sm-8 text-center">
            <h4 class="text-center color-white"><i>"Be Thankful for customers who complain
                    because you still have the opportunity to make them happy"</i></h4>
        </div>
        <div class="col-sm-2 text-center">
            <img src="images/icons_crm-08.png" style="width: 150px;">
        </div>

    </div>
</section>


<!--=======================================Idea========================================-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="idea" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg mb-xs-64">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header clearfix">
                <button class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                    <span class="sr-only">
                        Close
                    </span>
                </button>
                <h5 class="modal-title text-center bold pt24" id="myModalLabel">
                    IDEA
                </h5>
                <p class="text-center mb0" style="margin-bottom:0;">
                    I will help you anytime </p>
                <p class="text-center bold mb0">
                        <span class="fa fa-whatsapp mb16">
                        </span>
                    Whatsapp Number :
                    <a href="tel:+6281299327744">
                        0812 9932 7744
                    </a>
                </p>
                <form class="form-email"
                      data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <input type="text" name="ip" value="<?= $user_ip; ?>" hidden>
                    <input type="text" name="idea_form" hidden="hidden" value="idea_form"
                           id="idea_form">
                    <input type="text" class="validate-required" name="name" placeholder="Name">
                    <input type="text" class="validate-required" name="phone" placeholder="Phone">
                    <input type="text" class="validate-required validate-email" name="email"
                           placeholder="Email Address">
                        <textarea class="validate-required" name="message" rows="4"
                                  placeholder="Message"></textarea>
                    <button type="submit" class="lang" key="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=======================================End Of Modal Form========================================-->


<!--=======================================Feedback========================================-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="feedback" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg mb-xs-64">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header clearfix">
                <button class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                    <span class="sr-only">
                        Close
                    </span>
                </button>
                <h5 class="modal-title text-center bold pt24" id="myModalLabel">
                    Feedback
                </h5>
                <p class="text-center mb0" style="margin-bottom:0;">
                    I will help you anytime </p>
                <p class="text-center bold mb0">
                        <span class="fa fa-whatsapp mb16">
                        </span>
                    Whatsapp Number :
                    <a href="tel:+6281299327744">
                        0812 9932 7744
                    </a>
                </p>
                <form class="form-email"
                      data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <input type="text" name="ip" value="<?= $user_ip; ?>" hidden>
                    <input type="text" name="feedback_form" hidden="hidden" value="feedback_form"
                           id="feedback_form">
                    <input type="text" class="validate-required" name="name" placeholder="Name">
                    <input type="text" class="validate-required" name="phone" placeholder="Phone">
                    <input type="text" class="validate-required validate-email" name="email"
                           placeholder="Email Address">
                        <textarea class="validate-required" name="message" rows="4"
                                  placeholder="Message"></textarea>
                    <button type="submit" class="lang" key="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=======================================End Of Modal Form========================================-->


<!--=======================================Question========================================-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="question" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg mb-xs-64">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header clearfix">
                <button class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                    <span class="sr-only">
                        Close
                    </span>
                </button>
                <h5 class="modal-title text-center bold pt24" id="myModalLabel">
                    Question
                </h5>
                <p class="text-center mb0" style="margin-bottom:0;">
                    I will help you anytime </p>
                <p class="text-center bold mb0">
                        <span class="fa fa-whatsapp mb16">
                        </span>
                    Whatsapp Number :
                    <a href="tel:+6281299327744">
                        0812 9932 7744
                    </a>
                </p>
                <form class="form-email"
                      data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <input type="text" name="ip" value="<?= $user_ip; ?>" hidden>
                    <input type="text" name="question_form" hidden="hidden" value="question_form"
                           id="question_form">
                    <input type="text" class="validate-required" name="name" placeholder="Name">
                    <input type="text" class="validate-required" name="phone" placeholder="Phone">
                    <input type="text" class="validate-required validate-email" name="email"
                           placeholder="Email Address">
                        <textarea class="validate-required" name="message" rows="4"
                                  placeholder="Message"></textarea>
                    <button type="submit" class="lang" key="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=======================================End Of Modal Form========================================-->


<!--=======================================Complain========================================-->
<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="complain" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-lg mb-xs-64">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header clearfix">
                <button class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                    <span class="sr-only">
                        Close
                    </span>
                </button>
                <h5 class="modal-title text-center bold pt24" id="myModalLabel">
                    Complain
                </h5>
                <p class="text-center mb0" style="margin-bottom:0;">
                    I will help you anytime </p>
                <p class="text-center bold mb0">
                        <span class="fa fa-whatsapp mb16">
                        </span>
                    Whatsapp Number :
                    <a href="tel:+6281299327744">
                        0812 9932 7744
                    </a>
                </p>
                <form class="form-email"
                      data-success="Thanks for your submission, we will be in touch shortly."
                      data-error="Please fill all fields correctly.">
                    <input type="text" name="ip" value="<?= $user_ip; ?>" hidden>
                    <input type="text" name="complain_form" hidden="hidden" value="complain_form"
                           id="complain_form">
                    <input type="text" class="validate-required" name="name" placeholder="Name">
                    <input type="text" class="validate-required" name="phone" placeholder="Phone">
                    <input type="text" class="validate-required validate-email" name="email"
                           placeholder="Email Address">
                        <textarea class="validate-required" name="message" rows="4"
                                  placeholder="Message"></textarea>
                    <button type="submit" class="lang" key="send">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--=======================================End Of Modal Form========================================-->

<!--Magnific Pop Up-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
<script src="js/wow.js"></script>
<script>
    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            callback: function (box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
            }
        }
    );
    wow.init();
</script>
<script src="js/swiper.js" type="text/javascript"></script>


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

</body>
</html>