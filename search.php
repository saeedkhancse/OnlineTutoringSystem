<html>
<head>
<title></title>

<script src="3.js" type="text/javascript"></script>

<meta http-equiv="content-type" content="text/html;charset=utf-8">

<!-- ================================================================= Polyfill powerful web components =================== -->
<!-- @note#tajuddin.khandaker: Optimizes device display viewport  -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

<!-- Polyfill Web Components support for older browsers -->
<script src="bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>

<!-- Import element -->
<link rel="import" href="bower_components/google-map/google-map.html">
<link rel="import" href="bower_components/sortable-table/sortable-table.html">
<link rel="import" href="bower_components/hot-table/src/hot-table.html">
<style>
google-map {
	height: 300px;
}
</style>

<!-- ================================================================= Polyfill powerful web components =================== -->

<link href="map.css" rel="stylesheet" type="text/css"/>
</head>

<body>





<!--<div id="header">Tution <span>Media</span></div>-->
<div id="banner"></div>


<div id="templatemo_menu_panel1" class="nav">
            
    			<div id="templatemo_menu_section11" class="menu_section">
                
                
            		<ul>
		                <li><a href="index.php ">Home</a></li>
        		        <li><a href="search.php">Search for Tutor</a></li>
		                <li><a href="request.php">Request for Tutor</a></li>
		                <li><a href="available_tution.php">Available tuitions</a></li>  
        		        <li><a href="tutor.php"> Tutors</a></li>
                		<li><a href="#">Contact</a></li>                     
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->


<div id="content">

<!--<h1><center>Search For a Tutor</center></h1>-->
	
	<!-- Use element -->
	<!-- Dhaka: 24.525752, 90.302519 -->
	<!-- Rajshahi: 24.738901, 88.945783 -->
	<!-- Sylhet: 24.704287, 91.668943 -->
	<!-- Khulna: 22.847672, 89.554764 -->
	<!-- Barishal: 22.699897, 90.367795 -->
	<google-map>
		<google-map-marker id="mirpur" latitude="23.8045117" longitude="90.3607137" draggable="false" clickEvents="true" title="Dhaka"></google-map-marker>
		<google-map-marker id="bashabo" latitude="23.7425676" longitude="90.4322836" draggable="false" clickEvents="true" title="Rajshahi"></google-map-marker>
		<google-map-marker id="gulshan" latitude="23.790986" longitude="90.4160527" draggable="false" clickEvents="true" title="Sylhet"></google-map-marker>
		<google-map-marker id="shantinagar" latitude="23.7381866" longitude="90.41428529" draggable="false" clickEvents="true" title="Khulna"></google-map-marker>
		<google-map-marker id="dhanmondi" latitude="23.7464653" longitude="90.3760125" draggable="false" clickEvents="true" title="Barishal"></google-map-marker>
	</google-map>
	
	<script>

	function loadXMLDoc(lat, lng)
	{
		var xmlhttp;
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange = function()
		  {
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("out").innerHTML = xmlhttp.responseText;
		
			document.getElementById("footer").innerHTML = "SENT";
			}
		  }
		  
		xmlhttp.open("GET", "query.php?lat=" + lat + "&lng=" + lng, true);
		//xmlhttp.open("GET", "query.php?lat=24.525752&lng=90.302519", true);	
		xmlhttp.send(null);
	}
	</script>
	
	<script>
		// Bangladesh: 23.7356978, 90.4267502
	  var map = document.querySelector('google-map');
	  var markers = document.querySelectorAll('google-map-marker');
	  map.latitude = 23.7356978;
	  map.longitude = 90.4267502;
	  map.libraries = "places,geometry";
	  map.fitToMarkers = true;
	  map.clickEvents = true;
	  map.addEventListener('google-map-ready', function(e) {

		//alert('Map loaded!' + e);
		
		var location = { lat: 0, lng: 0, place: "" };
		var locations = [];

		for (var i = 0; i < markers.length; ++i) {
			markers[i].info = new google.maps.InfoWindow({
				content: 'latitudes: ' + markers[i].marker.getPosition().lat() + '<br>Longitude: ' + markers[i].marker.getPosition().lng()
			});
			//markers[i].icon= "https://www.google.co.kr/images/nav_logo195.png";
			google.maps.event.addListener(markers[i].marker,'click',function(event) {
				loadXMLDoc(event.latLng.lat(), event.latLng.lng());
				//alert(event.latLng.lat() + ", " + event.latLng.lng());
			});
			//markers[i].info.open(map, markers[i].marker);
			location.lat = markers[i].marker.getPosition().lat();
			location.lng = markers[i].marker.getPosition().lng();
			location.place = markers[i].title;
			locations[i] = location;
		}
	  });
	</script>
	
	<div id="out"></div>
</div>
</div>
<div id="footer"></div>

</body>

</html>