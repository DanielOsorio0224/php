<?php

class Usuario {
    
    const url_completa = "local";

    public $email;
    public $pass;

    public function getEmail(){
        return $this->email;        
    }

    public function getPass(){
        return $this->pass;        
    }

    public function setEmail($email){
        $this->email = $email;     
    }

    public function setPass($pass){
        $this->pass = $pass;        
    }
}

$usuario = new Usuario();
echo $usuario::url_completa;
echo Usuario::url_completa;