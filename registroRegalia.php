<?php  
	require_once ('conexion.php');
	$puntos = $_POST["puntosAcumu"];
	$porcen = $_POST["porcentaje"];
	$comisi = $_POST["comision"];
	$estado = $_POST["estado"];
	$as = $_POST["asociado"];

	if (isset($_POST["Registrar"])) {
		if ($conn->connect_error) {
			die($conn->connect_error);
		}

		$consulta = "INSERT INTO regalias(puntosAcumulado,porcentaje,comision,estado,asociado_idasociado) VALUES('".$puntos."','".$porcen."','".$comisi."','".$estado."','".$as."')";
		if (mysqli_query($conn,$consulta)) {
			echo "Registro Guardado";
			header("location: regalias.php");
		}else{
			echo "Error: " . $consulta ." " . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();		
	}
?>