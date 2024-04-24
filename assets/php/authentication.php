<?php
session_start();
require_once "../clases/Conexion.php";
require_once "../clases/UsuarioManager.php";  
require_once "funciones.php";


if (isset($_SESSION['nombre_usuario']) && isset($_SESSION['id_rol'])) {
    switch ($_SESSION['id_rol']) {
        case 1:
            header("Location: admin.php");
            exit();
        case 2:
            header("Location: empleados.php");
            exit();
        case 3:
            header("Location: clientes.php");
            exit();
        default:
            echo "Rol no válido";
            exit();
    }
}

if (isset($_POST['submit'])) {
    $usuario = $_POST['user'];
    $contrasena = $_POST['pass'];

    $usuarioEncontrado = UsuarioManager::buscarUsuario($usuario);  

    if ($usuarioEncontrado) {
        if (password_verify($contrasena, $usuarioEncontrado['contrasena'])) {
            $idRol = $usuarioEncontrado['id_rol'];
            $_SESSION['nombre_usuario'] = $usuarioEncontrado['nombre_completo'];
            $_SESSION['id_rol'] = $idRol;
            $_SESSION['id_usuario'] = $usuarioEncontrado['id_usuario'];  
                
            switch ($idRol) {
                case 1:
                    header("Location: admin.php");
                    exit();
                case 2:
                    header("Location: empleados.php");
                    exit();
                case 3:
                    header("Location: clientes.php");
                    exit();
                default:
                    echo "Rol no válido";
                    exit();
            }
        }
    }

    mostrarMensajeError("Usuario o contraseña incorrectos.", "forn.php");
}

require_once "registro.php";
?>
