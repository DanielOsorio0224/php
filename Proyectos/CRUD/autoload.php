<?php

spl_autoload_register(function($clase){
    // obtener el directorio actual donde se encuentra el archivo que se esta ejecutando(autoload en este momento)
    $archivo=__DIR__."/".$clase.".php";
    $archivo=str_replace("\\","/",$archivo);

    if(is_file($archivo)){
        require_once $archivo;    
    }
});