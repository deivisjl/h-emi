<?php  
	try {
		$base=new PDO("mysql:host=localhost; dbname=privadosemi", "root", "");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM login WHERE (usuario OR correo) = :name AND contrasenia= :password";

		$result=$base->prepare($sql);

		$login=htmlentities(addslashes($_POST['name']));

		//$correo = htmlentities(addslashes($_POST['correo']));

		$password=htmlentities(addslashes($_POST['password']));

		$result->bindValue(":name", $login);

		//$result->bindValue(":correo", $correo);

		$result->bindValue(":password", $password);

		$result->execute();

		$numero_registro= $result->rowCount();

		if ($numero_registro != 0) {
			#echo "<h2>Adelante !!</h2>";
			session_start(); //ABRE UNA SESION PARA EL USUARIO
			$_SESSION["usuario"] = $_POST["name"]; //GUARDAMOS EN UNA VARIABLE GLOBAL
			header("location:index.php"); //REDIRRECIONA AL FORMULARIO
		}else{
			header("location:login.php");
		}

	} catch (Exception $e) {
		die("Error: " . $e->getMessage());
	}
?>