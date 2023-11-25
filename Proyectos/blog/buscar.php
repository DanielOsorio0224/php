<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php  
      if(!isset($_POST['busqueda'])){
        header('Location: index.php');
      }

      $busqueda = conseguirEntradas($bd,null,null, $_POST['busqueda']);
?>