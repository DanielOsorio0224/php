<?php

class Usuario{
    public $nombre;
    public $apellido;

    public function __construct() {
        echo 'Instancia del objeto creada';
    }

    public function __destruct(){
        echo 'Destruyendo el objeto';
    }
}

$usuario = new Usuario();

for($i=0; $i <= 50 ; $i++){
    echo $i."<br>";
}

?>