<?php
 include("../conectabd.php");

if (isset($_POST['guardaCliente'])){
    $clienteRegistro = $_POST['IDCliente']; 
    $clienteDoc = $_POST['docCliente'];
    $clienteNombre = $_POST['nombresCliente'];
    $clienteApellido = $_POST['apellidosCliente'];
    $clienteDireccion = $_POST['direccionCliente'];
    $clienteTelefono = $_POST['telefonoCliente'];
    $clienteTipo = $_POST['tipoDoc'];

    $clienteNew = "INSERT INTO persona (idPersona, nombre, apellido, documento, tipoDoc, direccion, telefono) VALUES ($clienteRegistro, '$clienteNombre', '$clienteApellido', '$clienteDoc', '$clienteTipo', '$clienteDireccion', $clienteTelefono)";
    

    if (mysqli_query($conn, $clienteNew)) {
        
        
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost/proyectoParqueadero/Vistas/ConsultaCliente.php");
        exit;

        } else {
        echo "Error: " . $clienteNew . "<br>" . mysqli_error($conn);
        }
    }
?>