<?php 
	require("index.php");
	require_once("conexion.php");
	$consulta = "SELECT idlogin, usuario FROM login";
	$query = mysqli_query($conn,$consulta);
	require_once("consultaSocio.php");
 ?>
<center>
	<form action="registroAsociado.php" method="post" accept-charset="utf-8" id="rasoc">
		<table>
			<h1>REGISTRO DE ASOCIADOS</h1>
			<thead>
				
			</thead>
			<tbody>
				<tr>
					<td>NOMBRES:</td>
					<td><input type="text" name="nombres" placeholder="ingrese sus nombres"></td>
				<!--</tr>
				<tr>--->
					<td>APELLIDOS:</td>
					<td><input type="text" name="apellidos" placeholder="ingrese sus apellidos"></td>
				</tr>
				<tr>
					<td>DIRECCION:</td>
					<td><input type="text" name="direccion" placeholder="ingrese su direccion"></td>
				<!--</tr>
				<tr> --->
					<td>TELEFONO:</td>
					<td><input type="number" name="telefono" placeholder="ingrese su telefono"></td>
				</tr>
				<tr>
					<td>DPI:</td>
					<td><input type="number" name="dpi" placeholder="ingrese su cui"></td>

					<td >CODIGO ASESOR:</td>
					<td><input type="text" name="codAsesor" placeholder="codigo del asesor"></td>
					
				</tr>
				<tr>
					<td>PAIS:</td>
					<td><input type="text" name="pais" placeholder="nombre del pais"></td>
					<td></td>
					<td><input type="hidden" name="estado" value="Activo"></td>	
				</tr>
				<tr>
					<td>Asignar_Usuario:</td>
					<td>
						<select name="txtlogin">
							<option value="0">Seleccione</option>
							<?php 
							while ($valores = mysqli_fetch_array($query)) {
							echo '
								<option value="'.$valores[idlogin].'">'.$valores[usuario].'</option>
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
				</tr>
			</tbody>
		</table>
	</form>
</center>
<br><br><!--CONSULTA A TABLA ASOCIADO-->
<center>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th class="bg-primary">NOMBRES</th>
					<th class="bg-primary">APELLIDOS</th>
					<th class="bg-primary">DIRECCION</th>
					<th class="bg-primary">TELEFONO</th>
					<th class="bg-primary">DPI</th>
					<th class="bg-primary">COD_ASESOR</th>
					<th class="bg-primary">PAIS</th>
					<th class="bg-primary">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($querys as $fila){ ?>			
				<tr>
					<td><?php echo $fila['nombres']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['direccion']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['dpi']; ?></td>
					<td><?php echo $fila['cod_asesor']; ?></td>
					<td><?php echo $fila['pais']; ?></td>
					<td>
						<a href="editarAsociado.php?id=<?php echo $fila['idasociado']; ?>" title=""><button type="" class="btn btn-info"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
						|
						<a href="eliminarAsociado.php?id=<?php echo $fila['idasociado'];?>" title=""><button type="" class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span>Eliminar</button></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="exportarAsociado.php?id=<?php echo $fila['idasociado'];?>" title=""><button type="" class="btn btn-warning"><span class="glyphicon glyphicon-export"></span>Generar Reporte</button></a>
	</div>
</center>