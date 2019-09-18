<?php
	require_once("index.php"); 
	require_once("conexion.php");
	$idprod = $_REQUEST['id'];
	$consulta ="SELECT * FROM producto WHERE idproducto = '$idprod'";
	$query = mysqli_query($conn,$consulta);
	$fila = mysqli_fetch_array($query);
?>
<center>
	<div>
		<form action="updateProducto.php" method="post" accept-charset="utf-8" id="rsus">
			<h5>MODIFICAR REGALIA</h5>
			<table>
				<tbody>
					<tr><input type="hidden" name="idprod" value="<?php echo $fila['idproducto']; ?>"></tr>
					<tr>
						<td>Codigo Producto:</td>
						<td><input type="text" name="cprod" placeholder="codgigo producto" value="<?php echo $fila['codigoProducto']; ?>" required></td>
					</tr>
					<tr>
						<td>Tipo Producto:</td>
						<td><input type="text" name="tprod" placeholder="tipo de producto" value="<?php echo $fila['tipoProducto']; ?>" required></td>
					</tr>
					<tr>
						<td>Nombre Producto:</td>
						<td><input type="text" name="nprod" placeholder="nombre de producto" value="<?php echo $fila['nombreProducto']; ?>" required></td>
					</tr>
					<tr>
						<td>Descuento:</td>
						<td><input type="number" step="0.01" name="descuento" placeholder="descuento" value="<?php echo $fila['descuento']; ?>" required></td>
					</tr>
					<tr>
						<td>Precio Venta:</td>
						<td><input type="number" step="0.01" name="preprod" placeholder="precio venta" value="<?php echo $fila['precioVenta']; ?>" required></td>
					</tr>
					<tr>
						<td>Existencia:</td>
						<td><input type="number" name="existencia" placeholder="existencia" value="<?php echo $fila['existencia']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="hidden" name="estado" value="<?php echo $fila['estado']; ?>" required></td>
						<td><input type="hidden" name="idcat" value="<?php echo $fila['catalogo_idcatalogo']; ?>" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="Modificar" value="Modificar" class="btn btn-primary"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</center>