<?php

$inc = include("conexionDB.php");
if($inc)
{
	$consulta = "SELECT * FROM formulario";
	$resultado = pg_query($conex,$consulta);
		if($resultado)
		{
			while($row = pg_fetch_array($resultado))
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
		}
}
?>