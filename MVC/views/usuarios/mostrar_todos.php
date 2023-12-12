<h1>Lista de Usuarios</h1>

<?php while($usuario = $todos_usuarios->fetch_object()): ?>
    <?= $usuario->titulo ?> - <?= $usuario->fecha ?>
<?php endwhile; ?>        