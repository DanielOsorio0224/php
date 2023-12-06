<?php

// require_once 'usuario.php';
// require_once 'categoria.php';
// require_once 'entrada.php';
require_once 'autoload.php';

$usuario = new Usuario();
echo $usuario->nombre; 

$categoria = new Categoria();
echo $categoria->descripcion;