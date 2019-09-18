<?php  
	$server = 'localhost';
	$db='pruebasf';
	$user='root';
	$pass='';
	
	$conn=new mysqli($server,$user,$pass,$db);
	
	if ($conn->connect_error) {
		//echo "conexion establecida";
		die("conexion fallida". $conn->connect_error);
	}else{
		//echo "<script language='javaScript'>alert('conectado');</script>";
	}
		
		
	
?>