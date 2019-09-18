<?php  
	require_once("conexion.php");
	$idaso = $_REQUEST['id'];

	$consulta = "SELECT *  FROM asociado, login WHERE idasociado = '$idaso'";
	$query = mysqli_query($conn,$consulta);
	$rows = mysqli_fetch_array($query);

	require_once("index.php");
?>

<center>
	
	<form action="updateAsociado.php" method="post" accept-charset="utf-8">
		<h4>MODIFICAR DATOS ASOCIADO</h4>
		<input type="hidden" name="idaso" value="<?php echo $rows['idasociado']; ?>">
		<label>Nombres:</label><input type="text" name="txtnombres" placeholder="Ingrese un nombre" value="<?php echo $rows['nombres']; ?>" required><br>

		<label>Apellidos:</label> <input type="text" name="txtapellido" placeholder="Ingrese una apellido" value="<?php echo $rows['apellidos']; ?>" required><br>

		<label>Dirección:</label><input type="text" name="txtdireccion" placeholder="Ingrese un direccion" value="<?php echo $rows['direccion']; ?>" required><br>

		<label>Telefono:</label><input type="number" name="txtcel" placeholder="Ingrese un telefono" value="<?php echo $rows['telefono']; ?>" required><br>

		<label>DPI:</label><input type="number" name="txtdpi" placeholder="Ingrese un dpi" value="<?php echo $rows['dpi']; ?>" required><br>

		<label>Codigo Asesor:</label><input type="text" name="txtcod_asesor" placeholder="Ingrese el codigo" value="<?php echo $rows['cod_asesor']; ?>" required><br>

		<label>Pais:</label><input type="text" name="txtpais" placeholder="Ingrese el pais" value="<?php echo $rows['pais']; ?>" required><br>

		<input type="hidden" name="txtestado" value="<?php echo $rows['estado']; ?>" required>
		<input type="hidden" name="txtlogin" value="<?php echo $rows['login_idlogin']; ?>">
		<input type="submit" name="Modificar" value="Modificar" class="btn btn-primary">
	</form>
</center>