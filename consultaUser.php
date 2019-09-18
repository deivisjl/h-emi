<?php  
	require_once("conexion.php");
	$consulta = "SELECT idlogin, usuario, contrasenia, correo, telefono, rol_idrol FROM login";
	$query = mysqli_query($conn,$consulta);
	$rows = mysqli_fetch_array($query);
?>