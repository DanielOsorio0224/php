<h1>Lista de Notas</h1>

<?php while($nota = $notas->fetch_object()): ?>
    <?= $nota->titulo ?> - <?= $nota->fecha ?>
<?php endwhile; ?>    