<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="card-header">
	<h3>PERSONAS</h3>
</div>

<div class="col-mb-8">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Registro</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Documento</th>
				<th>Tipo Documento</th>
				<th>Dirección</th>
				<th>Telefono</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php
			
				$query = "CALL datper();";
				$RESULT_ = mysqli_query($conn, $query);
			
			while ($row = mysqli_fetch_array($RESULT_)) { ?>
				<tr>
					<td><?php echo $row['idPersona'] ?></td>
					<td><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['apellido'] ?></td>
					<td><?php echo $row['documento'] ?></td>
					<td><?php echo $row['tipoDoc'] ?></td>
					<td><?php echo $row['direccion'] ?></td>
					<td><?php echo $row['telefono'] ?></td>

					<td>
						<a href="http://localhost/proyectoParqueadero/Vistas/Editar.php?documento=<?php echo $row['documento'];?>" class="btn btn-secondary" data-toggle="tooltip"> <i class="material-icons">&#xE254;</i> </a>
						<a href="EliminarPersona.php?idPersona= <?php echo $row['idPersona'] ?>" class="btn btn-secondary"> <i class="material-icons">&#xE872;</i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php include("../includes/footer.php") ?>