<?php
class Configuracion{
    public static $color;
    public static $newLetter;
    public static $entorno;

    public static function getColor(){
        return self::$color;
    }
    public static function getNewLetter(){
        return self::$newLetter;
    }
    public static function getEntorno(){
        return self::$entorno;
    }

    public static function setColor($color){
        self::$color = $color;
    }
    public static function setNewLetter($newLetter){
        self::$newLetter = $newLetter;
    }
    public static function setEntorno($entorno){
        self::$entorno = $entorno;
    }
}

?>