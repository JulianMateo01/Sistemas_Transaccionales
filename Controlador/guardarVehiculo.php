<?php
include("../conectabd.php");

if (isset($_POST['GuardaCar'])){
    $idVehiculo = $_POST['IDVehiculo'];
    $PlacaVehi= $_POST['placaVehi'];
    $MarcaVehi= $_POST['marcaVehi'];
    $CodDueño = $_POST['dueñoVehi'];
    $TipoVehi = $_POST['tipoVehi'];

    $carNew = "INSERT INTO vehiculo (idVehiculo, marca, placa, idPersona, idTipo) VALUES ($idVehiculo, '$MarcaVehi', '$PlacaVehi', $CodDueño, $TipoVehi)";

    if (mysqli_query($conn, $carNew)) {
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost/proyectoParqueadero/Vistas/ConsultaVehiculo.php");
        exit;
        } else {
        echo "Error: " . $carNew . "<br>" . mysqli_error($conn);
        }
    }



?>