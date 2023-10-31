<?php

//Iniciar la sesion
session_start();

$variable_normal = "Soy una cadena";

$_SESSION['variable_persistente'] = 'Tienes la session activa';
echo $variable_normal;
echo "<br>";
echo $_SESSION['variable_persistente'];

?>