<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">

    <meta name="Author" content="vOffice.co.id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/extra.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">

</head>

<body>

    <?php include "header.html" ?>

    <div class="main-container">

        <section id="index-header" class="image-slider slider-all-controls controls-inside pt0 pb0 height-70 mb-xs-0">
            <ul class="slides">
                <li class="image-bg pt-xs-120">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="img/redesign/headerpt-50.jpg">
                    </div>
                    <div class="container v-align-transform">
                        <div class="row text-left">
                            <div class="col-md-12 pt-xs-32">
                                <h2 class="bold mb0"> Jasa Buat PT, CV, Pembuatan Perusahaan di Indonesia </h2>
                                <p class="article mb0"> Cepat - Mudah - Professional </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="bold mb0"> Pendirian PT </h2>
                        <h3 class="mb40"> Harga </h3>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">PT LITE</h3>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_lite_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 4.9 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Pengecekan nama perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-1">
                                    <li>
                                        <p>
                                            SK Menkumham
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI (Berita Negara Republik Indonesia)
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-1">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-1" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_pt"> Minta Proposal </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">PT FULL</h3>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 10 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Pengecekan Nama Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-2">
                                    <li>
                                        <p>
                                            SK Menkumham
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NPWP & SKT
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            SIUP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NIB / TDP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI (Berita Negara Republik Indonesia)
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center selengkapnya" data-target="#list-2" id="selengkapnya" onclick="showList(this);">Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-2" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_pt"> Minta Proposal </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">PT FULL</h3>
                                <p class="color-black mb15">+ Virtual Office Lite</p>
                                <img src="img/redesign/icon/pt_full_vo_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 12.9 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Pengecekan Nama Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-3">
                                    <li>
                                        <p>
                                            SK Menkumham
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NPWP & SKT
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            SIUP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NIB / TDP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Penyewaan Alamat Virtual selama 1 tahun
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <b>Bonus : Ruangan Meeting 30 jam selama 1 tahun</b>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-3">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-3" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_pt"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">PT LITE</h3>
                                <p class="color-black mb15">+ Virtual Office Premium</p>
                                <img src="img/redesign/icon/pt_full_vo_premium_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 16.9 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Pengecekan Nama Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-4">
                                    <li>
                                        <p>
                                            SK Menkumham
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NPWP & SKT
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            SIUP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NIB / TDP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Penyewaan alamat virtual selama 1 tahun
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Layanan Resepsionis Profesional
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Nomor Telepon Khusus untuk Perusahaan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Gratis Penyambungan Nomor Telepon ke Seluruh Dunia
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Ruang Meeting 8 Jam / Bulan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Workstation 8 jam / Bulan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            vOffice Executive Suite 3 jam / bulan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <b>Bonus : Ruangan Meeting 30 Jam Selama 1 Tahun</b>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-4">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-4" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_pt"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="bold mb0"> Pendirian CV </h2>
                        <h3 class="mb40"> Harga </h3>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card bg-white box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">CV FULL</h3>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 7.5 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        SK Menkumham
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        NPWP & SKT
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-5">
                                    <li>
                                        <p>
                                            SIUP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NIB / TDP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI (Berita Negara Republik Indonesia)
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-5">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-5" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_cv"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card bg-white box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">CV FULL</h3>
                                <p class="color-black mb15">+ Virtual Office Lite</p>
                                <img src="img/redesign/icon/pt_full_vo_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 8.5 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Akta Perusahaan
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        SK Menkumham
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        NPWP & SKT
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-6">
                                    <li>
                                        <p>
                                            SIUP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            NIB / TDP
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            BNRI (Berita Negara Republik Indonesia)
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Penyewaan alamat virtual selama 1 tahun
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-6">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-6" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_cv"> Minta Proposal </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card bg-white box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">CV FULL</h3>
                                <p class="color-black mb15">+ Virtual Office Premium</p>
                                <img src="img/redesign/icon/pt_full_vo_premium_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 12.5 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>Akta Perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>SK Menkumham</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>NPWP & SKT</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-7">
                                    <li>
                                        <p>SIUP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>NIB / TDP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>BNRI</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Penyewaan alamat virtual selama 1 tahun</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Layanan Resepsionis Profesional</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Nomor Telepon Khusus untuk Perusahaan</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Gratis Penyambungan Nomor telepon ke seluruh dunia</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Ruang Meeting 8 jam / bulan</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Workstation 8 jam / bulan</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>vOffice Executive suite 3 jam / bulan</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-7">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-7" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_cv"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card bg-white box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h4 class="montserrat-600 color-primary mb0">Firma/Persekutuan Perdata</h4>
                                <p class="color-black mb15">+ Virtual Office Lite</p>
                                <img src="img/redesign/icon/pt_full_vo_premium_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 12.5 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>Akta Perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>Pengesahan Menkumham</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>NPWP & SKT</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-8">
                                    <li>
                                        <p>NIB / TDP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Penyewaan alamat virtual selama 1 tahun</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-8">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-8" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_cv"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="bold mb40"> New Product </h2>
                    </div>
                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0">Start up Business Package</h3>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h4 class="montserrat-600 color-grey mt30">IDR 15 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>Pengecekan nama perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>Akta Perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-9">
                                    <li>
                                        <p>SK Menkumham</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>NPWP & SKT</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>SIUP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>NIB / TDP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>BNRI</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>Penyewaan Alamat Virtual selama 1 tahun</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li><b class="mx-auto">BONUS (Pilih salah satu)</b></li>
                                    <li>API (Angka Pengenal Impor) & NIK (Nomor Induk Kepabeanan)</li>
                                    <li>Pendaftaran Merk / Hak Cipta</li>
                                    <li>Perjanjian pemegang saham (Founders Agreement)</li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-9">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-9" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_new_product"> Minta Proposal </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0"><br> PMA <br></h3><br>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h5 class="mb0">Mulai Dari</h5>
                                <h4 class="montserrat-600 color-grey mt10">IDR 15 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>Pengecekan nama perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>Akta Perusahaan</p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-10">
                                    <li>
                                        <p>SK Menkumham</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>NPWP & SKT</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>SIUP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>NIB / TDP</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>BNRI</p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-10">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-10" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_new_product">Minta Proposal </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0"> Penutupan PT/CV <br></h3><br>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h5 class="mb0">Mulai Dari</h5>
                                <h4 class="montserrat-600 color-grey mt10">IDR 7 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        Akta Penutupan PT / CV
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        Pengumuman Koran
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-11">
                                    <li>
                                        <p>
                                            Pencabutan NPWP & SKT
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-11">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-11" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_new_product"> Minta Proposal </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="custom-card box-shadow bt-5">
                            <div class="card-body-normal text-center">
                                <h3 class="montserrat-600 color-primary mb0"><br> OSS <br></h3><br>
                                <p class="color-black mb15">&nbsp;</p>
                                <img src="img/redesign/icon/pt_full_flat.png" width="100" class="mb10">
                                <h5 class="mb0">Mulai Dari</h5>
                                <h4 class="montserrat-600 color-grey mt10">IDR 2 JT</h4>
                            </div>
                            <ul class="text-left color-softgrey lists">
                                <li>
                                    <p>
                                        IU (Ijin Usaha)
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <li>
                                    <p>
                                        NIB / TDP
                                    </p>
                                    <i class="fa fa-check color-green fa-2x"></i>
                                </li>
                                <div class="list-hidden" id="list-12">
                                    <li>
                                        <p>
                                            Izin Lokasi
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Pendaftaran BPJS Ketenagakerjaan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            Pendaftaran BPJS Kesehatan
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                    <li>
                                        <p>
                                            API & NIK
                                        </p>
                                        <i class="fa fa-check color-green fa-2x"></i>
                                    </li>
                                </div>
                            </ul>
                            <p class="text-center" id="selengkapnya" onclick="showList(this);" data-target="#list-12">
                                Selengkapnya <i class="fa fa-angle-down"></i></p>
                            <p class="text-center lebih-sedikit" id="lebih-sedikit" data-target="#list-12" style="display:none;" onclick="hideList(this);">Lebih sedikit <i class="fa fa-angle-up"></i>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-filled font-size-11 mb20-xs mb20" href="#" data-toggle="modal" data-target="#proposal_new_product"> Minta Proposal </a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <?php include('footer-redesign.html'); ?>
        <!--==============Modal Form===========-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="proposal_pt" role="dialog" tabindex="-1">
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
                            Minta Proposal
                        </h5>
                        <p class="text-center" style="margin-bottom:0;">
                            Isi formulir di bawah ini dan kami akan langsung
                            menghubungi Anda. Terima kasih
                        </p>
                        <p class="text-center bold mb0">
                            <span class="fa fa-whatsapp">
                            </span>
                            Whatsapp Number :
                            <a href="tel:+6281280055105">
                            0812-8005-5105
                            </a>
                        </p>
                    </div>
                    <form class="form-email" data-error="Please fill all fields correctly." data-success="Terima kasih atas pengajuan Anda, kami akan segera menghubungi anda.">
                        <input hidden="hidden" id="request_proposal_pt" name="request_proposal_pt" type="text" value="request_proposal_pt">
                        <input hidden="" name="tracker" id="tracker" type="text" value="company_incorporate">
                        <div class="modal-body form-body clearfix">
                            <input hidden="" name="ip" type="text" value="">

                            <div class="col-md-6">
                                <input class="validate-required" name="name" placeholder="Nama" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-6">
                                <input class="validate-required" name="phone" placeholder="Nomor Kontak" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <input class="validate-required" name="email" placeholder="Alamat Email" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <p class="bold mb8">
                                    Layanan voffice.co.id yang anda minati *
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="service">
                                        <option disabled="" selected="" value="">
                                            Layanan yang dipilih —
                                        </option>
                                        <option value="PT-LITE">
                                            Buat PT Lite
                                        </option>
                                        <option value="PT-FULL">
                                            Buat PT Full
                                        </option>
                                        <option value="PT-FULL-VO">
                                            Buat PT Full + Virtual Office Lite
                                        </option>
                                        <option value="PT-FULL-VO-PRE">
                                            Buat PT Full + Virtual Office Premium
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p class="bold mb8">
                                    Apakah Anda memiliki domisili untuk perusahaan Anda?
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="domisili">
                                        <option value="YES">
                                            Ya
                                        </option>
                                        <option value="NO">
                                            Tidak
                                        </option>
                                        <option value="NOT-SURE">
                                            Tidak Pasti
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="mb5">Apa bisnis utama anda (Bidang apa)?</p>
                                <textarea class="" name="message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
        <!--=======================================End Of Modal Form========================================-->

        <!--=======================================Modal Form========================================-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="proposal_cv" role="dialog" tabindex="-1">
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
                            Minta Proposal
                        </h5>
                        <p class="text-center" style="margin-bottom:0;">
                            Isi formulir di bawah ini dan kami akan langsung
                            menghubungi Anda. Terima kasih
                        </p>
                        <p class="text-center bold mb0">
                            <span class="fa fa-whatsapp">
                            </span>
                            Whatsapp Number :
                            <a href="tel:+6281280055105">
                                0812-8005-5105
                            </a>
                        </p>
                    </div>
                    <form class="form-email" data-error="Please fill all fields correctly." data-success="Terima kasih atas pengajuan Anda, kami akan segera menghubungi anda.">
                        <input hidden="hidden" id="request_proposal_cv" name="request_proposal_cv" type="text" value="request_proposal_cv">
                        <input hidden="" name="tracker" id="tracker" type="text" value="company_incorporate">
                        <div class="modal-body form-body clearfix">
                            <input hidden="" name="ip" type="text" value="">

                            <div class="col-md-6">
                                <input class="validate-required" name="name" placeholder="Nama" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-6">
                                <input class="validate-required" name="phone" placeholder="Nomor Kontak" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <input class="validate-required" name="email" placeholder="Alamat Email" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <p class="bold mb8">
                                    Layanan voffice.co.id yang anda minati *
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="service">
                                        <option disabled="" selected="" value="">
                                            Layanan yang dipilih —
                                        </option>
                                        <option value="CV">
                                            Buat CV Full
                                        </option>
                                        <option value="CV-VO">
                                            Buat CV + Virtual Office Lite
                                        </option>
                                        <option value="CV-VO-PRE">
                                            Buat CV + Virtual Office Premium
                                        </option>
                                        <option value="FIRMA">
                                            Firma / Persekutuan Perdata + Virtual Office Lite
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p class="bold mb8">
                                    Apakah Anda memiliki domisili untuk perusahaan Anda?
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="domisili">
                                        <option value="YES">
                                            Ya
                                        </option>
                                        <option value="NO">
                                            Tidak
                                        </option>
                                        <option value="NOT-SURE">
                                            Tidak Pasti
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="mb5">Apa bisnis utama anda (Bidang apa)?</p>
                                <textarea class="" name="message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
        <!--===========End Of Modal Form=============-->

        <!--============Modal Form==========-->
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="proposal_new_product" role="dialog" tabindex="-1">
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
                            Minta Proposal
                        </h5>
                        <p class="text-center" style="margin-bottom:0;">
                            Isi formulir di bawah ini dan kami akan langsung
                            menghubungi Anda. Terima kasih
                        </p>
                        <p class="text-center bold mb0">
                            <span class="fa fa-whatsapp">
                            </span>
                            Whatsapp Number :
                            <a href="tel:+6281280055105">
                                0812-8005-5105
                            </a>
                        </p>
                    </div>
                    <form class="form-email" data-error="Please fill all fields correctly." data-success="Terima kasih atas pengajuan Anda, kami akan segera menghubungi anda.">
                        <input hidden="hidden" id="request_proposal_other" name="request_proposal_other" type="text" value="request_proposal_other">
                        <input hidden="" name="tracker" id="tracker" type="text" value="company_incorporate">
                        <div class="modal-body form-body clearfix">
                            <input hidden="" name="ip" type="text" value="">

                            <div class="col-md-6">
                                <input class="validate-required" name="name" placeholder="Nama" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-6">
                                <input class="validate-required" name="phone" placeholder="Nomor Kontak" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <input class="validate-required" name="email" placeholder="Alamat Email" type="text" style="position:relative; z-index:1; opacity:1;" />
                            </div>
                            <div class="col-md-12">
                                <p class="bold mb8">
                                    Layanan voffice.co.id yang anda minati *
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="service">
                                        <option disabled="" selected="" value="">
                                            Layanan yang dipilih —
                                        </option>
                                        <option value="SUBP">
                                            Start Up Busniness Package
                                        </option>
                                        <option value="PMA">
                                            PMA
                                        </option>
                                        <option value="P_PT_CV">
                                            Penutupan PT / CV
                                        </option>
                                        <option value="OSS">
                                            OSS
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <p class="bold mb8">
                                    Apakah Anda memiliki domisili untuk perusahaan Anda?
                                </p>
                                <div class="select-option p0">
                                    <i class="ti-angle-down">
                                    </i>
                                    <select class="validate-required" name="domisili">
                                        <option value="YES">
                                            Ya
                                        </option>
                                        <option value="NO">
                                            Tidak
                                        </option>
                                        <option value="NOT-SURE">
                                            Tidak Pasti
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="mb5">Apa bisnis utama anda (Bidang apa)?</p>
                                <textarea class="" name="message"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer clearfix">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                        </input>
                    </form>
                </div>
            </div>
        </div>
        <!--==========End Of Modal Form===========-->

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.min.js"></script>
    <script async src="js/lightbox.min.js"></script>
    <script async src="js/scripts.min.js"></script>

    <script type="text/javascript">
        // Load more
        function showList(e) {
            $(e.getAttribute('data-target')).slideDown();
            $(e).fadeOut('fast');
            $(e.nextSibling.nextSibling).fadeIn('slow');
        }

        function hideList(e) {
            $(e.getAttribute('data-target')).slideUp();
            $(e).fadeOut('fast');
            $(e.previousSibling.previousSibling).fadeIn('slow');
        }
    </script>

</body>

</html>