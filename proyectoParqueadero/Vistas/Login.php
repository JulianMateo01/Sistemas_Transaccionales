<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Consultar</h3>
			</div>
			<div class="card-body">
				<form action="Vistas/consultaID.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text ">Documento Usuario<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Cedula o pasaporte" name="documento">
					</div>
					<input class="btn btn-succes" type="submit" value="consulta" name="consulta"></input>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<n>Si no estas registrado, puedes registrarlos aqui.</n>
				</div>
				<div class="d-flex justify-content-center">
					<a href="http://localhost/proyectoParqueadero/Vistas/Registro.php">Registrarse!</a>
				</div>
			</div>
				<table width="500" border="1" name="disponible" id="#consulta">
					<tr>
						<th>Disponible</th>
					</tr>
					<?php
						$color= "green";
						$query = "SELECT * from bahia";
						$RESULT_ = mysqli_query($conn, $query);
						while ($row = mysqli_fetch_array($RESULT_)) { ?>
					<td>
						<td bgcolor=<?php echo $color ?>><?php echo $row['disponible'] ?></td>
					</td>		
					<?php } ?>
				</table>	
				</div>				
			</div>

		</div>
	</div>
</div>