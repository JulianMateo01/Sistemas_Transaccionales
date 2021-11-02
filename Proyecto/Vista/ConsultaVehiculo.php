<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="card-header">
	<h3>VEHICULOS</h3>
</div>

<div class="col-mb-8">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Codigo Vehiculo</th>
				<th>Marca</th>
				<th>Placa</th>
				<th>Persona</th>
				<th>Tipo Vehiculo</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = "CALL datvehAll();";
				$RESULT_ = mysqli_query($conn, $query);
			
			while ($row = mysqli_fetch_array($RESULT_)) { ?>
				<tr>
					<td><?php echo $row['idVehiculo'] ?></td>
					<td><?php echo $row['placa'] ?></td>
					<td><?php echo $row['marca'] ?></td>
					<td><?php echo $row['idPersona'] ?></td>
					<td><?php echo $row['idTipo'] ?></td>

					<td>
						<a href="http://localhost/proyectoParqueadero/Vista/Editar.php" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
						<a href="Eliminar.php?id = <?php echo $row['idPersona'] ?>" class="btn btn-secondary"> <i class="far fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php include("../includes/footer.php") ?>