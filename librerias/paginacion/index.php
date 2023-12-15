<?php
require_once '../vendor/autoload.php';
//conexion
$conexion = new mysqli('localhost','root','','notas_master');
$conexion->query("SET NAMES 'utf8'");
//consulta para contar paginas  
$conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

// hacer paginacion
$pagination = new Zebra_Pagination();
//Numerototal elementos a paginar
$pagination->records($numero_elementos);

//Numero total elementos por pagina
$pagination->records_per_page();

$page-> $pagination->get_page();
$start = "($page-1)*$numero_elementos_pagina)";
$sql = "SELECT * FROM notas LIMIT $start, $numero_elementos_pagina";
$notas = $conexion->query($sql);

while($nota = $notas->fetch_object()){
    echo "{$nota->titulo}";
    echo "{$nota->descrpcion}";
}

$pagination->render();