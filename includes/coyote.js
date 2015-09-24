/**
 * @fileoverview This demo is used for MarkerClusterer. It will show 100 markers
 * using MarkerClusterer and count the time to show the difference between using
 * MarkerClusterer and without MarkerClusterer.
 * @author Luke Mahe (v2 author: Xiaoxi Wu)
 */

function jQuery(element) {
  return document.getElementById(element);
}

var coyote = {};

// Initialize variables
coyote.coyotes = null;
coyote.map = null;
coyote.markerClusterer = null;
coyote.markers = [];
coyote.infoWindow = null;

coyote.init = function() {
  var latlng = new google.maps.LatLng(42.330866,-71.209162);
  var options = {
    zoom: 12,
    center: latlng,
	panControl: false,
	zoomControl: true,
	zoomControlOptions: {style: google.maps.ZoomControlStyle.SMALL},
	streetViewControl: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  
  coyote.map = new google.maps.Map(jQuery('map'), options);
  coyote.coyotes = data.coyotes;
  
  var numMarkers = coyote.coyotes.length;

  coyote.infoWindow = new google.maps.InfoWindow();

  coyote.showMarkers();
  
  // Add an overlay of the city
  var cityBorders = new google.maps.KmlLayer('http://apps.newtonma.gov/apps/coyotes/js/newton.kml',{
	suppressInfoWindows: true,
	preserveViewport: true
  });
  cityBorders.setMap(coyote.map);
};

coyote.showMarkers = function() {
  coyote.markers = [];

  if (coyote.markerClusterer) {
    coyote.markerClusterer.clearMarkers();
  }
  
  // Create side panel
  var panel = jQuery('markerlist');
  panel.innerHTML = '';
  
  // Get how many markers there are
  var numMarkers = coyote.coyotes.length;

  for (var i = 0; i < numMarkers; i++) {
	// Title for panel
    var titleText = coyote.coyotes[i].formattedAddress;
	
	// Date and split into parts
	var d = coyote.coyotes[i].date;
	var a=d.split(" ");
	d=a[0].split("-");
	t=a[1].split(":");
		
	// Assemble date and convert into nice format
	var datetime = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);
	datetime = datetime.toString('M-dd-yyyy h:mm tt');
    
	// Create panel entry and append title to end
    var item = document.createElement('DIV');
    var title = document.createElement('A');
    title.href = '#';
    title.className = 'title';
    title.innerHTML = titleText + '<br />' + datetime ;

    item.appendChild(title);
    panel.appendChild(item);

	// Get latitude and longitude from json
    var latLng = new google.maps.LatLng(coyote.coyotes[i].lat,
        coyote.coyotes[i].lng);
	
	// Marker image
    var markerImage = '/apps/coyotes/includes/images/small-red.png';
	
	// Create marker itself
    var marker = new google.maps.Marker({
      'position': latLng,
      'icon': markerImage
    });

    var fn = coyote.markerClickFunction(coyote.coyotes[i], latLng);
    google.maps.event.addListener(marker, 'click', fn);
    google.maps.event.addDomListener(title, 'click', fn);
    coyote.markers.unshift(marker);
  }

  window.setTimeout(coyote.cluster, 0);
};

coyote.markerClickFunction = function(xmlEntry, latlng) {
  return function(e) {
    e.cancelBubble = true;
    e.returnValue = false;
    if (e.stopPropagation) {
      e.stopPropagation();
      e.preventDefault();
    }
    var title = xmlEntry.formattedAddress;
	
	// parse date into human readable form
	// Date and split into parts
	var d = xmlEntry.date;
	var a=d.split(" ");
	d=a[0].split("-");
	t=a[1].split(":");
	
	// Assemble date and convert into nice format
	var datetime = new Date(d[0],(d[1]-1),d[2],t[0],t[1],t[2]);
	datetime = datetime.toString('M-dd-yyyy h:mm tt');
	
	// Create info window content
    var infoHtml = '<div class="info"><h3>' + title + '</h3>' +
		'<p>' + datetime + '</p>';
		
	// Set content and position for window
    coyote.infoWindow.setContent(infoHtml);
    coyote.infoWindow.setPosition(latlng);
    coyote.infoWindow.open(coyote.map);
  };
};

coyote.cluster = function() {
  mcOptions = {
	gridSize: 20,
	maxZoom: 20,
	styles: [
		{
			url: '/apps/coyotes/includes/images/m1.png',
    		height: 53,
    		width: 53
		},
		{
			url: '/apps/coyotes/includes/images/m2.png',
    		height: 53,
    		width: 53
		},
		{
			url: '/apps/coyotes/includes/images/m3.png',
    		height: 53,
    		width: 53
		},
		{
			url: '/apps/coyotes/includes/images/m4.png',
    		height: 53,
    		width: 53
		},
		{
			url: '/apps/coyotes/includes/images/m5.png',
    		height: 53,
    		width: 53
		}
	]
  };
  coyote.markerClusterer = new MarkerClusterer(coyote.map, coyote.markers, mcOptions);
};
