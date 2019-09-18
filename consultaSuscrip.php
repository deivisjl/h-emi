<?php  
	require_once ('conexion.php');
	$consulta ="SELECT * FROM suscripcion WHERE estado = 'Activo'";
	$qr = mysqli_query($conn,$consulta);
	$array = mysqli_fetch_array($qr);
?>