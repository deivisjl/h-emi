<?php  
	require_once("index.php");
	require_once("conexion.php");
	$consulta = "SELECT idasociado, nombres, apellidos FROM asociado";
	$query = mysqli_query($conn,$consulta);
	require_once("consultaVenta.php");

?>
<center>
	
	<form action="registroVenta.php" method="post" accept-charset="utf-8" id="vprod">
		<h1>Registro de Ventas</h1>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td></td>	
					<td><input type=hidden name="fTransaccion" placeholder="fecha de transaccion" value="<?php date_default_timezone_set('America/Guatemala'); echo date("Y-m-d H:i:s"); ?>"></td><!--</tr>
					<tr> --->
					<td>Total Venta:</td>
					<td><input type="number" step="0.01" name="totalVenta" placeholder="total de venta"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="hidden" name="estado" value="Activo"></td>
					<td>Asociado:</td>
					<td>
						<select name="idasoc">
							<option value="0">Seleccione</option>
							<?php 
							while ($op = mysqli_fetch_array($query)) {
								echo '
									<option value="'.$op[idasociado].'">'.$op[nombres]." ".$op[apellidos].'</option>
									
								     ';
							}
							?>
						</select>
					<br><br>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Registrar" value="Registrar" class="btn btn-success"></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form>
	<a href="index.php" title=""><button class="btn btn-danger">Regresar</button></a>
</center>
<hr>
<center>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">FECHA</th>
					<th class="bg-primary">TOTAL VENTAS</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($que as $fila) { ?>
				<tr>
					<td><?php echo $fila['fTransaccion']; ?></td>
					<td><?php echo $fila['totalVenta']; ?></td>
					<td>
						<a href="editarVenta.php?id=<?php echo $fila['idventa']; ?>" title=""><button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
						||
						<a href="eliminarVenta.php?id=<?php echo $fila['idventa'];?>" title=""><button class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span>Borrar</button></a>
					</td>
				</tr>
			    <?php } ?>
			</tbody>
		</table>
	</div>
</center>