<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro</h3>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text ">Marca Vehiculo<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Marca">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Placa<i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Placas">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Propietario<i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Conductor">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Tipo Vehiculo<i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Publico o Privado">
					</div>
					<input class="btn btn-succes" type="submit">Consultar</input>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>



<?php include("../includes/footer.php") ?>