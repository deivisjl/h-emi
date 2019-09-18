<?php 
	require_once ('index.php');
	require_once ('conexion.php');
	$consulta = "SELECT idasociado, nombres, apellidos FROM asociado";
	$query = mysqli_query($conn,$consulta);
	require_once('consultaSuscrip.php');
 ?>
<center>
	<form action="registroSuscripcion.php" method="post" accept-charset="utf-8" id="rsus">
		<table>
			<h1>SUSCRIPCIONES</h1>
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>COSTO:</td>
					<td><input type="number" name="costo" placeholder="ingrese el costo"></td>
					<td>FECHA COMPRA:</td>
					<td><input type="date" name="fechaCompra" placeholder="ingrese fecha de compra"></td>
				</tr>
				<tr>
					<td>FECHA VENCIMIENTO:</td>
					<td><input type="date" name="fechaVencimiento" placeholder="ingrese fecha de vencimiento"></td>
					<td>TIPO TARJETA:</td>
					<td><input type="text" name="tarjeta" placeholder="ingrese tipo de tarjeta"></td>
				</tr>
				<tr>
					<td>NUMERO DE TARJETA:</td>
					<td><input type="number" name="nTarjeta" placeholder="ingrese el numero de tarjeta"></td>
					<td>NOMBRE TARJETA:</td>
					<td><input type="text" name="nameTarjeta" placeholder="ingrese el nombre de su tarjeta"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="estado" value="Activo">
					</td>
					<td>ASOCIADO:</td>
					<td>
						<select name="idasociado">
							<option value="0">Seleccione</option>
							<?php 
								while ($valor = mysqli_fetch_array($query)) {
									echo '
										<option value="'.$valor[idasociado].'">'.$valor[nombres]." ".$valor[apellidos].'</option>
										 ';
								}
							 ?>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><br><input type="submit" name="Registrar" value="Registrar" class="btn btn-success"></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		
	</form>
</center>
<hr><br>
<!--CONSULTA ASOCIADO-->
<center>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">COSTO</th>
					<th class="bg-primary">FECHA COMPRA</th>
					<th class="bg-primary">FECHA VENCE</th>
					<th class="bg-primary">TIPO TARJETA</th>
					<th class="bg-primary">NUMERO TARJETA</th>
					<th class="bg-primary">NOMBRE TARJETA</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($qr as $rows) { ?>
					<tr>
						<td><?php echo $rows['costo']; ?></td>
						<td><?php echo $rows['fechaCompra']; ?></td>
						<td><?php echo $rows['fechaVencimiento']; ?></td>
						<td><?php echo $rows['tipoTarjeta']; ?></td>
						<td><?php echo $rows['numeroTarjeta']; ?></td>
						<td><?php echo $rows['nombreTarjeta']; ?></td>
						<td>
							<a href="editarSuscrip.php?id=<?php echo $rows['idsuscripcion']; ?>"><button type="" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
							||
							<a href="eliminarSuscrip.php?id=<?php echo $rows['idsuscripcion'];?>" title=""><button type="" class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span>Eliminar</button></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="eexportarSuscripcion.php?id=<?php echo $rows['idsuscripcion'];?>" title=""><button type="" class="btn btn-warning"><span class="glyphicon glyphicon-export"></span>Generar Reporte</button></a>
	</div>
</center>