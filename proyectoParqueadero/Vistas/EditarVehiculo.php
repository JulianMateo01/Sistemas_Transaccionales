<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>Registro</b></h2></div>
                    <div class="col-sm-4">
                        <a href="http://localhost/proyectoParqueadero/Vistas/ConsultaVehiculo.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            
		<div class="col-mb-8">
		<table class="table table-bordered">
			<thead>
				<tbody>
				
				<?php
			
					$placa = $_GET["placa"];
					$query = "CALL datveh('$placa');";
					$RESULT_ = mysqli_query($conn, $query);

					
				while ($row = mysqli_fetch_array($RESULT_)) { ?>
				<form action="../Controlador/Actualizar.php" method="post" >
				<tr>
					<div class="col-md-6">	
						<input type="hidden" value ="<?php echo $row['idVehiculo'];?>">
						<label>Marca:</label>
						<input type="text" class='form-control' maxlength="100" value ="<?php echo $row['marca'];?>">
					</div>
					<div class="col-md-6">
						<label>Placa:</label>
						<input type="text" class='form-control' maxlength="100" value ="<?php echo $row['placa'];?>">
					</div>
					<div class="col-md-6">
						<label>Clase:</label>
						<input type="text" class='form-control' maxlength="100" value ="<?php echo $row['clase'];?>">
					</div>
					</tr>
				<?php } ?>
				<div class="col-md-12 pull-right">
					<hr>
						<button type="submit" class="btn btn-success" name="Actualizar">Actualizar datos</button>
					</div>
				</div>
				</form>
				
			</tbody>
			</thead>
		</table>
</div>

        </div>
  </div> 

<?php include("../includes/footer.php") ?>