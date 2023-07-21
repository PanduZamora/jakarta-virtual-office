<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gallery vOffice Indonesia</title>

    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/extra.min.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

    <!--Magnific Pop Up-->
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all"/>

    <script src="js/jquery.min.js"></script>

    <style media="screen">
        .top-header {
            width: 100%;
            height: 400px;
            background: url(img/new/virtual-office.jpg) no-repeat center center fixed;
            background-size: cover;
            padding-top: 200px
        }

        .header-background {
            background-color: rgba(52, 52, 52, .5);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 0
        }

        .top-header h2 {
            z-index: 1;
            position: relative;
            letter-spacing: 3px;
            font-family: Montserrat, sans-serif;
        }

        @-webkit-keyframes fadeIn {
            from {
                letter-spacing: 8px;
                opacity: 0
            }
            to {
                letter-spacing: 2px;
                opacity: 1
            }
        }

        .custom-gallery .col-sm-3 {
            padding: 5px;
            height: 200px;
            overflow: hidden
        }

        .col-sm-3 img {
            object-fit: cover;
            min-height: 100%;
            min-width: 100%;
            left: 0;
            top: 0
        }

        .custom-img-title {
            position: absolute;
            z-index: 1;
            bottom: 5px;
            right: 5px;
            left: 5px;
            background: #000;
            background: linear-gradient(0deg, rgba(0, 0, 0, .76234243697479) 0, rgba(50, 50, 50, 0) 100%);
            color: #fff;
            letter-spacing: 1px;
            font-size: 14px;
            padding: 10px;
            font-family: Montserrat, sans-serif;
            font-weight: 500
        }

        .btn-group {
            width: 100%
        }

        .btn-group .btn {
            background: 0 0;
            margin: 0;
            width: 16.66666666666667%;
            font-family: Montserrat, sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px
        }

        .btn-group .btn:first-child {
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .btn-group .btn:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px
        }

        @media (min-width: 768px) {
            .btn-group .btn {
                border-right: none
            }

            .btn-group .btn:last-child {
                border-right: 2px solid
            }
        }

        @media (max-width: 768px) {
            .btn-group {
                font-size: 16px
            }

            .btn-group .btn {
                width: 50%
            }

            .btn-group .btn:first-child {
                border-bottom-left-radius: 0
            }

            .btn-group .btn:last-child {
                border-top-right-radius: 0
            }

            .btn-group .btn:nth-child(2) {
                border-top-right-radius: 5px !important
            }

            .btn-group .btn:nth-child(5) {
                border-bottom-left-radius: 5px !important
            }
        }

        .btn-group .btn:hover {
            background: #951942;
            color: #fff
        }

        .btn-group .btn:focus {
            color: #fff;
            outline: 0
        }

        .btn-group .btn-group-active {
            background: #951942;
            color: #fff
        }
    </style>
</head>
<body>

<?php include "header.html" ?>

<div class="main-container">

    <section class="top-header text-center">
        <div class="header-background"></div>
        <h2 class="color-white bold text-uppercase">Gallery</h2>
    </section>
    <section class="bg-secondary border-top-bot" style="padding:30px;">
<!--      <a href="https://tokopedia.link/7W4UQ1w3u6" class="btn btn-success">Selengkapnya</a>-->
        <div class="container">
            <div class="row text-center">
                <div class="mx-auto">
                    <div class="btn-group">
                        <div class="btn btn-group-active" onclick="changeGallery(this);">All</div>
                        <div class="btn" onclick="changeGallery(this);">Serviced Office</div>
                        <div class="btn" onclick="changeGallery(this);">Meeting Room</div>
                        <div class="btn" onclick="changeGallery(this);">Lounge</div>
                        <div class="btn" onclick="changeGallery(this);">Lobby</div>
                        <div class="btn" onclick="changeGallery(this);">Pantry</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container custom-gallery popupgallery">
            <div class="row">
                <!-- GALLERY MEETING ROOM -->
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-bsd.jpg" class="popupgallery"
                       title="Meeting Room My Republic Plaza BSD, Tangerang">
                        <img src="images/gallery/meeting-room/mr-bsd.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> My Republic Plaza BSD
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-centennial-tower.jpg" class="popupgallery"
                       title="Meeting Room Centennial Tower, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-centennial-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Centennial Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-centennial-tower-2.jpg" class="popupgallery"
                       title="Meeting Room Centennial Tower, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-centennial-tower-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Centennial Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-ceo.jpg" class="popupgallery"
                       title="Meeting Room The CEO Building, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-ceo.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The CEO Building
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-ceo-2.jpg" class="popupgallery"
                       title="Meeting Room The CEO Building, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-ceo-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The CEO Building
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-graha-surveyor.jpg" class="popupgallery"
                       title="Meeting Room Graha Surveyor, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-graha-surveyor.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Graha Surveyor
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-grand-slipi-tower.jpg" class="popupgallery"
                       title="Meeting Room Grand Slipi Tower, Jakarta Barat">
                        <img src="images/gallery/meeting-room/mr-grand-slipi-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Grand Slipi Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-grand-slipi-tower-2.jpg" class="popupgallery"
                       title="Meeting Room Grand Slipi Tower, Jakarta Barat">
                        <img src="images/gallery/meeting-room/mr-grand-slipi-tower-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Grand Slipi Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-kirana-tower.jpg" class="popupgallery"
                       title="Meeting Room Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/meeting-room/mr-kirana-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-kirana-tower-2.jpg" class="popupgallery"
                       title="Meeting Room Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/meeting-room/mr-kirana-tower-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-menara-rajawali.jpg" class="popupgallery"
                       title="Meeting Room Menara Rajawali, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-menara-rajawali.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Menara Rajwali
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-office8.jpg" class="popupgallery"
                       title="Meeting Room Office 8, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-office8.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Office 8
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-the-city-tower.jpg" class="popupgallery"
                       title="Meeting Room The City Tower, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-the-city-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The City Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 meeting-room">
                    <a href="images/gallery/meeting-room/mr-the-city-tower-2.jpg" class="popupgallery"
                       title="Meeting Room The City Tower, Jakarta Selatan">
                        <img src="images/gallery/meeting-room/mr-the-city-tower-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The City Tower
                        </div>
                    </a>
                </div>
                <!-- GALLERY SERVICED OFFICE -->
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-bsd.jpg" class="popupgallery"
                       title="Serviced Office My Republic Plaza BSD, Tangerang">
                        <img src="images/gallery/serviced-office/so-bsd.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> My Republic Plaza BSD
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-centennial.jpg" class="popupgallery"
                       title="Serviced Office Centennial Tower, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-centennial.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Centennial Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-centennial-tower.jpg" class="popupgallery"
                       title="Serviced Office Centennial Tower, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-centennial-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Centennial Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-ceo.jpg" class="popupgallery"
                       title="Serviced Office The CEO Building, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-ceo.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The CEO Building
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-ceo-2.jpg" class="popupgallery"
                       title="Serviced Office The CEO Building, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-ceo-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The CEO Building
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-graha-surveyor.jpg" class="popupgallery"
                       title="Serviced Office Graha Surveyor, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-graha-surveyor.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Graha Surveyor
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-graha-surveyor-2.jpg" class="popupgallery"
                       title="Serviced Office Graha Surveyor, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-graha-surveyor-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Graha Surveyor
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-kirana.jpg" class="popupgallery"
                       title="Serviced Office Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/serviced-office/so-kirana.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-kuningan.jpg" class="popupgallery"
                       title="Serviced Office Menara Kuningan, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-kuningan.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Menara Kuningan
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-office8.jpg" class="popupgallery"
                       title="Serviced Office Office 8, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-office8.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Office 8
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-office8-2.jpg" class="popupgallery"
                       title="Serviced Office Office 8, Jakarta Selatan">
                        <img src="images/gallery/serviced-office/so-office8-2.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Office 8
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-rawamangun.jpeg" class="popupgallery"
                       title="Serviced Office Eastink Rawamangun, Jakarta Timur">
                        <img src="images/gallery/serviced-office/so-rawamangun.jpeg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Eastlink Rawamangun
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 serviced-office">
                    <a href="images/gallery/serviced-office/so-tct.jpg" class="popupgallery"
                       title="Serviced Office The City Tower, Jakarta Pusat">
                        <img src="images/gallery/serviced-office/so-tct.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The City Tower
                        </div>
                    </a>
                </div>
                <!-- GALLERY LOUNGE -->
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-centennial-tower.jpg" class="popupgallery"
                       title="Lounge Centennial Tower, Jakarta Selatan">
                        <img src="images/gallery/lounge/lounge-centennial-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Centennial Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-graha-surveyor.jpg" class="popupgallery"
                       title="Lounge Graha Surveyor, Jakarta Selatan">
                        <img src="images/gallery/lounge/lounge-graha-surveyor.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Graha Surveyor
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-jimbaran-hub.jpg" class="popupgallery"
                       title="Lounge Jimbaran Hub, Bali">
                        <img src="images/gallery/lounge/lounge-jimbaran-hub.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Jimbaran Hub
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-kencana.jpg" class="popupgallery"
                       title="Lounge Kencana Tower, Jakarta Barat">
                        <img src="images/gallery/lounge/lounge-kencana.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kencana Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-kirana.jpg" class="popupgallery"
                       title="Lounge Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/lounge/lounge-kirana.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lounge">
                    <a href="images/gallery/lounge/lounge-the-city-tower.jpg" class="popupgallery"
                       title="Lounge The City Tower, Jakarta Pusat">
                        <img src="images/gallery/lounge/lounge-the-city-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The City Tower
                        </div>
                    </a>
                </div>
                <!-- GALLERY LOBBY -->
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-bsd.jpg" class="popupgallery"
                       title="Lobby My Republic Plaza BSD, Tangerang">
                        <img src="images/gallery/lobby/lobby-bsd.jpg" class="popupgallery" data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> My Republic Plaza BSD
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-graha-surveyor.jpg" class="popupgallery"
                       title="Lobby Graha Surveyor, Jakarta Selatan">
                        <img src="images/gallery/lobby/lobby-graha-surveyor.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Graha Surveyor
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-grand-slipi-tower.jpg" class="popupgallery"
                       title="Lobby Grand Slipi Tower, Jakarta Barat">
                        <img src="images/gallery/lobby/lobby-grand-slipi-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Grand Slipi Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-kencana-tower.jpg" class="popupgallery"
                       title="Lobby Kencana Tower, Jakarta Barat">
                        <img src="images/gallery/lobby/lobby-kencana-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kencana Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-the-city-tower.jpg" class="popupgallery"
                       title="Lobby The City Tower, Jakarta Pusat">
                        <img src="images/gallery/lobby/lobby-the-city-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> The City Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-kirana-tower.jpg" class="popupgallery"
                       title="Lobby Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/lobby/lobby-kirana-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-menara-rajawali.jpg" class="popupgallery"
                       title="Lobby Menara Rajawali, Jakarta Selatan">
                        <img src="images/gallery/lobby/lobby-menara-rajawali.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Menara Rajawali
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-office8.jpg" class="popupgallery"
                       title="Lobby Office 8, Jakarta Selatan">
                        <img src="images/gallery/lobby/lobby-office8.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Office 8
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 lobby">
                    <a href="images/gallery/lobby/lobby-rawamangun.jpg" class="popupgallery"
                       title="Lobby Eastlink Rawamangun, Jakarta Timur">
                        <img src="images/gallery/lobby/lobby-rawamangun.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Eastlink Rawamangun
                        </div>
                    </a>
                </div>
                <!-- GALLERY PANTRY -->
                <div class="col-sm-3 col-xs-6 pantry">
                    <a href="images/gallery/pantry/pantry-grand-slipi-tower.jpg" class="popupgallery"
                       title="Pantry Grand Slipi Tower, Jakarta Barat">
                        <img src="images/gallery/pantry/pantry-grand-slipi-tower.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Grand Slipi Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 pantry">
                    <a href="images/gallery/pantry/pantry-kencana.jpg" class="popupgallery"
                       title="Pantry Kencana Tower, Jakarta Barat">
                        <img src="images/gallery/pantry/pantry-kencana.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kencana Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 pantry">
                    <a href="images/gallery/pantry/pantry-kirana.jpg" class="popupgallery"
                       title="Pantry Kirana Two Tower, Jakarta Utara">
                        <img src="images/gallery/pantry/pantry-kirana.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Kirana Two Tower
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 pantry">
                    <a href="images/gallery/pantry/pantry-menara-kuningan.jpg" class="popupgallery"
                       title="Pantry Menara Kuningan, Jakarta Selatan">
                        <img src="images/gallery/pantry/pantry-menara-kuningan.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Menara Kuningan
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 col-xs-6 pantry">
                    <a href="images/gallery/pantry/pantry-office8.jpg" class="popupgallery"
                       title="Pantry Office 8, Jakarta Selatan">
                        <img src="images/gallery/pantry/pantry-office8.jpg" class="popupgallery"
                             data-effect="mfp-zoom-out">
                        <div class="custom-img-title">
                            <i class="fas fa-map-marker-alt"></i> Office 8
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
</div>

<?php include('footer-redesign.html'); ?>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/scripts.js"></script>
<!--Magnific Pop Up-->
<script src="plugins/magnific-popup/jquery.magnific-popup.js"></script>
<script type="text/javascript">

    function changeGallery(e) {
        totalButton = document.getElementsByClassName('btn-group-active');
        for (var i = 0; i < totalButton.length; i++) {
            totalButton[i].classList.remove('btn-group-active');
        }
        e.classList.add('btn-group-active');
        var label = e.innerHTML.toLowerCase().replace(" ", "-");
        totalImage = document.getElementsByClassName('col-sm-3');
        for (var j = 0; j < totalImage.length; j++) {
            totalImage[j].style.display = 'none';
        }
        if (label != 'all') {
            showImage = document.getElementsByClassName(label);
            for (var k = 0; k < showImage.length; k++) {
                showImage[k].style.display = 'block';
            }
        } else {
            for (var l = 0; l < totalImage.length; l++) {
                totalImage[l].style.display = 'block';
            }
        }

    }
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

</body>
</html>
</body>
