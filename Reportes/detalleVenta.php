<?php 
	//require_once("index.php");
	require_once("../conexion.php");
	$consulta = "SELECT idproducto, nombreProducto, tipoProducto FROM producto";
	$consulta2 ="SELECT idventa, totalVenta, fTransaccion FROM venta";
	$query = mysqli_query($conn,$consulta);
	$query2 =mysqli_query($conn,$consulta2);
	require_once('../consultaDetalleVenta.php');
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
	<h1 align="center">DETALLE DE VENTAS</h1>
	<div align="center">
		<table class="table" align="center">
			<thead>
				<tr>
					<th class="bg-primary">CANTIDAD</th>
					<th class="bg-primary">CODIGO PRODUCTO</th>
					<th class="bg-primary">NOMBRE PRODUCTO</th>
					<th class="bg-primary">PRECIO VENTA</th>
					<th class="bg-primary">DESCUENTO</th>
					<th class="bg-primary">TOTAL DESCUENTO</th>
					<th class="bg-primary">TOTAL VENTAS</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($quer1 as $rows) { ?>
				<tr>
					<td><?php echo $rows['cantidad']; ?></td>
					<td><?php echo $rows['codigoProducto']; ?></td>
					<td><?php echo $rows['nombreProducto']; ?></td>
					<td><?php echo $rows['precioVenta']; ?></td>
					<td><?php echo $rows['descuento']; ?></td>
					<td><?php echo $rows['totalDescuento']; ?></td>
					<td><?php echo $rows['totalVenta']; ?></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
		
	</div>
</center>
	
</body>
</html>



