<?php

$conexion = mysqli_connect("localhost","root","","php_mysql");

if(mysqli_connect_errno()){
    echo "la cagaste en la conexion".mysqli_connect_errno() ;
}else{
    echo "Te conectaste correctamente";
}

//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

$sql = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($sql)){
    echo '<h2>'.$nota['titulo'].'</h2>'.'<br/>';
    echo $nota['descripcion'].'<br/>';
}

//Insertar datos
$sql = "INSERT INTO notas VALUES(NULL,'nota 3','descripcion 3','amarillo')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo "Insert con exito";
}else{
    echo "La cagaste insertando";
}

?>