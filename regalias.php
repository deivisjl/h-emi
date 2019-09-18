<?php 
	require_once('index.php');
	require_once ('conexion.php');
	$consulta = "SELECT idasociado, nombres, apellidos FROM asociado";
	$query = mysqli_query($conn,$consulta);
	require_once ('consultaRegalia.php');
 ?>

<center>
	<form action="registroRegalia.php" method="post" accept-charset="utf-8" id="rega">
		<table>
			<h1>REGALIAS</h1>
			<thead>
				<tr>
				</tr>
			</thead>
			<tbody>				
				<tr>
					<td>PUNTOS ACUMULADOS:</td>
					<td><input type="number" name="puntosAcumu" placeholder="puntos acumulados"></td>
					<td>PORCENTAJE:</td>
					<td><input type="number" step="0.01" name="porcentaje" placeholder="ingrese un porcentaje"></td>
				</tr>
				<tr>
					<td>COMISION:</td>
					<td><input type="number"  step="0.01" name="comision" placeholder="ingrese la comision"></td>
					<td>ASOCIADO:</td>
					<td>
						<select name="asociado">
							<option value="0">Seleccione</option>
							<?php
								while ( $valor =mysqli_fetch_array($query)) {
								 	echo '
								 		<option value="'.$valor[idasociado].'">'.$valor[nombres]." ".$valor[apellidos].'</option>
								 	     ';
								 } 
							?>
						</select>
					</td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="estado" value="Activo"></td>
					<td><br><input type="submit" name="Registrar" value="Registrar" class="btn btn-success"></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
		
	</form>
</center>
<hr>
<!--CONSULTA REGALIAS--->
<center>
	<div>
		<table class="table" align="center">
			<thead>
				<tr>
					<th class="bg-primary">PUNTOS ACUMULADOS</th>
					<th class="bg-primary">PORCENTAJE</th>
					<th class="bg-primary">COMISION</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($quer as $fila) { ?>
				<tr>
					<td><?php echo $fila['puntosAcumulado']; ?></td>
					<td><?php echo $fila['porcentaje']; ?></td>
					<td><?php echo $fila['comision']; ?></td>
					<td>
						<a href="editarRegalia.php?id=<?php echo $fila['idregalias']; ?>"><button class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
						||
						<a href="eliminarRegalia.php?id=<?php echo $fila['idregalias'];?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span>Eliminar</button></a>
					</td>
				</tr>	
				<?php } ?>
			</tbody>
		</table>
	</div>
</center>