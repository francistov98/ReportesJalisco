function initMap() {
  const uluru = { lat: -25.363, lng: 131.044 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: uluru,
  });
  const contentString =
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
    '<div id="bodyContent">' +
    "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
    "sandstone rock formation in the southern part of the " +
    "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
    "south west of the nearest large town, Alice Springs; 450&#160;km " +
    "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
    "features of the Uluru - Kata Tjuta National Park. Uluru is " +
    "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
    "Aboriginal people of the area. It has many springs, waterholes, " +
    "rock caves and ancient paintings. Uluru is listed as a World " +
    "Heritage Site.</p>" +
    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
    "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
    "(last visited June 22, 2009).</p>" +
    "</div>" +
    "</div>";
  const infowindow = new google.maps.InfoWindow({
    content: contentString,
  });
  const marker = new google.maps.Marker({
    position: uluru,
    map,
    title: "Uluru (Ayers Rock)",
  });
  marker.addListener("click", () => {
    infowindow.open(map, marker);
  });
}
/*(function ()
{
	const output = document.getElementById('map');
	if (navigator.geolocation)
	{
		output.innerHTML = "<p> Tu navegador soporta geolocalizacion</p>";
		const mapOptions = 
		{
			zoom:20,
			mapTypeId: google.maps.MapTypeId.ROAD
		};
		const map = new google.maps.Map(document.getElementById("map"),mapOptions);
		navigator.geolocation.getCurrentPosition
		(
			function(position)
			{
				const pos = {lat: position.coords.latitude, lng: position.coords.longitude};
				const geolocate = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
				const contenidoInfo = '<h1>Esta es tu ubicacion</h1>'+
									'<h2>Latitud: '+position.coords.latitude+'</h2>'+
									'<h2>Longitud: '+position.coords.longitude+'</h2>';
				const infowindow = new google.maps.InfoWindow
				(
					{
						content: contenidoInfo,
					}
				);
				const marker = new google.maps.Marker({
					position: geolocate,
					map,
					title: "Tu ubicacion actual",
				  });
				 marker.addListener("click", () => {
					infowindow.open(map, marker);
				  });

				map.setCenter(geolocate);
			}
		);
	
	}
	else
	{
		output.innerHTML = "<p> Tu navegador no soporta geolocalizacion</p>";
	}
	/*function localizacion(posicion)
	{
		//var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=600x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyAKNXDvttVTGjyVAutQH3TOXIiCFcbXyg8";
		//output.innerHTML = "<p>Latitud: "+latitude+"<br>Longitud: "+longitude+"</p>"
		//output.innerHTML = "<img src= '"+imgURL+"'>";
	}
	function error()
	{
		output.innerHTML = "<p>No se pudo obtener tu geolocalizacion</p>";
	}
	//navigator.geolocation.getCurrentPosition(localizacion, error);
})(); */
