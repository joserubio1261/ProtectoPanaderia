<?php

class UsuariosC
{
    public $id_usuario;
    public $id_rol;
    public $nombre_completo;
    public $nombre_usuario;
    public $contrasena;
    public $correo;
    public $telefono;
    public $imagen;

    public function __construct($id_usuario, $id_rol, $nombre_completo, $nombre_usuario, $contrasena, $correo, $telefono, $imagen)
    {
        $this->id_usuario = $id_usuario;
        $this->id_rol = $id_rol;
        $this->nombre_completo = $nombre_completo;
        $this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->imagen = $imagen;
    }

    public static function insertarUsuario($id_rol, $nombre_completo, $nombre_usuario, $contrasena, $correo, $telefono, $imagen)
    {

        $conexion = new Conexion();
        $mysqli = $conexion->obtenerConexion();

        $sql = "INSERT INTO usuarios (id_rol, nombre_completo, nombre_usuario, contrasena, correo, telefono, imagen) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("issssss", $id_rol, $nombre_completo, $nombre_usuario, $contrasena, $correo, $telefono, $imagen);
        $stmt->execute();
        $stmt->close();

        $conexion->cerrarConexion();
    }

    public static function existeUsuario($nombre_usuario)
    {
        
        $conexion = new Conexion();
        $mysqli = $conexion->obtenerConexion();

        $sql = "SELECT COUNT(*) FROM usuarios WHERE nombre_usuario = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $nombre_usuario);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        $conexion->cerrarConexion();

        return $count > 0;
    }

    public static function buscarUsuario($nombre_usuario)
    {
        $conexion = new Conexion();
        $mysqli = $conexion->obtenerConexion();

        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $nombre_usuario);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        $conexion->cerrarConexion();

        return $result;
    }
}

?>