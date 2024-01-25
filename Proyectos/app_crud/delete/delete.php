<?php

if(!isset($_GET['id'])){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}

$eliminar = $_GET['id'];
require_once '../model/conexion.php';
$sentencia = $db->prepare("DELETE FROM datos WHERE id=?;");
$resultado = $sentencia->execute([$eliminar]);

if($resultado){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}else{
    echo 'No se pudo eliminar correctamente';
}
?>