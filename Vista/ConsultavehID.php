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
                <th>Clase</th>
                <th>Placa</th>
                <th>Nombre</th>
				<th>Apellido</th>
				<th>Documento</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
            if (isset($_POST['consultaVehiculo'])){
                $documento = $_POST['placabuscar'];
               
            }
            $query = "CALL datveh($documento);";
            $RESULT_ = mysqli_query($conn, $query);
				
			
			while ($row = mysqli_fetch_array($RESULT_)) { ?>
				<tr>
					<td><?php echo $row['idVehiculo'] ?></td>
					<td><?php echo $row['marca'] ?></td>
                    <td><?php echo $row['clase'] ?></td>
                    <td><?php echo $row['placa'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
					<td><?php echo $row['apellido'] ?></td>
					<td><?php echo $row['documento'] ?></td>
					
					<td>
						<a href="http://localhost/proyectoParqueadero/Vistas/Editar.php" class="btn btn-secondary"> <i class="fas fa-marker"></i> </a>
						<a href="Eliminar.php?id = <?php echo $row['idPersona'] ?>" class="btn btn-secondary"> <i class="far fa-trash-alt"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>



<?php include("../includes/footer.php") ?>