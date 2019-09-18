<?php  
	require_once("conexion.php");
	$cantidad = $_POST["cant"];
	$precioVenta = $_POST["pVent"];
	$totalDescuento = $_POST["totalDescuento"];
	$estado = $_POST["estado"];
	$producto = $_POST["idprod"];
	$venta = $_POST["idven"];

	if (isset($_POST["Registrar"])) {
		if ($conn->$connect_error) {
			die($conn->$connect_error);
		}

		$consulta="INSERT INTO detalle_venta(cantidad,precioVenta,totalDescuento,estado,producto_idproducto,venta_idventa)VALUES('".$cantidad."','".$precioVenta."','".$totalDescuento."','".$estado."','".$producto."','".$venta."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Guardado";
			header("location: detalle_venta.php");
		}else{
			echo "Error: " . $consulta . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
?>