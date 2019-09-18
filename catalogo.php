<?php  
	require_once("index.php");
	require_once("consultaCatalogo.php");
?>
<center>
	
	<form action="registroCatalogo.php" method="post" accept-charset="utf-8" id="cprod">
		<h1>Catalogo de productos</h1>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>Nombre de Catalogo:</td>	
					<td><input type="text" name="NomCat" placeholder="Ingrese el nombre del catalogo"></td>
					<td><input type="hidden" name="estado" value="Activo"></td>
					<td><br><br></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="Registrar" value="Registrar" class="btn btn-success"></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</form><a href="index.php" title=""><button class="btn btn-danger">Regresar</button></a>
</center>
<!--CONSULTA CATALOGO--->
<br>
<center>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">NOMBRE DEL CATALOGO</th>
					<th class="bg-primary">PRODUCTOS</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($que as $fila){ ?>
					<tr>
						<td><?php echo $fila['nombreCat']; ?></td>
						<td><a href="producto.php"><button class="btn btn-primary">Productos</button></a></td>
						<td>
							<a href="editarCatalogo.php?id=<?php echo $fila['idcatalogo']; ?>" title=""><button type="" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
							||
							<a href="eliminarCatalogo.php?id=<?php echo $fila['idcatalogo']; ?>" title=""><button type="" class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span>Eliminar</button></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</center>
