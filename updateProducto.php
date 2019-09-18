<?php  
	require_once ('conexion.php');
	$idprod =		$_REQUEST["idprod"];
	$codigo = 	$_POST["cprod"];
	$tipo = 	$_POST["tprod"];
	$name = 	$_POST["nprod"];
	$descento = 	$_POST["descuento"];
	$venta = 	$_POST["preprod"];
	$existencia = 	$_POST["existencia"];
	$estado = 	$_POST["estado"];
	$cat = 	$_POST["idcat"];

	if (isset($_POST["Modificar"])) {
		if ($conn->connect_error) {
			die($conn->connect_error);
		}

		$consulta = "UPDATE producto SET codigoProducto = '".$codigo."', tipoProducto = '".$tipo."', nombreProducto = '".$name."', descuento = '".$descuento."', precioVenta = '".$venta."', existencia = '".$existencia."', estado = '".$estado."', catalogo_idcatalogo = '".$cat."' WHERE idproducto = '".$idprod."'";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Actulizado";
			header("location: producto.php");
		}else{
			echo "Error: ". $consulta . " ". mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}

?>