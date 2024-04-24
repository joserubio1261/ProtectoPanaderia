<?php
require_once "Conexion.php";

class UsuarioManager
{
    public static function buscarUsuario($usuario)
    {
        // Crear una instancia de la clase Conexion
        $conexion = new Conexion();
        $conexion = $conexion->obtenerConexion();

        $consulta = "SELECT * FROM usuarios WHERE nombre_usuario = ?";

        // Preparar la consulta
        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param("s", $usuario);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el resultado
        $resultado = $stmt->get_result();

        // Verificar si se encontró un usuario
        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    }
    public static function obtenerRutaImagenPerfil($idUsuario)
    {
        $conexion = new Conexion();
        $conexion = $conexion->obtenerConexion();

        $consulta = "SELECT imagen FROM usuarios WHERE id_usuario = ?";

        $stmt = $conexion->prepare($consulta);
        $stmt->bind_param("i", $idUsuario);

        $stmt->execute();

        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            return $fila['imagen'];
        } else {
            return null;
        }
    }
}
