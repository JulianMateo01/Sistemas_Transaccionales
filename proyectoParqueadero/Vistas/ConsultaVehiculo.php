<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
				<th>Tipo Vehiculo</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Documento</th>
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
					<td><?php echo $row['clase'] ?></td>
					<td><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['apellido'] ?></td>
					<td><?php echo $row['documento'] ?></td>

					<td>
						<a href="http://localhost/proyectoParqueadero/Vistas/EditarVehiculo.php?placa=<?php echo $row['placa'];?>" class="btn btn-secondary" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i> </a>
						<a href="Eliminar.php?idVehiculo= <?php echo $row['idVehiculo'] ?>" class="btn btn-secondary"> <i class="material-icons">&#xE872;</i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php include("../includes/footer.php") ?>