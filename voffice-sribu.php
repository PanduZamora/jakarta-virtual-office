<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>vOffice x Sribu</title>

  <meta name="description" content="vOffice x Sribu" />

  <meta name="robots" content="index,follow" />
  <meta name="Author" content="vOffice.co.id">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/custom-new.min.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/ads.css" type="text/css">
  <link href="assets/css/voffice-sribu.css" rel="stylesheet" type="text/css">
  <link href="css/index-slider.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/css/virtual-office-scbd.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    .card-body-content .card-text {
      font-size: 14px !important;
      color: #000 !important;
    }

    .customer-logos img {
      width: 60%;
    }

    .lists li {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .place-self-center {
      display: flex;
      align-content: center;
      align-items: center;
    }

    @media (max-width:600px) {
      .place-self-center {
        display: block !important;
        align-content: center;
        align-items: center;
      }
    }

    .nav-utility {
      height: 40px;
      line-height: 40px;
      border-bottom: 0px solid #000;
      overflow: hidden;
      background: rgb(23 21 21 / 80%);
    }

    .button-purple {
      background-color: #951942;
      padding: 10px 30px 10px 30px;
      border-radius: 5px;
    }

    .overlay-black {
      position: absolute;
      z-index: 2;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.4);
    }

    .card-footer i {
      margin-left: 1rem;
      color: #fff;
    }

    .card-footer a {
      color: #fff;
      font-weight: 600;
    }

    .card-footer {
      padding: 1.3rem 1rem 1.3rem 0rem;
      background-color: #951942;
      border-top: 1px solid #eaedf2;
      text-align: center;
      font-weight: 700;
      color: #fff;
      font-size: 16px;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
    }

    #text {
      display: none;
      width: -webkit-fill-available;
    }

    .card.card-slide-location {
      width: 90% !important;
      display: block;
      margin: auto;
    }

    .img-9x16 {
      height: auto;
      width: -webkit-fill-available;
      -o-object-fit: cover;
      object-fit: cover;
      border-top-left-radius: calc(1rem - 1px);
      border-top-right-radius: calc(1rem - 1px);
      height: 250px;
    }

    @media screen and (min-width:1px) and (max-width:320px) {
      .img-9x16 {
        width: -webkit-fill-available;
        -o-object-fit: cover;
        object-fit: cover;
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
        height: 200px !important;
      }

      .card-footer a {
        font-size: 14px;
        color: #000;
        font-weight: 600;
      }

      .card-body-content h5 {
        font-size: 18px;
        line-height: normal !important;
        margin-bottom: 20px !important;
        letter-spacing: 0;
        font-weight: 600;
        color: #000 !important;
      }

      .card-body-content .card-text {
        font-size: 16px !important;
        color: grey;
      }

      .button-slider {
        margin-top: 0rem !important;
      }
    }

    @media screen and (min-width:321px) and (max-width:390px) {


      .card-body-content h5 {
        font-size: 24px;
        line-height: normal !important;
        margin-bottom: 20px !important;
        letter-spacing: 0;
        font-weight: 600;
        color: #000 !important;
      }

      .card-body-content .card-text {
        font-size: 18px;
        color: grey;
      }

      .card-footer a {
        color: #000;
        font-weight: 600;
        font-size: 18px;
      }

      .card.card-slide-location {
        width: 100% !important;
        display: block;
        margin: auto;
      }

      .img-9x16 {
        height: auto;
        width: -webkit-fill-available;
        -o-object-fit: cover;
        object-fit: cover;
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
        height: 250px;
      }
    }

    @media screen and (min-width:391px) and (max-width:500px) {
      .card.card-slide-location {
        width: 100% !important;
        display: block;
        margin: auto;
      }

      .card-footer a {
        color: #000;
        font-size: 18px;
        font-weight: 600;
      }
    }

    @media (max-width: 600px) {
      .section1 {
        height: auto;
        margin-top: 90px!important;
      }
    }
  </style>

</head>

<body class="location-detail">

  <div class="nav-container">
    <nav class="absolute transparent">
      <div class="nav-bar">
        <div class="module left">
          <a href="https://voffice.co.id/jakarta-virtual-office/virtual-office.php">
            <img class="logo logo-light" alt="vOffice Indonesia" src="img/logo-voffice2-dark.png">
            <img class="logo logo-dark" alt="vOffice Indonesia" src="img/logo-voffice2-dark.png">
          </a>
        </div>
        <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
          <i class="ti-menu"></i>
        </div>
        <div class="module-group right">
          <div class="module left">
            <ul class="menu">
              <li>
                <a href="#section1" class="js-scroll-trigger uppercase">Home</a>
              </li>
              <li>
                <a href="#section2" class="js-scroll-trigger uppercase">
                  Lokasi vOffice
                </a>
              </li>
              <li>
                <a href="#section3" class="js-scroll-trigger uppercase">
                  Fasilitas & Layanan
                </a>
              </li>

              <li>
                <a href="#section4" class="js-scroll-trigger uppercase">
                  Mengapa vOffice?
                </a>
              </li>

              <li>
                <a href="#section6" class="js-scroll-trigger uppercase">
                  Package
                </a>
              </li>

              <li>
                <a href="#section5" class="js-scroll-trigger uppercase">
                  Kontak
                </a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <section class="section1" style="background-color: #f1f1f1;">
    <div class="container">
      <div class="row place-self-center">
        <div class="col-md-6">
          <div class="desc">
            <h1 class="title em">
              <span class="tt-n">Special Offer For</span>
              <br>
              <span class="em-purple">Sribu Members!</span>
            </h1>
            <p class="bold">
              free 10 jam private office dan meeting room
            </p>
            <div class="hide-pc">
              <div class="web-banner">
                <img src="assets/img/sribu/web-banner.jpg" alt="" class="img-fluid">
                <img src="assets/img/sribu/web-banner-2.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="grid-button">
              <a href="#more-info" class="btn btn-filled">
                Info Selengkapnya <i class="fa fa-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>

        </div>
        <div class="col-md-6 hide-mobile">
          <div class="web-banner">
            <img src="assets/img/sribu/web-banner.jpg" alt="" class="img-fluid ">
            <img src="assets/img/sribu/web-banner-2.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="service-section p_relative sec-pad centred" id="lihat-selengkapnya" style="background-image: url('img/new/bg-jakarta.jpg'); background-position: fixed;">
    <div class="auto-container" id="section3">
      <div class="sec-title p_relative d_block mb_50 centred" id="more-info">
        <span class="p_relative d_block fs_16 lh_20 fw_medium pt_20 mb_6">what we’re offering</span>
        <h2 class="fw_bold">Fasilitas & Layanan <br> <strong class="font-purple">vOffice</strong></h2>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="grid__card">
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/alamat-bisnis.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">
                    Alamat Bisnis Prestisius
                  </h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/call-answering.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Layanan Call Answering</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/mail-handling.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Layanan Mail Handling</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/Meeting Room.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Meeting Room</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/pkp.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Pengurusan PKP</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/PT_CV.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Pembuatan PT / CV</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/resepsionis.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Layanan Resepsionis</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/so.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Serviced Office</h3>
                </div>
              </div>
            </div>
            <div class="grid__item">
              <div class="card"><img class="card__img" src="assets/img/scbd/slider/event-space.jpg" alt="Snowy Mountains">
                <div class="card__content">
                  <h3 class="card__header">Event Space</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <div class="button-slider">
            <a class="Button-new White">Alamat bisnis prestisius</a>
            <a class="Button-new White">Domisili Gedung</a>
            <a class="Button-new White">Lokasi Strategis</a>
            <a class="Button-new White">Kantor Representatif</a>
            <a class="Button-new White">Keperluan PKP</a>
          </div>
          <span id="text">
            <div class="button-slider">
              <a class="Button-new White">Meeting Room</a>
              <a class="Button-new White">Projector</a>
              <a class="Button-new White">Writing Board</a>
              <a class="Button-new White">Smart TV</a>
              <a class="Button-new White">Event Space</a>

              <a class="Button-new White">Live Streaming Studio</a>
              <a class="Button-new White">Podcast Studio</a>
              <a class="Button-new White">Resepsionis</a>
              <a class="Button-new White">Mail & Visitor Handling</a>
              <a class="Button-new White">Call Answering Service</a>

              <a class="Button-new White">Dedicated Phone Number</a>
              <a class="Button-new White">Private Office</a>
              <a class="Button-new White">Sertifikat Perjakbi</a>
              <a class="Button-new White">Workspace</a>
              <a class="Button-new White">Notifikasi Paket & Surat Masuk</a>

              <a class="Button-new White">Notifikasi Pesan Masuk</a>
              <a class="Button-new White">Free Flow Tea & Coffee</a>
              <a class="Button-new White">Akses Semua Center vOffice</a>
              <a class="Button-new White">Akses Seminar</a>
              <a class="Button-new White">Worldwide Call Transfer</a>

              <a class="Button-new White">Personalized Voice Mail</a>
              <a class="Button-new White">Company Signage</a>
              <a class="Button-new White">Internet</a>
              <a class="Button-new White">Livebox</a>
              <a class="Button-new White">Daily Cleaning</a>
            </div>
          </span>
          <button id="toggle" class="btn">Lihat Selengkapnya</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Location -->
  <section id="section2">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center mb-0">
          <h2 class="mb16"> Lokasi <b> Kami </b></h2>
          <h4 class="mt-1">Semua center vOffice dimiliki & dikelola sendiri</h4>
          <div class="hr center mb20-lg mb10-xs"></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="lokasi-slider">
            <!-- Centennial Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/centennial-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Centennial Tower</h5>
                  <p class="card-text">
                    Level 29 Centennial Tower, Jl. Gatot Subroto No.27,
                    Karet Semanggi, Kec Setiabudi, Kota Jakarta Selatan, Kota Jakarta 12950
                  </p>
                </div>

              </div>
            </div>

            <!-- Menara Rajawali -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/menara-rajawali.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Menara Rajawali</h5>
                  <p class="card-text">
                    Menara Rajawali, 7th FLoor, JL. Mega kuningan Setiabudi, Lot No.5.1, Jakarta Selatan, DKI Jakarta 12950
                  </p>
                </div>

              </div>
            </div>

            <!-- Menara Kuningan -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/menara-kuningan.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Menara Kuningan</h5>
                  <p class="card-text">
                    Menara Kuningan Lantai 30 Unit B-C , Jl. H. Rasuna Said Kel, Karet Kuningan,
                    Kec. Setiabudi, Jakarta Selatan 12940
                  </p>
                </div>

              </div>
            </div>

            <!-- The City Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/the-city-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">The City Tower</h5>
                  <p class="card-text">
                    The City Tower, Jl. MH Thamrin No.81, Dukuh Atas, Menteng, Kec. Menteng,
                    Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310
                  </p>
                </div>

              </div>
            </div>

            <!-- PIK -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/gold-coast-pik.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">vOffice PIK</h5>
                  <p class="card-text">
                    Gold Coast Office Eiffel Tower, Jl. Pantai Indah Kapuk, Kec. Penjaringan, Jkt Utara,
                    Daerah Khusus Ibukota Jakarta
                  </p>
                </div>

              </div>
            </div>

            <!-- Atria Sudirman -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/atria-sudirman.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Atria Sudirman</h5>
                  <p class="card-text">
                    Atria Sudirman Lt 23, Jl. Jenderal Sudirman, Karet Tengsin, Kecamatan Tanah Abang,
                    Daerah Khusus Ibukota Jakarta 10220
                  </p>
                </div>

              </div>
            </div>

            <!-- MOI  -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/moi.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Mall Of Indonesia</h5>
                  <p class="card-text">
                    Mall Of Indonesia, Jl. Boulevard Bar. Raya No.12, Klp. Gading Bar., Kec. Klp.
                    Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240
                  </p>
                </div>
              </div>
            </div>

            <!-- Grand Slipi Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/grand-slipi.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Grand Slipi Tower</h5>
                  <p class="card-text">
                    Grand Slipi Tower 42G-H Jl. S Parman Kav 22-24, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480
                  </p>
                </div>

              </div>
            </div>

            <!-- Kirana Two Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/kirana-two-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Kirana Two Tower</h5>
                  <p class="card-text">
                    Kirana Two Tower, Level 10-A, Jl. Boulevard Timur No.88 Kec.
                    Kelapa Gading, Kel, Pegangsaan Dua, Daerah Khusus Ibukota Jakarta 14250
                  </p>
                </div>

              </div>
            </div>

            <!-- Treasury Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/treasury tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Treasury Tower</h5>
                  <p class="card-text">
                    Treasury Tower 6th floor Unit F Jl Jend Sudirman Kav 52-53, SCBD, Daerah Khusus Ibukota Jakarta
                  </p>
                </div>

              </div>
            </div>

            <!-- the ceo building -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/ceo-building.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">The CEO Building</h5>
                  <p class="card-text">
                    Jl. TB Simatupang No.18C, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430
                  </p>
                </div>

              </div>
            </div>

            <!-- sudirman 78 -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/Sudirman 7.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Sudirman 7.8</h5>
                  <p class="card-text">
                    Level 16 Unit 1 & 2, Jl. Jenderal Sudirman Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10220
                  </p>
                </div>

              </div>
            </div>

            <!-- office 8 -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/office8.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Office 8</h5>
                  <p class="card-text">
                    Office 8, Jl. Senopati No.8B, Senayan, Kebayoran Baru, South Jakarta City, Jakarta 12190
                  </p>
                </div>

              </div>
            </div>

            <!-- voffice east -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/east.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">vOffice East</h5>
                  <p class="card-text">
                    vOffice East Rawamangun, Jl. Pemuda No.33B, Jati, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220
                  </p>
                </div>

              </div>
            </div>

            <!-- metropolitan tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/metropolitan-twer.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Metropolitan Tower</h5>
                  <p class="card-text">
                    Jl. R.A. Kartini Jl. TB Simatupang No.Kav. 14, Cilandak Bar., Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430
                  </p>
                </div>

              </div>
            </div>

            <!-- GKM tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/gkm-twer.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">GKM Tower</h5>
                  <p class="card-text">
                    Level 20. GKM Green Tower, Jl. TB Simatupang. Kav. 89G, Kebagusan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520
                  </p>
                </div>

              </div>
            </div>

            <!-- graha surveyor indonesia -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/graha-surveyor.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Graha Surveyor Indonesia</h5>
                  <p class="card-text">
                    Graha Surveyor Lt 15, Jl. Gatot Subroto No.Kav 56, Kuningan Tim., Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950
                  </p>
                </div>

              </div>
            </div>

            <!-- the honey lady -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/the-honey-lady.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">The Honey Lady</h5>
                  <p class="card-text">
                    CBD Pluit, Jl. Pluit Selatan Raya No.1, Penjaringan, Kec. Penjaringan, Jkt Utara, Daerah Khusus Ibukota Jakarta 14440
                  </p>
                </div>

              </div>

            </div>

            <!-- kencana tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/kencana-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Kencana Tower</h5>
                  <p class="card-text">
                    Kencana Tower, Business Park Kb. Jeruk, Jl. Meruya Ilir Raya No.88, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11620
                  </p>
                </div>

              </div>
            </div>

            <!-- BSD Green Office Park -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/green-bsd.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">BSD Green Office Park</h5>
                  <p class="card-text">
                    My Republic Plaza (d/h Green Office Park 6), Wing A Lantai Dasar Zona 6 Jalan Grand Boulevard, Jl. BSD Green Office Park, Sampora, Kec. Cisauk, Kabupaten Tangerang, Banten 15345
                  </p>
                </div>

              </div>

            </div>

            <!-- The Prominence Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/prominence-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">The Prominence Tower</h5>
                  <p class="card-text">
                    Perumahan Alam Sutera, Level 28, Jl. Jalur Sutera Bar. No.15, Panunggangan Tim., Kec. Pinang, Kota Tangerang, Banten 15143
                  </p>
                </div>

              </div>
            </div>

            <!-- Plaza Summarecon Bekasi -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/summarecon-bekasi.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Plaza Summarecon Bekasi</h5>
                  <p class="card-text">
                    Plaza Summarecon Bekasi, Jl. Bulevar Ahmad Yani No.Kav K.01, Harapan Mulya, Kecamatan Medan Satria, Kota Bks, Jawa Barat 17142
                  </p>
                </div>

              </div>

            </div>

            <!-- Mensana Tower -->
            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/mensana-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Mensana Tower</h5>
                  <p class="card-text">
                    Level 5 (Hotel Avenzel), Jl. Raya Kranggan, Pondok Gede Jatisampurna Bekasi
                  </p>
                </div>

              </div>
            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/braga-bandung.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Braga Bandung</h5>
                  <p class="card-text">
                    Jl. Braga No.109, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/japfa-tower-ii.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">JAPFA Tower II</h5>
                  <p class="card-text">
                    LEVEL 12, JL PANGLIMA SUDIRMAN KAV 66-68, SURABAYA PUSAT
                    SURABAYA, JAWA TIMUR 60271
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/intiland-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Intiland Tower</h5>
                  <p class="card-text">
                    Surabaya, Jawa Timur
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/spazio-tower.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">SPAZIO</h5>
                  <p class="card-text">
                    Level 5, Jl. Mayjen Yono Suwoyo No.Kav 3, Dukuh Pakis, Surabaya
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/grand-jati-junction.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">GRAND JATI JUNCTION</h5>
                  <p class="card-text">
                    Grand Jati Junction Mall, Level P1, Jl. Perintis Kemerdekaan No.3A, Perintis, Kec. Medan Tim., Kota Medan, Sumatera Utara 20231
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/kembali-innovation-hub.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Jl. Sunset Road No.28, Seminyak, Kuta, Kabupaten Badung, Bali</h5>
                  <p class="card-text">
                    Bali
                  </p>
                </div>

              </div>

            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/jimbaran-hub.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">Jimbaran HUB</h5>
                  <p class="card-text">
                    Jl. Karang Mas, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361
                  </p>
                </div>

              </div>
            </div>

            <div class="card card-slide-location">
              <img class="aspect-16to9 card-img-top img-9x16" src="images/thumbnail-gedung/canggu.jpg" alt="" />

              <div class="card-body p-16to9">

                <div class="card-body-content">
                  <h5 class="card-title">vOffice Canggu</h5>
                  <p class="card-text">
                    Canggu, Bali
                  </p>
                </div>

              </div>

              <div class="card-footer">
                <a href="office-jimbaran.php">
                  Lihat Lokasi <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>

            </div>

          </div>
        </div>
      </div>

    </div>

  </section>

  <section class="pricing-section" id="pricing-card" style="background-image: url('https://investinasia.id/img/pricing-bg.jpg');">
    <div class="container">
      <div class="row mb48">
        <div class="col-md-12">
          <h2 class="text-center bold">
            Virtual Office Package
          </h2>
          <p class="text-center lead bold">
            Pilih paket virtual office Anda dan jadi selangkah lebih cepat dari kempetitor Anda.
          </p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="tabs-box">
        <div class="tabs-content">
          <div class="tab active-tab" id="tab-1">
            <div class="row clearfix">

              <div class="col-lg-4 col-md-4 col-sm-12 pricing-block">
                <div class="pricing-block-one">
                  <div class="pricing-table">
                    <div class="table-header">
                      <div class="price-box">
                        <img src="assets/img/sribu/silver.webp" alt="" class="img-fluid">
                        <p class="bold pricing lead"> IDR 6.900.000</p>
                        <p>(SPECIAL PRICE)</p>
                        <br>
                        <p class="mt16">For Sribu Member</p>
                      </div>
                      <div class="table-footer pb-0">
                        <a href="https://bit.ly/vofficesribu" rel="nofollow noopener" target="blank">ask for proposals <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="table-content">
                      <ul class="clearfix">
                        <h4 class="text-center bold button">
                          VIRTUAL OFFICE
                        </h4>
                        <hr>
                        <h4 class="text-center bold">
                          BUSINESS ADDRESS
                        </h4>
                        <li>Prestigious Business Address <span>✅</span></li>
                        <li>Mail Handling & Parcel Reception <span>✅</span></li>
                        <li>SMS / Mail notification for incoming parcel or mail <span>✅</span></li>
                        <li>Building domicile letter <span>✅</span></li>
                        <li>Perjakbi Certificate <span>✅</span></li>
                        <h4 class="text-center bold button">
                          PLAN DETAILS
                        </h4>
                        <h4 class="text-center bold">
                          FACILITY
                        </h4>
                        <span class="dots"></span><span class="more">
                          <li>Meeting Room Usage /month <strong class="jumbotron-table">(1hour) </strong></li>
                          <li><del class="text-bold">1 hour Workspace Usage /month </del> ❌</li>
                          <li><del class="text-bold">Private Office Usage /month </del> ❌</li>
                          <hr>
                          <h4 class="text-center bold pb0 button">
                            MEMBERSHIP
                          </h4>
                          <h4 class="text-center bold">
                            NETWORKING
                          </h4>
                          <li>Unlimited access to all voffice centres <span>✅</span></li>
                          <li>Free access to seminars <span>✅</span></li>
                          <li>Tea & Coffee <span>✅</span></li>
                          <li>Elegant reception service <span>✅</span></li>
                          <h4 class="text-center bold">
                            CALL HANDLING
                          </h4>
                          <li><del>Dedicated Local Telephone Number</del> ❌</li>
                          <li><del>Professional Call Answering Service</del> ❌</li>
                          <li><del>SMS or Email Notification</del> ❌</li>
                          <li><del>Free Call Transfer Worldwide</del> ❌</li>
                          <li><del> Personalized Voicemail</del> ❌</li>
                          <h4 class="text-center bold">
                            EQUIPMENT
                          </h4>
                          <li><del>1 year Signage</del> ❌</li>
                          <li><del>Professional Call Answering Service</del> ❌</li>
                        </span>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 pricing-block">
                <div class="pricing-block-one">
                  <div class="pricing-table">
                    <div class="table-header">
                      <div class="price-box">
                        <img src="assets/img/sribu/gold.webp" alt="" class="img-fluid">
                        <p class="bold pricing lead">IDR 9.500.000</p>
                        <p>SPECIAL PRICE</p>
                        <br>
                        <p class="mt16">For Sribu Member</p>
                      </div>
                      <div class="table-footer pb-0">
                        <a href="https://bit.ly/vofficesribu" rel="nofollow noopener" target="blank">ask for proposals <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="table-content">
                      <ul class="clearfix">
                        <h4 class="text-center bold button">
                          VIRTUAL OFFICE
                        </h4>
                        <hr>
                        <h4 class="text-center bold">
                          BUSINESS ADDRESS
                        </h4>
                        <li>Prestigious Business Address <span>✅</span></li>
                        <li>Mail Handling & Parcel Reception <span>✅</span></li>
                        <li>SMS / Mail notification for incoming parcel or mail <span>✅</span></li>
                        <li>Building domicile letter <span>✅</span></li>
                        <li>Perjakbi Certificate <span>✅</span></li>
                        <h4 class="bold text-center button">
                          PLAN DETAILS
                        </h4>
                        <span class="dots"></span><span class="more">
                          <h4 class="bold text-center">
                            FACILITY
                          </h4>
                          <li>Meeting Room Usage /month <strong class="jumbotron-table">5 hour</strong></li>
                          <li>1 hour Workspace Usage /month <strong class="jumbotron-table">14 hours</strong></li>
                          <li><del>Private Office Usage /month</del> ❌</li>
                          <hr>
                          <h4 class="bold text-center button">
                            MEMBERSHIP
                          </h4>
                          <h4 class="bold text-center">
                            NETWORKING
                          </h4>
                          <li>Unlimited access to all voffice centres <span> ✅</span></li>
                          <li>Free access to seminars <span> ✅</span></li>
                          <li>Tea & Coffee <span> ✅</span></li>
                          <li>Elegant reception service <span> ✅</span></li>
                          <h4 class="bold text-center">
                            CALL HANDLING
                          </h4>
                          <li>Dedicated Local Telephone Number <span>✅</span></li>
                          <li>Professional Call Answering Service <span>✅</span></li>
                          <li>SMS or Email Notification <span>✅</span></li>
                          <li><del>Free Call Transfer Worldwide</del> ❌</li>
                          <li><del> Personalized Voicemail</del> ❌</li>
                          <h4 class="bold text-center">
                            EQUIPMENT
                          </h4>
                          <li><del>1 year Signage</del> ❌</li>
                          <li><del>Professional Call Answering Service</del> ❌</li>
                        </span>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-12 pricing-block">
                <div class="pricing-block-one">
                  <div class="pricing-table">
                    <div class="table-header">
                      <div class="price-box">
                        <img src="assets/img/sribu/platinum-best-seller.webp" class="img-fluid" alt="" style="margin-bottom: 3rem;width: -webkit-fill-available;">
                        <p class="bold pricing lead">IDR 12.400.000</p>
                        <p>SPECIAL PRICE</p>
                        <br>
                        <p class="mt16">For Sribu Member</p>
                      </div>
                      <div class="table-footer pb-0">
                        <a href="https://bit.ly/vofficesribu" rel="nofollow noopener" target="blank">ask for proposals <i class="fa fa-info-circle" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="table-content">
                      <ul class="clearfix">
                        <h4 class="text-center bold button">
                          VIRTUAL OFFICE
                        </h4>
                        <hr>
                        <h4 class="text-center bold">
                          BUSINESS ADDRESS
                        </h4>
                        <li>Prestigious Business Address <span>✅</span></li>
                        <li>Mail Handling & Parcel Reception <span>✅</span></li>
                        <li>SMS / Mail notification for incoming parcel or mail <span>✅</span></li>
                        <li>Building domicile letter <span>✅</span></li>
                        <li>Perjakbi Certificate <span>✅</span></li>
                        <h4 class="bold text-center button">
                          PLAN DETAILS
                        </h4>
                        <span class="dots"></span><span class="more">
                          <h4 class="bold text-center">
                            FACILITY
                          </h4>
                          <li>Meeting Room Usage /month <strong class="jumbotron-table">8 hour</strong></li>
                          <li>1 hour Workspace Usage /month <strong class="jumbotron-table">8 hours</strong></li>
                          <li>Private Office Usage /month <strong class="jumbotron-table">3 hours</strong></li>
                          <h4 class="bold text-center button">
                            MEMBERSHIP
                          </h4>
                          <h4 class="bold text-center">
                            NETWORKING
                          </h4>
                          <li>Unlimited access to all voffice centres <span>✅</span></li>
                          <li>Free access to seminars <span>✅</span></li>
                          <li>Tea & Coffee <span>✅</span></li>
                          <li>Elegant reception service <span>✅</span></li>
                          <h4 class="bold text-center">
                            CALL HANDLING
                          </h4>
                          <li>Dedicated Local Telephone Number <span>✅</span></li>
                          <li>Professional Call Answering Service <span>✅</span></li>
                          <li>SMS or Email Notification <span>✅</span></li>
                          <li>Free Call Transfer Worldwide <span>✅</span></li>
                          <li> Personalized Voicemail <span>✅</span></li>
                          <h4 class="bold text-center">
                            EQUIPMENT
                          </h4>
                          <li><del>1 year Signage</del> ❌</li>
                          <li><del>Professional Call Answering Service</del> ❌</li>
                        </span>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pricing-section end -->

  <section class="service-section p_relative sec-pad centred" id="section4" style="background-image: url('img/new/bg-jakarta.jpg'); background-position: fixed;">
    <div class="auto-container">
      <div class="sec-title p_relative d_block mb_50 centred " id="more-info">
        <h2 class="fw_bold">Mengapa <strong class="font-purple">vOffice</strong></h2>
        <span class="p_relative d_block fs_16 lh_20 fw_medium mb_6">vOffice merupakan Provider Virtual Office No.1 di Indonesia</span>
      </div>
      <div class="row clearfix">
        <div class="col-md-4">
          <div class="inner-box" style="padding: 10px;">
            <div class="icon-box p_relative d_iblock fs_65 lh_65 orange-color mb_15 z_1 tran_5">
              <img src="assets/img/why-voffice/voffice_stamps-18.webp" alt="" class="img-fluid w-80">
            </div>
            <p class="d_block fs_20 lh_26 fw_bold tran_5 pt_20">
              Sertifikat ISO 9001
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="inner-box" style="padding: 10px;">
            <div class="icon-box p_relative d_iblock fs_65 lh_65 orange-color mb_15 z_1 tran_5">
              <img src="assets/img/why-voffice/voffice_stamps-15.webp" alt="" class="img-fluid w-80">
            </div>
            <p class="d_block fs_20 lh_26 fw_bold tran_5 pt_20">
              Jaminan Kepuasan Pelanggan
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="inner-box" style="padding: 10px;">
            <div class="icon-box p_relative d_iblock fs_65 lh_65 orange-color mb_15 z_1 tran_5">
              <img src="assets/img/why-voffice/voffice_stamps-16.webp" alt="" class="img-fluid w-80">
            </div>
            <p class="d_block fs_20 lh_26 fw_bold tran_5 pt_20">
              #1 Virtual Office di Indonesia
            </p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12">
          <h3 class="d_block mb_6 bold text-center lead-why">
            Rekor MURI Kantor Virtual dengan Lokasi Terbanyak
          </h3>
          <p class="text-center">
            Suatu kebanggaan untuk kami melihat bisnis anda tumbuh & berkembang
          </p>
        </div>
        <div class="col-md-6">
          <div class="amenity">
            <div class="big-icon center">
              <img src="assets/img/why-voffice/pemprov-dki.webp" alt="" class="img-fluid">
            </div>
            <div class="desc">
              <div class="title text-left">Sejak 2016, Penggunaan Virtual Office telah disahkan oleh Gubernur DKI Jakarta</div>
              <p class="text-left">
                ( SURAT EDARAN PTSP NO. 06/SE/2016 )
              </p>
            </div>
          </div>
          <div class="amenity">
            <div class="big-icon center">
              <img src="assets/img/why-voffice/iso-voffice.png" alt="" class="img-fluid">
            </div>
            <div class="desc">
              <div class="title text-left">Certificate of Registration</div>
              <p class="text-left">
                ISO 9001:2008 | Certificate Number : QM 0647
                This is to certify that the Quality Management System of : vOffice
                Provision of Serviced Offices and Virtual Office
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <img src="assets/img/image-blog-muri.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section id="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sec-title p_relative d_block mb_50 centred " id="more-info">
            <h2 class="fw_bold">Lokasi <strong class="font-purple">vOffice</strong></h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mapping">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.255162215993!2d106.81821597499038!3d-6.230053693758079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e799d285b7%3A0x1a1359055467a9ec!2svOffice%20Indonesia%20-%20Headquarter%20(Virtual%20Office%20%7C%20Serviced%20Office%20%7C%20Event%20Space%20%7C%20Meeting%20Room)!5e0!3m2!1sen!2sid!4v1690876684961!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--=======================================Modal Form========================================-->
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

            <input type="text" name="virtualoffice" hidden="hidden" value="virtualoffice" id="virtualoffice">

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
  <!--=======================================End Of Modal Form========================================-->


  <?php include "partner-landing-page.php" ?>

  <section class="bg-secondary pt24 pb24">
    <div class="container">
      <div class="col-md-12 text-center">
        <div class="row">
          <div class="col-sm-12">
            <p class="bold mb8">
              Virtual Office gladly accepts:
            </p>
            <img class="image image-xs" src="img/footer-pay/visa.png" />
            <img class="image image-xs" src="img/footer-pay/mastercard.png" />
            <img class="image image-xs" src="img/footer-pay/paypal.png" />
            <img class="image image-xs" src="img/footer-pay/vo-bcacard.jpg" />
            <img class="image image-xs" src="img/footer-pay/vo-jcb.jpg" />
            <img class="image image-xs" src="img/footer-pay/id-bca.gif" />
            <img class="image image-xs" src="img/footer-pay/vo-prima.jpg" />
            <img class="image image-xs" src="img/footer-pay/vo-debitbca.jpg" />

          </div>
        </div>
        <p class="text-center" id="about-voffice">
          <span class="sub lang" key="footerone4">
            Sejak 2003, Virtual Office Indonesia (vOffice) telah melayani lebih dari 50.000 bisnis
            dan tersedia di lebih dari 42 lokasi. Virtual Office Indonesia memudahkan bisnis untuk berkembang
            pesat
            dan beroperasi dengan mudah. Untuk informasi lebih lanjut mengenai Virtual Office Indonesia,
            silakan hubungi kami di
            <a href="tel:+622130490000">
              02130490000
            </a>
            or email us at
            <a href="mailto:cs@voffice.co.id">
              cs@voffice.co.id
            </a>
          </span>
        </p>
      </div>
    </div>

  </section>


  <a href="https://bit.ly/vofficesribu" class="btn-whatsapp-pulse link-changer">
    <i class="fab fa-whatsapp"></i>
  </a>
  <style>
    .btn-whatsapp-pulse {
      background: #25d366;
      color: white;
      position: fixed;
      bottom: 20px;
      right: 20px;
      font-size: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 0;
      height: 0;
      padding: 35px;
      text-decoration: none;
      border-radius: 50%;
      animation-name: pulse;
      animation-duration: 1.5s;
      animation-timing-function: ease-out;
      animation-iteration-count: infinite;
      z-index: 999;
    }

    @keyframes pulse {
      0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5);
      }

      80% {
        box-shadow: 0 0 0 14px rgba(37, 211, 102, 0);
      }
    }
  </style>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/flexslider.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/ourpartner.min.js"></script>
  <!-- <script src="assets/js/link-id.js"></script> -->
  <!-- SLICK -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

  </script>
  <script>
    function enableSendButton() {
      console.log("terpanggil")
      var sendButton = document.querySelector('.send_form');
      sendButton.removeAttribute('disabled');
    }

    var onloadCallback = function() {
      grecaptcha.render('html_element', {
        'sitekey': '6LftMnImAAAAACSAf8QduzlABiHkAFbz5uINGeG-',
        'callback': enableSendButton // Panggil fungsi enableSendButton setelah captcha selesai
      });
    };

    $('.service-block').slick({
      infinite: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });

    $('.web-banner').slick({
      infinite: true,
      arrows: true,
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $('.lokasi-slider').slick({
      dots: true,
      arrows: true,
      infinite: true,
      autoplay: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            dots: false,
            arrows: true,
            infinite: true,
            autoplay: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });

    $(document).ready(function() {
      $("#toggle").click(function() {
        var elem = $("#toggle").text();
        if (elem == "Lihat Selengkapnya") {
          $("#toggle").text("Lihat Lebih Sedikit");
          $("#text").slideDown();
        } else {
          $("#toggle").text("Lihat Selengkapnya");
          $("#text").slideUp();
        }
      });
    });

    const link = window.location.href;
    const field = $(".field-changer");
    if (link.includes("?fbigads")) {
      $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
      $('.link-changer').attr('href', 'https://bit.ly/fbigadsvoffice');
      field.attr('value', 'virtualoffice_fbigads');
      field.attr('name', 'virtualoffice_fbigads');
      console.log(field)
    } else if (link.includes("?tiktokads")) {
      $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
      $('#wa-fb-ig').css("display", "none");
      $('#wa-fb-ig2').css("display", "none");
      $('#wa-fb-ig3').css("display", "none");
      $('#wa-fb-ig4').css("display", "none");
      $('#wa-fb-ig5').css("display", "none");
      $('#wa-fb-ig6').css("display", "none");
      $('#wa-fb-ig7').css("display", "none");
      $('.link-changer').attr('href', 'https://bit.ly/tiktokadsvoffice');
      field.attr('value', 'virtualoffice_tiktokads');
      field.attr('name', 'virtualoffice_tiktokads');
      console.log(field)
    } else if (link.includes("?sem")) {
      $('.text-changer').html('<i class="fab fa fa-whatsapp fa-lg mr-10"></i> Whatsapp');
      $('#wa-fb-ig').css("display", "none");
      $('#wa-fb-ig2').css("display", "none");
      $('#wa-fb-ig3').css("display", "none");
      $('#wa-fb-ig4').css("display", "none");
      $('#wa-fb-ig5').css("display", "none");
      $('#wa-fb-ig6').css("display", "none");
      $('#wa-fb-ig7').css("display", "none");
      $('.link-changer').attr('href', 'href="https://bit.ly/vofficesribu');
      field.attr('value', 'virtualoffice_sem');
      field.attr('name', 'virtualoffice_sem');
      console.log(field)
    } else if (link.includes("")) {
      $('#wa-fb-ig').css("display", "none");
      $('#wa-fb-ig2').css("display", "none");
      $('#wa-fb-ig3').css("display", "none");
      $('#wa-fb-ig4').css("display", "none");
      $('#wa-fb-ig5').css("display", "none");
      $('#wa-fb-ig6').css("display", "none");
      $('#wa-fb-ig7').css("display", "none");
      console.log(field)
    }

    // delete id link untuk posisi di URL
    var links = document.getElementsByTagName("a");

    Array.prototype.forEach.call(links, function(elem, index) {
      var elemAttr = elem.getAttribute("href");
      if (elemAttr && elemAttr.includes("#")) {
        elem.addEventListener("click", function(ev) {
          ev.preventDefault();
          document.getElementById(elemAttr.replace(/#/g, "")).scrollIntoView({
            behavior: "smooth",
            block: "start",
            inline: "nearest"
          });
        });
      }
    });

    function showList(e) {
      $(e.getAttribute('data-target')).slideDown('slow');
      $('.selengkapnya').fadeOut('fast');
      $('.lebih-sedikit').fadeIn('slow');
    }

    function hideList(e) {
      $(e.getAttribute('data-target')).slideUp();
      $('.lebih-sedikit').fadeOut('fast');
      $('.selengkapnya').fadeIn('slow');
    }
  </script>

</body>

</html>