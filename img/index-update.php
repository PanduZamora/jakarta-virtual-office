<?php
session_start();

include 'adminClass.php';
$adminclass = new adminClass;
if ($_GET['ref'] != '') {
    if ($_SESSION["referral"] == '') {
        $_SESSION["referral"] = $_GET['ref'];
    }
    $result = $adminclass->reConnectClientClassDB();
    $result = $adminclass->SearchByNumber($_SESSION["referral"]);
    $row = mysql_fetch_assoc($result);
    $row['visitors'] = $row['visitors'] + 1;
    $result = $adminclass->updateClientBarcodeVisitor($row['visitors'], $_SESSION["referral"]);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Virtual Office Jakarta | Sewa Kantor Jakarta | Serviced Office - vOffice Indonesia</title>

    <meta name="description" content="Virtual Office Jakarta dan Sewa Kantor Jakarta | Office Space for Rent in Jakarta
    | Meeting Room | Company Incorporation, Pembuatan PT, CV & PMA | Dedicated Phone and Fax number,
    hanya di vOffice Indonesia"/>

    <meta name="keywords" content="virtual office jakarta, indonesia, ruang kantor, office space,
serviced office, temporary office, shared office,
start business, cheap office, short term office, kantor virtual jakarta, sewa kantor, kantor murah, virtual
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
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/testimoni.css" rel="stylesheet" type="text/css" media="all"/>
     <link href="css/card.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700" rel="stylesheet" type="text/css">

    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name" : "vOffice",
      "url": "http://www.voffice.co.id",
      "logo": "http://voffice.co.id/jakarta-virtual-office/img/logo-voffice-dark.png",
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

<?php include("header.html") ?>

<div class="main-container">

    <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-100 mb-xs-0">
        <ul class="slides">
            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-09.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                                Tingkatkan citra perusahaan anda <br>  dengan Virtual Office</h2>
                            <h6 class="bold-h6 mb0 lang" key="sectionone2">Smarter Business | Better Life</h6>
                            <p class="mb10"> Gunakan Virtual Office untuk mengurangi biaya operasional dan melindungi hal-hal pribadi Anda.</p>
                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>
             <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-02.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                               Sambungan Wi-Fi & Smart TV <br> di seluruh Ruang Meeting</h2>
                            <h6 class="bold-h6 mb0 lang" key="sectionone2">Smarter Business | Better Life</h6>
                             <p class="mb10"> Ruang rapat kami berfasilitas lengkap dan berlokasi tepat di kawasan bisnis area</p>
                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-07.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb0" key="sectionone1">
                                22 Centers Indonesia, 41 Centers Dunia</h2>
                            <h5 class="mb30">Anda dapat menikmati fasilitas kami lebih dari 22 centers di indonesia <br> dan 41 centers yang tersebar di dunia</h5>
                            <h6 class="bold-h6 mb10 lang" key="sectionone2">Smarter Business | Better Life</h6>
                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-03.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                                Terhubung dengan lebih dari 35.000 <br> pemilik bisnis lainnya di platform online kami</h2>
                           <h6 class="bold-h6 mb10 lang" key="sectionone2">Smarter Business | Better Life</h6>

                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>

                <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-04.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                               Gunakan Virtual Office dan <br> potong biaya operasional anda hingga 50%</h2>
                            <h6 class="bold-h6 mb0 lang" key="sectionone2">Smarter Business | Better Life</h6>
                             <p class="mb10"> Gunakan Virtual Office untuk mengurangi biaya operasional dan anda bisa bekerja dimana asaja dan kapan saja.</p>

                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>

             <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-05.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                               Resepsionis handal dan <br> terlatih untuk menyambut tamu Anda</h2>
                            <h6 class="bold-h6 mb0 lang" key="sectionone2">Smarter Business | Better Life</h6>
                             <p class="mb10">  Resepsionis kami yang terlatih akan menerima telepon Anda, memilahnya dan memberi tahu Anda jika ada surat datang, menyambut tamu Anda </p>

                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>

                 <li class="image-bg pt-xs-120">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/header-06.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row text-center">
                        <div class="col-md-10 col-md-offset-1 mt88 mt-xs-30">
                            <h2 class="mb-xs-16 lang bold mb30" key="sectionone1">
                              Sistem pemesanan Ruang Meeting <br> secara real-time</h2>
                             <h6 class="bold-h6 mb10 lang" key="sectionone2">Smarter Business | Better Life</h6>

                            <a class="btn btn-lg mb-xs-8 lang" href="#start" key="sectionone4">Start Exploring</a>
                            <p class="visible-xs">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>



<!--    <section>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-4 mb-xs-32 text-center">-->
<!--                    <a href="virtual-office-jakarta-timur.php"><img src="images/voffice-jakarta-timur.jpg" class="mb8"></a>-->
<!--                    <a class="btn btn-lg btn-filled" href="virtual-office-jakarta-timur.php">Get Early Bird Promotion!</a>-->
<!--                </div>-->
<!--                <div class="col-md-4 mb-xs-32 text-center">-->
<!--                    <a href="office-satrio-tower.php"><img src="images/satrio-tower.jpg" class="mb8"></a>-->
<!--                    <a class="btn btn-lg btn-filled" href="office-satrio-tower.php">Get Early Bird Promotion!</a>-->
<!--                </div>-->
<!--                <div class="col-md-4 text-center">-->
<!--                    <a href="office-wisma-barito.php"><img src="images/wisma-barito.jpg" class="mb8"></a>-->
<!--                    <a class="btn btn-lg btn-filled" href="office-wisma-barito.php">Get Early Bird Promotion!</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


<!--    <section class="image-square mb-xs-8">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-12 text-center">-->
<!--                <h2 class="number bold text-ungu mb0 mt49min mt20">22</h2>-->
<!--                <h2 class="number bold text-ungu mb0">PRESTIGIOUS</h2>-->
<!--                <h4 class=" bold text-ungu mb0">LOCATIONS</h4>-->
<!--                <h5 class=" bold text-ungu"> JAKARTA . SURABAYA . BALI </h5>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <img src="img/vofficelocation.png">-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <a name="start"></a>



    <section class="image-square left height-home" style="margin-top: -20px;">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/vo_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="virtual-office-indonesia-plans.php"><h2 class="mb16 mb-xs-16 color-primary"><span class="bold">Virtual Office</span>
                </h2></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="number lang" key="sectiontwo1">Mulai dari IDR<span class="number bold"> 600.000</span>/bln
            </h4>
            <h6 class="uppercase mb16 lang" key="sectiontwo2">Hemat Uang & Waktu</h6>
            <p class="mb40 lang" key="sectiontwo3">
                Anda dapat bekerja dari rumah, luar negeri atau pun lokasi lain dan tetap menjaga kinerja dan
                image Anda sebagai kantor profesional serta alamat bisnis bergengsi di Jakarta.
            </p>
            <a class="btn-lg btn-filled btn" href="virtual-office-indonesia-plans.php">VIEW PLAN</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square right height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/so_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="serviced-office-indonesia.php"><h2 class="mb16 mb-xs-16 color-primary"><span class="bold">Serviced Office</span>
                </h2></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="lang number" key="sectionthree1">Mulai dari IDR<span class="number bold"> 2,5 Juta</span>/bln
            </h4>
            <h6 class="uppercase mb16 lang" key="sectionthree2">Siap digunakan<br class="visible-xs"> kapan saja
                Anda inginkan</h6>
            <p class="mb40 lang" key="sectionthree3">
                Solusi kantor yang profesional, sangat fleksibel dan hemat biaya bagi entrepreneur dan pemilik
                bisnis, terdapat di Jakarta, Surabaya, Bali dan 38 Center lainnya di seluruh dunia.
            </p>
            <!--            <a class="btn-lg btn-filled btn mb24" href="serviced-office-indonesia.php">VIEW SERVICE DETAILS</a>-->
            <a class="btn-lg btn-filled btn" href="serviced-office-indonesia.php">VIEW SERVICE DETAILS</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>


    <section class="image-square left height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/izin_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="indonesia-company-registration.php"><h2 class="mb16 mb-xs-16 color-primary bold lang"
                                                             key="sectionfour1">Pembuatan PT, CV & PMA</h2></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="lang number" key="sectionfour3">Mulai dari IDR<span class="number bold"> 4,3 Juta</span>
            </h4>
            <h6 class="uppercase mb16">Professional, Affordable & Straight-Forward</h6>
            <p class="mb40 lang" key="sectionfour2">
                Layanan Pembuatan PT untuk penduduk Indonesia lokal & luar negeri.
            </p>
            <a class="btn-lg btn-filled btn" href="indonesia-company-registration.php">VIEW PLAN</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square right height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/eventspace_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="indonesia-company-registration.php"><h2 class="mb16 mb-xs-16 color-primary bold lang"
                                                             key="sectionfour1">Event Space</h2></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="lang number" key="sectionfour3">Mulai dari IDR<span class="number bold"> 750.000/jam</span>
            </h4>
            <h6 class="uppercase mb16">LEBIH DARI 300 ACARA SUKSES DIGELAR DI EVENT SPACE KAMI</h6>
            <p class="mb40 lang" key="sectionfour2">
                Event Space di Jakarta untuk segala Kebutuhan Acara Anda.
            </p>
            <a class="btn-lg btn-filled btn" href="event-space.php">MORE DETAILS</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square left height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/mr_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="meeting-room-for-rent.php"><h3 class="mb16 mb-xs-16 color-primary bold">Meeting
                                    Room</h3></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="number">Mulai dari IDR<span class="number bold"> 250 Ribu/jam</span>
            </h4>
            <h6 class="uppercase mb16">First Impression Matters</h6>
            <p class="mb40">
                Ruang rapat kami berfasilitas lengkap dan berlokasi tepat di kawasan bisnis area.
                Membuat pilihan sempurna untuk pertemuan, presentasi, diskusi untuk mensupport bisnis anda.
            </p>
            <a class="btn-lg btn-filled btn" href="meeting-room-for-rent.php">View Plan</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

     <section class="image-square right height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/fw_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="flexible-workspace.php"><h3 class="mb16 mb-xs-16 color-primary bold">Flexible
                                    Workspace</h3></a>
                            <hr class="title-breaker left hidden-xs">
                            <h4 class="number">Mulai dari IDR<span class="number bold"> 1,5 Juta</span>
                            </h4>
                            <h6 class="uppercase mb16">Work from anywhere you want.</h6>
                            <p class="mb40">
                                Access to any open seat in the common area. Just show up, set up shop, and get to work.
                            </p>
                            <a class="btn-lg btn-filled btn"
                               href="http://voffice.co.id/jakarta-virtual-office/flexible-workspace.php">See more
                                detail</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square left height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/new/haki_dea.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="jasa-daftar-merek.php">
            <h3 class="mb16 mb-xs-16 color-primary bold">Daftar Merek
                                    Dagang, Hak Cipta & Hak Paten</h3></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="number">Mulai dari IDR<span class="number bold"> 1,8 Juta</span></h4>
            <h6 class="uppercase mb16">Murah, Mudah, Terpercaya</h6>
            <p class="mb40">The easy way to protect your brand.</p>
            <a class="btn-lg btn-filled btn" href="jasa-daftar-merek.php">See more detail</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>


    <section>
            <div class="row">
                <div class="col-sm-4">
                    <div class="my-2 mx-auto p-relative bg-white shadow-1 ungu-hover" style=" overflow: hidden; border-radius: 1px;">
                            <img src="img/new/enterpeneur.jpg" class="d-block w-full">
                        <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                          Enterpeneur
                        </p>

                        <a href="smarter-business.php"><h4 class="mb16 mb-xs-16 color-primary"><span class="bold">Apakah anda ingin menjadi entrepreneur yang lebih sukses? </span></h4>
                        </a>
                        <hr class="title-breaker left hidden-xs">
                        <h5 class="mb-xs-16 number">Kami dapat membantu Anda mencapai kesuksesan yang lebih besar.</strong></h5>
                        <p>
                            Banyak orang bekerja keras, tapi hanya sedikit yang menjadi sukses. Karena tidak disertai dengan bekerja dengan "smart".
                        </p>
                        <a class="btn btn-lg btn-filled" href="smarter-business.php">DISCOVER MORE</a>
                        <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>

                      </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="my-2 mx-auto p-relative bg-white shadow-1 ungu-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/new/BD.jpg" class="d-block w-full">
                      <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                          Business Partners
                        </p>

                         <a href="business-partner.php"><h4 class="mb16 mb-xs-16 color-primary bold">Jadi Rekan Bisnis Kami</h4></a>
                        <hr class="title-breaker left hidden-xs">
                        </h4>
                        <h5 class="mb-xs-16 number">dan dapatkan lebih dari  <strong syle="font-size: 68px;">Rp 20 juta per bulan!</strong></h5>
                        <p class="pb-3-5">
                           Bantu sesama entrepreneur dan bisnis lainnya berkembang. Beri tahu rekan Anda mengenai solusi bisnis pintar vOffice dan temukan cara baru dan mudah untuk mendapat imbalan yang besar!
                        </p>
                        <a class="btn btn-lg btn-filled" href="business-partner.php">I am Interested!</a>
                        <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="my-2 mx-auto p-relative bg-white shadow-1 ungu-hover" style="overflow: hidden; border-radius: 1px;">
                            <img src="img/new/CRM.jpg" class="d-block w-full">
                      <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                          Customer Relation Manager
                        </p>
                        <a target="_blank" href="http://feedback.voffice.co.id/"><h4 class="mb16 mb-xs-16 color-primary bold">Client Relationship Management</h4></a>
                        <hr class="title-breaker left hidden-xs">
                        <h5 class="mb-xs-16 number">Kami percaya bahwa setiap bisnis besar dibangun melalui persahabatan.</strong></h5>
                        <p class="pb-1-3">
                           Kami hadir untuk melayani Anda dan mengembangkan bisnis Anda. Tim kami yang berpengalaman akan selalu ada untuk membantu dan memenuhi kebutuhan bisnis Anda. 
                        </p>
                        <a class="btn btn-lg btn-filled" href="http://feedback.voffice.co.id/" target="_blank">READ MORE</a>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=6281299327744"><img src="img/wa-logo.png" width="50px"></a>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>


<!-- 
    <section class="image-square right height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/business_better.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="smarter-business.php"><h3 class="mb16 mb-xs-16 color-primary"><span class="bold">Apakah anda ingin menjadi entrepreneur yang lebih sukses? </span></h3>
            </a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="mb-xs-16 number">Kami dapat membantu Anda mencapai kesuksesan yang lebih besar.</strong></h4>
            <p>
                Banyak orang bekerja keras, tapi hanya sedikit yang menjadi sukses. Karena tidak disertai dengan bekerja dengan "smart".
            </p>
            <a class="btn btn-lg btn-filled" href="smarter-business.php">DISCOVER MORE</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square left height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/jabat_tangan.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a href="business-partner.php"><h2 class="mb16 mb-xs-16 color-primary bold">Jadi Rekan Bisnis Kami</h2></a>
            <hr class="title-breaker left hidden-xs">
            </h4>
            <h4 class="mb-xs-16 number">dan dapatkan lebih dari  <strong syle="font-size: 58px;">Rp 20 juta per bulan!</strong></h4>
            <p>
               Bantu sesama entrepreneur dan bisnis lainnya berkembang. Beri tahu rekan Anda mengenai solusi bisnis pintar vOffice dan temukan cara baru dan mudah untuk mendapat imbalan yang besar!
            </p>
            <a class="btn btn-lg btn-filled" href="business-partner.php">I am Interested!</a>
            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section>

    <section class="image-square right height-home">
        <div class="col-md-6 image mb40">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="img/crm.jpg">
            </div>
        </div>
        <div class="col-md-6 content">
            <a target="_blank" href="http://feedback.voffice.co.id/"><h2 class="mb16 mb-xs-16 color-primary bold">Client Relationship Management</h2></a>
            <hr class="title-breaker left hidden-xs">
            <h4 class="mb-xs-16 number">Kami percaya bahwa setiap bisnis besar dibangun melalui persahabatan.</strong></h4>
            <p>
                Client Relationship Management hadir untuk melayani Anda dan mengembangkan bisnis Anda. Tim kami yang berpengalaman akan selalu ada untuk membantu dan memenuhi kebutuhan bisnis Anda. Anda dapat menghubungi kami untuk memberikan saran, komentar dan keluhan kepada vOffice, dan tim CRM akan melakukan yang terbaik untuk membantu Anda.
            </p>
            <a class="btn btn-lg btn-filled" href="http://feedback.voffice.co.id/" target="_blank">READ MORE</a>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=6281299327744"><img src="img/wa-logo.png" width="50px"></a>
        </div>
    </section> -->
   <!--  <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb20">
                    <div class="card-what-serviced-office">
                        <center><img src="images/homepage/es.jpg" style="width:100%;" class="mb10"></center>
                        <div class="container-what-serviced-office pb5">
                            <a href="event-space.php"><h3 class="mb16 mb-xs-16 color-primary"><span class="bold">Event Space</span>
                                </h3>
                            </a>
                            <hr class="title-breaker left hidden-xs">
                            <h4 class="number lang" key="sectionseven1">Mulai dari IDR<span
                                    class="number bold"> 750.000</span>/jam
                            </h4>
                            <h6 class="uppercase mb16 number lang " key="sectionseven2">Lebih dari 300 Acara Sukses
                                Digelar di
                                Event Space Kami</h6>
                            <p class="mb40 lang" key="sectionseven3">
                                Event Space di Jakarta untuk segala Kebutuhan Acara Anda.
                            </p>
                            <a class="btn-lg btn-filled btn" href="event-space.php">MORE DETAILS</a>
                            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb20">
                    <div class="card-what-serviced-office">
                        <center><img src="images/homepage/vofficemeeting.jpg" style="width:100%;" class="mb10"></center>
                        <div class="container-what-serviced-office">
                            <a href="meeting-room-for-rent.php"><h3 class="mb16 mb-xs-16 color-primary bold">Meeting
                                    Room</h3></a>
                            <hr class="title-breaker left hidden-xs">
                            <h4 class="number">Mulai dari IDR<span class="number bold"> 250 Ribu/jam</span>
                            </h4>
                            <h6 class="uppercase mb16">First Impression Matters</h6>
                            <p class="mb40">
                                Ruang rapat kami berfasilitas lengkap dan berlokasi tepat di kawasan bisnis area.
                                Membuat pilihan
                                sempurna untuk pertemuan, presentasi, diskusi untuk mensupport bisnis anda.
                            </p>
                            <a class="btn-lg btn-filled btn" href="meeting-room-for-rent.php">View Plan</a>
                            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb20">
                    <div class="card-what-serviced-office">
                        <center><img src="images/flexi-desk/flexi-desk4.jpg" style="width:100%;"></center>
                        <div class="container-what-serviced-office pt5">
                            <a href="flexible-workspace.php"><h3 class="mb16 mb-xs-16 color-primary bold">Flexible
                                    Workspace</h3></a>
                            <hr class="title-breaker left hidden-xs">
                            <h4 class="number">Mulai dari IDR<span class="number bold"> 1,5 Juta</span>
                            </h4>
                            <h6 class="uppercase mb16">Work from anywhere you want.</h6>
                            <p class="mb40">
                                Access to any open seat in the common area. Just show up, set up shop, and get to work.
                            </p>
                            <a class="btn-lg btn-filled btn"
                               href="http://voffice.co.id/jakarta-virtual-office/flexible-workspace.php">See more
                                detail</a>
                            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb20">
                    <div class="card-what-serviced-office">
                        <center><img class="mb32" src="images/homepage/trademark-3.jpg" style="width:100%;"></center>
                        <div class="container-what-serviced-office">
                            <a href="jasa-daftar-merek.php"><h3 class="mb16 mb-xs-16 color-primary bold">Daftar Merek
                                    Dagang, Hak Cipta & Hak Paten</h3></a>
                            <hr class="title-breaker left hidden-xs">
                            <h4 class="number">Mulai dari IDR<span class="number bold"> 1,8 Juta</span>
                            </h4>
                            <h6 class="uppercase mb16">Murah, Mudah, Terpercaya</h6>
                            <p class="mb40">
                                The easy way to protect your brand.
                            </p>
                            <a class="btn-lg btn-filled btn" href="jasa-daftar-merek.php">See more detail</a>
                            <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

   <!--  <section>
        <div class="container">
            <div class="row mb40">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h4 class="bold uppercase lang" key="sectionfive1">Keuntungan Menjadi Anggota Virtual Office
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3">
                        <div class="left text-center">
                            <img src="img/material/meeting.png" style="margin-top: -10px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0 lang" key="sectionfive2">Promosikan</h6>
                            <p class="lang" key="sectionfive3">
                                Layanan atau bisnis Anda kepada anggota atau penyewa lain
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3">
                        <div class="left text-center">
                            <img src="img/material/daily.png" style="margin-top: -10px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0 lang" key="sectionfive4">Proyek</h6>
                            <p class="lang" key="sectionfive5">
                                Citra bisnis yang bergensi dan profesional
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3">
                        <div class="left text-center">
                            <img src="img/material/passport.png" style="margin-top: -10px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0 lang" key="sectionfive6">Ruang Meeting</h6>
                            <p class="lang" key="sectionfive7">
                                Tersedia di lebih dari 40 lokasi di seluruh dunia
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3">
                        <div class="left text-center">
                            <img src="img/material/receptionist.png" style="margin-top: -5px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0" key="sectionfive8">Resepsionis Profesional</h6>
                            <p class="lang" key="sectionfive9">
                                yang akan menjawab telepon atas nama perusahaan Anda
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3">
                        <div class="left text-center">
                            <img src="img/material/registered.png" style="margin-top: -10px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0 lang" key="sectionfive10">Virtual Office</h6>
                            <p class="lang" key="sectionfive11">
                                Anda dapat menjalankan bisnis dengan mudah dan santai.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="feature feature-3 mb40">
                        <div class="left text-center">
                            <img src="img/material/eventspace.png" style="margin-top: -10px">
                        </div>
                        <div class="right">
                            <h6 class="bold-h6 mb0 lang" key="sectionfive12">Hadirilah Acara-acara Kami</h6>
                            <p class="lang" key="sectionfive13">
                                Yang mendatangkan seluruh anggota virtual office dan serviced office setiap bulannya
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="fade-1-4">

            <div class="row">
                <div class="col-md-6">
                    <h4 class="bold mb0">[New Center] Centennial Tower</h4>
                    <p class="bold">vOffice - Smarter Business | Better Life</h4>
                    <div class="embed-responsive embed-responsive-16by9 mb16">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/irYZFcKbuGs?rel=0"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="bold"> &nbsp; </h4>
                    <img src="img/voffice-business.png">
                </div>
                <div class="col-md-12 text-center mt-xs-32">
                    <a class="btn btn-lg btn-filled" href="virtual-office-indonesia-plans.php">See Our Virtual Office
                        Plan</a>
                    <a target="_blank" href="https://goo.gl/R7qE1D"><img src="img/wa-logo.png" width="50px"></a>
                </div>
            </div>

        </div>
    </section> -->

    <?php include("testimonials-new.html") ?>

    <?php include("footer.html") ?>

    <?php include("popup-promo.php") ?>

</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/countdown.min.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/scripts.js"></script>
<script src="js/language.js"></script>

<!--pop up-->
<script type="text/javascript">
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

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 866228023;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
             src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/866228023/?guid=ON&amp;script=0"/>
    </div>
</noscript>
</body>
</html>

