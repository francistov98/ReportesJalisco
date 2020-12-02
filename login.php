<?php
session_start(); // Iniciando sesion
$error=''; // Variable para almacenar el mensaje de error
if (isset($_POST['submit'])) 
{
	if (empty($_POST['id_admin']) || empty($_POST['contrasenaadmin'])) 
	{
	$error = "Contraseña o usuario invalido...";
	}
	else
	{
		// Define $username y $password
		$id_admin=$_POST['id_admin'];
		$contrasenaadmin=$_POST['contrasenaadmin'];
		include("conexionDB.php");//Contiene de conexion a la base de datos

		$sql = "SELECT id_admin, contrasenaadmin FROM administrador WHERE id_admin = 'id_admin' AND contrasenaadmin='$contrasenaadmin';";
		$query=pg_query($conex,$sql);
		if ($query)
		{
				$_SESSION['login_user_sys']=$id_admin; // Iniciando la sesion
				header("location: administrador.php"); // Redireccionando a la pagina profile.php						
		} 
		else 
		{
		$error = "El correo electrónico o la contraseña es inválida.";	
		}
	}
}
?>