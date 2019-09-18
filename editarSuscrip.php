<?php  
	require_once ('conexion.php');
	$idsus = $_REQUEST['id'];
	$consulta = "SELECT * FROM suscripcion WHERE idsuscripcion = '$idsus'";
	$quer = mysqli_query($conn,$consulta);
	$fila = mysqli_fetch_array($quer);
	require_once('index.php');
?>

<center>
	<div>
		<form action="updateSuscripcion.php" method="post" accept-charset="utf-8" id="rsus">
			<h5>MODIFICAR SUSCRIPCION</h5>
			<table>
				<tbody>
					<tr><input type="hidden" name="idsus" value="<?php echo $fila['idsuscripcion']; ?>"></tr>
					<tr>
						<td>Costo:</td>
						<td><input type="text" name="costo" placeholder="costo" value="<?php echo $fila['costo']; ?>" required></td>
					</tr>
					<tr>
						<td>Fecha Compra:</td>
						<td><input type="date" name="fcompra" placeholder="fecha compra" value="<?php echo $fila['fechaCompra']; ?>" required></td>
					</tr>
					<tr>
						<td>Fecha Vencimiento:</td>
						<td><input type="date" name="fvence" placeholder="fecha vence" value="<?php echo $fila['fechaVencimiento']; ?>" required></td>
					</tr>
					<tr>
						<td>Tipo Tarjeta:</td>
						<td><input type="text" name="tarjeta" placeholder="tipo tarjeta" value="<?php echo $fila['tipoTarjeta']; ?>" required></td>
					</tr>
					<tr>
						<td>Numero Tarjeta:</td>
						<td><input type="number" name="nTarjeta" placeholder="numero de tarjeta" value="<?php echo $fila['numeroTarjeta']; ?>" required></td>
					</tr>
					<tr>
						<td>Nombre Tarjeta:</td>
						<td><input type="text" name="naTarjeta" placeholder="nombre de tarjeta" value="<?php echo $fila['nombreTarjeta']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="estado" value="<?php echo $fila['estado']; ?>" required></td>
						<td><input type="hidden" name="idsuscrip" value="<?php echo $fila['asociado_idasociado']; ?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="Modificar" value="Modificar" class="btn btn-primary"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</center>