<?php  
	require_once ('conexion.php');
	$id = $_REQUEST["id"];

	//$consulta ="DELETE FROM suscripcion WHERE idsuscripcion = '".$id."'";
    $consulta = "UPDATE suscripcion SET estado = 'Inactivo' WHERE idsuscripcion = '".$id."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: suscripcion.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();

?>