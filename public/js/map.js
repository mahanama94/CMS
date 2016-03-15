 
/*class Map{
	var map;
	
	public function createMap(latitude, longitude){
		center = {lat: latitude, lng: longitude};
		
		options = {
			center: center,
			zoom: 15
		}
		
		alert("called");
		
		this.map =  new google.maps.Map(document.getElementById('map'), options);
		
		positionOptions = {
			    position: center,
			    map: map,
			    title: 'Current Position'
		}
		
		var marker = new google.maps.Marker(positionOptions);
		
	}
}

function map_main(latitude, longitude){
	Map myMap = new Map(latitude, longitude);
	alert("fuck");
}*/
function initMap(latitudes, longitudes) {
	
	alert(json["latitude"]);
	center = {lat: latitude, lng: longitude};
	
	options = {
		center: center,
		zoom: 8
	}
    //
	map = new google.maps.Map(document.getElementById('map'), options);
	
	//alert("x");
	alert(typeof(parseFloat(json[0]["latitude"])));
	
	polycoordinates = new Array();
	
	for(i=0 ; i < json.length; i++){
		
		// center of the marker
		center = { lat:parseFloat(json[i]["latitude"]), lng: parseFloat(json[i]["longitude"])};
		
		polycoordinates.push(center);
		
		
		//adding marker
		positionOptions = {
			    position: center,
			    map: map,
			    label: json[i]["posId"],
		
			} 
		
		var marker = new google.maps.Marker(positionOptions);
		
		//Info window
		var infowindow = new google.maps.InfoWindow({
			content: "Bla bla",
			Marker: marker
		});
	}
	
	
	var flightPath = new google.maps.Polyline({
	    path: polycoordinates,
	    geodesic: true,
	    strokeColor: '#FF0000',
	    strokeOpacity: 1.0,
	    strokeWeight: 5
	  });
	
	flightPath.setMap(map);
	
 }

function setMarker(latitude, longitude){
	
	alert("Set marker called");
	
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