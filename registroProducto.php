<?php  
	require_once("conexion.php");
	$codprod = 	$_POST["cprod"];
	$tipoprod = $_POST["tprod"];
	$nameprod = $_POST["nprod"];
	$desprod = 	$_POST["dprod"];
	$precio = 	$_POST["pVenta"];
	$existencia = $_POST["existencia"];
	$estado = $_POST["estado"];
	$idcat = $_POST["idcat"];

	if (isset($_POST["Registrar"])) {
		if ($conn->$connect_error) {
			die($conn->connect_error);
		}

		$consulta = "INSERT INTO producto(codigoProducto,tipoProducto,nombreProducto,descuento,precioVenta,existencia,estado,catalogo_idcatalogo)VALUES('".$codprod."','".$tipoprod."','".$nameprod."','".$desprod."','".$precio."','".$existencia."','".$estado."','".$idcat."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Almacenado";
			header("location: producto.php");
		}else{
			echo "Error: " . $consulta . " " . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
?>