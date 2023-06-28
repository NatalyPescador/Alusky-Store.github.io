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

    public function ListarBuzos() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from buzos");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarBuzosCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from buzos where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarCamisetas() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from camisetas");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarCamisetasCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from camisetas where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarSudaderas() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from sudaderas");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarSudaderasCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from sudaderas where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarPijamas() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from pijamas");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarPijamasCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from pijamas where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarRopaN() {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from ropaniños");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

    public function ListarRopaNCod($codigo) {
        $conexion= new ConexionDB();
        $cn=$conexion->getConexion();

        $res=$cn->prepare("select * from ropaniños where CodProducto=$codigo");
        $res->execute();

        foreach($res as $row) {
            $lista[]=$row;
        }
        return $lista;
    }

}


?>