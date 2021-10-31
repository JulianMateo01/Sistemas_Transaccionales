<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Consultar</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text ">Documento Usuario<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Cedula o pasaporte">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Vehiculo <i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Placas Vehiculo">
					</div>
					<input class="btn btn-succes" type="submit"></input>
				</form>
			</div>

			<div class="col-mb-8">
				<table class= "table table-bordered">
					<thead>
						<tr>
							<th>N° Bahia</th>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Marca</th>
							<th>Placa</th>
							<th>Estado</th>
							<th>Pago</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * from (nombre tablas)";
						$RESULT_ = mysqli_query ($conn, $query); 
						
						while($row = mysqli_fetch_array($RESULT_)) { ?>
							<tr>
							<td><?php echo $row ['nombre celda']?></td>	
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td><?php echo $row ['nombre celda']?></td>
							<td> 
								<a href="editar.php?id = <?php echo $row [''] ?>" class = "btn btn-secondary"> <i class="fas fa-marker"></i> </a>
								<a href="Eliminar.php?id = <?php echo $row [''] ?>" class = "btn btn-secondary" > <i class="far fa-trash-alt"></i></a>
							</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>  
			</div>
			<div class="card-header">
				<h3>Parqueaderos</h3>
			</div>
			<div class="col-mb-8">
				<table class= "table table-bordered">
					<thead>
						<tr>
						    <th id = '1'></th>
							<th id = '2'></th>
							<th id = '3'></th>
							<th id = '4'></th>
							<th id = '5'></th>
							<th id = '6'></th>
							<th id = '7'></th>
							<th id = '8'></th>
						</tr>
						<tr>
							<th id = '9'></th>
							<th id = '10'></th>
							<th id = '11'></th>
							<th id = '12'></th>
							<th id = '13'></th>
							<th id = '14'></th>
							<th id = '15'></th>
							<th id = '16'></th>
						</tr>
						<tr>
							<th id = '17'></th>
							<th id = '18'></th>
							<th id = '19'></th>
							<th id = '20'></th>
							<th id = '21'></th>
							<th id = '22'></th>
							<th id = '23'></th>
							<th id = '24'></th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<n>Si no has registrado, puedes registrarlos aqui.</n>
				</div>
				<div class="d-flex justify-content-center">
                    <a href="Añadir.php">Persona</a>
					<a href="Coche.php">Vehiculo</a>
				</div>
			</div>
		</div>
	</div>
</div>