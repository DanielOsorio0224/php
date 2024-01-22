<?php

class Connect{
    public static function connect(){
        $db = new mysqli('localhost','root','','prueba_tecnica');
        $db = query("SET NAMES 'utf8'");
        return $db;
    }
}

?>