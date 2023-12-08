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

    public function informacion(){
        echo __CLASS__;
        echo __FILE__;
    }
}

$principal = new Principal();
var_dump($principal->usuario);

$principal->informacion();

//comprobar si existe una clase
$clase = @class_exists('MisClases\Usuario');
if($clase){
    echo 'La clase existe';
}else{
    echo 'No existe la clase';
}