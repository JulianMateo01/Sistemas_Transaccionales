<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Vehiculo</h3>
			</div>
			<div class="card-body">
				<form action="ConsultavehID.php" method="POST">
					<div class="input-group form-group">
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Vehiculo <i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Placas Vehiculo" name='placabuscar'>
					</div>
					<input class="btn btn-succes" type="submit" value="consulta" name="consultaVehiculo"></input>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No registrado?</n>
                   
				</div>
				<div class="d-flex justify-content-center">
					<a href="http://localhost/proyectoParqueadero/Vistas/RegistroVehiculo.php"> Vehiculo </a>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include("../includes/footer.php") ?>