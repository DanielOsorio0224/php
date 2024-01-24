<?php

$user='root'; 
$pass='';
$namedb ='app_crud';

try{
    $db = new PDO(
        'mysql:host=localhost;dbname='.$namedb, $user, $pass
    );
}catch(Exception $error){
    echo 'Error conexion'.$error->getMessage() ;
    die();
}

?>