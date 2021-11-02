<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro Vehiculo</h3>
			</div>
			<div class="card-body">
				<form action="../Controlador/guardarVehiculo.php" method="post" >
				<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text" >Codigo Vehiculo<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Registro único" name="IDVehiculo">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" name="docCliente">
							<span class="input-group-text" >Placa<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Placa Vehiculo" name="placaVehi">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text ">Marca<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Marca vehiculo" name="marcaVehi">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text ">Codigo Dueño<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="codigo de registro" name="dueñoVehi">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text ">Tipo Vehiculo<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="1 publico o 2 privado" name="tipoVehi">
					</div>
					<input class="btn btn-succes" type="submit" name="GuardaCar"></input>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>



<?php include("../includes/footer.php") ?>