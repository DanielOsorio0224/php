<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="http://localhost/master-php/proyectos/tienda-camisas/assets/css/styles.css?v=1.0">
    </head>    
    <body>
        <div id="container">
        <header id="header">
            <div id="logo">
                <img src="assets/camisa.jpg" alt="Camisa">
                <a href="index.php">
                    Tienda Camisetas
                </a>
            </div>
        </header>
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php while($cat = $categorias->fetch_object()): ?>
                    <li>
                        <a href="categoria/ver&id=<?=$cat->id?>"><?= $cat->nombre ?></a>
                    </li>
                <?php endwhile;?>  
            </ul>
        </nav>

        <div id="content">