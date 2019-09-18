<?php  
	require_once ('conexion.php');
	$idven = $_REQUEST["id"];


    //$consulta ="DELETE FROM regalias WHERE idasociado = '".$id."'";
    $consulta = "UPDATE venta SET estado = 'Inactivo' WHERE idventa = '".$idven."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: venta.php");
    }else{
      echo "Error: " . $consulta . " " . mysqli_error($conn);
    }
    $conn->close();
?>