<?php
require_once 'models/usuario.php';

class usuarioController{
    public function index(){
        echo "Controlador del usuario";
    }

    public function registro(){
        require_once 'views/usuario/registro.php';
    }

    public function save(){
        if(isset($_POST)){

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $pass = isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellidos && $email && $pass){
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPass($pass);
                $save = $usuario->save();
                
                if($save){
                    $_SESSION['register'] = "complete";
                 }else{
                     $_SESSION['register'] = "failed";
                 }            
             }else{
                $_SESSION['register'] = "failed";
             }
    }else{
        $_SESSION['register'] = "failed";            
    }
    header("Location: index.php");    
   }

   public function login(){
    if(isset($_POST)){
        $usuario = new Usuario();
        $usuario->setEmail($_POST['email']);
        $usuario->setPass($_POST['pass']);
        $identity = $usuario->login();

        if($identity && is_object($identity)){
            $_SESSION['identity'] = $identity;

            if($identity->rol == 'admin' ){
                $_SESSION['admin'] = true;
            }
        }else{
            $_SESSION['error_login'] = 'Identificacion Fallida';
        }
    }
    header('Location:index.php');
   }
   public function logout(){
    if(isset($_SESSION['identity'])){
        unset($_SESSION['identity']);
    }
    if(isset($_SESSION['admin'])){
        unset($_SESSION['admin']);
    }
    header("Location: index.php");
   }
}