<?php
include("conectabd.php");

if (isset($_POST['GuardaCliente'])){
    $clienteDoc= $_POST['documento'];
    $clienteNombres= $_POST['nombres'];
    $clienteApellidos = $_POST['apellidos'];
    $clienteDireccion = $_POST['direccion'];
    $clienteTelefono = $_POST['Telefono'];
    $clienteVehi = $_POST['vehiculo'];
    $clienteFirma = $_POST['firma'];


    $clienteNew = "INSERT INTO clientes(documento,nombres,apellidos,direccion,telefono,vehiculo,firma)Values ('$documento','$nombres','$apellidos','$direccion','$telefono','$vehiculo','$firma') ";
    $ClienteNew = mysqli_query($conn,$clienteNew);

    if(!$ClienteNew){
        die("El registro del cliente no pudo ser completado");
    }

}


?>