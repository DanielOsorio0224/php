<?php

class Persona {
     public $nombre;
     public $apellidos;
     public $altura;
     public $edad;

     public function getNombre (){
        return $this-> nombre;
     }

     public function getApellido(){
        return $this-> apellidos;
     }

     public function getAltura(){
        return $this-> altura;
     }

     public function getEdad(){
        return $this-> edad;
     }

     public function setNombre($nombre){
        $this-> nombre = $nombre;
     }
     public function setApellidos($apellidos){
        $this-> apellidos = $apellidos;
     }
     public function setAltura($altura){
        $this-> altura = $altura;
     }
     public function setEdad($edad){
        $this-> edad = $edad;
     }

     public function hablar(){
        return "Estoy hablado";
     }

     public function caminar(){
        return "Vamos a caminar";
     }
}

class Informatico extends Persona{

    public $lenguajes;

    public function stack($lenguajes){
        $this-> lenguajes = $lenguajes;

        return $this -> lenguajes;
    }

    public function programar(){
        return "Soy programador Senior";
    }

    public function repararOrdenador(){
        return "Paseme el pc lo arreglo";
    }

    public function ofimatica(){
        return "puedo escribir en word";
    }
}