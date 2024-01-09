<?php

class Producto{
    private $id;
    private $categoriaId;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;

    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id;
    }
    function getCategoriaId(){
        return $this->categoriaId;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getPrecio(){
        return $this->precio;
    }
    function getStock(){
        return $this->stock;
    }
    function getOferta(){
        return $this->oferta;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getImagen(){
        return $this->imagen;
    }
    function setId($id){
        $this->id = $id;
    }
    function setCategoriaId($categoriaId){
        $this->categoriaId = $categoriaId;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    function setPrecio($precio){
        $this->precio = $precio;
    }
    function setStock($stock){
        $this->stock = $stock;
    }
    function setOferta($oferta){
        $this->oferta = $oferta;
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function setImagem($imagen){
        $this->imagen = $imagen;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }

    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL,{$this->getCategoriaId()},'{$this->getNombre()}','{$this->getDescripcion()}',{$this->getPrecio()},{$this->getStock()},
                NULL,CURDATE(),NULL);";
        $save = $this->db->query($sql);

        $resultado = false;
        if($save){
            $resultado = true;
        }
        return $resultado;
    }

}