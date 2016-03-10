  
function initMap(latitudes, longitudes) {

	center = {lat: latitude, lng: longitude};
	
	options = {
		center: center,
		zoom: 15
	}
    //
	map = new google.maps.Map(document.getElementById('map'), options);
	
	
	//
	positionOptions = {
		    position: center,
		    map: map,
		    title: 'Current Position'
	}
	
	var marker = new google.maps.Marker(positionOptions);
 }

function setMarker(latitude, longitude){

	markerCenter = {lat:latitude , lng:longitude};
	positionOptions = {
		    position: markerCenter,
		    map: map,
		    title: 'Previous Position',
	}
	
	var marker = new google.maps.Marker(positionOptions)

}

/*(function(window, google){
	var map = (function(map , options){
		this.gMap = new google.maps.Map(element, options);
		
		return map;
	}());
	
	
	map.create = function(map, options){
		return new map(map, options);
	}
})*/