<?php
include("conexionDB.php");
session_start();
$user_check=$_SESSION['login_user_sys'];
// SQL Query para completar la informacion del usuario
$ses_sql=pg_query($conex, "select id_admin from administrador where id_admin='$user_check'");
$row = pg_fetch_assoc($ses_sql);
$login_session =$row['id_admin'];
if(!isset($login_session)){
pg_close($conex); // Cerrando la conexion
header('Location: inicioSesion.php'); // Redirecciona a la pagina de inicio
}
?>