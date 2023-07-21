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
//Get current URL
function getUrlVars() {
  var vars = {};
  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
      vars[key] = value;
  });
  return vars;
}

var currentCity = getUrlVars()["city"];

function getUrlParam(parameter, defaultvalue){
  var urlparameter = defaultvalue;
  if(window.location.href.indexOf(parameter) > -1){
    urlparameter = getUrlVars()[parameter];
  }
  return urlparameter;
}

var currentCity = getUrlParam('city','Empty');

//set display none for all marker
allCity = document.getElementsByClassName('city-content');
for (var i = 0; i < allCity.length; i++) {
  allCity[i].style.display = 'none';
}

// set the city coordinate - default = jakarta
if (currentCity == 'Empty' || currentCity == null) {
  cityCoordinates1 = '106.8412644';
  cityCoordinates2 =  '-6.1920632';
  locationTitle = document.getElementById('location-title').innerHTML = 'Jakarta';
  city = document.getElementsByClassName('jakarta');
  for (var i = 0; i < city.length; i++) {
    city[i].style.display = "block";
  }
}else{
  //set attribute for selected item
  document.getElementById(currentCity).setAttribute("selected", "");

  locationTitle = document.getElementById('location-title').innerHTML = currentCity;
  city = document.getElementsByClassName(currentCity);
  for (var i = 0; i < city.length; i++) {
    city[i].style.display = "block";
  }
  // set coordinate for each marker
  if (currentCity == 'jakarta') {
    cityCoordinates1 = '106.8412644';
    cityCoordinates2 =  '-6.1920632';
  }else if (currentCity == 'surabaya') {
      cityCoordinates1 = "112.7418055";
      cityCoordinates2 = "-7.2720405";
  }else if(currentCity == 'bali'){
      cityCoordinates1 = "115.14378";
      cityCoordinates2 = "-8.8151704";
  }else if(currentCity == "tangerang"){
    cityCoordinates1 = "106.6527353";
    cityCoordinates2 = "-6.3035646";
  }
}
//Script for sub-city (Jakarta)
if (currentCity == 'jakarta' || currentCity == 'Empty') {
  document.getElementById('sub-city').disabled = false;
}


mapboxgl.accessToken = 'pk.eyJ1IjoicmFjaG1hZHN5YSIsImEiOiJjanVycXp5YTMxd3J0NGRsdGc3bzJzamwyIn0.JwjjpnUoeJsAmVAI0a5gBA';

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
      title: 'vOffice Surabaya - JAPFA Tower II',
      description: 'JAPFA Tower II, Level 12, Jl Panglima Sudirman Kav 66-68, Embong Kaliasin, Genteng, Kota SBY, Jawa Timur 60271',
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

function subcity(){

  var sub = document.getElementById('sub-city').value;
  if (sub == 'central-jakarta' || sub == 'south-jakarta' || sub == 'west-jakarta' || sub == 'east-jakarta ' || sub == 'north-jakarta') {
    locationTitle = document.getElementById('location-title').innerHTML = sub.replace('-', ' ');
    var dissapear = document.getElementsByClassName('jakarta');
    for (var i = 0; i < dissapear.length; i++) {
      dissapear[i].style.display = "none";
    }
    var appear = document.getElementsByClassName(sub);
    for (var i = 0; i < appear.length; i++) {
      appear[i].style.display = "block";
    }
  }else {
    locationTitle = document.getElementById('location-title').innerHTML = 'jakarta';
    var appear = document.getElementsByClassName('jakarta');
    for (var i = 0; i < appear.length; i++) {
      appear[i].style.display = "block";
    }
  }

  if (sub == 'central-jakarta') {
    subCityCoordinates1 = '106.8213122';
    subCityCoordinates2 =  '-6.199045';
  }else if (sub == 'south-jakarta') {
    subCityCoordinates1 = "106.8080697";
    subCityCoordinates2 = "-6.2481401";
  }else if(sub == 'east-jakarta'){
    subCityCoordinates1 = "106.8886058";
    subCityCoordinates2 = "-6.197274";
  }else if(sub == "west-jakarta"){
    subCityCoordinates1 = "106.7856089";
    subCityCoordinates2 = "-6.2134174";
  }else if(sub == "north-jakarta"){
    subCityCoordinates1 = "106.9162093";
    subCityCoordinates2 = "-6.167556";
  }
  map.flyTo({center: [subCityCoordinates1, subCityCoordinates2], zoom: 13});
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
