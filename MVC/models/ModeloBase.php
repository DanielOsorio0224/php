<?php
require_once 'config/database.php';
class ModeloBase{    

    public $db;

    public function __contruct(){
        $this->db = database::conectar();
    }
    public function conseguirTodos(){
        return 'Sacando los usuarios';
    }
}