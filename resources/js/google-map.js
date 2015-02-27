$(function(){
	console.log(jQuery.fn.jquery);
});

/* set up the google map */
var map;
var bp = new google.maps.LatLng(47.5141269, 19.0581187);

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

	google.maps.event.addListener(marker, 'click', function() {
		map.setCenter(marker.getPosition());
		window.open('https://www.google.hu/maps/search/+H-1132+Budapest,+V%C3%A1ci+%C3%BAt+22-24,+Hungary','_blank');
	});

}

google.maps.event.addDomListener(window, 'load', initialize);

google.maps.event.addDomListener(window, "resize", function() {
	var center = map.getCenter();
	google.maps.event.trigger(map, "resize");
	map.setCenter(center);
});
