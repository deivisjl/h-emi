<?php  
	require_once("conexion.php");
	$idlogin = $_REQUEST['id'];

	$consulta = "SELECT *  FROM login WHERE idlogin = '$idlogin'";
	$query = mysqli_query($conn,$consulta);
	$rows = mysqli_fetch_array($query);

	require_once("index.php");
?>

<center>
	
	<form action="updateUsuario.php" method="post" accept-charset="utf-8">
		<h3>MODIFICAR DATOS USUARIO</h3>
		<input type="hidden" name="idlogin" value="<?php echo $rows['idlogin']; ?>">
		<label>Usuario:</label><input type="text" name="txtuser" placeholder="Ingrese un nombre" value="<?php echo $rows['usuario']; ?>" required><br>
		<label>Contraseña:</label> <input type="text" name="txtpass" placeholder="Ingrese una contraseña" value="<?php echo md5($rows['contrasenia']); ?>" required><br>
		<label>Correo:</label><input type="text" name="txtcorreo" placeholder="Ingrese un correo" value="<?php echo $rows['correo']; ?>" required><br>
		<label>Telefono:</label><input type="text" name="txtcel" placeholder="Ingrese un telefono" value="<?php echo $rows['telefono']; ?>" required><br>
		<label>Rol:</label><input type="number" name="txtrol" value="<?php echo $rows['rol_idrol']; ?>" min="1" max="2">
		<br><br>
		<input type="submit" name="Modificar" value="Modificar" class="btn btn-primary">
	</form>
</center>