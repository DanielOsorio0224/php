<?php	
class Coche{
    //atributos y propiedades
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $cilindraje;

    //Constructor
    public function __constructor($color,$marca,$modelo,$velocidad,$cilindraje){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->cilindraje = $cilindraje;
    }
    
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
?>