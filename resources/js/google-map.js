var map,
	infoWindow = new google.maps.InfoWindow(),
	bp = new google.maps.LatLng(47.5141269, 19.0581187),
	MY_MAPTYPE_ID = 'tower';

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

var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
