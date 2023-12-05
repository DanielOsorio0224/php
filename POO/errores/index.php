<?php

//Capturar excepciones
try{

    if(isset($_GET['id'])){
        echo "<h1>El parametro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Logica');
    }

    
}catch(Exception $e){
    echo "Hay un error de tipo: ".$e->getMessage();
}finally{
    echo 'Todo bien todo bonito';
}


?>