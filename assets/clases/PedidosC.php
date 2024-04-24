<?php

class PedidosC
{
    public $id_pedido;
    public $id_usuario;
    public $fecha_pedido;
    public $estado;
    public $forma_pago;
    public $total_pago;
    public $fecha_recogida;

    public function __construct($id_pedido, $id_usuario, $fecha_pedido, $estado, $forma_pago, $total_pago, $fecha_recogida)
    {
        $this->id_pedido = $id_pedido;
        $this->id_usuario = $id_usuario;
        $this->fecha_pedido = $fecha_pedido;
        $this->estado = $estado;
        $this->forma_pago = $forma_pago;
        $this->total_pago = $total_pago;
        $this->fecha_recogida = $fecha_recogida;
    }
}

?>