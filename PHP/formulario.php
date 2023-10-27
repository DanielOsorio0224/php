<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="recibir.php" method="POST">
        <label for="nombre" >Nombre</label>
        <input type="text" name="nombre">

        <label for="apellidos" >Apellidos</label>
        <input type="text" name="apellido">

        <input type="submit" value="Enviar">
    </form>
</body>
</html>