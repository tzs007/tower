// Create infoWindow
var marker = new google.maps.Marker({
	position: new google.maps.LatLng(places[0][1],places[0][2]),
	map: map,
	icon: 'resources/images/' + places[0][0]
});

google.maps.event.addDomListener(window, "resize", function() {
	var center = map.getCenter();
	google.maps.event.trigger(map, "resize");
	map.setCenter(center);
});
