<h1>Gestion de productos</h1>

<a href="index.php?controller=producto&action=crear" class="button button-small">
    Crear Producto
</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'): ?>
    <strong> El producto se ha añadido correctamente</strong>
<?php else: ?>
    <strong>El producto no se ha cargado</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto'); ?>
<table >
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
    </tr>
    <?php while($pro = $productos->fetch_object()): ?>
        <tr>
            <td><?= $pro->id; ?></td>
            <td><?= $pro->nombre; ?></td>
            <td><?= $pro->precio; ?></td>
            <td><?= $pro->stock; ?></td>
        </tr>
    <?php endwhile; ?>    
</table>