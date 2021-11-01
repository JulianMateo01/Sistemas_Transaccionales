<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Registro Persona</h3>
			</div>
			<div class="card-body">
				<form action="../Controlador/guardaCliente.php" method="post" >
				<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text" >Codigo<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Número sin puntos" name="IDCliente">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" name="docCliente">
							<span class="input-group-text" >Documento<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Número sin puntos" name="docCliente">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" >
							<span class="input-group-text ">Nombres<i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nombres" name="nombresCliente">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6" name="apellidosCliente">
							<span class="input-group-text" >Apellidos<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Apellidos" name="apellidosCliente"> 
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Tipo Documento<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="cc, ce o pasaporte" name="tipoDoc">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Direccion<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Dirección" name="direccionCliente">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend col-md-6">
							<span class="input-group-text" >Telefono<i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Telefono" name="telefonoCliente">
					</div>
					<input class="btn btn-succes" type="submit" name="guardaCliente">Consultar</input>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>



<?php include("../includes/footer.php") ?>