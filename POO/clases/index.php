<?php

// Definir clase
class Coche{
    //atributos y propiedades
    public $color = 'rojo';
    public $marca = 'chevrolet';
    public $modelo = 2016;
    public $velocidad = 100;
    public $cilindraje = 1400;
    
    // Metodos acciones del objeto
    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad ++;
    }

    public function frenar(){
        $this->velocidad--; 
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}

// crear objeto o instacias la clase

$coche = new Coche();

echo $coche->getVelocidad();
$coche->setColor('Azul');
echo "Color del coche nuevo: ".$coche->getColor();

$coche2 = new Coche();

?>