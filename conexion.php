<?php  
	$server='localhost';
	$db='privadosemi';
	$user='root';
	$pass='';

	$conn = new mysqli($server,$user,$pass,$db);

 	if ($conn->connect_error) {
 		die("error en la conexion" . $conn->connect_error);
 	}else{
 		//echo "<script>alert('conectado');</script>";
 	}
?>