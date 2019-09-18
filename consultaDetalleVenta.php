<?php  
	require_once("conexion.php");
	$consulta="SELECT dv.cantidad,p.codigoProducto,p.nombreProducto, dv.precioVenta,p.descuento, dv.totalDescuento, v.totalVenta FROM producto p, venta v, detalle_venta dv WHERE idventa = venta_idventa AND idproducto = producto_idproducto";
	$quer1 = mysqli_query($conn,$consulta);
	$array = mysqli_fetch_array($quer1);
?>