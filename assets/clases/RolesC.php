<?php

class RolesC
{
    public $id_rol;
    public $nombre;

    public function __construct($id_rol, $nombre)
    {
        $this->id_rol = $id_rol;
        $this->nombre = $nombre;
    }

    public static function obtenerIdPorNombre($nombre)
    {
        $conexion = new Conexion();
        $mysqli = $conexion->obtenerConexion();

        // Consulta preparada para obtener el ID del rol por su nombre
        $sql = "SELECT id_rol FROM roles WHERE nombre = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->bind_result($id);
        $stmt->fetch();
        $stmt->close();

        // Cerrar la conexión
        $conexion->cerrarConexion();

        return $id;
    }

    public static function obtenerNombrePorId($id)
    {
        $conexion = new Conexion();
        $mysqli = $conexion->obtenerConexion();

        $sql = "SELECT nombre FROM roles WHERE id_rol = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($nombre);
        $stmt->fetch();
        $stmt->close();

        $conexion->cerrarConexion();

        return $nombre;
    }
}
?>