<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setId($id){
        $this->id = $id;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getAll(){
        $sql = "SELECT * FROM categorias ORDER BY DESC;";
        $categorias = $this->db->query($sql);

        return $categorias;
    }

    public function getOne(){
        $sql = "SELECT * FROM categorias WHERE id = {$this->getId()};";
        $categoria = $this->db->query($sql);

        return $categoria->fetch_object();
    }

    public function save(){
        $sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()});";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;    
        }
        return $result;
    }
}