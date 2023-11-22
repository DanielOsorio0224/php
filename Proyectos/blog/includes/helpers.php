<?php

function conseguirCategorias($conexion){
    $sql = "SELECT * FROM categorias ORDER BY id ASC;";
    $categorias = mysqli_query($conexion,$sql);

    $resuult = array();
    if($categorias && mysqli_num_rows($categorias) >= 1){
        $resuult = $categorias;
    }

    return $resuult;
} 

function conseguirEntradas($conexion, $limit = null) {
    $sql = "SELECT e.*,c.* FROM entradas e".
            "INNER JOIN categorias c ON e.categoria_id = c.id ".
            "ORDER BY e.id DESC ";
    if($limit){
                $sql .= "LIMIT 4";
            }        
    
    $entradas = mysqli_query($conexion, $sql);

    $resuult = array();
    if($entradas && mysqli_num_rows($entradas) >= 1){
        $resuult = $entradas;
    }
    return $entradas;
}

?>