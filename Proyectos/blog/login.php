<?php

//Iniciar la sesión y la conexión a bd
require_once 'includes/conexion.php';
//Recoger datos del formulario
if(isset($_POST)){
    $email = trim($_POST['email']);
    $password = $_POST['pass'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);
    
}


//Consulta para comprobar las credenciales del usuario

//utilizar una sesion para guardar los datos del usuario

?>