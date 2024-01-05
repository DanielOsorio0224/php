<?php
 
class Usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $pass;
    private $rol;
    private $imagen;
    private $db;    

    //conexion BD 
    public function __contruct(){
        $this -> db = Database::connect();
    }

    public function getId(){
        return $this-> id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPass(){
        return $this->pass;
    }
    public function getRol(){
        return $this-> rol;
    }
    public function getImagen(){
        return $this-> imagen;
    }
    public function setId($id){
        $this-> id = $id;
    }
    public function setNombre($nombre){
        $this-> nombre = $nombre;
    }
    public function setApellidos($apellidos){
        $this-> apellidos = $apellidos;
    }
    public function setEmail($email){
        $this-> email = $email;
    }
    public function setPass($pass){
        $this-> pass = $pass;
    }
    public function setRol($rol){
        $this-> rol = $rol;
    }
    public function setImagen($imagen){
        $this-> imagen= $imagen;
    }    

    public function save(){
        $sql = "INSERT INTO usuarios VALUES(NULL,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getPass()}',
                'user',NULL);";
        $save = $this->db->query($sql);

        $resultado = false;
        if($save){
            $resultado = true;
        }
        return $resultado;
    }
}