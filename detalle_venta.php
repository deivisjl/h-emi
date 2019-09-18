<?php 
	require_once("index.php");
	require_once("conexion.php");
	$consulta = "SELECT idproducto, nombreProducto, tipoProducto FROM producto";
	$consulta2 ="SELECT idventa, totalVenta, fTransaccion FROM venta";
	$query = mysqli_query($conn,$consulta);
	$query2 =mysqli_query($conn,$consulta2);
	require_once('consultaDetalleVenta.php');
 ?>
 <center>
	
	<form action="registroDetalleVenta.php" method="post" accept-charset="utf-8" id="dven">
		<h1>Detalles de Venta</h1>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>Cantidad:</td>	
					<td><input type="number" name="cant" placeholder="Ingrese la cantidad"></td><!--</tr>
					<tr> --->
					<td>Precio Venta:</td>
					<td><input type="number" step="0.01" name="pVent" placeholder="Ingrese el precio de venta"></td>
				</tr>
				<tr>
					<td>TotalDescuento:</td>
					<td><input type="number" step="0.01" name="totalDescuento" placeholder="subtotal ventas"></td>
					<td><input type="hidden" name="estado" value="Activo"></td>
					<td></td>
				</tr>
				<tr>
					<td>Producto:</td>
					<td>
						<select name="idprod">
							<option value="0">Seleccione</option>
							<?php 
							while ($fila = mysqli_fetch_array($query)) {
							 	echo '
							 	      <option value="'.$fila[idproducto].'">'.$fila[nombreProducto]." ".$fila[tipoProducto].'</option>
							 	     ';
							 } 
							?>
						</select>
					</td>
					<td>Venta:</td>
					<td>
						<select name="idven">
							<option value="0">Seleccione</option>
							<?php
							while ($fila2 =mysqli_fetch_array($query2)) {
							  	echo '
							  		 <option value="'.$fila2[idventa].'">'.$fila2[totalVenta]." ".$fila2[fTransaccion].'</option>
							  	     ';
							  }  
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><br><br><br><br></td>
					<td><button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span><input type="submit" name="Registrar" value="Registrar" class="btn btn-primary"></button></td>
					<td></td>
					<td><a href="" title=""><buxtton class="btn btn-danger">Regresar</button></a></td>
				</tr>
			</tbody>
		</table>
	</form>

</center>
<!--CONSULTA DETALLE DE VENTA-->
<hr>
<center>
	
	<div>
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">CANTIDAD</th>
					<th class="bg-primary">CODIGO PRODUCTO</th>
					<th class="bg-primary">NOMBRE PRODUCTO</th>
					<th class="bg-primary">PRECIO VENTA</th>
					<th class="bg-primary">DESCUENTO</th>
					<th class="bg-primary">TOTAL DESCUENTO</th>
					<th class="bg-primary">TOTAL VENTAS</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($quer1 as $rows) { ?>
				<tr>
					<td><?php echo $rows['cantidad']; ?></td>
					<td><?php echo $rows['codigoProducto']; ?></td>
					<td><?php echo $rows['nombreProducto']; ?></td>
					<td><?php echo $rows['precioVenta']; ?></td>
					<td><?php echo $rows['descuento']; ?></td>
					<td><?php echo $rows['totalDescuento']; ?></td>
					<td><?php echo $rows['totalVenta']; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		<a href="exportarDetalleVenta.php?id=<?php echo $rows['cantidad'];?>" title=""><button type="" class="btn btn-warning"><span class="glyphicon glyphicon-export"></span>Generar Reporte</button></a>
	</div>
</center>