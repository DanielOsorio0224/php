<h1>Algunos de Nuestros Productos</h1>

<?php while($pro = $productos->fetch_object()): ?>
<div class="product">
    <img src="assets/camisa.png"/>
    <h2><?= $pro->nombre ?></h2>
    <p><?= $pro->precio ?></p>
    <a href="" class="button">Comprar</a>
</div>
<?php endwhile; ?>
