<?php
if(!isset($_GET['id'])){
    header('Location: http://localhost/master-php/proyectos/app_crud/');
}
require_once '../model/conexion.php';

$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM datos WHERE id=?");
$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<center>
        <form action="update.php" method="POST">
            <h2>Actualizar registro</h2>
            <table>
                <tr><td>Nombre: <input type="text" name="nombre" require value="<?=$persona->nombre ?>"></td></tr>
                <tr><td>Apellidos: <input type="text" name="apellidos" require value="<?=$persona->apellidos ?>"></td></tr>
                <tr><td>Edad: <input type="number" name="edad" require value="<?=$persona->edad ?>"></td></tr>
                <tr><td>Email: <input type="email" name="email" require value="<?=$persona->email ?>"></td></tr>
                <tr><td>Password: <input type="password" name="password" require value="<?=$persona->password ?>"></td></tr>                
                <tr>                    
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?=$persona->id ?>">
                    <td colspan="2"><input type="submit" value="Actualizar"></td>
                </tr>
            </table>
        </form>
    </center>
