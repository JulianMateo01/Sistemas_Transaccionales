<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Consultar</h3>
			</div>
			<div class="card-body">
				<form action="Controlador/consulta.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text ">Documento Usuario<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Cedula o pasaporte">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text">Vehiculo <i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Placas Vehiculo">
					</div>
					<input class="btn btn-succes" type="submit" value="consulta" name="consulta"></input>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<n>Si no estas registrado, puedes registrarlos aqui.</n>
				</div>
				<div class="d-flex justify-content-center">
					<a href="http://localhost/proyectoParqueadero/Vistas/Registro.php">Registrare!</a>
				</div>
			</div>

			<div class="col-mb-8">
				<?php
				$query = "SELECT * from bahia";
				$RESULT_ = mysqli_query($conn, $query);

				while ($row = mysqli_fetch_array($RESULT_)) { ?>
				<?php } ?>
				<table class="table table-bordered">
					<thead>
						<tr bgcolor="green">
							<th id='1' >Bahia 1</th>
							<th id='2'>Bahia 2</th>
							<th id='3'>Bahia 3</th>
							<th id='4'>Bahia 4</th>
							<th id='5'>Bahia 5</th>
							<th id='6'>Bahia 6</th>
							<th id='7'>Bahia 7</th>
							<th id='8'>Bahia 8</th>
						</tr>
						<tr>
							<th id='9'>Bahia 9</th>
							<th id='10'>Bahia 10</th>
							<th id='11'>Bahia 11</th>
							<th id='12'>Bahia 12</th>
							<th id='13'>Bahia 13</th>
							<th id='14'>Bahia 14</th>
							<th id='15'>Bahia 15</th>
							<th id='16'>Bahia 16</th>
						</tr>
						<tr>
							<th id='17'>Bahia 17</th>
							<th id='18'>Bahia 18</th>
							<th id='19'>Bahia 19</th>
							<th id='20'>Bahia 20</th>
							<th id='21'>Bahia 21</th>
							<th id='22'>Bahia 22</th>
							<th id='23'>Bahia 23</th>
							<th id='24'>Bahia 24</th>
						</tr>
					</thead>
				</table>
			</div>

			<div class="col-mb-8">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Bahia</th>
							<th>Parqueadero</th>
							<th>Disponible</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * from bahia";
						$RESULT_ = mysqli_query($conn, $query);

						while ($row = mysqli_fetch_array($RESULT_)) { ?>

							<tr>
								<td><?php echo $row['idBahia'] ?></td>
								<td bgcolor="green"><?php echo $row['idParqueadero'] ?></td>
								<td bgcolor="red"><?php echo $row['disponible'] ?></td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
			<div  class="col-mb-8">
				<table width="500" border="1">
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