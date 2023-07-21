<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
   <title>Sewa Virtual Office vOffice | Gratis Pembuatan PT</title>

    <meta name="description"
          content="Sewa Virtual Office di vOffice GRATIS pembuatan PT, Daftar Sekarang juga dan dapatkan penawaran menarik dari vOffice "/>

    <meta name="robots" content="index,follow"/>
    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet"
          type="text/css">


</head>
<body>

<?php include("header-vopt.html") ?>

<div class="main-container">
        <a name="home"></a>
    <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-80 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/new/vo_dea.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-left">
                        <div class="col-md-10 mt88 mt-xs-30">
                            <a class="btn btn-lg btn-filled" href="#why">Contact Us!</a>
                            <!--                              <p class="small pb-xs-16 mb0">(Daftar sekarang juga dan dapatkan penawaran spesial dari vOffice)</p>-->
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <a name="why"></a>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature boxed3">
                        <h4 class="mb8 bold text-center color-black">Hubungi Kami</h5>
                            <p class="text-center mb32">Isi formulir di bawah ini untuk mendapatkan proposal penawaran dan kami akan segera menghubungi Anda. Terima kasih!</p>
                            <form  class="form-email"
                                  data-success="Thanks for your inquiries, we will be in touch to confirm shortly."
                                  data-error="Please fill all fields correctly.">
                                <input type="text" name="mail" hidden="hidden"
                                       value="mail"
                                       id="mail">
                                <input type="text" class="validate-required" name="nama" placeholder="Nama Lengkap*">
                                <input type="text" class="validate-required" name="form_field_2" placeholder="Nomor Telepon*">

                                <input type="text" class="validate-required validate-email" name="form_field_3"
                                       placeholder="Alamat Email*">

                                <textarea style="color: #0a0a0a" name="form_field_4" rows="4"
                                          placeholder="Message"></textarea>

                               <input type="text" name="url" value="<?=$actual_link;?>" hidden>

                                <button id="submit-form" type="submit" >Minta Proposal</button>
                            </form>
                    </div>
            </div>
        </div>
    </section>



<script src="js/jquery.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
<script src="js/language.js"></script>

<script type="text/javascript">
    
var $form = $('form.form-email'),
    url = 'https://script.google.com/macros/s/AKfycbygRcgb-41fMz5ItRLFGnmC0VU3aDkoDfcthtisCY1xqMpi55c/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serialize()
  }).success(
    $( "#submit-form" ).submit()
  )
});
</script>
</body>
</html>