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
 
function findMe()
{
	var output = document.getElementById('map');
	if (navigator.geolocation)
	{
		output.innerHTML = "<p> Tu navegador soporta geolocalizacion</p>";
	}
	else
	{
		output.innerHTML = "<p> Tu navegador no soporta geolocalizacion</p>";
	}
	function localizacion(posicion)
	{
		var latitude = posicion.coords.latitude;
		var longitude = posicion.coords.longitude;
		var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center="+latitude+","+longitude+"&size=600x300&markers=color:red%7C"+latitude+","+longitude+"&key=AIzaSyAKNXDvttVTGjyVAutQH3TOXIiCFcbXyg8";
		output.innerHTML = "<img src= '"+imgURL+"'>";
		output.innerHTML = "<p>Latitud: "+latitude+"<br>Longitud: "+longitude+"</p>";
	}
	function error()
	{
		output.innerHTML = "<p>No se pudo obtener tu geolocalizacion</p>";
	}
	navigator.geolocation.getCurrentPosition(localizacion, error);
} 
