<?php  
	require_once ('conexion.php');
	$consulta = "SELECT * FROM regalias WHERE estado = 'Activo'";
	$quer = mysqli_query($conn,$consulta);
	$array = mysqli_fetch_array($quer);
?>