<?php  
	require_once ('conexion.php');
	$id =		$_REQUEST["idreg"];
	$puntos = 	$_POST["puntos"];
	$porcen = 	$_POST["porcentaje"];
	$comisi = 	$_POST["comision"];
	$estado = 	$_POST["estado"];
	$asoci = 	$_POST["idasoc"];

	if (isset($_POST["Modificar"])) {
		if ($conn->connect_error) {
			die($conn->connect_error);
		}

		$consulta = "UPDATE regalias SET puntosAcumulado = '".$puntos."', porcentaje = '".$porcen."', comision = '".$comisi."', estado = '".$estado."', asociado_idasociado = '".$asoci."' WHERE idregalias = '".$id."'";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Actulizado";
			header("location: regalias.php");
		}else{
			echo "Error: ". $consulta . " ". mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}

?>