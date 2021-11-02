<?php
 include("../conectabd.php");

if (isset($_POST['Actualizar'])){
    $clienteRegistro = $_GET['IDCliente']; 
    $clienteDoc = $_GET['docCliente'];
    $clienteNombre = $_GET['nombresCliente'];
    $clienteApellido = $_GET['apellidosCliente'];
    $clienteDireccion = $_GET['direccionCliente'];
    $clienteTelefono = $_GET['telefonoCliente'];
    $clienteTipo = $_GET['tipoDoc'];

     var_dump($clienteRegistro);

    $clienteNew = "UPDATE persona 
    SET 'nombre' ='$clienteNombre', 'apellido'='$clienteApellido', 'documento'=$clienteDoc', 'direccion'=$clienteDireccion', telefono =$clienteTelefono 
    WHERE idPersona = $clienteRegistro;";

    if (mysqli_query($conn, $clienteNew)) {
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost/proyectoParqueadero/Vistas/ConsultaCliente.php");
        exit;
        } else {
        echo "Error: " . $clienteNew . "<br>" . mysqli_error($conn);
        }
    }
?>