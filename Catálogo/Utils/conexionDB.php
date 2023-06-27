<?php

class ConexionDB {
    public function getConexion() {
        $conexion=new PDO("mysql:host=localhost;dbname=catalogoalusky", "root", "");
        return $conexion;
    }
}

?>