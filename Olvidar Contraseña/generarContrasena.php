<?php
    function generarContrasenaAleatoria() {
        $longitud = 12;
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!#$%&*()_-+={}:;,.<>?";
        $contrasena = "";
        for ($i = 0; $i < $longitud; $i++) {
            $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
        return $contrasena;
    }
?>