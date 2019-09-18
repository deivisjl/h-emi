<?php
  
  require_once("conexion.php");
  $id = $_REQUEST["id"];
                    

    $consulta ="DELETE FROM login WHERE idlogin = '".$id."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro borrado');</script><br>";
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();
  




  header("Location: registroUsuarios.php");
 
?>