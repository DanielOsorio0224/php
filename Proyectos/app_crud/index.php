<?php 
require_once 'model/conexion.php';
$sentencia = $db->query("SELECT * FROM datos;");
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Crud</title>
</head>
<body>
    <center>
        <h3>Lista de Registros</h3>
        <a href="insert/form_insert.php"><button>Nuevo Registro</button></a>
        <table>
            <tr>
                <td>ID</td>
                <TD>NOMBRE</TD>
                <TD>APELLIDOS</TD>
                <TD>EDAD</TD>
                <TD>EMAIL</TD>
                <TD>PASSWORD</TD>
            </tr>
            <?php foreach($dato as $registro): ?>
                    <tr>
                        <td><?= $registro->id ?></td>
                        <td><?= $registro->nombre ?></td>
                        <td><?= $registro->apellidos ?></td>
                        <td><?= $registro->edad ?></td>
                        <td><?= $registro->email ?></td>
                        <td><?= $registro->password ?></td>
                        <td><a href="update/form_update.php"><button>Editar</button></a></td>
                        <td><a href="delete/delete.php"><button>Eliminar</button></a></td>
                    </tr> 
            <?php endforeach ?>
        </table>
    </center>
</body>
</html>