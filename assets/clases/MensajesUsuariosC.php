<?php

class MensajeUsuariosC
{
    public $id_mensaje;
    public $id_usuario;
    public $nombre;
    public $correo;
    public $mensaje;
    public $fecha_envio;

    public function __construct($id_mensaje, $id_usuario, $nombre, $correo, $mensaje, $fecha_envio)
    {
        $this->id_mensaje = $id_mensaje;
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->mensaje = $mensaje;
        $this->fecha_envio = $fecha_envio;
    }
}

?>