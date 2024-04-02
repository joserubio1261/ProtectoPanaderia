<?php 
$server = "localhost";// Nombre del servidor
$user = "root";// Nombre de usuario de la base de datos
$pass = "";// Contraseña de la base de datos
$bd = "forn";// Nombre de la base de datos


// Crear conexión
$conexion = new mysqli($server, $user, $pass, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>