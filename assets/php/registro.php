<?php
// Incluye el archivo de la clase de conexión
require_once "../clases/Conexion.php";
require_once "../clases/RolesC.php";
require_once "funciones.php";


// Registro de usuarios
if (isset($_POST["registrar"])) {
    // Obtener los datos del formulario
    $conexion = new Conexion();
    $nombre = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['nombre']);
    $correo = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['telefono']);
    $usuario = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['user']);
    $password = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['pass']);
    $passwordrepit = mysqli_real_escape_string($conexion->obtenerConexion(), $_POST['passr']);

    // Obtener el ID del rol "Cliente"  
    $rolCliente = RolesC::obtenerIdPorNombre("Cliente");

    // Verificar si las contraseñas coinciden
    if ($password != $passwordrepit) {
        mostrarMensajeError("Las contraseñas son diferentes", "forn.php");
    } else {
        // Directorio donde se guardarán las imágenes de perfil
        $directorio_destino = "../images/perfiles/";

        // Verificar si se ha subido la imagen
        if (isset($_FILES['imagen_perfil']['tmp_name']) && !empty($_FILES['imagen_perfil']['tmp_name'])) {
            $nombre_archivo = $_FILES['imagen_perfil']['name'];
            $ruta_archivo = $directorio_destino . $nombre_archivo;
            // Mover la imagen de perfil al directorio de destino
            if (move_uploaded_file($_FILES['imagen_perfil']['tmp_name'], $ruta_archivo)) {
                // Encriptar la contraseña
                $password_encriptada = password_hash($password, PASSWORD_DEFAULT);

                // Insertar usuario en la base de datos
                $stmt = $conexion->obtenerConexion()->prepare("INSERT INTO usuarios (id_rol, nombre_completo, nombre_usuario, contrasena, correo, telefono, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("issssss", $rolCliente, $nombre, $usuario, $password_encriptada, $correo, $telefono, $ruta_archivo);

                if ($stmt->execute()) {
                    mostrarMensajeExito("Te has registrado correctamente", "forn.php");
                } else {
                    mostrarMensajeError("Error de registro", "forn.php");
                }
            } else {
                mostrarMensajeError("Error al subir la imagen de perfil", "forn.php");
            }
        } else {
            mostrarMensajeError("Debes seleccionar una imagen de perfil", "forn.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <div id="alert"></div>
</body>

</html>
