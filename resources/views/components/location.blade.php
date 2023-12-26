<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-locationpicker/dist/location-picker.css" />
  <style>
    #map {
      height: 400px;
    }
  </style>
  <title>Leaflet Location Picker in Form Input</title>
</head>
<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-locationpicker/dist/location-picker.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var map = L.map('map').setView([0, 0], 2);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    var locationPicker = L.locationPicker().addTo(map);

    locationPicker.on('locationfound', function (e) {
      document.getElementById('locationInput').value = e.latlng.lat + ', ' + e.latlng.lng;
    });

    locationPicker.on('locationerror', function (e) {
      console.log('Location error:', e.message);
    });

    document.getElementById('locationForm').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Form submitted with location: ' + document.getElementById('locationInput').value);
    });
  });
</script>

</body>
</html>
