var inputs = document.getElementsByClassName('formulario__input');
 for (var i = 0; i < inputs.length; i++)
 {
	inputs[i].addEventListener
	(
		'keyup', function()
		{
			if(this.value.length >= 1)
			{
				this.nextElementSibling.classList.add('fijar');
			}
			else
			{
				this.nextElementSibling.classList.remove('fijar');
			}
		}
	)
 }
 
(function ()
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
	//navigator.geolocation.getCurrentPosition(localizacion, error);*/
})(); 
