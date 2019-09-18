<?php 
	require_once("index.php"); 
	require_once("conexion.php");
	$idven = $_REQUEST['id'];
	$consulta = "SELECT idventa,fTransaccion,totalVenta,estado,asociado_idasociado FROM venta WHERE idventa = '$idven'";
	$query1 = mysqli_query($conn,$consulta);
	$fila = mysqli_fetch_array($query1);
?>
<center>
	<div>
		<form action="updateVenta.php" method="post" accept-charset="utf-8" id="rsus">
			<h5>MODIFICAR VENTA</h5>
			<table>
				<tbody>
					<tr><input type="hidden" name="idven" value="<?php echo $fila['idventa']; ?>"></tr>
					<tr>
						<td></td>
						<td><input type="hidden" name="fechaTran" placeholder="fecha de transaccion" value="<?php echo $fila['fTransaccion']; ?>" required></td>
					</tr>
					<tr>
						<td>Total Venta:</td>
						<td><input type="number" step="0.01" min="0" name="totalVenta" placeholder="total de venta" value="<?php echo $fila['totalVenta']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="estado" value="<?php echo $fila['estado']; ?>" required></td>
						<td><input type="hidden" name="idasoc" value="<?php echo $fila['asociado_idasociado']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="Modificar" value="Modificar" class="btn btn-primary"></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</form>
		<a href="index.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>Regresar</button></a>
	</div>

</center>