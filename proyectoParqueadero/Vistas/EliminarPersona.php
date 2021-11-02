<?php include("../conectabd.php") ?>
<?php include("../includes/header.php") ?>

<?php 
	$idPersona = $_GET["idPersona"];
	$query = "delete from persona where idPersona = $idPersona";
	$RESULT_ = mysqli_query($conn, $query);

	if($RESULT_){
		header('location: ConsultaCliente.php');
	}else{
		echo "Error al eliminar el registro";
	}
?>