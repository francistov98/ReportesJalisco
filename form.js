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
	var output = document.getElementById('map');
	if (navigator.geolocation)
	{
		output.innerHTML = "<p> Tu navegador soporta geolocalizacion</p>";
		var map;
		var mapOptions = 
		{
			zoom:20,
			mapTypeId: google.maps.MapTypeId.ROAD
		};
		map = new google.maps.Map(document.getElementById("map"),mapOptions);
		navigator.geolocation.getCurrentPosition
		(
			function(position)
			{
				var latitude = position.coords.latitude;
				var longitude = position.coords.longitude;
				var geolocate = new google.maps.LatLng(latitude,longitude);
				var infoWindow = new google.maps.InfoWindow
				(
					{
						map: map,
						position: geolocate,
						content:'<h1>Esta es tu ubicacion</h1>' +
								'<h2>Latitud: '+latitude+'</h2>' +
								'<h2>Longitud: '+longitude+'</h2>'
					}
				); 
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
	}*/
	function error()
	{
		output.innerHTML = "<p>No se pudo obtener tu geolocalizacion</p>";
	}
	//navigator.geolocation.getCurrentPosition(localizacion, error);
})(); 