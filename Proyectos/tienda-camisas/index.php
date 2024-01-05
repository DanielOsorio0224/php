<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

if(isset($_GET['controller'])){
    $nombre_controlador = $_GET['controller'].'Controller';
}elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nombre_controlador = "productoController";
}else{
    echo "La pagina no existe";
    exit();
}

if(class_exists($nombre_controlador)){
    $controlador = new $nombre_controlador();

    if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $controlador->index();
    }else{
        echo "La pagina que buscas no existe";
    }
}else{
    echo "La pagina que buscas no existe";
}

require_once 'views/layout/footer.php';

?>