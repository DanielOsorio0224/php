<?php
require_once 'includes/conexion.php';

if(isset($_POST)){
    $nombre = $_POST['name'];
    $apellidos = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
}

$sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password')";
$query = mysqli_query($db, $sql);

if($query){
    header('Location: index.php');
}
?>