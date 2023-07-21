
    mapboxgl.accessToken = 'pk.eyJ1IjoicmFjaG1hZHN5YSIsImEiOiJjanVycXp5YTMxd3J0NGRsdGc3bzJzamwyIn0.JwjjpnUoeJsAmVAI0a5gBA';



    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: ['106.8412644', '-6.1920632'],
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
          image : 'img/tower/menara-rajawali.jpg',
          link : 'so-menara-rajawali.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.8213122 , -6.199045]
        },
        properties: {
          title: 'The City Tower',
          description: 'Level 12-1N, Jl. MH.Thamrin No. 81, Menteng, Jakarta Pusat',
          image : 'img/tower/the-city-tower.jpg',
          link : 'so-the-city-tower.php'
        }
      },
      {
        type: 'Feature',
        geometry: {
          type: 'Point',
          coordinates: [106.7878325 , -6.1268292]
        },
        properties: {
          title: 'The Honey Lady',
          description: 'Level 2, Jl. Pluit Selatan Raya No.1, Penjaringan, Jakarta Utara',
          image : 'img/tower/honey-lady.jpg',
          link : 'so-honey-lady.php'
        }
      },
      ]
    };



    geojson.features.forEach(function(marker) {
      // create a HTML element for each feature
      var el = document.createElement('div');
      el.className = 'marker';
      el.id = 'places';
      new mapboxgl.Marker(el)
        .setLngLat(marker.geometry.coordinates)
        .setPopup(new mapboxgl.Popup({ offset: 25, anchor: 'left' })
        .setHTML('<a href="'+marker.properties.link+'"><img src="'+marker.properties.image+'" width="200"><h5>' + marker.properties.title + '</h5></a><p>' + marker.properties.description + '</p>'))
        .addTo(map);
    });
