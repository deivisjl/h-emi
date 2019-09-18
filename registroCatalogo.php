<?php  
	require_once("conexion.php");
	$cat = $_POST["NomCat"];
	$est = $_POST["estado"];

	if (isset($_POST["Registrar"])) {
		if ($conn->connect_error) {
			die($conn->connect_error);
		}

		$consulta = "INSERT INTO catalogo(nombreCat,estado) VALUES('".$cat."','".$est."')";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Guardado";
			header("location: catalogo.php");
		}else{
			echo "Error: " . $consulta ." " .mysqli_error($conn);
			header("location: index.php");
		}
		$conn->close();
	}

?>