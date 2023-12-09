<?php
require_once 'controllers/usuario.php';


if(isset($_GET['controller']) && class_exists($_GET['controller'])){
    $nombre_controlador = $_GET['controller'];
    $controlador = new $nombre_controlador;
}else{
    echo 'Noexiste la pagina';
}

if(isset($_GET['action']) && method_exists($controlador,$_GET['action'])){
    $action = $_GET['action'];
    $controlador->$action();
}else{
    echo 'No existe la pagina';
}