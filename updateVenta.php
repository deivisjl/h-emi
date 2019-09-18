<?php  
	require_once("conexion.php");
	$idven = $_REQUEST["idven"];
	$fecha = $_POST["fechaTran"];
	$total = $_POST["totalVenta"];
	$estado = $_POST["estado"];
	$idaso = $_POST["idasoc"];

	if (isset($_POST["Modificar"])) {
		if ($conn->connect_error) {
			die($conn->connect_error);
		}

		$consulta = "UPDATE venta SET fTransaccion = '".$fecha."', totalVenta = '".$total."', estado = '".$estado."', asociado_idasociado = '".$idaso."' WHERE idventa = '".$idven."'";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Actulizado";
			header("location: venta.php");
		}else{
			echo "Error: ". $consulta . " ". mysqli_error($conn);
			header("location: venta.php");
		}
		$conn->close();
	}
?>