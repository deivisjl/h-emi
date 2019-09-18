<?php  
	//require("index.php");
	require_once("../conexion.php");
	$consulta = "SELECT idlogin, usuario FROM login";
	$query = mysqli_query($conn,$consulta);
	require_once("../consultaSocio.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../mystyle/propio.css">
	<link rel="stylesheet" type="text/css" href="../mystyle/menu.css">
	<!---GRAFICAS-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../styleDia.css" type="text/css">
    <script src="../comgrafica/amcharts.js" type="text/javascript"></script>   
    <script src="../comgrafica/serial.js" type="text/javascript"></script>    
    <!--GRAFICAS-->
    <style type="text/css" media="screen">
		th,td{ border:1px solid;} 
	</style>
</head>
<body style="font-family: helvetica;">
<center>
	<center><img src="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/proyectosemi/logo1.jpg" alt="" ></center>
	<h1 align="center">LISTADO DE ASOCIADOS</h1>
	<div align="center">
		<table class="table" align="center">
			<thead>
				<tr>
					<th class="bg-primary">NOMBRES</th>
					<th class="bg-primary">APELLIDOS</th>
					<th class="bg-primary">DIRECCION</th>
					<th class="bg-primary">TELEFONO</th>
					<th class="bg-primary">DPI</th>
					<th class="bg-primary">COD_ASESOR</th>
					<th class="bg-primary">PAIS</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($querys as $fila){ ?>			
				<tr>
					<td><?php echo $fila['nombres']; ?></td>
					<td><?php echo $fila['apellidos']; ?></td>
					<td><?php echo $fila['direccion']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['dpi']; ?></td>
					<td><?php echo $fila['cod_asesor']; ?></td>
					<td><?php echo $fila['pais']; ?></td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
		
	</div>
</center>
	
</body>
</html>



