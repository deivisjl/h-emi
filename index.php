<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="mystyle/propio.css">
	<link rel="stylesheet" type="text/css" href="mystyle/menu.css">
	<link rel="icon" type="icon/jpg" href="icono.png">
	<title>PAGINA PRINCIPAL</title>
	<!---GRAFICAS-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="styleDia.css" type="text/css">
    <script src="./comgrafica/amcharts.js" type="text/javascript"></script>   
    <script src="./comgrafica/serial.js" type="text/javascript"></script>    
    <!--GRAFICAS-->
    <!--LIBRERIA BOOTBOX-->
    <script src="bootbox/bootbox.js"></script>
    <script src="bootbox/bootbox.min.js"></script>
</head>
<body>
	<?php
		session_start();
		if (!isset($_SESSION["usuario"])) {
		 	header("location: index2.php");
		 } 
	?>
	<div class="" id="myfoot">
		<center><img src="logo.png" width="150px" height="50px"></center>
		<h1 class="ti">SISTEMA NATURALIFE</h1>
		<h3 class="ti1">BIENVENIDO: <?php echo $_SESSION['usuario']; ?></h3>
	<!--</div>-->
	<div id="header">
		<ul id="bar">
			<li><a href="index.php" title="">Inicio</a>
				
			</li>
			<li><a href="" title="">Productos</a>
				<ul>
					<li><a href="catalogo.php" title="">Catalogo</a>
						<ul>
							<li><a href="producto.php" title="">Productos</a></li>
						</ul>
					</li>
					<li><a href="venta.php" title="">Ventas</a>
						
					</li>
				</ul>
			</li>
			<li><a href="" title="">Registros</a>
				<ul>
					<li><a href="registroUsuarios.php">Usuarios</a></li>
					<li><a href="asociado.php">Asociados</a>
						<ul>
							<li><a href="regalias.php">Regalias</a></li>
						</ul>
					</li>
					<li><a href="suscripcion.php" title="">Suscripcion</a></li>
				</ul>
			</li>
			<li><a href="">Reportes</a>
				<ul>
					<li><a href="detalle_venta.php" title="">Reporte de Ventas</a></li>
					<li><a href="" title="">Facturas</a></li>
					<li><a href="estadistica.php" title="">Estadisticas</a></li>
				</ul>
			</li>
			<li><a href="cerrar.php" title=""><span class="glyphicon glyphicon-lock"></span>Salir</a>
			</li>
		</ul>
	</div>
	<br><br>
	</div>
</body>
</html>