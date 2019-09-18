<?php  
	require_once("conexion.php");
	$consulta="SELECT *  FROM catalogo WHERE estado ='Activo'";
	$que = mysqli_query($conn,$consulta);
	$array = mysqli_fetch_array($que);
?>