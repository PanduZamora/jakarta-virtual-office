function changeLocation(e) {
  var getID = e.getAttribute('id');
  document.getElementById('select-location').value = getID;
}

$(document).ready(function () {
  var top = $('.sticky').offset().top;
  $(window).scroll(function (event) {
    var y = $(this).scrollTop();
    if (y >= top) {
      $('.sticky').css('position', 'fixed');
    } else {
      $('.sticky').css('position', 'relative');
    }
  });
});

mapboxgl.accessToken = 'pk.eyJ1IjoicmFjaG1hZHN5YSIsImEiOiJjanVycXp5YTMxd3J0NGRsdGc3bzJzamwyIn0.JwjjpnUoeJsAmVAI0a5gBA';

cityCoordinates1 = '106.8412644';
cityCoordinates2 = '-6.1920632';

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
        title: 'Menara Rajawali',
        description: 'Level 7-1, Jl. Dr.Ide Anak Agung Gde Agung Kawasan Mega Kuningan, Setiabudi, Jakarta Selatan',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/menara-rajawali.jpg',
        link: 'office-menara-rajawali.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8188536, -6.2308173]
      },
      properties: {
        title: 'Centennial Tower',
        description: 'Level 29F, Jl. Jendral Gatot Subroto No.27 Karet Semanggi, Setiabudi, Jakarta Selatan',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/centennial-tower.jpg',
        link: 'centennial-tower.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.7850405, -6.225326]
      },
      properties: {
        title: 'Kencana Tower',
        description: 'Level Mezanine, Jl. Raya Meruya Ilir No.88 Business Park Kebon Jeruk, Kembangan, Jakarta Barat',
        image: 'images/lokasi-gedung-voffice/jakarta barat/kencana-tower.jpg',
        link: 'office-kencana-tower.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.7856089, -6.2134174]
      },
      properties: {
        title: 'Grand Slipi Tower',
        description: 'Level 42G-42H, Jl. S.Parman Kav.22-24, Palmerah Slipi, Jakarta Barat',
        image: 'images/lokasi-gedung-voffice/jakarta barat/grand-slipi-tower.jpg',
        link: 'office-grandslipi-tower.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8213122, -6.199045]
      },
      properties: {
        title: 'The City Tower',
        description: 'Level 12-1N, Jl. MH.Thamrin No. 81, Menteng, Jakarta Pusat',
        image: 'images/lokasi-gedung-voffice/jakarta pusat/the-city-tower.jpg',
        link: 'office-thecity-tower.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8203426, -6.2084823]
      },
      properties: {
        title: 'Sudirman 7.8 Tower',
        description: 'Level 16 Unit 1 & 2, Jl. Jend. Sudirman No.Kav 7-8, Kecamatan Tanah Abang, Jakarta Pusat',
        image: 'images/lokasi-gedung-voffice/jakarta pusat/sudirman78/sudirman78-square.jpg',
        link: 'virtual-office-sudirman.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8886058, -6.197274]
      },
      properties: {
        title: 'vOffice East Rawamangun',
        description: 'Level 1-3, Jl. Perserikatan No. 1 Blok A Rawamangun, Pulogadung, Jakarta Timur',
        image: 'images/lokasi-gedung-voffice/jakarta timur/rawamangun.jpg',
        link: 'virtual-office-jakarta-timur.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.9162093, -6.167556]
      },
      properties: {
        title: 'Kirana Two Tower',
        description: 'Level 10, Jl. Boulevard Timur No.88, Kelapa Gading, Jakarta Utara',
        image: 'images/lokasi-gedung-voffice/jakarta utara/kirana-two-tower.jpg',
        link: 'office-kirana2-tower.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.7878325, -6.1268292]
      },
      properties: {
        title: 'The Honey Lady',
        description: 'Level 2, Jl. Pluit Selatan Raya No.1, Penjaringan, Jakarta Utara',
        image: 'images/lokasi-gedung-voffice/jakarta utara/honey-lady.jpg',
        link: 'virtual-office-pluit.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8284039, -6.2184492]
      },
      properties: {
        title: 'Menara Kuningan',
        description: 'Level 30 Unit B-C, Jl. H. Rasuna Said Kav. 5 Karet Kuningan, Setiabudi, Jakarta Selatan',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/menara-kuningan.jpg',
        link: 'office-menara-kuningan.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8003112, -6.2174966]
      },
      properties: {
        title: 'Office 8',
        description: 'Level 18A, Jl. Senopati No. 8B, Kel. Senayan, Kec. Kebayoran Baru, Jakarta Selatan, 12190',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/office8.jpg',
        link: 'office8.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8080697, -6.2481401]
      },
      properties: {
        title: 'Graha Surveyor Indonesia',
        description: 'Level 15-1503, Jl. Gatot Subroto Kav. 56, Setiabudi, Jakarta Selatan',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/grand-surveyor.jpg',
        link: 'office-graha-surveyor.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [112.7418055, -7.2720405]
      },
      properties: {
        title: 'JAPFA Tower II',
        description: 'Level 12, Jl Panglima Sudirman Kav 66-68, Genteng, Surabaya',
        image: 'images/lokasi-gedung-voffice/surabaya/bumi-mandiri-tower.jpg',
        link: 'office-bumi-putra.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.8007918, -6.2744076]
      },
      properties: {
        title: 'The CEO Building',
        description: 'Level 12, Jl. TB Simatupang No. 18C, Cilandak, Jakarta Selatan',
        image: 'images/lokasi-gedung-voffice/jakarta selatan/the-ceo-building.jpg',
        link: 'office-ceo-building.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [112.7404473, -7.2718487]
      },
      properties: {
        title: 'Intiland Tower',
        description: 'Level 3, Jl. Panglima Sudirman No.101-103, Genteng Surabaya',
        image: 'images/lokasi-gedung-voffice/surabaya/intiland-tower.jpg',
        link: 'office-intiland.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [112.6787154, -7.2870278]
      },
      properties: {
        title: 'Spazio',
        description: 'Level 1 Unit 525A. Mayjen Yono Suwoyo No.Kav 3, Dukuh Pakis, Surabaya',
        image: 'images/lokasi-gedung-voffice/surabaya/spazio.jpg',
        link: '#'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.6527353, -6.3035646]
      },
      properties: {
        title: 'My Republic Plaza BSD',
        description: 'Level GF, Jalan Grand Boulevard BSD, Cisauk, Tangerang Selatan',
        image: 'images/lokasi-gedung-voffice/tangerang/my-republic-plaza.jpg',
        link: 'virtual-office-tangerang.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.6525614, -6.224812]
      },
      properties: {
        title: 'The Prominence Office Tower',
        description: 'Level 28 Unit C, Jl. Jalur Sutera Bar. No.15, Alam, Sutera, Kota Tangerang, Banten',
        image: 'images/lokasi-gedung-voffice/tangerang/prominence-tower/prominence-tower-square.jpg',
        link: 'office-prominence-tower.php'
      }
    },
    // {
    //   type: 'Feature',
    //   geometry: {
    //     type: 'Point',
    //     coordinates: [115.203302 ,-8.6785428]
    //   },
    //   properties: {
    //     title: 'Ibiz Styles',
    //     description: 'Level GF, Jl. Teuku Umar No. 177, Denpasar Barat, Denpasar',
    //     image : 'images/lokasi-gedung-voffice/bali/ibis-style.jpg',
    //     link: 'office-ibis.php'
    //   }
    // },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.9943398, -6.2259478]
      },
      properties: {
        title: 'Plaza Summarecon Bekasi',
        description: 'Plaza Summarecon Bekasi Jl. Bulevar Ahmad Yani Kav K.01 Harapan Mulya, Medan Satria, Kota Bekasi Jawa Barat.',
        image: 'images/lokasi-gedung-voffice/bekasi/plaza-summarecon.jpg',
        link: 'virtual-office-bekasi.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [106.9153861, -6.3750371]
      },
      properties: {
        title: 'Mensana Tower',
        description: 'Level 5, Jl. Raya Kranggan, Pondok Gede, Jatisampurna, Cibubur',
        image: 'images/lokasi-gedung-voffice/cibubur/mensana-tower.jpg',
        link: 'virtual-office-cibubur.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [115.1520064, -8.791147]
      },
      properties: {
        title: 'Jimbaran Hub',
        description: 'Level GF, Jl. Karang Mas, Kuta Selatan, Jimbaran',
        image: 'images/lokasi-gedung-voffice/bali/jimbaran-hub.jpg',
        link: '#'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [115.1678047, -8.6882991]
      },
      properties: {
        title: 'KE{M}BALI Innovation Hub',
        description: 'Jl. Sunset Road No.28, Seminyak, Kuta, Kabupaten Badung, Bali',
        image: 'images/lokasi-gedung-voffice/bali/kembali/kembali.jpg',
        link: 'kembali-innovation-hub.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [98.6794846, 3.5965353]
      },
      properties: {
        title: 'Grand Jati Junction',
        description: 'Jati Junction, Jl. Perintis Kemerdekaan No.3A, Perintis, Kec. Medan Tim., Kota Medan, Sumatera Utara',
        image: 'images/medan/grand-jati-junc-square.jpg',
        link: 'virtual-office-medan.php'
      }
    },
    {
      type: 'Feature',
      geometry: {
        type: 'Point',
        coordinates: [6.9193, 107.6082]
      },
      properties: {
        title: 'Gelora Creative Braga, Bandung',
        description: 'Gelora Creative Braga, Jl. Braga No. 109, Kel. Braga,  Kec. Sumur Bandung, Kota Bandung, Jawa Barat - 40111',
        image: 'img/bandung/braga_bandung_19.jpg',
        link: 'voffice-braga-bandung.php'
      }
    }
  ]
};

function changeCity() {
  document.getElementById('loadMore').style.display = 'none';
  var city = document.getElementById('city').value;
  if (city == 'jakarta' || city == 'surabaya' || city == 'tangerang' || city == 'bali' || city == 'bekasi' || city == 'cibubur' || city == 'medan' || city == 'bandung') {
    locationTitle = document.getElementById('location-title').innerHTML = city;
    var dissapear = document.getElementsByClassName('city-content');

    for (var i = 0; i < dissapear.length; i++) {
      dissapear[i].style.display = "none";
    }
    var appear = document.getElementsByClassName(city);
    for (var i = 0; i < appear.length; i++) {
      appear[i].style.display = "block";
    }
    //Script for sub-city (Jakarta)
    if (city != 'jakarta') {
      document.getElementById('sub-city').value = 0;
      document.getElementById('sub-city').disabled = true;
    }
    if (city == 'jakarta') {
      document.getElementById('sub-city').disabled = false;
    }
  }
  // set coordinate for each city
  if (city == 'jakarta') {
    cityCoordinates1 = '106.8412644';
    cityCoordinates2 = '-6.1920632';
  } else if (city == 'surabaya') {
    cityCoordinates1 = "112.7418055";
    cityCoordinates2 = "-7.2720405";
  } else if (city == 'bali') {
    cityCoordinates1 = "115.14378";
    cityCoordinates2 = "-8.8151704";
  } else if (city == "tangerang") {
    cityCoordinates1 = "106.6527353";
    cityCoordinates2 = "-6.3035646";
  } else if (city == "bekasi") {
    cityCoordinates1 = "106.9757625";
    cityCoordinates2 = "-6.2320865";
  } else if (city == "cibubur") {
    cityCoordinates1 = "106.9102271";
    cityCoordinates2 = "-6.3770662";
  } else if (city == "medan") {
    cityCoordinates1 = "98.6487371";
    cityCoordinates2 = "3.6011287";
  } else if (city == "bandung") {
    cityCoordinates1 = "-6.914744";
    cityCoordinates2 = "107.609810";
  }
  map.flyTo({
    center: [cityCoordinates1, cityCoordinates2],
    zoom: 11
  });
}

function subcity() {

  document.getElementById('loadMore').style.display = 'none';
  var sub = document.getElementById('sub-city').value;
  if (sub == 'central-jakarta' || sub == 'south-jakarta' || sub == 'west-jakarta' ||
    sub == 'north-jakarta' || sub == 'east-jakarta') {
    locationTitle = document.getElementById('location-title').innerHTML = sub.replace('-', ' ');
    var dissapear = document.getElementsByClassName('jakarta');
    for (var i = 0; i < dissapear.length; i++) {
      dissapear[i].style.display = "none";
    }
    var appear = document.getElementsByClassName(sub);
    for (var i = 0; i < appear.length; i++) {
      appear[i].style.display = "block";
    }
  } else {
    locationTitle = document.getElementById('location-title').innerHTML = 'jakarta';
    var appear = document.getElementsByClassName('jakarta');
    for (var i = 0; i < appear.length; i++) {
      appear[i].style.display = "block";
    }
  }
  if (sub == 'central-jakarta') {
    subCityCoordinates1 = '106.8213122';
    subCityCoordinates2 = '-6.199045';
  } else if (sub == 'south-jakarta') {
    subCityCoordinates1 = "106.8080697";
    subCityCoordinates2 = "-6.2481401";
  } else if (sub == 'east-jakarta') {
    subCityCoordinates1 = "106.8886058";
    subCityCoordinates2 = "-6.197274";
  } else if (sub == "west-jakarta") {
    subCityCoordinates1 = "106.7856089";
    subCityCoordinates2 = "-6.2134174";
  } else if (sub == "north-jakarta") {
    subCityCoordinates1 = "106.9162093";
    subCityCoordinates2 = "-6.167556";
  }
  map.flyTo({
    center: [subCityCoordinates1, subCityCoordinates2],
    zoom: 13.5
  });
}
geojson.features.forEach(function (marker) {
  // create a HTML element for each feature
  var el = document.createElement('div');
  el.className = 'marker';
  el.id = 'places';
  new mapboxgl.Marker(el)
    .setLngLat(marker.geometry.coordinates)
    .setPopup(new mapboxgl.Popup({
        offset: 25
      })
      .setHTML('<a href="' + marker.properties.link + '"><img src="' + marker.properties.image + '" width="200"><h5>' + marker.properties.title + '</h5></a><p>' + marker.properties.description + '</p>'))
    .addTo(map);
});
$('.Scrollable').on('DOMMouseScroll mousewheel', function (ev) {
  var $this = $(this),
    scrollTop = this.scrollTop,
    scrollHeight = this.scrollHeight,
    height = $this.height(),
    delta = (ev.type == 'DOMMouseScroll' ?
      ev.originalEvent.detail * -40 :
      ev.originalEvent.wheelDelta),
    up = delta > 0;
  var prevent = function () {
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