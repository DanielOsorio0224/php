<?php

abstract class Ordenador {
    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador {
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendido = true;
    }
}

$ordenar = new PcAsus();
$this->encender();
$this->arrancarSoftware();