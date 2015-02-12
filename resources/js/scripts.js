$(function(){
	console.log(jQuery.fn.jquery);
});

/* set up the google map */
var map;
var bp = new google.maps.LatLng(47.454833, 19.031075);

var MY_MAPTYPE_ID = 'tower';

function initialize() {

	var featureOpts = [{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}];

	var mapOptions = {
		scrollwheel: false,
		draggable: true,
		disableDefaultUI: true,
		zoom: 11,
		center: bp,
		mapTypeId: MY_MAPTYPE_ID,
		mapTypeControl: false,
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL,
			position: google.maps.ControlPosition.LEFT_TOP
		},
		scaleControl: false,
		streetViewControl: true,
		streetViewControlOptions: {
			position: google.maps.ControlPosition.LEFT_TOP
		}

	};

	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var styledMapOptions = {
		name: 'Tower International'
	};

	var marker = new google.maps.Marker({
		icon: 'resources/images/pin-green.png',
		position: map.getCenter(),
		map: map
	});

	var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

	/*
	google.maps.event.addListener(map, 'center_changed', function() {
		// 3 seconds after the center of the map has changed, pan back to the
		// marker.
		window.setTimeout(function() {
			map.panTo(marker.getPosition());
		}, 3000);
	});
	*/

	google.maps.event.addListener(marker, 'click', function() {
		map.setCenter(marker.getPosition());
		window.open('http://maps.google.com/maps?q=1119+Budapest,+Allende+park+18,+Hungary','_blank');
	});

}

google.maps.event.addDomListener(window, 'load', initialize);
