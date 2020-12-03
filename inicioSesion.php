<?php
	include("login.php");
	if(isset($_SESSION['login_user_sys']))
	{
		header("location: administrador.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Inicio de sesion para administrador</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>
		<form method="post">
			<h1>Reporte de la policia estatal</h1>
			<p>Usuario: <input type="text" name="id_admin" requiered/></p>
			<p>Contraseña: <input type="password" name="contrasenaadmin" requiered/></p>
			<input type="submit" name="submit" value="Iniciar sesion">
		</form>
		<a class="areaInicio" href='index.html'>Regrsar al formulario</a>	
	</body>
</html>