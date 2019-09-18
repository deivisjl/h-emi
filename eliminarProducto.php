<?php  
	require_once ('conexion.php');
	$idprod = $_REQUEST["id"];


    //$consulta ="DELETE FROM regalias WHERE idasociado = '".$id."'";
    $consulta = "UPDATE producto SET estado = 'Inactivo' WHERE idproducto = '".$idprod."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: producto.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();
?>