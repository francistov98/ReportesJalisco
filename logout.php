<?php
session_start();
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: inicioSesion.php"); // Redireccionando a la pagina index.php
}
?>