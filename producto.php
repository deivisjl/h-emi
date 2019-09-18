<?php  
	require_once("index.php");
	require_once("conexion.php");
	$consulta = "SELECT idcatalogo, nombreCat FROM catalogo";
	$query = mysqli_query($conn,$consulta);
	require_once("consultaProducto.php");
?>
<center>
	
	<form action="registroProducto.php" method="post" accept-charset="utf-8" id="rprod">
		<h1>Registro de Productos</h1>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>Codigo Producto:</td>	
					<td><input type="text" name="cprod" placeholder="Ingrese el codigo"></td>			
				<!--</tr>
				<tr> --->
					<td>Tipo de Producto:</td>
					<td><input type="text" name="tprod" placeholder="ingrese un producto"><br></td>
				</tr>
				<tr>
					<td>Nombre del Producto:</td>
					<td><input type="text" name="nprod" placeholder="ingrese nombre prod"></td>
				<!--</tr>
				<tr> -->
					<td>Descuento:</td>
					<td><input type="number" name="dprod" step="0.01" placeholder="ingrese un descuento"><br>
					</td>
				</tr>
				<tr>

					<td>Precio Venta:</td>
					<td><input type="number" name="pVenta" step="0.01" placeholder="ingrese un precio">
					</td>
					<td>Existencia</td>
					<td><input type="number" name="existencia" placeholder="ingrese la existencia"><br></td>
				</tr>
				<tr>
					<td><input type="hidden" name="estado" value="Activo"></td>
					<td></td>
					<td>Catalogo:</td>
					<td>
						<select name="idcat">
							<option value="0">Seleccione</option>
							<?php 
							while ($row = mysqli_fetch_array($query)) {
								echo '<option value="'.$row[idcatalogo].'">'.$row[nombreCat].'</option>
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
	</form><a href="catalogo.php"><button class="btn btn-danger">Regresar</button></a>
</center>
<!--LISTADO DE PRODUCTOS-->
<hr>
<center>
	<div>
		
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">CODIGO</th>
					<th class="bg-primary">TIPO PRODUCTO</th>
					<th class="bg-primary">NOMBRE PRODUCTO</th>
					<th class="bg-primary">DESCUENTO</th>
					<th class="bg-primary">PRECIO VENTA</th>
					<th class="bg-primary">EXISTENCIA</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($que as $fila) { ?>
				<tr>
					<td><?php echo $fila['codigoProducto']; ?></td>
					<td><?php echo $fila['tipoProducto']; ?></td>
					<td><?php echo $fila['nombreProducto']; ?></td>
					<td><?php echo $fila['descuento']; ?></td>
					<td><?php echo $fila['precioVenta']; ?></td>
					<td><?php echo $fila['existencia']; ?></td>
					<td>
						<a href="editarProducto.php?id=<?php echo $fila['idproducto'];?>" title=""><button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
						||
						<a href="eliminarProducto.php?id=<?php echo $fila['idproducto'];?>" title=""><button class="btn btn-danger"><span class="glyphicon glyphicon-danger"></span>Eliminar</button></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="exportarProducto.php?id=<?php echo $fila['idproducto'];?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-export"></span>Exportar</button></a>
	</div>
</center>