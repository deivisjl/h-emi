<?php  
	require_once ('conexion.php');
	$idreg = $_REQUEST['id'];
	$consulta = "SELECT * FROM regalias WHERE idregalias = '$idreg'";
	$quer = mysqli_query($conn,$consulta);
	$fila = mysqli_fetch_array($quer);
	require_once('index.php');
?>

<center>
	<div>
		<form action="updateRegalia.php" method="post" accept-charset="utf-8" id="rsus">
			<h5>MODIFICAR REGALIA</h5>
			<table>
				<tbody>
					<tr><input type="hidden" name="idreg" value="<?php echo $fila['idregalias']; ?>"></tr>
					<tr>
						<td>Puntos Acumulado:</td>
						<td><input type="text" name="puntos" placeholder="costo" value="<?php echo $fila['puntosAcumulado']; ?>" required></td>
					</tr>
					<tr>
						<td>Porcentaje:</td>
						<td><input type="number" step="0.01" name="porcentaje" placeholder="fecha compra" value="<?php echo $fila['porcentaje']; ?>" required></td>
					</tr>
					<tr>
						<td>Comision:</td>
						<td><input type="number" step="0.01" name="comision" placeholder="fecha vence" value="<?php echo $fila['comision']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="estado" value="<?php echo $fila['estado']; ?>" required></td>
						<td><input type="hidden" name="idasoc" value="<?php echo $fila['asociado_idasociado']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="Modificar" value="Modificar" class="btn btn-primary"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</center>