<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica controlador    
        $nota = new Nota();
        $nota->setNombre('Hola');
        $nota->contenido('Como estas');

        //Vista    
        require_once 'views/nota/listar.php';
    }
    public function crear(){

    }
    public function borrar(){

    }
    
}