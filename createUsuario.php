<?php  
	require_once("conexion.php");

	$user = $_POST["txtuser"];
	$pass = $_POST["txtpass"];
	$email = $_POST["txtcorreo"];
	$tel = $_POST["telefono"];
	$rol = $_POST["txtidrol"];

	if (isset($_POST["Registrar"])) {
		
		if ($conn->connect_error) {
			die($conn->connecct_error);


		}

		$consulta="INSERT INTO login(usuario,contrasenia,correo,telefono,rol_idrol) VALUES('".$user."','".$pass."','".$email."','".$tel."','".$rol."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Guardado";
			header("location: registroUsuarios.php");
		}else{
			echo "Error: " . $consulta . "" . mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}
?>