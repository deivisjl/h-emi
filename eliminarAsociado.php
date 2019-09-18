<?php
  
  require_once("conexion.php");
  $id = $_REQUEST["id"];
                    

    //$consulta ="DELETE FROM asociado WHERE idasociado = '".$id."'";
    $consulta = "UPDATE asociado SET estado = 'Inactivo' WHERE idasociado = '".$id."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
      header("Location: asociado.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();
 
?>