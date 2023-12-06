<?php

function autocargar_clases($clases){
    require_once 'clases/'. $clases . '.php';
}

spl_autoload_register('autocargar_clases');