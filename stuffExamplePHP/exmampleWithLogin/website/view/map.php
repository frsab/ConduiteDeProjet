<div id="map"></div>

<script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
<script>
    var map = L.map('map').setView([47.409598, 10.745465], 5);
    var points = <?php echo json_encode($points); ?>;

    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery ©',
        maxZoom: 18
    }).addTo(map);

    for (var i = 0 ; i < points.length ; i++) {
        L.marker(points[i].place).addTo(map).bindPopup(points[i].description);
    }
</script>
