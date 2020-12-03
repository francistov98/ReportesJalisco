<?php
if (isset($_POST['submit'])) 
{
	if (empty($_POST['consulta'])) 
	{
			?>
			<h3>Completa todos los campos vacios</h3>
			<?php
	}
	else
	{
		// Define $username y $password
		$consulta=$_POST['consulta'];
		include("conexionDB.php");//Contiene de conexion a la base de datos

		$sql ="SELECT nombrelevantador, fechadelito, tipodelito, otrodelito, localizacion, detallesdelito, nombredelincuente, detallesdelincuente, id_formulario, nombreafectado
	FROM public.formulario WHERE nombrelevantador='$consulta' or fechadelito='$consulta' or tipodelito='$consulta' or otrodelito='$consulta' or localizacion='$consulta' or  detallesdelito='$consulta' or  nombredelincuente='$consulta' or detallesdelincuente='$consulta' or id_formulario='$consulta' or nombreafectado='$consulta';";
		
		$query=pg_query($conex,$sql);
		$contador=pg_num_rows($query);
		if ($contador>=1 && $query)
		{
			while($row = pg_fetch_array($query))
			{
				$nombrelevantador = $row['nombrelevantador'];
				$fechadelito= $row['fechadelito'];
				$tipodelito= $row['tipodelito'];
				$otrodelito= $row['otrodelito'];
				$localizacion= $row['localizacion'];
				$detallesdelito= $row['detallesdelito'];
				$nombredelincuente= $row['nombredelincuente'];
				$detallesdelincuente= $row['detallesdelincuente'];
				$id_formulario= $row['id_formulario'];
				$nombreafectado= $row['nombreafectado'];
				?>
				<div>
					<div>
						<table class="egt">
							<tr>
								<th>Nombre del Levantador</th>
								<th>Fecha del delito</th>
								<th>Tipo de delito</th>
								<th>Otro tipo de delito</th>
								<th>Direccion del delito</th>
								<th>Nombre del afectado</th>
								<th>Detalles del delito</th>
								<th>Nombre del delincuente</th>
								<th>Caracteristicas del delincuente</th>
								<th>Telefono del que levanto el reporte</th>
							</tr>
							<tr>
								<td><?php echo $nombrelevantador; ?></td>
								<td><?php echo $fechadelito; ?></td>
								<td><?php echo $tipodelito; ?></td>
								<td><?php echo $otrodelito; ?></td>
								<td><?php echo $localizacion; ?></td>
								<td><?php echo $nombreafectado; ?></td>
								<td><?php echo $detallesdelito; ?></td>
								<td><?php echo $nombredelincuente; ?></td>
								<td><?php echo $detallesdelincuente; ?></td>
								<td><?php echo $id_formulario; ?></td>
							</tr>
						</table>
					</div>
				</div>
				<?php
			}
			//header("location: busquedas.php");
		} 
		else 
		{
			?>
			<h3>No se encontro el registro...</h3>
			<?php
		}
	}
}
?>