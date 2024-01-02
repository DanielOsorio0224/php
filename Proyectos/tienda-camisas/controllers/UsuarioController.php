<?php

class usuarioController{
    public function index(){
        echo "Controlador del usuario";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){
            
        }
    }
}