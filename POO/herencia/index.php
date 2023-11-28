<?php

require_once "clases.php";
$persona = new Persona();
$persona->setNombre("Daniel");

$informatico = new Informatico();
$informatico -> setNombre("Pepito");
$informatico -> setAltura(1.8);
$informatico -> stack("PHP");

?>