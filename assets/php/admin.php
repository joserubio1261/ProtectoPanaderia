<?php
session_start();
require_once "../clases/UsuarioManager.php"; 
require_once "../clases/RolesC.php"; 
require_once "../clases/Conexion.php"; // Incluir la clase Conexion

// Verificar si se ha enviado una solicitud para cerrar sesión
if (isset($_GET['logout'])) {
    // Destruir todas las variables de sesión
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
    }

    // Finalmente, destruir la sesión
    session_destroy();
    header("Location: forn.php");
    exit();
}

// Verificar si el usuario está autenticado y tiene el rol adecuado
if (!isset($_SESSION['nombre_usuario']) || RolesC::obtenerNombrePorId($_SESSION['id_rol']) !== 'Admin') {
    header("Location: forn.php");
    exit();
}

// Obtener el id de usuario de la sesión
$idUsuario = $_SESSION['id_usuario'];

// Consultar la base de datos para obtener la ruta de la imagen de perfil
$rutaImagenPerfil = UsuarioManager::obtenerRutaImagenPerfil($idUsuario);

$nombreUsuario = $_SESSION['nombre_usuario'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Perfil Empleados<?php echo $nombreUsuario; ?></title>
    <link rel="stylesheet" href="../css//estilo_cliente.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
</head>

<body>
    <div class="row Header" id="titulo">
        <div class="col-lg-1">
            <?php if ($rutaImagenPerfil): ?>
                <img src="<?php echo $rutaImagenPerfil; ?>" alt="Imagen de perfil" style="max-width: 100px; max-height: 100px;">
            <?php endif; ?>
        </div>
        <div class="col-lg-2" style="margin-top: 1vw;">
            <h2>Bienvenido/a, <?php echo $nombreUsuario; ?>! </h2>
        </div>
        <div class="col-lg-5">
            <h1>Forn Pasticeria Sant Roc</h1>
        </div>
        <div class="col-lg-2  offset-lg-2" style="margin-top: 1vw;">
            <a href="?logout=true">Cerrar Sesión</a>
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>
