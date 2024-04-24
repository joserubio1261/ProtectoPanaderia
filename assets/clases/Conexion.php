<?php

class Conexion
{
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $bd = "forn";
    private $conexion;

    // Constructor
    public function __construct()
    {
        $this->conexion = new mysqli($this->server, $this->user, $this->pass, $this->bd);

        // Verificar conexión
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    // Método para obtener la conexión
    public function obtenerConexion()
    {
        return $this->conexion;
    }

    // Método para cerrar la conexión
    public function cerrarConexion()
    {
        $this->conexion->close();
    }
    
}
?>