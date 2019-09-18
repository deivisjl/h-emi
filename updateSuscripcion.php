<?php  
	require_once ('conexion.php');
	$id = 		$_REQUEST["idsus"];
	$cost = 	$_POST["costo"];
	$fcom =		$_POST["fcompra"];
	$fven = 	$_POST["fvence"];
	$tipo = 	$_POST["tarjeta"];
	$numta = 	$_POST["nTarjeta"];
	$nomta =	$_POST["naTarjeta"];
	$est = 		$_POST["estado"];
	$sus = 		$_POST["idsuscrip"];

	if (isset($_POST["Modificar"])) {
		if ($conn->connect_error) {
      die($conn->connecct_error);

    }

    $consulta="UPDATE suscripcion SET costo='".$cost."', fechaCompra='".$fcom."', fechaVencimiento='".$fven."', tipoTarjeta='".$tipo."', numeroTarjeta='".$numta."', nombreTarjeta='".$nomta."', estado='".$est."', asociado_idasociado='".$sus."' WHERE idsuscripcion = '".$id."'";
    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro actualizado');</script><br>";
       header("Location: suscripcion.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
       header("Location: index.php");
    }
    $conn->close();

	}


?>