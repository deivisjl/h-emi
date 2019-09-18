<?php  
	require_once("conexion.php");
	
	$id = $_REQUEST["idaso"];
	$nom = $_POST["txtnombres"];
	$ape = $_POST["txtapellido"];
  $dir = $_POST["txtdireccion"];
	$tel = $_POST["txtcel"];
	$dpi = $_POST["txtdpi"];
  $codase = $_POST["txtcod_asesor"];
  $pais = $_POST["txtpais"];
	$est = $_POST["txtestado"];
  $log = $_POST["txtlogin"];

	 if (isset($_POST["Modificar"])) {
    
    if ($conn->connect_error) {
      die($conn->connecct_error);

    }

    $consulta="UPDATE asociado SET nombres='".$nom."', apellidos='".$ape."', direccion='".$dir."', telefono='".$tel."', dpi='".$dpi."', cod_asesor='".$codase."', pais='".$pais."', estado='".$est."', login_idlogin='".$log."' WHERE idasociado = '".$id."'";

    if (mysqli_query($conn,$consulta)) {
      echo "<script languaje='javascript'>alert('registro actualizado');</script><br>";
       header("Location: asociado.php");
    }else{
      echo "Error: " . $consulta . "" . mysqli_error($conn);
       header("Location: index.php");
    }
    $conn->close();
  }

?>