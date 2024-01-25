<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <center>
        <form action="insert.php" method="POST">
            <h2>Ingresar nuevo registro</h2>
            <table>
                <tr><td>Nombre: <input type="text" name="nombre" require></td></tr>
                <tr><td>Apellidos: <input type="text" name="apellidos" require></td></tr>
                <tr><td>Edad: <input type="number" name="edad" require></td></tr>
                <tr><td>Email: <input type="email" name="email" require></td></tr>
                <tr><td>Password: <input type="password" name="password" require></td></tr>
                <input type="hidden" name="oculto" value="1">
                <tr>
                    <td><input type="reset"></td>
                    <td><input type="submit" value="Registrar"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>