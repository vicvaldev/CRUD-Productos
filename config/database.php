<?php

Class Conectar{
    
    public static function conexion(){

        $conexion = new mysqli("localhost", "root", "", "tienda-mvc");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;

    }
}

?>