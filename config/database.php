<?php
class Conectar{
    public static function conexion(){
        $conexion = new mysqli("localhost", "root", "123456", "weekeat");
        return $conexion;
    }
}
?>