<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica controlador    
        $nota = new Nota();
        // $nota->setNombre('Hola');
        // $nota->contenido('Como estas');

        $notas = $nota->conseguirTodos('notas');

        //Vista    
        require_once 'views/nota/listar.php';
    }
    public function crear(){
        require_once 'views/nota/listar.php';

        $nota = new Nota();
        $nota->setUsuario_id(1);
        $nota->setTitulo('Nota desde PHP MVC');
        $nota->setDescripcion('Descripcion');
        $nota->guardar();

        header('Location: index.php?controller=Nota&action=listar');
    }
    public function borrar(){
        
    }
    
}