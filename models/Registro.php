<?php 

namespace Model;

class Registro extends ActiveRecord {
    protected static $tabla = 'registros';
    protected static $columnasDB = ['id', 'paquete_id', 'pago_id', 'token', 'usuario_id', 'regalo_id'];

    // Declaración de propiedades requeridas
    public ?int $id = null;
    public string $paquete_id = '';
    public string $pago_id = '';
    public string $token = '';
    public string $usuario_id = '';
    public int $regalo_id = 1;

    // Relaciones opcionales (usadas en el controlador)
    public $usuario;
    public $paquete;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->paquete_id = $args['paquete_id'] ?? '';
        $this->pago_id = $args['pago_id'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->usuario_id = $args['usuario_id'] ?? '';
        $this->regalo_id = $args['regalo_id'] ?? 1;
    }
}
