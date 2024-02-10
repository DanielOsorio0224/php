<div class="container is-fluid">
    <h1 class="title">Home</h1>
    <div class="columns is-flex is-justify-content-center">
        <figure class="image is-128x128">
            <?php
                if(is_file("./app/views/fotos/".$_SESSION['foto'])){
                    echo '
                        <img src="app/views/fotos/'.$_SESSION['foto'].'" class="is-rounded">
                    ';
                }else{
                    echo '
                        <img src="app/views/fotos/usuario.jpg" class="is-rounded">
                    ';
                }
            ?>
            
        </figure>
    </div>
    <div class="columns is-flex is-justify-content-center">
        <h2 class="subtitle">Bienvenido <?=$_SESSION['nombre']." ".$_SESSION['apellido'];?></h2>
    </div>
</div>