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
	<h3>Bienvenid@ al sistema  <i><?php echo $login_session; ?></i></h3>
	<div class="clear"> </div>
	<h4><a href="logout.php"> Cerrar sesión</a></h4>
	</div>	
		<?php
			include('mostrarFormularios.php');
		?>
	</body>
</html>