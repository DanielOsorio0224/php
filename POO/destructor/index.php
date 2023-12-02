<?php

class Usuario{
    public $nombre;
    public $apellido;

    public function __construct() {
        $this->nombre = "Daniel";
        $this->apellido = "Osorio";
        echo 'Instancia del objeto creada';
    }

    public function __toString(){
        return "Hola, {$this->nombre}, tu apellido es {$this->apellido}";
    }

    public function __destruct(){
        echo 'Destruyendo el objeto';
    }
}

$usuario = new Usuario();
echo $usuario;

for($i=0; $i <= 50 ; $i++){
    echo $i."<br>";
}

?>