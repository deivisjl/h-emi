<?php  
	//require_once("diseño.php");
	require_once("../conexion.php");
	$consulta = "SELECT idcatalogo, nombreCat FROM catalogo";
	$query = mysqli_query($conn,$consulta);
	require_once("../consultaProducto.php");
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
	<center><img src="<?php echo $_SERVER['DOCUMENT_ROOT']; ?>/proyectosemi/logo1.jpg" alt=""></center>
	<h1>LISTADO DE PRODUCTOS</h1>
	<div align="center">
		<table class="table" align="center">
			<thead>
				<tr>
					<th class="bg-primary">CODIGO</th>
					<th class="bg-primary">TIPO PRODUCTO</th>
					<th class="bg-primary">NOMBRE PRODUCTO</th>
					<th class="bg-primary">DESCUENTO</th>
					<th class="bg-primary">PRECIO VENTA</th>
					<th class="bg-primary">EXISTENCIA</th>
					
				</tr>
			</thead>
			<tbody>
				<?php foreach ($que as $fila) { ?>
				<tr>
					<td><?php echo $fila['codigoProducto']; ?></td>
					<td><?php echo $fila['tipoProducto']; ?></td>
					<td><?php echo $fila['nombreProducto']; ?></td>
					<td><?php echo $fila['descuento']; ?></td>
					<td><?php echo $fila['precioVenta']; ?></td>
					<td><?php echo $fila['existencia']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</center>	
	
</body>
</html>


