
<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>Thank you</title>

    <meta name="robots" content="index,follow"/>

    <meta name="Author" content="voffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/testimoni.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

</head>

<body>

<div class="nav-container">
    <?php include("header.html") ?>
</div>

<div class="main-container">

    <section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
        <ul class="slides">
            <li class="overlay image-bg pt-xs-160">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/bg-call-answering.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h1 class="mb16">Terima kasih telah bergabung menjadi mitra vOffice! </h1>
                            <h4 class="mb56">
                                Corporate Agent kami akan segera menghubungi anda
                            </h4>
                            <h2>Referensikan Sekarang?</h2>
                            <a href="#" data-toggle="modal" data-target="#popup" class="btn btn-filled">Ya</a>
                            <a href="https://voffice.co.id/jakarta-virtual-office/" class="btn">Nanti</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="popup" role="dialog" tabindex="-1">
      <div class="modal-dialog mb-xs-64">
        <div class="modal-content">
          <div class="modal-header clearfix">
            <button class="close mb0" data-dismiss="modal" type="button">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <h4 class="mb0 bold text-center color-black">Siapa yang ingin Anda referensikan?</h4>
          </div>
          <div class="modal-body form-body clearfix">
            <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
              <input type="text" name="referral2" hidden="hidden" value="referral2" id="referral2">

              <input type="text" class="validate-required" name="name" placeholder="Nama*">
              <input type="text" class="validate-required validate-email" name="email" placeholder="Alamat Email*">
              <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon / Whatsapp*">
              <div class="select-option mb10">
                  <i class="ti-angle-down"></i>
                  <select name="location" style="padding: 3%;" id="select-location">
                      <option disabled="" selected="" value="">Location</option>
                      <option value="office8">Office 8, Jakarta Selatan</option>
                      <option value="MR">Menara Rajawali, Jakarta Selatan</option>
                      <option value="CT">Centennial Tower, Jakarta Selatan</option>
                      <option value="MK">Menara Kuningan, Jakarta Selatan</option>
                      <option value="MT">Metropolitan Tower, Jakarta Selatan</option>
                      <option value="TCB">The CEO Building, Jakarta Selatan</option>
                      <option value="GS">Graha Surveyor, Jakarta Selatan</option>
                      <option value="TCT">The City Tower, Jakarta Pusat</option>
                      <option value="KT">Kencana Tower, Jakarta Barat</option>
                      <option value="GST">Grand Slipi Tower, Jakarta Barat</option>
                      <option value="K2T">Kirana 2 Tower, Jakarta Utara</option>
                      <option value="PIK">PIK Avenue, Jakarta Utara</option>
                      <option value="RM">Rawamangun, Jakarta Timur</option>
                      <option value="BSD">MyRepublic Plaza BSD, Tangerang</option>
                      <option value="BMT2">JAPFA Tower II, Surabaya</option>
                      <option value="IT">Intiland Tower, Surabaya</option>
                      <option value="SPAZIO">Spazio, Surabaya</option>
                      <option value="IBIS">Ibis Styles, Bali</option>
                      <option value="JH">Jimbaran Hub, Bali</option>
                      <option value="KIH">Kembali Innovation Hub, Bali</option>
                      <option value="honey-lady">Honey Lady, Jakarta Utara</option>
                      <option value="plaza-bekasi">Plaza Summarecon Bekasi, Bekasi</option>
                      <option value="mensana-tower">Mensana Tower, Cibubur</option>
                  </select>
              </div>
              <button id="submit-form" type="submit" name="submit" class="mt16">Confirm</button>

            </form>
          </div>
        </div>
      </div>
    </div>



</div>
<?php include("footer.html") ?>

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

<script>
    fbq('track', 'Lead');
</script>

</body>
</html>
