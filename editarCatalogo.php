<?php
	require_once("index.php"); 
	require_once("conexion.php");
	$idcat = $_REQUEST['id'];
	$consulta ="SELECT * FROM catalogo WHERE idcatalogo = '$idcat'";
	$query = mysqli_query($conn,$consulta);
	$fila = mysqli_fetch_array($query);
?>
<center>
	<div>
		<form action="updateCatalogo.php" method="post" accept-charset="utf-8" id="rsus">
			<h5>MODIFICAR CATALOGO</h5>
			<table>
				<tbody>
					<tr><input type="hidden" name="idcat" value="<?php echo $fila['idcatalogo']; ?>"></tr>
					<tr>
						<td>Nombre Catalogo:</td>
						<td><input type="text" name="nameCat" placeholder="INGRESE EL NOMBRE" value="<?php echo $fila['nombreCat']; ?>" required></td>
						<td><input type="hidden" name="estado" value="<?php echo $fila['estado']; ?>" required></td>
					</tr>
					<tr>
						<td><br>
							<input type="submit" name="Modificar" value="Modificar" class="btn btn-primary">
						</td>
						<td><br>
							<a href="catalogo.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-chevron-left"></span>Regresar</button></a></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</center>