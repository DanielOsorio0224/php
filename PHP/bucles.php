<?php
$numero = 0;
while($numero <= 10){
    echo "<p>$numero</p>";
    $numero++;
};

$edad = 18;
$contador = 1;
do{
    echo "Tienes acceso al lugar privado $contador";
    $contador++;
}while($edad > 18 && $contador <= 10);

$resultado = 0;
for($i = 0; $i < 10; $i++ ){
    $resultado += $i;
}
echo "El resultado es: $resultado";
?>