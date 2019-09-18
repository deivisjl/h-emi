<?php  
	require_once('conexion.php');
	$fechaTrans = $_POST["fTransaccion"];
	$totalVen = $_POST["totalVenta"];
	$estado = $_POST["estado"];
	$idasoci = $_POST["idasoc"];

	if (isset($_POST["Registrar"])) {
		if ($conn->$connect_error) {
			die($conn->$connect_error);
		}

		$consulta = "INSERT INTO venta(fTransaccion,totalVenta,estado,asociado_idasociado)VALUES('".$fechaTrans."','".$totalVen."','".$estado."','".$idasoci."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Venta Registrada";
			header("location: venta.php");
		}else{
			echo "Error: " . $consulta . " " . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
?>