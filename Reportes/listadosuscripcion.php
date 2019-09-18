<?php 
	//require_once ('index.php');
	require_once ('../conexion.php');
	$consulta = "SELECT idasociado, nombres, apellidos FROM asociado";
	$query = mysqli_query($conn,$consulta);
	require_once('../consultaSuscrip.php');
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

	<h2 align="center">LISTADO DE SUSCRIPCIONES</h2>
    <div align="center">
		<table class="table" align="center">
			<thead>
				<tr>
					<th class="bg-primary">COSTO</th>
					<th class="bg-primary">FECHA COMPRA</th>
					<th class="bg-primary">FECHA VENCE</th>
					<th class="bg-primary">TIPO TARJETA</th>
					<th class="bg-primary">NUMERO TARJETA</th>
					<th class="bg-primary">NOMBRE TARJETA</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($qr as $rows) { ?>
					<tr>
						<td><?php echo $rows['costo']; ?></td>
						<td><?php echo $rows['fechaCompra']; ?></td>
						<td><?php echo $rows['fechaVencimiento']; ?></td>
						<td><?php echo $rows['tipoTarjeta']; ?></td>
						<td><?php echo $rows['numeroTarjeta']; ?></td>
						<td><?php echo $rows['nombreTarjeta']; ?></td>
						
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</center>
	
</body>
</html>
