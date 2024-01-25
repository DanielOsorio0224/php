<?php

if(!isset($_POST['oculto'])){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}

require_once '../model/conexion.php';
$id2 = $_POST['id2'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$password = $_POST['password'];

$sentencia = $db->prepare("UPDATE datos SET nombre=?, apellidos=?, edad=?, email=?,password=? WHERE id=? ");
$resultado = $sentencia->execute([$nombre,$apellidos,$edad,$email,$password,$id2]);

if($resultado){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}else{
    echo 'Nose pudo actualizar nada';
}

?>