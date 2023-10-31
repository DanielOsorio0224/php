<?php

$peliculas = array('Batman','Spiderman','Ironman');
$cantantes = ['Eminem','50cent','SnoopDog'];

echo $peliculas[1]; 
echo $cantantes[2];

echo "Listado de pelicas";
echo "<ul>";
for($i=0; $i < count($peliculas); $i++){
    echo "<li>". $peliculas[$i]."</li>";
}
echo "</ul>";
echo "<br>";
echo "Listado de cantantes";
echo "<ul>";
foreach ($cantantes as $cantante){
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

$contactos = array(
    array(
        'nombre' =>'Daniel',
        'email' => 'daniel@email.com'
    ),
    array(
        'nombre' =>'Pepito',
        'email' => 'pepi@email.com'
    ),
    array(
        'nombre' =>'Marco',
        'email' => 'marco@email.com'
    )
);
echo $contactos[1]['nombre'];

//FUnciones
//Orden alfabetico asc
asort($cantantes);
//Orden alfabetico desc
arsort($cantantes);

//añadir elementos
$cantantes[] = "Oscar";
array_push($cantantes,'Pepito');

//ELiminar
array_pop($cantantes);
unset($cantantes[1]);

//aleatorio
$indice = array_rand($cantantes);

$numeros = [1,2,4,6,7,4,9,22];

//Dar la vuelta
array_reverse($numeros);

//BUscar
$resultado = array_search('Daniel',$cantantes);

//COntar elementos
echo count($cantantes);
echo sizeof($numeros);

?>