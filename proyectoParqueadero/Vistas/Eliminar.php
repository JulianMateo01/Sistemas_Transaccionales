<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<?php 
	$idVehiculo = $_GET["idVehiculo"];
	$query = "delete from vehiculo where idVehiculo = $idVehiculo";
	$RESULT_ = mysqli_query($conn, $query);

	if($RESULT_){
		header('location: ConsultaVehiculo.php');
	}else{
		echo "Error al eliminar el registro";
	}
?>