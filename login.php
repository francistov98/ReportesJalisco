<?php
session_start(); // Iniciando sesion
if (isset($_POST['submit'])) 
{
	if (empty($_POST['id_admin']) || empty($_POST['contrasenaadmin'])) 
	{
		?>
		<h3>Completa todos los campos vacios</h3>
		<?php
	}
	else
	{
		// Define $username y $password
		$id_admin=$_POST['id_admin'];
		$contrasenaadmin=$_POST['contrasenaadmin'];
		include("conexionDB.php");//Contiene de conexion a la base de datos

		$sql = "SELECT id_admin, contrasenaadmin FROM administrador WHERE id_admin = '$id_admin' AND contrasenaadmin='$contrasenaadmin';";
		$query=pg_query($conex,$sql);
		$contador=pg_num_rows($query);
		if ($contador==1 && $query)
		{
				$_SESSION['login_user_sys']=$id_admin; // Iniciando la sesion
				header("location: administrador.php"); // Redireccionando a la pagina profile.php						
		} 
		else 
		{
			?>
			<h3>Tus credenciales son incorrectas...</h3>
			<?php	
		}
	}
}
?>
