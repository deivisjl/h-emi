<?php  
	require_once("index.php");
	require_once("consultaUser.php");
	
?>
<center>
	
	<form action="createUsuario.php" method="post" accept-charset="utf-8">
		<h1>REGISTRO DE USUARIOS</h1>
		<table>
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>USUARIO:</td>	
					<td><input type="text" name="txtuser" placeholder="Ingrese un nombre"><br></td>			
				</tr>
				<tr>
					<td>CONTRASEÑA:</td>
					<td><input type="password" name="txtpass" placeholder="ingrese una contraseña"><br></td>
				</tr>
				<tr>
					<td>CORREO:</td>
					<td><input type="email" name="txtcorreo" placeholder="ingrese un correo"><br></td>
				</tr>
				<tr>
					<td>Telefono:</td>
					<td><input type="text" name="telefono" placeholder="Ingrese su telefono"><br>
					</td>
				</tr>
				<tr>
					<td>Tipo Usuario:</td>
					<td>
						
						<select name="txtidrol">
							<option value="0">Seleccione:</option>
							<option value="1">Asesor</option>
							<option value="2">Asociado</option>
						</select>
						<br><br>
					</td>
				</tr>
			
				<tr>
					<td></td>
					<td><input type="submit" name="Registrar" value="Registrar" class="btn btn-success" onclick="InsertUsuario()">
					<a href="" title=""><button class="btn btn-danger">Regresar</button></a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<script src="bootbox/bootbox.js"></script>
	<script type="text/javascript">
		function InsertUsuario(){
			bootbox.alert("Registro Guardado");
		}
	</script>

</center>
<br>
<center>
	<div class="table-responsive-sm" id="tuser">
		<table  class="table">
				<thead>
					<tr>
						<th class="bg-primary">USUARIO</th>
						<th class="bg-primary">CONTRASEÑA</th>
						<th class="bg-primary">CORREO</th>
						<th class="bg-primary">TELEFONO</th>
						<th class="bg-primary">ROL</th>
						<th class="bg-primary">ACCIONES</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($query as $fila){ ?>		
					<tr>
						<td ><?php echo $fila['usuario']; ?></td>
						<td><?php echo md5($fila['contrasenia']); ?></td>
						<td><?php echo $fila['correo']; ?></td>
						<td><?php echo $fila['telefono']; ?></td>
						<td><?php echo $fila['rol_idrol']; ?></td>
						<td>
							<a href="editarUsuario.php?id=<?php echo $fila['idlogin']; ?>" title=""><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>Editar</button></a>
							|
							<a href="eliminarUsuario.php?id=<?php echo $fila['idlogin']; ?>" title=""><button class="btn btn-warning"><span class="glyphicon glyphicon-erase"></span>Eliminar</button></a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>	
	</div>
</center>
<br><br>