<?php
//Permite reutilizar el mismo metodo en diferentes clases
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es: ".$this->nombre. "</h1>";
    }
}

class Coche{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $year;

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Sail ls";
$coche->mostrarNombre();

$persona = new Persona();
$persona->nombre = "Daniel";
$persona->mostrarNombre();

$videoJuego = new VideoJuego();
$videoJuego->nombre = "Wow";
$videoJuego->mostrarNombre();
?>
