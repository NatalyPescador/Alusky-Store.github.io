<?php

include "../Utils/conexionDB.php";

class MetodosDAO {
    public function ListarProductos() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from productos");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarProductosCod($cod) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from productos where CodProducto=$cod");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarAccesorios() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from accesorios");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarAccesoriosCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from accesorios where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

}


?>