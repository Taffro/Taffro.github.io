	var myCenter=new google.maps.LatLng(51.594816, -3.783645);
		
	function initMap()
	{
	var mapProp = {
	  center:myCenter,
	  zoom:9,
	  scrollwheel:false,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

	var myCity = new google.maps.Circle({
	  center:myCenter,
	  radius:20000,
	  strokeColor:"#FFFCD4",
	  strokeOpacity:0.8,
	  strokeWeight:2,
	  fillColor:"#878455",
	  fillOpacity:0.4
	  });

	myCity.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);