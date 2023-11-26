<?php
if (!empty($_POST["logIn_button"])) {
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        echo "<div class='alert_message'>Campos Incompletos</div>";
    } else {
        $correo=$_POST["email"];
        $contraseña=$_POST["password"];

        $sql=$conexion->query("SELECT Contra FROM usuarios WHERE Correo='$correo'");
        $datos = $sql->fetch_object();

        if ($datos) {
            
            $contraseña_encriptada = $datos->Contra;            

            if (password_verify($contraseña, $contraseña_encriptada)) {
                header("location:../Mi Cuenta/index.html");
            }else {
                echo "<div class='alert_message'>Información incorrecta</div>";
            }
            
        } else {
            echo "<div class='alert_message'>Información Incorrecta</div>";
        }
    }
}
?>