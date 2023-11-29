<?php
require_once "configuracion.php";

Configuracion::setColor("Rojo");
Configuracion::setEntorno("Local");
Configuracion::setNewLetter(true);

echo Configuracion::$color;

$configuracion = new Configuracion();
?>