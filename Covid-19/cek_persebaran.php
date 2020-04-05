<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check up covid 19</title>


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin="" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
  <script src="//code.jquery.com/jquery.js"></script>


  <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
  <script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>

  <style>
    #map {
      height: 430px;
      text-align: center;
    }
  </style>
</head>

<body>
    <h1>PERSEBARAN COVID-19</h1>

    <form action="">
            <div id='map' style='width: 50%'></div>
  <script>
    $(document).ready(function () {
      $.ajax({
        type: "GET",
        url: "getDataMarkers.php",
        success: function name(data) {
          var item = JSON.parse(data);
          var map = L.map('map').setView([-7.4664, 112.4338], 8);

          L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map);

          var markers = L.markerClusterGroup();
          for (var i = 0; i < item.length; i++) {
            var a = item[i];
            console.log(a)
            var title = a[3];
            var marker = L.marker(new L.LatLng(a[0], a[1]), {
              title: title.total
            });
            
            marker.bindPopup(
              "Kota :"+ a[2] +"<br>"+
              "Total Pasien :"+ title.total +"<br>"+
              "ODR :"+ title.ODR +"<br>"+
              "ODP :"+ title.ODP +"<br>"+
              "PDP :"+ title.PDP +"<br>"+
              "POSITIF :"+ title.POSITIF +"<br>"
            );
            markers.addLayer(marker);
          }

          map.addLayer(markers);
        }
      })
    })
  </script>
  <br><br>
	[<a href="form_pasien.html">Home</a>]
</body>

</html>