<?php	
//Sirve para indicar la cantidad de metodos que debe tener una clase obligatoriamente
//Para poder cumplir el contrato
interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUsb();
}

class iMac implements Ordenador {
    public $modelo;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function encender(){}
    public function apagar(){}
    public function reiniciar(){}
    public function desfragmentar(){}
    public function detectarUsb(){}

}

$maquina = new iMac();
