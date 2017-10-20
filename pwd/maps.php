<!DOCTYPE html>
<html>

<body>

<div id="map" style="width:100%;height:600px;margin-top: 0px"></div>

<script>

function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, 
  					zoom: 5,
  					mapTypeId: google.maps.MapTypeId.ROADMAP};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
}

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
    /*icon: {
		url: "ic_room.png",
		scaledSize: new google.maps.Size(32, 53)
		}*/
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9_3CRd10jVu1nti33aAHge0QczGqmV8U&callback=myMap"></script>

</body>
</html>
