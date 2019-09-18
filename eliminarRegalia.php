<?php  
	require_once ('conexion.php');
	$idreg = $_REQUEST["id"];


    //$consulta ="DELETE FROM regalias WHERE idasociado = '".$id."'";
    $consulta = "UPDATE regalias SET estado = 'Inactivo' WHERE idregalias = '".$idreg."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: regalias.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();
?>