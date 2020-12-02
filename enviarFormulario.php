<?php
include("conexionDB.php");
if (isset($_POST['enviarFormulario']))
{
	if(strlen($_POST['nombreLevantador']) >=1 && strlen($_POST['fechaDelito']) >=1 && strlen($_POST['tipoDelito']) >=1 && strlen($_POST['otroDelito']) >=1 && strlen($_POST['localizacion']) >=1 && strlen($_POST['nombreAfectado']) >=1 && strlen($_POST['detallesDelito']) >=1 && strlen($_POST['nombreDelincuente']) >=1 && strlen($_POST['detallesDelincuente']) >=1 && strlen($_POST['id_formulario']) >=1)
	{
		$nombreLevantador = trim($_POST['nombreLevantador']);
		$fechaDelito=trim($_POST['fechaDelito']);
		$tipoDelito=trim($_POST['tipoDelito']);
		$otroDelito=trim($_POST['otroDelito']);
		$localizacion=trim($_POST['localizacion']);
		$nombreAfectado=trim($_POST['nombreAfectado']);
		$detallesDelito=trim($_POST['detallesDelito']);
		$nombreDelincuente=trim($_POST['nombreDelincuente']);
		$detallesDelincuente=trim($_POST['detallesDelincuente']);
		$id_formulario=trim($_POST['id_formulario']);
		$consulta = "INSERT INTO public.formulario(
	nombrelevantador, fechadelito, tipodelito, otrodelito, localizacion, detallesdelito, nombredelincuente, detallesdelincuente, id_formulario)
	VALUES ('$nombreLevantador', '$fechaDelito', '$tipoDelito', '$otroDelito', '$localizacion', '$detallesDelito', '$nombreDelincuente', '$detallesDelincuente', '$id_formulario')";
		$resultado = pg_query($conex,$consulta);
		if($resultado)
		{
			?>
			<h3>Tu reporte ha sido guardado correctamente</h3>
			<?php
		}
		else
		{
			?>
			<h3>Ocurrio un error al guardar el reporte</h3>
			<?php
		}
	}
	else
	{
			?>
			<h3>Complete los campos faltantes...</h3>
			<?php
	}
}

?>