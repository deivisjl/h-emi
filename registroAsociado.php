<?php  
	require_once("conexion.php");

	$nombre = 	$_POST["nombres"];
	$apellido =	$_POST["apellidos"];
	$direccion= $_POST["direccion"];
	$telefono = $_POST["telefono"];
	$dpi = 		$_POST["dpi"];
	$codAsesor= $_POST["codAsesor"];
	$pais = 	$_POST["pais"];
	$estado = 	$_POST["estado"];
	$login = 	$_POST["txtlogin"];

	if (isset($_POST["Registrar"])) {
		
		if ($conn->connect_error) {
			die($conn->connecct_error);


		}

		$consulta="INSERT INTO asociado(nombres,apellidos,direccion,telefono,dpi,cod_asesor,pais,estado,login_idlogin) VALUES('".$nombre."','".$apellido."','".$direccion."','".$telefono."','".$dpi."','".$codAsesor."','".$pais."','".$estado."','".$login."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Guardado";
			header("location: asociado.php");
		}else{
			echo "Error: " . $consulta . "" . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
?>