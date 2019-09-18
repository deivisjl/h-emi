<?php  
	require_once("conexion.php");
	
	$id = $_REQUEST["idlogin"];
	$user = $_POST["txtuser"];
	$pass = $_POST["txtpass"];
	$email = $_POST["txtcorreo"];
	$tel = $_POST["txtcel"];
	$rol = $_POST["txtrol"];

	 if (isset($_POST["Modificar"])) {
    
    if ($conn->connect_error) {
      die($conn->connecct_error);

    }

    $consulta="UPDATE login SET usuario='".$user."', contrasenia='".$pass."', correo='".$email."', telefono='".$tel."', rol_idrol='".$rol."' WHERE idlogin = '".$id."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro actualizado');</script><br>";
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
    }
    $conn->close();
  }


  header("Location: registroUsuarios.php");
?>