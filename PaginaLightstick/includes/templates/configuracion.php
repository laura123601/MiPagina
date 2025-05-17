<?php
// Datos de conexión a la base de datos
$host = 'localhost';
$dbname = 'testimoniales';
$user = 'root';
$password = '';

// Crear conexión con la base de datos
$conexion = mysqli_connect($host, $user, $password, $dbname);


// Verificar conexión
if (!$conexion) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}


?>