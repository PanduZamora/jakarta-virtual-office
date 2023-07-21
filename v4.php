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
        <!-- <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/> -->
        <link href="css/theme-v3.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/> -->
        <link href="css/card.css" rel="stylesheet" type="text/css" media="all"/>
        <!-- <link href="css/owl.theme.min.css" rel="stylesheet" type="text/css" media="all"/> -->
        <!-- <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/> -->
        <link href="css/testimonial.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom-redesign.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" type="text/css" href="css/testi.css">
        <!--Magnific Pop Up-->
        <!-- <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/> -->
        <!--slide carousel-->
        <!-- <link href="plugins/carousel/css/owl.carousel.css" rel="stylesheet"> -->
        <!-- <link href="plugins/carousel/css/owl.theme.default.min.css" rel="stylesheet"> -->
        <link href="css/ourpartner.css" rel="stylesheet">
        
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
            <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-100 mb-xs-0 hidden-xs">
                <ul class="slides">
                    <li class="image-bg pt-xs-120">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/header-baru.jpg">
                        </div>
                        <div class="container v-align-transform">
                            <div class="row text-left">
                                <div class="col-md-6 mt88-lg mt-xs-30 ">
                                    <h1 class=" header-text font-size-75 mb10 mt-15">SMARTER</h1>
                                    <h1 class=" header-text font-size-65 mb10 ">BUSINESS</h1>
                                    <h1 class="text-style-1 font-size-65 mb10"> BETTER LIFE</h1>
                                    <!-- <h1 class="text-style-1 font-size-50 mb0"> LIFE</h1> -->
                                    <!-- <a class="btn btn-lg btn-filled mb-xs-8 lang" href="#start" key="sectionone4">Lihat Selengkapnya!</a> -->
                                    <p class="visible-xs">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0 visible-xs">
                <ul class="slides">
                    <li class="image-bg pt-xs-120">
                        <div class="background-image-holder">
                            <img alt="image" class="background-image" src="img/redesign/header.png">
                        </div>
                        <div class="container v-align-transform">
                            <div class="row text-left">
                                <div class="col-md-6 mt88-lg mt-xs-30 pt-xs-64 ">
                                    <h2 class="header-text mb0 bold">SMARTER</h2>
                                    <h2 class="header-text mb0 bold">BUSINESS</h2>
                                    <h2 class="text-style-1"> BETTER LIFE </h2>
                                    <p class="visible-xs">&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="bg-secondary">
                <div class="container">
                    <div class="row mb0-md mb16-xs">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <h2 class="About-us mb5 bold font-size-60"> About</h2>
                                <h2 class=" text-style-1 About-us font-size-60"> us </h2>
                            </div>
                            <div class="col-sm-6">
                                <h5 class="color-black mt-5 padding-5 text-justify" style="font-size: 20">vOffice adalah penyedia layanan kantor bersama seperti Virtual Office dan Serviced Office yang telah memiliki pengalaman lebih dari 15 tahun melayani lebih dari <b> 35.000 klien </b> dengan berbagai latar belakang di seluruh dunia.  </h5>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-sm-12 col-xs-12">
                                <img src="img/02-01.png">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row mb20">
                        <div class="col-sm-12">
                            <h1 class="text-center"> Our <span class="bold">Services</span></h1>
                            <div class="col-sm-6 mb10">
                                <div class="col-sm-12 card-plan custom-1">
                                    <div class="col-sm-7 col-xs-6">
                                        <h4 class="bold mb0 color-white"> Virtual Office</h4>
                                        <h5 class="bold mb10 color-white">Mulai Dari 600rb/bulan</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="color-white mb20-lg">Hemat Biaya Operasional dengan menggunakan alamat kantor virtual didukung layanan pendukung bisnis yang bisa dirasakan langsung seperti Meeting Room di seluruh Jakarta, Nomor Telepon Perusahaan, dan Juga Workstation dengan alamat legal di daerah strategis.  </h5>
                                        <a class="btn btn-white mb40-lg mb0-xs" href="virtual-office-plans-redesign.php">  Read More </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb20">
                                <div class="col-sm-12 card-plan custom-1">
                                    <div class="col-sm-7 col-xs-6">
                                        <h4 class="bold mb0 color-white"> Pembuatan PT & CV  </h4>
                                        <h5 class="bold mb10 color-white">Mulai Dari 4,9jt</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="color-white mb20-lg">Dapatkan legalitas bisnis dengan alamat virtual office atau alamat sendiri tanpa perlu lagi bersusah payah. <br><br><br><br>    </h5>
                                        <a class="btn btn-white mb40-lg mb0-xs" href="pembuatan-pt-cv.php">  Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb40">
                        <div class="col-sm-12">
                            <div class="col-sm-6 mb20">
                                <div class="col-sm-12 card-plan polos">
                                    <div class="col-sm-7 col-xs-6">
                                        <h4 class="bold mb0"> Serviced Office</h4>
                                        <h5 class="bold mb10">Mulai Dari 2,5jt</h5>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="mb10">Nikmati Kantor fisik siap pakai dengan biaya terjangkau di lokasi strategis dengan fasilitas lengkap untuk menunjang produktivitas Anda. <br><br></h5>
                                        <a class="btn btn-grey mb20-lg" href="serviced-office.php"> Read More </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb20">
                                <div class="col-sm-12 card-plan polos">
                                    <div class="col-sm-6 col-xs-6 mb20-lg">
                                        <h4 class="bold mb0"> Meeting Room</h4>
                                        <h5 class="bold mb10">Mulai Dari 250rb/jam</h5>
                                    </div>
                                    <div class="col-sm-12 mb0">
                                        <h5 class="mb10">Gunakan ruang pertemuan dengan infrastruktur teknologi lengkap & rasakan pengalaman yang dapat mengubah citra Anda di hadapan rekan bisnis ataupun investor. </h5>
                                        <a class="btn btn-grey mb0 mb20-xs" href="meeting-room-redesign.php">  Read More </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-12 text-center">
                        <h4 class="bold mb20"> Ingin Bisnis Anda lebih Berkembang?  <a class="btn btn-filled mb0 mb20-xs"> Lihat Disini </a> </h4>
                    </div> -->
                </div>
            </div>
        </section>
        <section class="pb0">
            <div class="container">
                <div class="row">
                    <div class="mb32 col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h1>Other <span class="bold">Services</span></h1>
                    </div>
                </div>
                <div class="row mb-xs-32 text-center">
                    <div class="col-md-4 col-sm-6">
                        <a href="call-answering-redesign.php">
                            <div class="image-caption">
                                <img alt="Captioned Image" src="img/new/call-answering.jpg" />
                                <div class="caption">
                                    <h4 class="btn btn-white2">Call Answering</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="accounting-and-bookkeeping-redesign.php">
                            <div class="image-caption">
                                <img alt="Captioned Image" src="img/new/informasikan.jpg" />
                                <div class="caption">
                                    <h4 class="btn btn-black">Accounting & Bookeeping</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="hak-cipta.php">
                            <div class="image-caption cast-shadow mb-xs-32">
                                <img alt="Captioned Image" src="img/new/haki_dea.jpg" />
                                <div class="caption">
                                    <h4 class="btn btn-white">Hak Cipta</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb40">
                        <h1> vOffice <span class="bold"> Locations </span> </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 mb20">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/website-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Menara Rajawali</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Mega Kuningan</p>
                            <p class="text-center padding-left-10 mb10 color-grey">145 sqm l Occupancy Rate 50%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.276935655003!2d106.82422341426887!3d-6.227171762718574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3fb2d546e7b%3A0x78d76147a4d14d67!2sMenara+Rajawali%2C+Jl.+Dr.Ide+Anak+Agung+Gde+Agung%2C+Kuningan+Tim.%2C+Kecamatan+Setiabudi%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12950!5e0!3m2!1sid!2sid!4v1497263461687"
                                width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/my republic plaza-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> My Republic Plaza</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">BSD City</p>
                            <p class="text-center padding-left-10 mb10 color-grey">700 sqm l Occupancy Rate 85.7%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6984664969123!2d106.65080811409233!3d-6.303292163441652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbe33e162367%3A0xb1564e50cd7d8f82!2svOffice+-+My+Republic+Plaza+BSD!5e0!3m2!1sen!2sid!4v1550201652162" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/the city tower-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> The City Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">M.H Thamrin</p>
                            <p class="text-center padding-left-10 mb10 color-grey">280 sqm l Occupancy Rate 100%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4875681442786!2d106.82148281409128!3d-6.199223562454807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f41f2b24b18b%3A0xb5cb3eba60efb71e!2sThe+City+Tower!5e0!3m2!1sen!2sid!4v1550204109827" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/graha surveyor-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Graha Surveyor</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Gatot Subroto</p>
                            <p class="text-center padding-left-10 mb10 color-grey">450 sqm l Occupancy Rate 46%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1856741415572!2d106.83029121409166!3d-6.239242262832198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c2f706cbd1%3A0xb71ad8cf236707f0!2sGraha+Surveyor+Indonesia%2C+Jl.+Gatot+Subroto+No.Kav+56%2C+RT.1%2FRW.4%2C+Kuningan+Tim.%2C+Kecamatan+Setiabudi%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12950!5e0!3m2!1sen!2sid!4v1550204356692" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 mb20">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/bumimandiri-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Bumi Mandiri 1</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Surabaya</p>
                            <p class="text-center padding-left-10 mb10 color-grey">123 sqm l Occupancy Rate 20%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.727122135425!2d112.74004916427948!3d-7.271860894751126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbde7e2f2929%3A0x320ffc7ec8ab3e9a!2sGedung+Bumi+Mandiri%2C+Jl.+Basuki+Rahmat+No.129-137%2C+Embong+Kaliasin%2C+Genteng%2C+Kota+SBY%2C+Jawa+Timur+60271!5e0!3m2!1sen!2sid!4v1550213828905" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/office8-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Office 8</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">SCBD</p>
                            <p class="text-center padding-left-10 mb10 color-grey">260 sqm l Occupancy Rate 83.3%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2634377920263!2d106.8036749142727!3d-6.228958495491012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14535b4d743%3A0x65197cc44b2b8f00!2sOffice+8!5e0!3m2!1sen!2sid!4v1550214202710" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/menarakuningan-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Menara Kuningan</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Rasuna Said</p>
                            <p class="text-center padding-left-10 mb10 color-grey">500 sqm l Occupancy Rate 61%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.342734887404!2d106.82840391427256!3d-6.218454495498495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f78ee4ad65%3A0x99e5116c9ba1e0a1!2sMenara+Kuningan%2C+Jl.+H.+R.+Rasuna+Said+No.kav+5%2C+RT.6%2FRW.7%2C+Kuningan%2C+Karet+Kuningan%2C+Kecamatan+Setiabudi%2C+Kota+Jakarta+Selatan%2C+Daerah+Khusus+Ibukota+Jakarta+12940!5e0!3m2!1sen!2sid!4v1550214317853" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/theceobuilding-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> The CEO Building</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">TB.Simatupang</p>
                            <p class="text-center padding-left-10 mb10 color-grey">350 sqm l Occupancy Rate 77.8%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.784792569745!2d106.79515531427303!3d-6.2919907954460825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1fbc3922135%3A0xdbf47ca1041837de!2sThe+CEO+Building+(Cilandak+Executive+Office)!5e0!3m2!1sen!2sid!4v1550214727027" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 mb20">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/grandslipitower-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Grand Slipi Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Slipi</p>
                            <p class="text-center padding-left-10 mb10 color-grey">300 sqm l Occupancy Rate 62%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.475713174431!2d106.79638391427247!3d-6.200799895511071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f74d266fb6bf%3A0xc3a3e8d294fe213a!2sGrand+Slipi+Tower!5e0!3m2!1sen!2sid!4v1550214946789" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/spazio-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Spazio</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Surabaya</p>
                            <p class="text-center padding-left-10 mb10 color-grey">60 sqm l NA</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.5655394161513!2d112.67486771427967!3d-7.290169894738225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fd4c528c5dc1%3A0x51fcfac626962263!2sSpazio+Tower!5e0!3m2!1sen!2sid!4v1550215084499" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/kencanatower-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Kencana Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Kebon Jeruk</p>
                            <p class="text-center padding-left-10 mb10 color-grey">235 sqm l Occupancy Rate 81.8%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4965266978893!2d106.75984011427248!3d-6.198032095513029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f71889109ddb%3A0xb722838dbf12f8f4!2sKencana+Tower%2C+Jl.+Meruya+Ilir+Raya+No.88%2C+RT.1%2FRW.5%2C+Meruya+Utara%2C+Kembangan%2C+Kota+Jakarta+Barat%2C+Daerah+Khusus+Ibukota+Jakarta+11620!5e0!3m2!1sen!2sid!4v1550215786209" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/kiranatwotower-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Kirana Two Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Kelapa Gading</p>
                            <p class="text-center padding-left-10 mb10 color-grey">450 sqm l Occupancy Rate 71%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.743399787353!2d106.91216771427226!3d-6.165108295536507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ad2eef61e0f%3A0xcc11b45554e76f6f!2sKirana+Two+Office+Tower!5e0!3m2!1sen!2sid!4v1550215952095" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6 mb20">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/cetennial-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Centennial Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Gatot Subroto</p>
                            <p class="text-center padding-left-10 mb10 color-grey">1200 sqm l Occupancy Rate 90.4%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2534913434215!2d106.8186822142727!3d-6.23027479549008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e25353c7bb%3A0x6b9e37a743c4f59f!2sCentennial+Tower!5e0!3m2!1sen!2sid!4v1550216095129" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/vofficeeast-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> vOffice East</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Rawamangun</p>
                            <p class="text-center padding-left-10 mb10 color-grey">700 sqm l Occupancy Rate 58%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.502186062309!2d106.88860581427245!3d-6.197279295513574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ada7e6943d%3A0xde3f1cd059b28685!2sVirtual+Office+Jakarta+-+vOffice+East+Rawamangun!5e0!3m2!1sen!2sid!4v1550217385087" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/bsdwingb-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> My Republic Plaza 2</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">BSD City</p>
                            <p class="text-center padding-left-10 mb10 color-grey">700 sqm l Occupancy Rate 100%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6984257317627!2d106.65080811427308!3d-6.3032974954380805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbe33e162367%3A0xb1564e50cd7d8f82!2svOffice+-+My+Republic+Plaza+BSD!5e0!3m2!1sen!2sid!4v1550217668475" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/bumimandiri2-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Bumi Mandiri 2</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Surabaya</p>
                            <p class="text-center padding-left-10 mb10 color-grey">384 sqm l Occupancy Rate 53.84%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.726784547616!2d112.74040651427954!3d-7.271899194751133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdc2fbf4b37%3A0xb11b8227858a75ad!2sBumi+Mandiri+Tower+II+Surabaya!5e0!3m2!1sen!2sid!4v1550217873386" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/intilandtower-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Intiland Tower</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Surabaya</p>
                            <p class="text-center padding-left-10 mb10 color-grey">60 sqm l Occupancy Rate 25%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.716707222109!2d112.74064141427948!3d-7.2730423947503064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f960c2263c37%3A0x893da17820826fa2!2sIntiland+Tower+Surabaya!5e0!3m2!1sen!2sid!4v1550219245542" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/jimbaranhub-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Jimbaran Hub</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Bali</p>
                            <p class="text-center padding-left-10 mb10 color-grey">90 sqm l NA</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.923546860701!2d115.1475881142913!3d-8.793253393684601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244e6f079e111%3A0x139ed292a268c475!2sJimbaran+HUB!5e0!3m2!1sen!2sid!4v1550219469162" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/ibisstyle-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Ibis Style</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Bali</p>
                            <p class="text-center padding-left-10 mb10 color-grey">96 sqm l NA</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.0417338253956!2d115.22236931429129!3d-8.782143993692344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2430f68571fcd%3A0xb5f0bbd6ef9ea3bd!2sIbis+Styles+Bali+Benoa!5e0!3m2!1sen!2sid!4v1550219811705" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <a href="" target="_blank"><div class="col-sm-12 card-blog padding-0">
                            <img src="img/gedung/centennialtower 2-15.jpg">
                            <h5 class="padding-left-10 padding-top-10 bold mb0 text-center"> Centennial Tower 2</h5>
                            <p class="padding-left-10 mb0 text-center color-grey">Gatot Subroto</p>
                            <p class="text-center padding-left-10 mb10 color-grey">1200 sqm l Occupancy Rate 72.7%</p>
                            <div class="hr-custom"></div>
                            <div class="iframe-container mb24">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2534913434215!2d106.8186822142727!3d-6.23027479549008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e25353c7bb%3A0x6b9e37a743c4f59f!2sCentennial+Tower!5e0!3m2!1sen!2sid!4v1550220063645" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div> </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container">
                <div class="row mb16 mb-xs-24">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                        <h1>Video <span class="bold">Tour</span></h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="local-video-container mb16">
                            <div class="image-tile inner-title title-center text-center">
                                <img alt="Pic" src="img/anywhere-place.jpg" />
                                <div class="title">
                                    <div class="modal-container">
                                        <div class="play-button btn-modal inline"></div>
                                        <div class="foundry_modal no-bg">
                                            <iframe data-provider="youtube" data-video-id="lZy1HxHMURo" data-autoplay="1"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb40 text-center">Rufino Pacific Tower</h4>
                    </div>
                    <div class="col-sm-4">
                        <div class="local-video-container mb16">
                            <div class="image-tile inner-title title-center text-center">
                                <img alt="Pic" src="img/anywhere-place.jpg" />
                                <div class="title">
                                    <div class="modal-container">
                                        <div class="play-button btn-modal inline"></div>
                                        <div class="foundry_modal no-bg">
                                            <iframe data-provider="youtube" data-video-id="okcXfHaMPA0" data-autoplay="1"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb40 text-center">Fort Legend Tower</h4>
                    </div>
                    <div class="col-sm-4">
                        <div class="local-video-container mb16">
                            <div class="image-tile inner-title title-center text-center">
                                <img alt="Pic" src="img/anywhere-place.jpg" />
                                <div class="title">
                                    <div class="modal-container">
                                        <div class="play-button btn-modal inline"></div>
                                        <div class="foundry_modal no-bg">
                                            <iframe data-provider="youtube" data-video-id="l0uf6lkA7Ks" data-autoplay="1"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb40 text-center">One Global Place</h4>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mb40">
                    <div class="col-sm-10 col-sm-offset-1 text-center">
                        <h1>Keuntungan Menjadi <span class="bold">Client vOffice</span></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 01-01-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Promosikan</h6>
                                <p>
                                    Layanan atau bisnis Anda kepada anggota atau penyewa lain.
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 02-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Proyek</h6>
                                <p>
                                    Citra bisnis yang bergensi dan profesional
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 03-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Ruang Meeting</h6>
                                <p>
                                    Tersedia di lebih dari 40 lokasi di seluruh dunia
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 04-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Resepsionis Profesional</h6>
                                <p>
                                    Yang akan menjawab telepon atas nama perusahaan Anda
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 05-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Virtual Office</h6>
                                <p>
                                    Anda dapat menjalankan bisnis dengan mudah dan santai
                                </p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="feature feature-3 mb40">
                            <div class="left text-center">
                                <img src="img/keuntungan/keuntungan icon 06-01.png">
                            </div>
                            <div class="right">
                                <h6 class="bold-h6 mb0">Hadirilah Acara-acara Kami </h6>
                                <p>
                                    Yang mendatangkan seluruh anggota virtual ofﬁce dan serviced ofﬁce setiap bulannya
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-center m-auto">
                        <h1 class="text-center uppercase">People <img src="img/people love voffice-01.png"> vOffice</h1>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/g.jpeg" alt=""></div>
                                    <p class="testimonial">The workspace is really cool and comfy with its formal casual concept. The representatives and staffs of vOffice are nice, friendly and skillful, such professional work partners.</p>
                                    <p class="bold"><b>Mr. Mario Arandhita</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/h.jpeg" alt=""></div>
                                    <p class="testimonial">The workspace is really cool and comfy with its formal casual concept. The representatives and staffs of vOffice are nice, friendly and skillful, such professional work partners.</p>
                                    <p class="bold"><b>Mrs. Maria Prihartanti</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/i.jpeg" alt=""></div>
                                    <p class="testimonial">The workspace is really cool and comfy with its formal casual concept. The representatives and staffs of vOffice are nice, friendly and skillful, such professional work partners.</p>
                                    <p class="bold"><b>Mr. M. Yusuf</b></p>
                                </div>
                                <div class="item carousel-item active">
                                    <div class="img-box"><img src="img/a.png" alt=""></div>
                                    <p class="testimonial"> Recommended 5 star office facilities and services! vOffice has clean environment with affordable price for those who want to start new business!</p>
                                    <p class="bold"><b>Mr. Santo</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/b.png" alt=""></div>
                                    <p class="testimonial">Since I joined vOffice on august 2016 and became a client in Grand Slipi Tower I always feel comfortable with the clean and quiet environment. The Customer Service is really friendly and skillful.</p>
                                    <p class="bold"><b>Mrs. Nunu</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/c.png" alt=""></div>
                                    <p class="testimonial">vOffice, is an affordable working space with friendly and professional staff. If you need assistance, all you have to do is ask and they will help you the best they can. It's my home away from home.</p>
                                    <p class="bold"><b>Mrs. Asti</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/e.png" alt=""></div>
                                    <p class="testimonial">So far, vOffice has given excellent service. Everybody is friendly and nice, I have zero complaint. Keep up the good work!</p>
                                    <p class="bold"><b>Mrs. Maharani</b></p>
                                </div>
                                <div class="item carousel-item">
                                    <div class="img-box"><img src="img/f.png" alt=""></div>
                                    <p class="testimonial">The workspace is really cool and comfy with its formal casual concept. The representatives and staffs of vOffice are nice, friendly and skillful, such professional work partners.</p>
                                    <p class="bold"><b>Mr. Iswarjit Sing</b></p>
                                </div>
                            </div>
                            <!-- Carousel controls -->
                            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center uppercase">Follow <img src="img/instagram-14.png"> vOffice</h1>
                        <div>
                            <iframe src="//lightwidget.com/widgets/b45c3d9c8bdd56eaa2f0ca46f64773f9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb40">
                        <h1> Our <span class="bold"> Client </span> </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mb20">
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/intel.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/ibm.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/shell.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/siemens.png" width="50%">
                        </div>
                    </div>
                    <div class="col-sm-12 mb20">
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/dutch-mill.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/chloe.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/anterin.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/merry-riana.png" width="50%">
                        </div>
                    </div>
                    <div class="col-sm-12 mb20">
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/ligman.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/pearson.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/astw.png" width="50%">
                        </div>
                        <div class="col-sm-3 col-xs-6 mb20 text-center">
                            <img src="img/redesign/logo-client/ijba.png" width="50%">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center mb40">
                        <h1> Bussiness <span class="bold"> News </span> </h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-6 mb20">
                            <a href="http://voffice.co.id/jakarta-virtual-office/business-tips/memilih-nama-pt/" target="_blank"><div class="col-sm-12 card-blog padding-0">
                                <img src="img/redesign/blog-1.jpg">
                                <p class="padding-left-10 mt10">April 23, 2018</p>
                                <h5 class="padding-left-10 padding-top-10 bold color-black mb0"> Tips memilih nama PT atau nama perusahaan</h5> <br>
                                <p class="color-black padding-left-10 mb10">Nama PT adalah persyaratan paling awal untuk memulai pendirian bisnis. Hal ini terlihat simpel, namun pada prakteknya banyak yang kesulitan untuk menemukan nama yang tepat untuk perusahaan mereka. <br>
                                [ . . . ] </p>
                                <p class="color-black padding-left-10 bold"> READ MORE </p>
                            </div> </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="http://voffice.co.id/jakarta-virtual-office/business-tips/tren-virtual-office/" target="_blank"><div class="col-sm-12 card-blog padding-0">
                                <img src="img/redesign/blog-2.jpg">
                                <p class="padding-left-10 mt10">May 11, 2018</p>
                                <h5 class="padding-left-10 padding-top-10 bold color-black mb0"> Tren Virtual Office di Indonesia | Solusi Untuk Pengusaha dan Startup</h5>
                                <p class="color-black padding-left-10 mb10">Sekarang ini bisa kita lihat pertumbuhan perusahaan – perusahaan atau mulai banyaknya startup yang  didirikan di Indonesia. Hal ini tidak terlepas dari peran serta anak-anak muda yang kreatif serta  <br>
                                [ . . . ] </p>
                                <p class="color-black padding-left-10 bold"> READ MORE </p>
                            </div> </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mt64">
                                <a class="btn btn-custom mb0 mb20-xs" href="http://voffice.co.id/jakarta-virtual-office/business-tips/" target="_blank"> View More Posts </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include ('partner.php'); ?>
        <?php include ('footer-baru.html'); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flexslider.min.js"></script>
        <!-- <script src="js/lightbox.min.js"></script> -->
        <!-- <script src="js/smooth-scroll.min.js"></script> -->
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <!-- <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="js/ourpartner.js"></script>
        
        
    </body>
</html>
</body>