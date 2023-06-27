<?php
if (!empty($_POST["logIn_button"])) {
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        echo "<div class='alert_message'>Campos Incompletos</div>";
    } else {
        $correo=$_POST["email"];
        $contraseña=$_POST["password"];
        $sql=$conexion->query("select * from usuarios where Correo='$correo' and Contra='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            header("location:../Mi Cuenta/index.html");
        } else {
            echo "<div class='alert_message'>Información Incorrecta</div>";
        }
    }
}
?>