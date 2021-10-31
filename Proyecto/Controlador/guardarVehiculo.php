<?php
include("conectabd.php");

if (isset($_POST['GuardaCar'])){
    $PlacaVehi= $_POST['placa'];
    $MarcaVehi= $_POST['marca'];
    $TipoVehi = $_POST['tipo'];

    $carNew = "INSERT INTO vehiculos(placa,marca,tipo)Values ('$PlacaVehi', '$MarcaVehi' , '$TipoVehi') ";
    $registroNew = mysqli_query($conn,$carNew);

    if(!$registroNew){
        die("El registro no pudo ser completado");
    }

}


?>