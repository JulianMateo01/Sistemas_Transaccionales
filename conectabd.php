<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'parking'
);

if ($conn->connect_errno){
    echo "Fallo en conexion de base de datos";
}


?>