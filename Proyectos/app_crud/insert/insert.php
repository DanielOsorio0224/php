<?php 
if(!isset($_POST['oculto'])){
    exit();
}

require_once '../model/conexion.php';

$name = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$email = $_POST['email'];
$password = $_POST['password'];

$sentencia = $db->prepare("INSERT INTO datos(nombre,apellidos,edad,email,password)
                            VALUES(?,?,?,?,?)");
$resultado = $sentencia->execute([$name,$apellidos,$edad,$email,$password]);

if($resultado){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}else{
    echo 'error en insertar datos';
}
?>