<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vOffice Location</title>
    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme-v2.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/extra.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Raleway:400,800" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />

    <style media="screen">
        .mapboxgl-popup-close-button {
            position: absolute;
            right: -10px;
            top: -10px;
            border: 1px solid grey;
            cursor: pointer;
            height: 25px;
            line-height: 25px;
            width: 25px;
            background-color: white;
            color: black;
            font-size: 20px;
            border-radius: 50%;
        }

        .mapboxgl-popup-close-button:hover {
            background-color: #e7e7e7;

        }

        .mapboxgl-popup-close-button:focus {
            outline: none;
        }

        .mapboxgl-popup-content {
            padding: 0px !important;
            text-align: center;
            width: 200px;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            box-shadow: 0px 10px 20px grey;
        }

        .mapboxgl-popup-content h5 {
            color: #9a2756;
        }

        @media (max-width:600px) {
            .pr-sm-2 {
                margin-right: 2rem;
            }

            .pl-sm-2 {
                margin-left: 2rem;
            }
        }
    </style>

</head>

<body>


    <?php include "header.html" ?>

    <div class="main-container">

        <section id="index-header" class="image-slider pt0 pb0 height-70 mb-xs-0" style="height:70vh">
            <ul class="slides">
                <li class="image-bg pt-xs-120">
                    <div class="background-image-holder">
                        <img alt="image" class="background-image" src="img/new/bg-jakarta.jpg">
                        <div class="overlay-black"></div>
                    </div>
                    <div class="container v-align-transform">
                        <div class="row text-left">
                            <div class="col-md-12 mt88-lg mt-xs-30 pt-xs-24 ">
                                <h1 class="mt40 bold"> Our Locations</h1>
                                <h5>Smarter business | Better life</h5>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <section class="text-center bg-white padding-40 section-locations box-shadow" id="location-box">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="text-left">
                        <label for="">Select Location</label>
                        <div class="select-option mb10">
                            <i class="ti-angle-down">
                            </i>
                            <select name="city" id="city" onchange="changeCity();">
                                <option value="jakarta" id="jakarta">Jakarta</option>
                                <option value="surabaya" id="surabaya">Surabaya</option>
                                <option value="bali" id="bali">Bali</option>
                                <option value="tangerang" id="tangerang">Tangerang</option>
                                <option value="bekasi" id="bekasi">Bekasi</option>
                                <option value="cibubur" id="cibubur">Cibubur</option>
                                <option value="medan" id="medan">Medan</option>
                                <option value="bandung" id="bandung">Bandung</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-left">
                        <label class="">City</label>
                        <div class="select-option mb10">
                            <i class="ti-angle-down">
                            </i>
                            <select id="sub-city" onchange="subcity();">
                                <option value="0">-Select a city-</option>
                                <option value="central-jakarta" id="central-jakarta">Central Jakarta</option>
                                <option value="south-jakarta" id="south-jakarta">South Jakarta</option>
                                <option value="north-jakarta" id="north-jakarta">North Jakarta</option>
                                <option value="east-jakarta" id="east-jakarta">East Jakarta</option>
                                <option value="west-jakarta" id="west-jakarta">West Jakarta</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="detail">
            <div class="col-sm-12 col-md-12">
                <a name="location"></a>
                <div class="text-center">
                    <h3 class="bold lang text-uppercase" id="location-title" key="locationindex">Jakarta</h3>
                    <div class="hr mb24 center"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-12 padding-left-50">
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/menara-rajawali.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/menara-rajawali.jpg, images/lokasi-gedung-voffice/jakarta selatan/menara-rajawali.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Menara Rajawali</p>
                                <p class="fw-500">Level 7-1, Jl. Dr.Ide Anak Agung Gde Agung Kawasan Mega Kuningan, Setiabudi, Jakarta Selatan
                                </p>
                                <a href="office-menara-rajawali.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="MR">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/menara-kuningan.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/menara-kuningan.jpg, images/lokasi-gedung-voffice/jakarta selatan/menara-kuningan.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Menara Kuningan</p>
                                <p class="fw-500">Level 30 Unit B-C, Jl. H. Rasuna Said Kav. 5 Karet Kuningan, Setiabudi, Jakarta Selatan </p>
                                <a href="office-menara-kuningan.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="MK">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/centennial-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/centennial-tower.jpg, images/lokasi-gedung-voffice/jakarta selatan/centennial-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Centennial Tower</p>
                                <p class="fw-500">Level 29F, Jl. Jendral Gatot Subroto No.27 Karet Semanggi, Setiabudi, Jakarta Selatan </p>
                                <a href="centennial-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="CT">Enquire Now</a>
                            </div>
                        </div>
                        <!--Neww-->
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/treasury_tower.png" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/treasury_tower.png, images/lokasi-gedung-voffice/jakarta selatan/treasury_tower.png" />
                            <div class="city-wrapper">
                                <p class="h4"> Treasury Tower (*) </p>
                                <p class="fw-500">Level 6, Jl. Jend Sudirman kav 52-53, Sudirman Cental Business District, Kebayoran Baru, Jakarta Selatan
                                </p>
                                <a href="treasury-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="TTW">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta central-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/citra_tower.png" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/citra_tower.png, images/lokasi-gedung-voffice/jakarta selatan/citra_tower.png" />
                            <div class="city-wrapper">
                                <p class="h4"> Citra Tower Kemayoran</p>
                                <p class="fw-500">
                                    Level 3 Blok A6, Jl. Benyamin Sueb Jl. Casa No.170, RT.13/RW.6, Kb. Kosong, Kec. Kemayoran, Kota Jakarta Pusat
                                </p>
                                <a href="virtual-office-kemayoran.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="CTK">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta central-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/mrt_bundaran.png" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/mrt_bundaran.png, images/lokasi-gedung-voffice/jakarta selatan/mrt_bundaran.png" />
                            <div class="city-wrapper">
                                <p class="h4">MRT Bundaran HI</p>
                                <p class="fw-500">
                                    Bundaran HI Station, Gondangdia, Menteng, Jakarta Pusat
                                </p>
                                <!--<a href="office-menara-kuningan.php" class="link">See More</a>-->
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="MRTBD">Enquire Now</a>
                            </div>
                        </div>
                        <!--end new-->
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/grand-surveyor.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/grand-surveyor.jpg, images/lokasi-gedung-voffice/jakarta selatan/grand-surveyor.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Graha Surveyor Indonesia</p>
                                <p class="fw-500">Level 15-1503, Jl. Gatot Subroto Kav. 56, Setiabudi, Jakarta Selatan</p>
                                <a href="office-graha-surveyor.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="GS">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta central-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta pusat/the-city-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta pusat/the-city-tower.jpg, images/lokasi-gedung-voffice/jakarta pusat/the-city-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> The City Tower</p>
                                <p class="fw-500"> Level 12-1N, Jl. MH.Thamrin No. 81, Menteng, Jakarta Pusat </p>
                                <a href="office-thecity-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="TCT">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta central-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-fit.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-fit.jpg, images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-fit.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Sudirman 7.8</p>
                                <p class="fw-500"> Level 16 Unit 1 & 2, Jl. Jend. Sudirman No.Kav 7-8, Kecamatan Tanah Abang, Jakarta Pusat </p>
                                <a href="virtual-office-sudirman-78.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="S78">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta central-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png" data-srcset="images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png, images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png" />
                            <div class="city-wrapper">
                                <p class="h4"> Atria Sudirman</p>
                                <p class="fw-500">
                                    Atria Sudirman Lt 23 Jl Jend Sudirman Kav 33A, Karet Tengsin Tanah Abang Jakarta Pusat
                                </p>
                                <a href="virtual-office-tanah-abang.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="S78">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/office8.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/office8.jpg, images/lokasi-gedung-voffice/jakarta selatan/office8.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Office 8</p>
                                <p class="fw-500">Level 18A, Jl. Senopati No. 8B, Kel. Senayan, Kec. Kebayoran Baru, Jakarta Selatan, 12190</p>
                                <a href="office8.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="office8">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta east-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta timur/rawamangun.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta timur/rawamangun.jpg, images/lokasi-gedung-voffice/jakarta timur/rawamangun.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> vOffice East Rawamangun</p>
                                <p class="fw-500"> Level 1-3, Jl. Perserikatan No. 1 Blok A Rawamangun, Pulogadung, Jakarta Timur</p>
                                <a href="virtual-office-jakarta-timur.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="RM">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/the-ceo-building.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/the-ceo-building.jpg, images/lokasi-gedung-voffice/jakarta selatan/the-ceo-building.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> The CEO Building</p>
                                <p class="fw-500">Level 12, Jl. TB Simatupang No. 18C, Cilandak, Jakarta Selatan </p>
                                <a href="office-ceo-building.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="TCB">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/metropolitan-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/metropolitan-tower.jpg, images/lokasi-gedung-voffice/jakarta selatan/metropolitan-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Metropolitan Tower</p>
                                <p class="fw-500">Metropolitan Tower Lantai 13A Jl. R. A. Kartini, Jl. TB Simatupang No.Kav. 14, Kec. Cilandak, Jakarta Selatan, DKI Jakarta </p>
                                <!-- <a href="office-ceo-building.php" class="link">See More</a> -->
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="MT">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta south-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta selatan/gkm-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta selatan/gkm-tower.jpg, images/lokasi-gedung-voffice/jakarta selatan/gkm-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> GKM Tower</p>
                                <p class="fw-500">Level 20, GKM Green Tower, Jl. TB Simatupang No.Kav. 89G, RT.10/RW.2, Kebagusan, Pasar Minggu, South Jakarta City, Jakarta </p>
                                <!-- <a href="office-ceo-building.php" class="link">See More</a> -->
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="GKM">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta north-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta utara/kirana-two-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta utara/kirana-two-tower.jpg, images/lokasi-gedung-voffice/jakarta utara/kirana-two-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Kirana Two Tower</p>
                                <p class="fw-500"> Level 10, Jl. Boulevard Timur No.88, Kelapa Gading, Jakarta Utara </p>
                                <a href="office-kirana2-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="K2T">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta north-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta utara/honey-lady.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta utara/honey-lady.jpg, images/lokasi-gedung-voffice/jakarta utara/honey-lady.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Honey Lady</p>
                                <p class="fw-500"> Level 2, Jl. Pluit Selatan Raya No.1, Penjaringan, Jakarta Utara </p>
                                <a href="virtual-office-pluit.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="honey-lady">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta north-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/pik/pik.png" data-srcset="images/lokasi-gedung-voffice/pik/pik.png, images/lokasi-gedung-voffice/pik/pik.png" />
                            <div class="city-wrapper">
                                <p class="h4">Gold Coast Office</p>
                                <p class="fw-500">
                                    Gold Coast Office Eiffel Tower Lt 12 Jl Pantai Indah Kapuk, Penjaringan Jakarta Utara
                                </p>
                                <a href="virtual-office-pik.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="honey-lady">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta north-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/moi/lokasi-moi.jpg" data-srcset="images/lokasi-gedung-voffice/moi/lokasi-moi.jpg, images/lokasi-gedung-voffice/moi/lokasi-moi.jpg" />
                            <div class="city-wrapper">
                                <p class="h4">Mall Of Indonesia</p>
                                <p class="fw-500">
                                    Mall Of Indonesia, Jl. Boulevard Bar. Raya No.12, RT.18/RW.19, Klp. Gading Bar., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240
                                </p>
                                <a href="virtual-office-moi.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="honey-lady">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta west-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta barat/grand-slipi-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta barat/grand-slipi-tower.jpg, images/lokasi-gedung-voffice/jakarta barat/grand-slipi-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Grand Slipi Tower</p>
                                <p class="fw-500">Level 42G-42H, Jl. S.Parman Kav.22-24, Palmerah Slipi, Jakarta Barat</p>
                                <a href="office-grandslipi-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="GST">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 jakarta west-jakarta city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/jakarta barat/kencana-tower.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta barat/kencana-tower.jpg, images/lokasi-gedung-voffice/jakarta barat/kencana-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Kencana Tower</p>
                                <p class="fw-500"> Level Mezanine, Jl. Raya Meruya Ilir No.88 Business Park Kebon Jeruk, Kembangan, Jakarta Barat</p>
                                <a href="office-kencana-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="KT">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 tangerang city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/tangerang/my-republic-plaza.jpg" data-srcset="images/lokasi-gedung-voffice/tangerang/my-republic-plaza.jpg, images/lokasi-gedung-voffice/tangerang/my-republic-plaza.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> My Republic Plaza BSD</p>
                                <p class="fw-500"> Level GF, Jalan Grand Boulevard BSD, Cisauk, Tangerang Selatan</p>
                                <a href="virtual-office-tangerang.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="BSD">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 tangerang city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg" data-srcset="images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg, images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg " style="width:100%;height:auto;" />
                            <div class="city-wrapper">
                                <p class="h4"> The Prominence Office Tower</p>
                                <p class="fw-500"> Level 28 Unit C, Jl. Jalur Sutera Bar. No.15, Alam, Sutera, Kota Tangerang, Banten</p>
                                <a href="office-prominence-tower.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="POT">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 bali city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/bali/jimbaran-hub.jpg" data-srcset="images/lokasi-gedung-voffice/bali/jimbaran-hub.jpg, images/lokasi-gedung-voffice/bali/jimbaran-hub.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Jimbaran Hub</p>
                                <p class="fw-500"> Level GF, Jl. Karang Mas, Kuta Selatan, Jimbaran, Bali</p>
                                <a href="office-jimbaran.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="JH">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 bali city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/bali/kembali/thumb.jpg" data-srcset="images/lokasi-gedung-voffice/bali/kembali/thumb.jpg, images/lokasi-gedung-voffice/bali/kembali/thumb.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> KE{M}BALI Innovation Hub</p>
                                <p class="fw-500"> Jl. Sunset Road No.28, Seminyak, Kuta, Kabupaten Badung, Bali</p>
                                <a href="kembali-innovation-hub.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="KIH">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 bali city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/bali/canggu.jpg" data-srcset="images/lokasi-gedung-voffice/bali/canggu.jpg, images/lokasi-gedung-voffice/bali/canggu.jpg" />
                            <div class="city-wrapper">
                                <p class="h4">vOffice Canggu</p>
                                <p class="fw-500"> Promenade Shop S12, Jalan Kayu Tulang No 82, Canggu, Kuta Utara Badung, Canggu, Bali 80363</p>
                                <a href="voffice-canggu.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="KIH">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 surabaya city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/surabaya/bumi-mandiri-tower.jpg" data-srcset="images/lokasi-gedung-voffice/surabaya/bumi-mandiri-tower.jpg, images/lokasi-gedung-voffice/surabaya/bumi-mandiri-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> JAPFA Tower II</p>
                                <p class="fw-500"> Level 12, Jl Panglima Sudirman Kav 66-68, Embong Kaliasin, Genteng, Kota
                                    SBY, Jawa Timur</p>
                                <a href="office-bumi-putra.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="BMT1">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 surabaya city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/surabaya/intiland-tower.jpg" data-srcset="images/lokasi-gedung-voffice/surabaya/intiland-tower.jpg, images/lokasi-gedung-voffice/surabaya/intiland-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Intiland Tower</p>
                                <p class="fw-500"> Level 3, Jl. Panglima Sudirman No.101-103, Genteng Surabaya</p>
                                <a href="office-intiland.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="IT">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 surabaya city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/surabaya/spazio.jpg" data-srcset="images/lokasi-gedung-voffice/surabaya/spazio.jpg, images/lokasi-gedung-voffice/surabaya/spazio.jpg " style="width:100%;height:auto;" />
                            <div class="city-wrapper">
                                <p class="h4"> Spazio</p>
                                <p class="fw-500"> Level 1 Unit 525A. Mayjen Yono Suwoyo No.Kav 3, Dukuh Pakis, Surabaya</p>
                                <a href="#" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="SPAZIO">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 surabaya city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="img/samator/thumb.jpg" data-srcset="img/samator/thumb.jpg, img/samator/thumb.jpg" style="width:100%;height:auto;" />
                            <div class="city-wrapper">
                                <p class="h4"> Samator</p>
                                <p class="fw-500"> Office, Gedung THE SAMATOR
                                    Jl. Raya Kedung Baruk No. 25-28, Surabaya
                                    Kel. Kedung Baruk, Kec. Rungkut Jawa Timur, Indonesia 60298
                                </p>
                                <a href="voffice-samator.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="samator">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 bekasi city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/bekasi/plaza-summarecon.jpg" data-srcset="images/lokasi-gedung-voffice/bekasi/plaza-summarecon.jpg, images/lokasi-gedung-voffice/bekasi/plaza-summarecon.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Plaza Summarecon Bekasi</p>
                                <p class="fw-500"> Plaza Summarecon Bekasi Jl. Bulevar Ahmad Yani Kav K.01 Harapan Mulya, Medan Satria, Kota Bekasi Jawa Barat.</p>
                                <a href="virtual-office-bekasi.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="plaza-bekasi">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 cibubur city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/lokasi-gedung-voffice/cibubur/mensana-tower.jpg" data-srcset="images/lokasi-gedung-voffice/cibubur/mensana-tower.jpg, images/lokasi-gedung-voffice/cibubur/mensana-tower.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Mensana Tower</p>
                                <p class="fw-500"> Level 5, Jl. Raya Kranggan, Pondok Gede, Jatisampurna, Cibubur</p>
                                <a href="virtual-office-cibubur.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="mensana-tower">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 medan city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="images/medan/grand-jati-junc-square.jpg" data-srcset="images/medan/grand-jati-junc-square.jpg, images/medan/grand-jati-junc-square.jpg" />
                            <div class="city-wrapper">
                                <p class="h4"> Grand Jati Juction</p>
                                <p class="fw-500"> Jati Junction, Jl. Perintis Kemerdekaan No.3A, Perintis, Kec. Medan Tim., Kota Medan, Sumatera Utara</p>
                                <a href="virtual-office-medan.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="GJJ">Enquire Now</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-left mb30 bandung city-content">
                            <img class="lazy" src="img/img-placeholder.png" data-src="img/bandung/bandung_braga 1.png" data-srcset="img/bandung/bandung_braga 1.png, img/bandung/bandung_braga 1.png" />
                            <div class="city-wrapper">
                                <p class="h4"> Braga Bandung</p>
                                <p class="fw-500">
                                    Jalan Braga Nomor 109, Kecamatan Sumur, Kota Bandung, Jawa Barat 40111
                                </p>
                                <a href="virtual-office-bandung.php" class="link">See More</a>
                                <a href="" class="btn btn-filled" data-toggle="modal" data-target="#enquire" onclick="changeLocation(this);" id="BGB">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-filled-outline bg-white mx-auto" id="loadMore"><i class="fa fa-angle-down"></i> Load More
                        </button>
                    </div>
                </div>
            </div>
            <div class="sticky">
                <!-- map div -->
                <div style="position:relative; width:100%; height:100%;">
                    <div id='map' class="Scrollable hidden-xs"></div>
                </div>
            </div>
        </section>

        <section id="notify-me" class="mt40">
            <div class="container">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-10">
                            <h4 class="mt-lg-5 bold">Daftar untuk mendapatkan Penawaran Menarik</h4>
                        </div>
                        <div class="col-sm-2">
                            <a href="" data-toggle="modal" data-target="#notifyme" class="btn-outline-white">Notify me</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="notifyme" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-xs mb-xs-64">
                <div class="modal-content">
                    <div class="modal-header clearfix">
                        <button class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="mb8 bold text-center color-black">Dapatkan Penawaran Menarik dari vOffice</h4>
                        <center>dengan mengisi form dibawah ini</center>
                    </div>
                    <div class="modal-body form-body clearfix">
                        <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                            <input type="text" name="notify_me" hidden="hidden" value="notify_me" id="notify_me">
                            <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                            <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon / Whatsapp*">
                            <input type="text" class="validate-required validate-email" name="notify_email" placeholder="Alamat Email*">
                            <button type="submit" name="submit">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-white" id="all-locations-section">
            <center>
                <h3 class="cardflexible-title bold">Our Locations</h3>
            </center>
            <div class="container">
                <div class="row mb32">
                    <div class="col-sm-12">
                        <h4 class="bold mb16">Jakarta Selatan </h4>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/mr.jpg" data-srcset="img/tower/mr.jpg, img/tower/mr.jpg" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Menara Rajawali</h6>
                                            <p class="mb0">Level 7-1, Jl. Dr.Ide Anak Agung Gde Agung, Setiabudi </p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/off8.jpg" data-srcset="img/tower/off8.jpg, img/tower/off8.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Office 8</h6>
                                            <p class="mb0">Level 18A, Jl. Senopati No. 8B, Kel. Senayan, Kec. Kebayoran Baru,</p>
                                            <p class="mb0">Jakarta Selatan 12190</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/ct.jpg" data-srcset="img/tower/ct.jpg, img/tower/ct.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Centennial Tower</h6>
                                            <p class="mb0">Level 29F, Jl. Jendral Gatot Subroto No.27 Karet Semanggi, Setiabudi</p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/mk.jpg" data-srcset="img/tower/mk.jpg, img/tower/mk.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Menara Kuningan</h6>
                                            <p class="mb0">Level 30 Unit B-C, Jl. H. Rasuna Said Kav. 5 Karet Kuningan, Setiabudi</p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/ceo.jpg" data-srcset="img/tower/ceo.jpg, img/tower/ceo.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">The CEO Building</h6>
                                            <p class="mb0">Level 12, Jl. TB Simatupang No. 18C, Cilandak</p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/g-surveyor.jpg" data-srcset="img/tower/g-surveyor.jpg, img/tower/g-surveyor.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Graha Surveyor</h6>
                                            <p class="mb0">Level 15-1503, Jl. Gatot Subroto Kav. 56, Setiabudi</p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/treasury_tower_thumb.png" data-srcset="img/treasury_tower_thumb.png, img/treasury_tower_thumb.png" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">TREASURY TOWER</h6>
                                            <p class="mb0">Level 6, Jl. Jend Sudirman kav 52-53, Sudirman Cental Business District, Kebayoran Baru, Jakarta Selatan</p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/gkm_thumb.png" data-srcset="img/gkm_thumb.png, img/gkm_thumb.png" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">GKM TOWER</h6>
                                            <p class="mb0">
                                                Level 20, GKM Green Tower, Jl. TB Simatupang No.Kav. 89G, RT.10/RW.2, Kebagusan, Pasar Minggu
                                            </p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/g-surveyor.jpg" data-srcset="img/tower/g-surveyor.jpg, img/tower/g-surveyor.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">METROPOLITAN TOWER</h6>
                                            <p class="mb0">
                                                Metropolitan Tower Lantai 13A Jl. R. A. Kartini, Jl. TB Simatupang No.Kav. 14, Kec. Cilandak
                                            </p>
                                            <p class="mb0">Jakarta Selatan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <h4 class="bold mb16">Jakarta Barat </h4>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/kencana.jpg" data-srcset="img/tower/kencana.jpg, img/tower/kencana.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Kencana Tower</h6>
                                            <p class="mb0">Level Mezanine, Jl. Raya Meruya Ilir No.88 Kebon Jeruk, Kembangan</p>
                                            <p class="mb0">Jakarta Barat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/gst.jpg" data-srcset="img/tower/gst.jpg, img/tower/gst.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Grand Slipi Tower</h6>
                                            <p class="mb0">Level 42G-42H, Jl. S.Parman Kav.22-24, Palmerah Slipi</p>
                                            <p class="mb0">Jakarta Barat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/spaze/phx-grogol.png" data-srcset="img/tower/spaze/phx-grogol.png, img/tower/spaze/phx-grogol.png " />
                                        </div>
                                        <div class="right">
                                            <div class="right">
                                                <h6 class="bold-h6 mb0">PHX Grogol</h6>
                                                <p class="mb0">Jl. Dr. Susilo Raya No.342, RW.5, Grogol, Kec. Grogol petamburan,</p>
                                                <p class="mb0">Jakarta Barat</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <h4 class="bold mb16">Jakarta Pusat </h4>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-md-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/tct.jpg" data-srcset="img/tower/tct.jpg, img/tower/tct.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">The City Tower</h6>
                                            <p class="mb0">Level 12-1N, Jl. MH.Thamrin No. 81, Menteng</p>
                                            <p class="mb0">Jakarta Pusat </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-square.jpg" data-srcset="images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-square.jpg, images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-square.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Sudirman 7.8 Tower</h6>
                                            <p class="mb0">Level 16 Unit 1 & 2, Jl. Jend. Sudirman No.Kav 7-8, Kecamatan Tanah Abang</p>
                                            <p class="mb0">Jakarta Pusat </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/mrt_bundaran.png" data-srcset="https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/mrt_bundaran.png, https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/mrt_bundaran.png" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">MRT, Bundaran HI</h6>
                                            <p class="mb0">Bundaran HI Station, Gondangdia, Menteng</p>
                                            <p class="mb0">Jakarta Pusat </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/citra_tower.png" data-srcset="https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/citra_tower.png, https://voffice.co.id/jakarta-virtual-office/images/lokasi-gedung-voffice/jakarta%20selatan/citra_tower.png" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">CITRA TOWER KEMAYORAN</h6>
                                            <p class="mb0">Level 3 Blok A6, Jl. Benyamin Sueb Jl. Casa No.170, RT.13/RW.6, Kb. Kosong, Kec. Kemayoran</p>
                                            <p class="mb0">Jakarta Pusat </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-0 pl-sm-2 pr-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png" data-srcset="images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png, images/lokasi-gedung-voffice/tanah-abang/tanah-abang.png" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Atria Sudirman</h6>
                                            <p class="mb0">Atria Sudirman Lt 23 Jl Jend Sudirman Kav 33A, Karet Tengsin Tanah Abang</p>
                                            <p class="mb0">Jakarta Pusat </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <h4 class="bold mb16">Jakarta Utara</h4>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/kirana-2.jpg" data-srcset="img/tower/kirana-2.jpg, img/tower/kirana-2.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Kirana 2 Tower</h6>
                                            <p class="mb0">Level 10, Jl. Boulevard Timur No.88, Kelapa Gading</p>
                                            <p class="mb0">Jakarta Utara</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/honey-lady.jpg" data-srcset="img/tower/honey-lady.jpg, img/tower/honey-lady.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">The Honey Lady</h6>
                                            <p class="mb0">Level 2, Jl. Pluit Selatan Raya No.1, Penjaringan</p>
                                            <p class="mb0">Jakarta Utara</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/tower/spaze/moi.png" data-src="img/tower/spaze/moi.png" data-srcset="img/tower/spaze/moi.png, img/tower/spaze/moi.png " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Mall Of Indonesia</h6>
                                            <p class="mb0">Jl. Boulevard Bar. Raya No.12, RT.18/RW.19, Klp. Gading Bar., </p>
                                            <p class="mb0"> Kec. Klp. Gading, Jkt Utara</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="images/lokasi-gedung-voffice/pik/pik.png" data-src="images/lokasi-gedung-voffice/pik/pik.png" data-srcset="images/lokasi-gedung-voffice/pik/pik.png, images/lokasi-gedung-voffice/pik/pik.png " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Gold Coast Office</h6>
                                            <p class="mb0">
                                                Gold Coast Office Eiffel Tower Lt 12 Jl Pantai Indah Kapuk, Penjaringan
                                            </p>
                                            <p class="mb0"> Jakarta Utara</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <h4 class="bold mb16">Surabaya</h4>
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/bumi-mandiri-tower.jpg" data-srcset="img/tower/bumi-mandiri-tower.jpg, img/tower/bumi-mandiri-tower.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">JAPFA Tower II</h6>
                                            <p class="mb0">Level 12, Jl Panglima Sudirman Kav 66-68, Genteng</p>
                                            <p class="mb0">Surabaya</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/intiland-tower.jpg" data-srcset="img/tower/intiland-tower.jpg, img/tower/intiland-tower.jpg " />
                                        </div>
                                        <div class="right">
                                            <a href="office-intiland.php">
                                                <h6 class="bold-h6 mb0">Intiland Tower</h6>
                                            </a>
                                            <p class="mb0">Level 3, Jl. Panglima Sudirman No.101-103, Genteng</p>
                                            <p class="mb0">Surabaya</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/spazio.jpg" data-srcset="img/tower/spazio.jpg, img/tower/spazio.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Spazio</h6>
                                            <p class="mb0">Level 1 Unit 525A. Mayjen Yono Suwoyo No.Kav 3, Dukuh Pakis</p>
                                            <p class="mb0">Surabaya</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/samator/thumb2.jpg" data-srcset="img/samator/thumb2.jpg, img/samator/thumb2.jpg" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Samator</h6>
                                            <p class="mb0">
                                                Office, Gedung THE SAMATOR
                                                Jl. Raya Kedung Baruk No. 25-28,
                                                Kel. Kedung Baruk, Kec. Rungkut Jawa Timur, Surabaya
                                            </p>
                                            <p class="mb0">Surabaya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Jakarta Timur</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/rawamangun.png" data-srcset="img/tower/rawamangun.png, img/tower/rawamangun.png " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">vOffice East</h6>
                                            <p class="mb0">Jl. Pemuda No.33B, RT.1/RW.4, Jati, Kec. Pulo Gadung</p>
                                            <p class="mb0"> Jakarta Timur </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Cibubur</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/cibubur.jpg" data-srcset="img/tower/cibubur.jpg, img/tower/cibubur.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Mensana Tower</h6>
                                            <p class="mb0"> Level 5, Jl. Raya Kranggan, Pondok Gede, Jatisampurna</p>
                                            <p class="mb0"> Cibubur </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Bandung</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/bandung/bandung_braga 1.png" data-src="img/bandung/bandung_braga 1.png" data-srcset="img/bandung/bandung_braga 1.png, img/bandung/bandung_braga 1.png " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Braga Bandung</h6>
                                            <p class="mb0">
                                                Jalan Braga Nomor 109, Kecamatan Sumur, Kota Bandung, Jawa Barat 40111
                                            </p>
                                            <p class="mb0"> Bandung</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="container p-0">
                                <h4 class="bold mb16">Tangerang</h4>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/tangerang-bsd.jpg" data-srcset="img/tower/tangerang-bsd.jpg, img/tower/tangerang-bsd.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">My Republic Plaza</h6>
                                            <p class="mb0"> Level GF, Jalan Grand Boulevard BSD, Cisauk</p>
                                            <p class="mb0"> Tanggerang Selatan </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg" data-srcset="images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg, images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">The Prominence Office Tower</h6>
                                            <p class="mb0"> Level 28 Unit C, Jl. Jalur Sutera Bar. No.15, Alam Sutera</p>
                                            <p class="mb0"> Tangerang </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Bekasi</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/bekasi.jpg" data-srcset="img/tower/bekasi.jpg, img/tower/bekasi.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Plaza Summarecon Bekasi</h6>
                                            <p class="mb0">Plaza Summarecon Bekasi Jl. Bulevar Ahmad Yani Kav K.01 Harapan Mulya, Medan Satria,</p>
                                            <p class="mb0"> Bekasi, Jawa Barat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Medan</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/medan/grand-jati-junc-square.jpg" data-srcset="images/medan/grand-jati-junc-square.jpg, images/medan/grand-jati-junc-square.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Grand Jati Junction</h6>
                                            <p class="mb0"> Jati Junction, Jl. Perintis Kemerdekaan No.3A, Perintis, Kec. Medan Timur</p>
                                            <p class="mb0"> Medan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">Bali </h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="img/tower/jimbaran-hub.jpg" data-srcset="img/tower/jimbaran-hub.jpg, img/tower/jimbaran-hub.jpg " />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">Jimbaran Hub</h6>
                                            <p class="mb0">Level GF, Jl. Karang Mas, Kuta Selatan, Jimbaran </p>
                                            <p class="mb0">Bali</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">&nbsp;</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/lokasi-gedung-voffice/bali/kembali/kembali-square.jpg" data-srcset="images/lokasi-gedung-voffice/bali/kembali/kembali-square.jpg, images/lokasi-gedung-voffice/bali/kembali/kembali-square.jpg" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">KE{M}BALI Innovation Hub</h6>
                                            <p class="mb0">Jl. Sunset Road No.28, Seminyak, Kuta, Kabupaten Badung </p>
                                            <p class="mb0">Bali</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 p-0 pr-sm-2 pl-sm-2">
                                    <h4 class="bold mb16">&nbsp;</h4>
                                    <div class="feature feature-3 mb-xs-24">
                                        <div class="left">
                                            <img class="lazy" src="img/img-placeholder-square.png" data-src="images/lokasi-gedung-voffice/bali/canggu-thumb.jpg" data-srcset="images/lokasi-gedung-voffice/bali/canggu-thumb.jpg, images/lokasi-gedung-voffice/bali/canggu-thumb.jpg" />
                                        </div>
                                        <div class="right">
                                            <h6 class="bold-h6 mb0">vOffice Canggu</h6>
                                            <p class="mb0">Promenade Shop S12, Jalan Kayu Tulang No 82, Canggu, Kuta Utara Badung, Canggu, Bali 80363</p>
                                            <p class="mb0">Bali</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php include 'footer-redesign.html'; ?>
    </div>



    <!-- Modal -->
    <div id="enquire" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hubungi Kami Sekarang</h4>
                </div>
                <div class="modal-body">
                    <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                        <input type="text" name="virtual_office_location" hidden="hidden" value="virtual_office_location" id="virtual_office_location">
                        <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                        <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon*">
                        <input type="text" class="validate-required validate-email" name="email" placeholder="Alamat Email*">
                        <div class="select-option mb10">
                            <i class="ti-angle-down"></i>
                            <select name="location" style="padding: 3%;" id="select-location">
                                <option disabled="" selected="" value="">Location</option>
                                <option value="office8">Office 8, Jakarta Selatan</option>
                                <option value="MR">Menara Rajawali, Jakarta Selatan</option>
                                <option value="CT">Centennial Tower, Jakarta Selatan</option>
                                <option value="MK">Menara Kuningan, Jakarta Selatan</option>
                                <option value="MT">Metropolitan Tower, Jakarta Selatan</option>
                                <option value="GKM">GKM Tower, Jakarta Selatan</option>
                                <option value="TCB">The CEO Building, Jakarta Selatan</option>
                                <option value="GS">Graha Surveyor, Jakarta Selatan</option>
                                <option value="TCT">The City Tower, Jakarta Pusat</option>
                                <option value="S78">Sudirman 7.8, Jakarta Pusat</option>
                                <option value="KT">Kencana Tower, Jakarta Barat</option>
                                <option value="GST">Grand Slipi Tower, Jakarta Barat</option>
                                <option value="K2T">Kirana 2 Tower, Jakarta Utara</option>
                                <option value="PIK">PIK Avenue, Jakarta Utara</option>
                                <option value="RM">Rawamangun, Jakarta Timur</option>
                                <option value="BSD">MyRepublic Plaza BSD, Tangerang</option>
                                <option value="POT">The Prominence Office Tower, Tangerang</option>
                                <option value="BMT1">JAPFA Tower II, Surabaya</option>
                                <option value="BMT2">JAPFA Tower II, Surabaya</option>
                                <option value="IT">Intiland Tower, Surabaya</option>
                                <option value="SPAZIO">Spazio, Surabaya</option>
                                <!-- <option value="IBIS">Ibis Styles, Bali</option> -->
                                <option value="JH">Jimbaran Hub, Bali</option>
                                <option value="KIH">Kembali Innovation Hub, Bali</option>
                                <option value="honey-lady">Honey Lady, Jakarta Utara</option>
                                <option value="plaza-bekasi">Plaza Summarecon Bekasi, Bekasi</option>
                                <option value="mensana-tower">Mensana Tower, Cibubur</option>
                                <option value="GJJ">Grand Jati Junction, Medan</option>
                                <option value="TTW">Treasury Tower</option>
                                <option value="MRTBD">MRT, Bundaran HI</option>
                                <option value="CTK">Citra Tower, Kemayoran</option>
                                <option value="BGB">Braga, Bandung</option>
                                <option value="samator">Samator, Surabaya</option>
                            </select>
                        </div>
                        <textarea style="color: #0a0a0a" name="message" rows="4" placeholder="Message"></textarea>
                        <button type="submit">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="mintaproposal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-xs mb-xs-64">
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
                    <h4 class="mb8 bold text-center color-black">Dapatkan Promo & Penawaran Menarik</h4>
                    <center>Isi formulir di bawah ini untuk mendapatkan proposal penawaran
                        dan tim kami akan segera menghubungi Anda. Terima kasih
                    </center>
                </div>

                <div class="modal-body form-body clearfix">
                    <form class="form-email" data-success="Thanks for your inquiries, we will be in touch to confirm shortly." data-error="Please fill all fields correctly.">
                        <input type="text" name="so_inquiry" hidden="hidden" value="so_inquiry" id="so_inquiry">
                        <input type="text" class="validate-required" name="name" placeholder="Nama Lengkap*">
                        <input type="text" class="validate-required" name="phone" placeholder="Nomor Telepon / Whatsapp*">
                        <input type="text" class="validate-required validate-email" name="email" placeholder="Alamat Email*">
                        <input type="text" class="" name="usaha" placeholder="Bidang Usaha">
                        <textarea style="color: #0a0a0a" name="message" rows="4" placeholder="Message"></textarea>
                        <button id="submit-form" type="submit" name="submit">Contact Us Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/script-virtual-office.js"></script>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            let lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            let active = false;
            const lazyLoad = function() {
                if (active === false) {
                    active = true;
                    setTimeout(function() {
                        lazyImages.forEach(function(lazyImage) {
                            if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {
                                lazyImage.src = lazyImage.dataset.src;
                                lazyImage.srcset = lazyImage.dataset.srcset;
                                lazyImage.classList.remove("lazy");
                                lazyImages = lazyImages.filter(function(image) {
                                    return image !== lazyImage;
                                });
                                if (lazyImages.length === 0) {
                                    document.removeEventListener("scroll", lazyLoad);
                                    window.removeEventListener("resize", lazyLoad);
                                    window.removeEventListener("orientationchange", lazyLoad);
                                }
                            }
                        });
                        active = false;
                    }, 200);
                }
            };
            document.addEventListener("scroll", lazyLoad);
            window.addEventListener("resize", lazyLoad);
            window.addEventListener("orientationchange", lazyLoad);
        });

        var hidden = document.getElementsByClassName('city-content');
        for (var i = 6; i < hidden.length; i++) {
            hidden[i].style.display = "none";
        }

        // Load more
        $(document).ready(function() {
            $("#loadMore").on('click', function(e) {
                e.preventDefault();
                $(".city-content:hidden").slice(0, 6).slideDown();
                if ($(".city-content:hidden").length == 0) {
                    $("#loadMore").fadeOut('slow');
                }
            });
        });
    </script>



</body>

</html>