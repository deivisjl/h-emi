<?php  
	require_once("index2.php");
?>
<center>
	
	<div>
		
		<form action="comprobar.php" method="post" accept-charset="utf-8" class="login">
			<img src="login1.png" alt="LOGIN" width="95px" height="95px">
			<!--<h1>INGRESAR AL SISTEMA</h1>-->
		<table>
			<tbody>
				<tr>
					<td><span></span><input type="text" name="name" value="" placeholder="Usuario u Correo" class="form-control" aria-label="Username" aria-describedby="basic-addon1"><br></td>
				</tr>
				<tr>
					<td><span></span><input type="password" name="password" placeholder="ingrese su contraseña" class="form-control"><br></td>
				</tr>
				<!---<tr>
					<td><span class="glyphicon glyphicon-list"></span>
						<select name="tipoUser">
						<option value="asociado">Asociado</option>
						<option value="asesor">Asesor</option>
						</select><br><br>
					</td> 
				</tr>--->
				<tr>

					<td><input type="submit" name="Entrar" value="Entrar" class="btn btn-primary btn-lg btn-block"></td>
				</tr>
			</tbody>
		</table>
	</form>
	</div>
</center>