<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="card-header">
	<h3>Parqueaderos</h3>
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
                if (isset($_POST['consulta'])){
                    $documento = $_POST['documento'];
                }
				$query = "CALL datperID($documento);";
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
						<a href="http://localhost/proyectoParqueadero/Vista/Editar.php" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
						<a href="Eliminar.php?id = <?php echo $row['idPersona'] ?>" class="btn btn-secondary"> <i class="far fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php include("../includes/footer.php") ?>