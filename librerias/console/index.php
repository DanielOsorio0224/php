<?php
require_once  '../vendor/autoload.php';

$frutas = array("manzanas","naranjas","sandias");

\FB::log($frutas);

$nombres = array("ejecutivo" => "Daniel","Pepito","Andres");
\FB::log($nombres);

echo 'Hola mundo'.$nombres['ejecutivo'];
// Senecesita instalar extension
\FB::log('Muestrame en consola');