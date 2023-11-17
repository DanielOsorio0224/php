<?php require_once 'cabecera.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Comentarios</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <!-- Cabecera -->
    <header id="header">
        <div id="logo">
            <a href="index.php">
                Blog de Comentarios
            </a>
        </div>
    
    <!-- Menu -->        
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php $categorias = conseguirCategorias(); 
                        while($categoria = mysqli_fetch_assoc($db)): 
                 ?>
                    <li>
                        <a href="categoria.php?id=<?=$categoria['id'] ?>"><?=$categoria['nombre'] ?></a>
                    </li>        
                <?php endwhile ?>    
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
            </ul>
        </nav>

        <div class="clearfix"></div>
    </header>

    <div id="container">