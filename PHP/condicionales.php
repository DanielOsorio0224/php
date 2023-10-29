<?php

$color = "rojo";

if($color == "rojo"){
    echo "El color es rojo";
}else{
    echo "El color no es rojo";
}

$year = 2020;
if($year < 2023){
    echo "$year Es un año anterior";
}else{
    echo "$year Es un año posterior";
}

$nombre = "DAniel";
$edad = 24;
$mayoria_edad = 18;

if($edad > $mayoria_edad ){
    echo "$nombre es mayor de edad";
}else{
    echo "$nombre no es mayor de edad";
}

goto marca;
echo "Instruccion 1";
echo "Instruccion 2";
echo "Instruccion 3";

marca:
echo "Me he saltado 3 echos";
?>