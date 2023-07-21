<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/theme-v2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/custom-new.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/custom-locations.css" rel="stylesheet" type="text/css" media="all"/>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,800" rel="stylesheet">
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />

</head>
<body>

<?php include "header-redesign.html" ?>

<div class="main-container">

  <a name="index"></a>
  <section id="index-header" class="image-slider slider-all-controls parallax controls-inside pt0 pb0 height-100 mb-xs-0" style="height:400px;">
      <ul class="slides">
        <li class="image-bg pt-xs-120">
            <div class="background-image-holder" style="background-color: rgba(0,0,0,0.6); ">
                <img alt="image" class="background-image" src="images/city.jpg">
            </div>
            <div class="container v-align-transform">
                <div class="row text-center mt-m50">
                  <h2 class="mb-xs-16 bold number">Select Location</h2>
                  <div class="col-md-6 col-md-offset-3">
                    <div class="form-group text-left">
                      <span class="arr2"></span>
                      <select class="form-control" name="city" id="city" onchange="changeCity();">
                        <option value="jakarta" id="jakarta">Jakarta</option>
                        <option value="surabaya" id="surabaya">Surabaya</option>
                        <option value="bali" id="bali">Bali</option>
                        <option value="tangerang" id="tangerang">Tangerang</option>
                      </select>
                    </div>
                  </div>
                </div>
            </div>
        </li>
      </ul>
  </section>

  <section id="detail">
    <div class="col-sm-12 col-md-12">
      <a name="location"></a>
      <div class="text-center">
        <h3 class="bold lang" id="location-title" key="locationindex">Jakarta</h3>
        <br><br>
      </div>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-12 padding-left-50">
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room @ Menara Rajawali</p>
              <div class="mr-image">
                <img src="images/SO/Menara Rajawali/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">24 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="menara-rajawali">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room @ The City Tower</p>
              <div class="mr-image">
                <img src="images/SO/TCT/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">8 / 12 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">14 / 19 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="the-city-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room @ The City Tower</p>
              <div class="mr-image">
                <img src="images/SO/TCT/Conference Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">20 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">33 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="the-city-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Office 8</p>
              <div class="mr-image">
                <img src="images/SO/Office 8/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">4 Pax / 8-10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">10 Sqm / 16,5 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="office-8">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room <br>@ Office 8</p>
              <div class="mr-image">
                <img src="images/SO/Office 8/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">14 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">36 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="office-8">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Kencana Tower</p>
              <div class="mr-image">
                <img src="images/SO/Kencana Tower/Meeting Room - Kencana Tower.jpeg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">15 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="kencana-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ The CEO Building</p>
              <div class="mr-image">
                <img src="images/SO/CEO/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">6 Pax / 10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">15 Sqm / 24 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="the-ceo-building">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room <br>@ The CEO Building</p>
              <div class="mr-image">
                <img src="images/SO/CEO/Conference Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">16 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">40 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="the-ceo-building">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Grand Slipi Tower</p>
              <div class="mr-image">
                <img src="images/SO/GST/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">5 Pax / 10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">14 Sqm / 20 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="grand-slipi-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room <br>@ Grand Slipi Tower</p>
              <div class="mr-image">
                <img src="images/SO/GST/Conference Room 2.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">35 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">35 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="grand-slipi-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Graha Surveyor</p>
              <div class="mr-image">
                <img src="images/SO/Surveyor/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">6 Pax / 10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">14 Sqm / 20 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="graha-surveyor">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Kirana Two Tower</p>
              <div class="mr-image">
                <img src="images/SO/Kirana/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">8 Pax / 12 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">14 Sqm / 18 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="kirana-two-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room <br>@ Kirana Two Tower</p>
              <div class="mr-image">
                <img src="images/SO/Kirana/Conference Room.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">20 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">33 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="kirana-two-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Menara Kuningan</p>
              <div class="mr-image">
                <img src="images/SO/Menara Kuningan/Meeting Room 3.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">20 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="menara-kuningan">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Centennial Tower</p>
              <div class="mr-image">
                <img src="images/SO/Centennial/Meeting Room 2.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 - 12 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">18 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="centennial-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Conference Room <br>@ Centennial Tower</p>
              <div class="mr-image">
                <img src="images/SO/Centennial/Meeting Room 2.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">20 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">35 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 500.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="centennial-tower">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 tangerang city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ MyRepublic Plaza - BSD</p>
              <div class="mr-image">
                <img src="images/SO/BSD/Meeting Room 1.jpg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">12 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="myrepublic-plaza-bsd">Enquire Now</a>
            </div>
          </div>
          <div class="col-md-6 text-left mb30 jakarta city-content">
            <div class="mr-wrapper">
              <p class="h4">Meeting Room <br>@ Rawamangun</p>
              <div class="mr-image">
                <img src="images/SO/Rawamangun/Meeting Room 1.jpeg"/>
              </div>
              <p class="bold">Capacity</p>
              <p class="p">10 Pax</p>
              <hr>
              <p class="bold">Size</p>
              <p class="p">12 Sqm</p>
              <hr>
              <p class="bold">Price</p>
              <p class="p">IDR 250.000/Hour</p>
              <hr>
              <p class="italic">*also available in Half day & full day package </p>
              <a href="" class="btn btn-filled" data-toggle="modal" data-target="#myModal" onclick="changeLocation(this);" id="rawamangun">Enquire Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky">
      <!-- map div -->
      <div style="position:relative; width:100%; height:100%;">
        <div id='map' class="Scrollable sm-hidden"></div>
      </div>
    </div>
  </section>

  <?php include('footer-redesign.html'); ?>

</div>



<div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog"
         tabindex="-1">
        <div class="modal-dialog mb-xs-64">
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
                        Contact Us Now
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
                <form method="post" class="form-email" data-error="Please fill all fields correctly."
                      data-success="Terima kasih atas pengajuan Anda, kami akan segera menghubungi anda.">
                    <input hidden="hidden" id="req_mr" name="req_mr" type="text"
                           value="req_mr">
                    <div class="modal-body form-body clearfix">
                        <div class="col-md-6">
                            <input class="validate-required" name="name" placeholder="Nama" type="text">
                            </input>
                        </div>
                        <div class="col-md-6">
                            <input class="validate-required" name="phone" placeholder="Nomor Kontak" type="text">
                            </input>
                        </div>
                        <div class="col-md-12">
                            <input class="validate-required" name="email" placeholder="Alamat Email" type="text">
                            </input>
                        </div>
                        <div class="col-md-12">
                            <p class="bold mb8">
                                Pilih Lokasi
                            </p>
                            <div class="select-option p0">
                                <i class="ti-angle-down">
                                </i>
                                <select class="validate-required" name="location">
                                    <option disabled="" selected="" value="">
                                        Lokasi yang dipilih —
                                    </option>
                                    <option value="menara-rajawali">Menara Rajawali</option>
                                    <option value="the-city-tower">The City Tower</option>
                                    <option value="centennial-tower">Centennial Tower</option>
                                    <option value="graha-surveyor">Graha Surveyor</option>
                                    <option value="office-8">Office 8</option>
                                    <option value="the-ceo-building">The CEO Building</option>
                                    <option value="kencana-tower">Kencana Tower</option>
                                    <option value="menara-kuningan">Menara Kuningan</option>
                                    <option value="kirana-two-tower">Kirana Two Tower</option>
                                    <option value="grand-slipi-tower">Grand Slipi Tower</option>
                                    <option value="kirana-two-tower">Kirana Two Tower</option>
                                    <option value="myrepublic-plaza-bsd">MyRepublic Plaza BSD</option>
                                    <option value="rawamangun">Rawamangun</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="bold mb8">
                                Pesan
                            </p>
                            <textarea class="" name="message" placeholder="Pesan" type="text"></textarea>
                        </div>
                        </input>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/flexslider.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/parallax.js"></script>


<!-- Core Script for Map -->
<script type="text/javascript">
    function changeLocation(e){
      var getID = e.getAttribute('id');
      document.getElementById('select-location').value = getID;
    }

    $(document).ready(function () {
      var top     = $('.sticky').offset().top;
      $(window).scroll(function (event) {
        var y = $(this).scrollTop();
        if (y >= top){
          $('.sticky').css('position', 'fixed');
        }else{
          $('.sticky').css('position', 'relative');
        }
      });
    });

    mapboxgl.accessToken = 'pk.eyJ1IjoicmFjaG1hZHN5YSIsImEiOiJjanVycXp5YTMxd3J0NGRsdGc3bzJzamwyIn0.JwjjpnUoeJsAmVAI0a5gBA';

    cityCoordinates1 = '106.8412644';
    cityCoordinates2 =  '-6.1920632';

    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [cityCoordinates1, cityCoordinates2],
      zoom: 10
    });

    // Add zoom and rotation controls to the map.
    map.addControl(new mapboxgl.NavigationControl());

    var geojson = {
      type: 'FeatureCollection',
      features: [{
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8242413, -6.227073]
        },
        properties: {
          title: 'vOffice - Menara Rajawali',
          description: 'Menara Rajawali, 7th FLoor, Lot No.5.1, 12950, Jl. Mega Kuningan Barat, RT.5/RW.2, Kuningan, East Kuningan, Setiabudi, South Jakarta City, Jakarta 12930',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/menara-rajawali.jpg',
          link : 'office-menara-rajawali.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8188536 , -6.2308173]
        },
        properties: {
          title: 'vOffice - Centennial Tower',
          description: 'Centennial Tower Level 29, Jl. Gatot Subroto No.27, RT.2/RW.2, Karet Kuningan, Kecamatan Setiabudi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/centennial-tower.jpg',
          link : 'centennial-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.7850405 , -6.225326]
        },
        properties: {
          title: 'vOffice - Kencana Tower',
          description: 'Kencana Tower, Level 2, Business Park Kebon Jeruk, Jl Raya Meruya Ilir No. 88, RT.1/RW.5, Meruya Utara, Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11620',
          image : 'images/lokasi-gedung-voffice/jakarta barat/kencana-tower.jpg',
          link : 'office-kencana-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.7856089 , -6.2134174]
        },
        properties: {
          title: 'vOffice - Grand Slipi Tower',
          description: 'Grand Slipi Tower Jalan Letjen S. Parman kav 22-24 level 42G, RT.1/RW.4, Palmerah, Jakarta, Daerah Khusus Ibukota Jakarta 11480',
          image : 'images/lokasi-gedung-voffice/jakarta barat/grand-slipi-tower.jpg',
          link : 'office-grandslipi-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8213122 , -6.199045]
        },
        properties: {
          title: 'vOffice - The City Tower',
          description: 'The City Tower, Jl. MH Thamrin No.81, RT.1/RW.6, Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310',
          image : 'images/lokasi-gedung-voffice/jakarta pusat/the-city-tower.jpg',
          link : 'office-thecity-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8886058 , -6.197274]
        },
        properties: {
          title: 'vOffice - vOffice East Rawamangun',
          description: 'vOffice East, Jl. Perserikatan No.1, RT.2/RW.8, Rawamangun, Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220',
          image : 'images/lokasi-gedung-voffice/jakarta timur/rawamangun.jpg',
          link : 'virtual-office-jakarta-timur.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.9162093 , -6.167556]
        },
        properties: {
          title: 'vOffice - Kirana Two Tower',
          description: 'Kirana Two Tower, Level 10-A, Jl. Boulevard Timur No.88 Kec. Kelapa Gading, Kel, RT.5/RW.2, Pegangsaan Dua, Klp. Gading, Kota Jkt Utara 14250',
          image : 'images/lokasi-gedung-voffice/jakarta utara/kirana-two-tower.jpg',
          link : 'office-kirana2-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8284039,-6.2184492]
        },
        properties: {
          title: 'vOffice - Menara Kuningan',
          description: 'Menara Kuningan Lantai 30 Unit B-C , Jl. H. Rasuna Said Kav. 5 Blok X-7 RT/RW. 006/007 Kel, RT.6/RW.7, Kuningan, Kec. Setiabudi, Kota Jakarta Selatan 12940',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/menara-kuningan.jpg',
          link : 'office-menara-kuningan.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8003112 , -6.2174966]
        },
        properties: {
          title: 'vOffice - Office 8',
          description: 'SCBD lot 8, Office 8, Jl. Jend. Sudirman No.Kav.52-53, Senayan, Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/office8.jpg',
          link : 'office8.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8080697 , -6.2481401]
        },
        properties: {
          title: 'vOffice - Graha Surveyor Indonesia',
          description: 'Graha Surveyor Lt 15, Jl. Gatot Subroto No.Kav 56, RT.1/RW.4, Kuningan Tim., Setia Budi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/grand-surveyor.jpg',
          link : 'office-graha-surveyor.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8007918 , -6.2744076]
        },
        properties: {
          title: 'vOffice - CEO Building',
          description: 'The CEO Building Level 12, Jl. TB Simatupang No 18C, RT.7/RW.9, Cilandak Bar., Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12430',
          image : 'images/lokasi-gedung-voffice/jakarta selatan/the-ceo-building.jpg',
          link : 'office-ceo-building.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [112.7418055 ,-7.2720405]
        },
        properties: {
          title: 'vOffice Surabaya - JAPFA Tower II ',
          description: 'JAPFA Tower II , Level 12, Jl Panglima Sudirman Kav 66-68, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271',
          image : 'images/lokasi-gedung-voffice/surabaya/bumi-mandiri-tower.jpg',
          link:'office-bumi-putra.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [112.7404473 ,-7.2718487]
        },
        properties: {
          title: 'vOffice Surabaya - Intiland Tower',
          description: 'Intiland Tower, Jl. Panglima Sudirman No.101-103, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271',
          image : 'images/lokasi-gedung-voffice/surabaya/intiland-tower.jpg',
          link:'office-intiland.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [112.6787154 ,-7.2870278]
        },
        properties: {
          title: 'vOffice Surabaya - Spazio',
          description: 'Jln Mayjen Yono Soewoyo Kav. 3, Spazio Office Suite lvl 5, Pradahkalikendal, Surabaya Barat, Kota SBY, Jawa Timur 60226',
          image : 'images/lokasi-gedung-voffice/surabaya/spazio.jpg',
          link:'#'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.6527353 ,-6.3035646]
        },
        properties: {
          title: 'vOffice - My Republic Plaza BSD',
          description: 'My Republic Plaza (d/h Green Office Park 6), Wing A Lantai Dasar Zona 6 Jalan Grand Boulevard, Jl. BSD Green Office Park, Sampora, Cisauk, Tangerang, Banten 15345',
          image : 'images/lokasi-gedung-voffice/tangerang/my-republic-plaza.jpg',
          link : 'virtual-office-tangerang.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [115.203302 ,-8.6785428]
        },
        properties: {
          title: 'vOffice - Ibiz Styles',
          description: 'Ibiz Styles Unit 3 & 4, Jl. Teuku Umar No.177, Dauh Puri Kauh, Kuta, Kota Denpasar, Bali 80361',
          image : 'images/lokasi-gedung-voffice/bali/ibis-style.jpg',
          link: 'office-ibis.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [115.1520064 ,-8.791147]
        },
        properties: {
          title: 'vOffice - Jimbaran Hub',
          description: 'Jl. Karang Mas, Jimbaran, Kuta Sel., Kabupaten Badung, Bali 80361',
          image : 'images/lokasi-gedung-voffice/bali/jimbaran-hub.jpg',
          link:'#'
        }
      }
      ]
    };

    function changeCity(){

      var city = document.getElementById('city').value;
      if (city == 'jakarta' || city == 'surabaya' || city == 'tangerang' || city == 'bali') {
        locationTitle = document.getElementById('location-title').innerHTML = city;
        var dissapear = document.getElementsByClassName('city-content');

        for (var i = 0; i < dissapear.length; i++) {
          dissapear[i].style.display = "none";
        }

        var appear = document.getElementsByClassName(city);
        for (var i = 0; i < appear.length; i++) {
          appear[i].style.display = "block";
        }

      }

      // set coordinate for each marker
      if (city == 'jakarta') {
        cityCoordinates1 = '106.8412644';
        cityCoordinates2 =  '-6.1920632';
      }else if (city == 'surabaya') {
          cityCoordinates1 = "112.7418055";
          cityCoordinates2 = "-7.2720405";
      }else if(city == 'bali'){
          cityCoordinates1 = "115.14378";
          cityCoordinates2 = "-8.8151704";
      }else if(city == "tangerang"){
        cityCoordinates1 = "106.6527353";
        cityCoordinates2 = "-6.3035646";
      }
      map.flyTo({center: [cityCoordinates1, cityCoordinates2], zoom: 10});
    }

    geojson.features.forEach(function(marker) {

      // create a HTML element for each feature
      var el = document.createElement('div');
      el.className = 'marker';
      el.id = 'places';

      new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .setPopup(new mapboxgl.Popup({ offset: 25 })
        .setHTML('<a href="'+marker.properties.link+'"><img src="'+marker.properties.image+'" width="200"><h5>' + marker.properties.title + '</h5></a><p>' + marker.properties.description + '</p>'))
        .addTo(map);
    });

    $('.Scrollable').on('DOMMouseScroll mousewheel', function(ev) {
      var $this = $(this),
        scrollTop = this.scrollTop,
        scrollHeight = this.scrollHeight,
        height = $this.height(),
        delta = (ev.type == 'DOMMouseScroll' ?
          ev.originalEvent.detail * -40 :
          ev.originalEvent.wheelDelta),
        up = delta > 0;

      var prevent = function() {
        ev.stopPropagation();
        ev.preventDefault();
        ev.returnValue = false;
        return false;
      }

      if (!up && -delta > scrollTop) {
        // Scrolling down, but this will take us past the bottom.
        $this.scrollTop(0);
        return prevent();
      } else if (up && delta > scrollTop) {
        // Scrolling up, but this will take us past the top.
        $this.scrollTop(0);
        return prevent();
      }
    });
</script>

</body>
</html>
