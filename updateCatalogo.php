<?php  
	require_once("conexion.php");
	$id = $_REQUEST["idcat"];
	$name = $_POST["nameCat"];
	$estado = $_POST["estado"];

	if (isset($_POST["Modificar"])) {
		if ($conn->$connect_error) {
			die($conn->$connect_error);
		}

		$consulta = "UPDATE catalogo SET nombreCat = '".$name."',estado = '".$estado."' WHERE idcatalogo = '".$id."'";

		if (mysqli_query($conn,$consulta)) {
			echo "Registro Actulizado";
			header("location: catalogo.php");
		}else{
			echo "Error: " . $consulta . " " .mysqli_error($conn);
			header("location: catalogo.php");
		}
		$conn->close();
	}
?>