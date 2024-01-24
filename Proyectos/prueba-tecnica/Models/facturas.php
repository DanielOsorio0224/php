<?php

class Facturas{
    
    private $factura_id;
    private $cantidad;
    private $precio_individual;
    private $fecha; 
    private $precio_total;
    private $estado;
    private $db;

    public function __contruct(){
        $this->db = Database::connect();
    }

    public function getFactura_id(){
        return $this->factura_id;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function getPrecio_individual(){
        return $this->precio_individual;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getPrecio_total(){
        return $this->precio_total;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function setFactura_id($factura_id){
        $this->factura_id = $factura_id;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    public function setPrecio_individual($precio_individual){
        $this->precio_individual = $precio_individual;
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
    public function setPrecio_total($precio_total){
        $this->precio_total = $precio_total;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
}

?>