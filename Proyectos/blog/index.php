<?php require_once 'includes/cabecera.php'; ?>
    
    <?php require_once 'includes/lateral.php'; ?>
    <!-- Caja principal -->
        <div id="principal">
            <h1>Ultimas entradas</h1>
            <?php
                $entradas = conseguirEntradas($db);
                while($entrada = mysqli_fetch_assoc($entradas)):
            ?>
                <article class="entrada">
                    <a href="">
                    <h2><?= $entrada['titulo'] ?></h2>
                    <p>
                    <?= substr($entrada['descripcion'],0,200)." ..." ?>
                    </p>
                    </a>
                </article>
            <?php	endwhile ?>
            
            <div id="ver_todas">
            <a href="">Ver todas las entradas</a>
        </div>
        </div>        
        
    <?php require_once 'includes/pie.php'; ?>
</body>
</html>