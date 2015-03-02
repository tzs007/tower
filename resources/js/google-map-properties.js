/*
 * you have to define the places array in sales.php before this file
 */
var i,
	infoWindow = new google.maps.InfoWindow();

for( i = 0; i < places.length; i++ ) {
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(places[i][1], places[i][2]),
		map: map,
		icon: 'resources/images/' + places[i][0]
	});

	// Allow each marker to have an info window
	google.maps.event.addListener(marker, 'click', (function(marker, i) {
		return function() {
			if(places[i][4] !== undefined){
				infoWindow.setContent(places[i][4]);
				infoWindow.open(map, marker);
			}else{
				window.location.href = places[i][3];
			}
		}
	})(marker, i));
}

google.maps.event.addDomListener(window, "resize", function() {
	var center = map.getCenter();
	google.maps.event.trigger(map, "resize");
	map.setCenter(center);
});
