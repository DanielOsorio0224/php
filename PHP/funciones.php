<?php

function muestra_nombres(){
    echo "Daniel Osorio";
    echo "Pepito perez";
}

muestra_nombres();

function tabla($numero){
    echo "Tabla de multiplicar del numero: $numero";
    for($i=1; $i <= 10; $i++){
        echo "$numero x $i = ($numero*$i)";
    }
}
tabla(5);

function calculadora($numero1,$numero2, $negrita=false){
    $suma = $numero1+$numero2;
    $resta = $numero1-$numero2;
    $multiplicacion = $numero1*$numero2;
    $division  = $numero1/$numero2;

    echo "Suma:".$suma;
    echo "Resta:".$resta;
    echo "Multiplicacion:".$multiplicacion;
    echo "Division:".$division;
}

calculadora(30,10);

$frase = "Solo se que nada se";

function mostrar_frase() {
    global $frase;
    echo "<h1>$frase</h1>";
};

//Funciones predefinidas de php
//Debugear
$nombre = "Daniel Osorio";
var_dump($nombre);

//DATE
echo date('d-m-y');
echo "<br/>";
echo time();
echo "<br/>";

//Matematicas
echo "Raiz cuadrada de 25: ".sqrt(25);
echo "<br/>";
echo "Numero aleatorio entre 10 y 50: ".rand(10,50);
echo "<br/>";
echo "Numero PI: ".pi() ;
echo "<br/>";
echo "Redondear la nota: ".round(4.973456,2);
echo "<br/>";

//Mas funciones generales
echo gettype($nombre);
echo "<br/>";

if(is_string($nombre)){
    echo "Es una cadena de texto";
}
echo "<br/>";

if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}
echo "<br/>";

$frase_larga = "       Contenido       ";
trim($frase_larga);
echo "<br/>";

//Eliminar variables / indices
$year = 2022;
unset($year);
echo "<br/>";

$texto = "";
if(empty($texto)){
    echo "La variable está vacia";
}
echo "<br/>";

$cadena = "12345567";
echo strlen($cadena);
echo "<br/>";

//Encontrar caracter;
echo strpos($frase, "nada");

//Reemplazar contenido
$frase = str_replace("nada","NADA",$frase);
echo $frase;

//MAyuscula y minuscula
echo strtolower($frase);
echo $frase;
echo strtoupper($frase);
echo $frase;
?>