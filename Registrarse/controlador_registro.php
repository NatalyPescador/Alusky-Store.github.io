<?php 
if (!empty($_POST["sigIn_button"])) {
    if (empty($_POST["name"]) or empty($_POST["email"]) or empty($_POST["password"])) {
        echo "<div class='alert_message'>Campos incompletos</div>";
    } else {
        $nombre=$_POST["name"];
        $correo=$_POST["email"];
        $contraseña=$_POST["password"];
        $sql=$conexion->query("insert into usuarios (Nombre, Correo, Contra) values ('$nombre','$correo','$contraseña')");
        if ($sql==1) {
            echo "<div class='success_message'>Usuario registrado</div>";
        } else {
            echo "<div class='alert_message'>Error al registrar</div>";
        }
    }
}
?>