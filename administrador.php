<?php
include('sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Bienvenido al administrador</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
	<h1>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h1>
	<div class="clear"> </div>
	<h4><a href="logout.php"> Cerrar sesión</a></h4>
	</div>	
	<div>
		<form method="post">
			<p>Ingresa el campo que deseas buscar en la base de datos: <input type="text" name="consulta"></p>
			<input type="submit" name="submit" value="Buscar">
		</form>
		<?php
			include("busquedaEspecifica.php");
		?>
	</div>
	<div>
	</div>
	</body>
</html>
