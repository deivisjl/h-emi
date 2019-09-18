<?php 
	require_once ('conexion.php');

	$costo = 		$_POST["costo"];
	$fcompra = 		$_POST["fechaCompra"];
	$fvence = 		$_POST["fechaVencimiento"];
	$tiTarjeta = 	$_POST["tarjeta"];
	$nTarjeta = 	$_POST["nTarjeta"];
	$naTarjeta= 	$_POST["nameTarjeta"];
	$estado= 		$_POST["estado"];
	$idasoc = 		$_POST["idasociado"];

	if (isset($_POST["Registrar"])) {

		if ($conn->connect_error) {
			die($conn->connecct_error);
		}

		$consulta="INSERT INTO suscripcion(costo,fechaCompra,fechaVencimiento,tipoTarjeta,numeroTarjeta,nombreTarjeta,estado,asociado_idasociado) VALUES('".$costo."','".$fcompra."','".$fvence."','".$tiTarjeta."','".$nTarjeta."','".$naTarjeta."','".$estado."','".$idasoc."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Suscripcion Guardada";
			header("location: suscripcion.php");
		}else{
			echo "Error: " . $consulta . "" . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
 ?>