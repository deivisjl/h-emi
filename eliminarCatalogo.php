<?php  
	require_once ('conexion.php');
	$idcat = $_REQUEST["id"];


    //$consulta ="DELETE FROM regalias WHERE idasociado = '".$id."'";
    $consulta = "UPDATE catalogo SET estado = 'Inactivo' WHERE idcatalogo = '".$idcat."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: catalogo.php");
    }else{
      echo "Error: " . $consulta . " " . mysqli_error($conn);
    }
    $conn->close();
?>