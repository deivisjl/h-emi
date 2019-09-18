<?php  
	require_once("conexion.php");
	$consulta = "SELECT * FROM asociado WHERE estado = 'Activo'";
	$querys = mysqli_query($conn,$consulta);
	$rows = mysqli_fetch_array($querys);
?>