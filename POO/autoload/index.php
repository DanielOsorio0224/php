<?php

require_once 'autoload.php';

// $usuario = new Usuario();
// echo $usuario->nombre; 

// $categoria = new Categoria();
// echo $categoria->descripcion;

//Espacios de nombre y paquetes
use MisClases\Usuario,MisClases\categoria,MisClases\Entrada;
class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}

$principal = new Principal();
var_dump($principal->usuario);