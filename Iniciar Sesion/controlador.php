<?php
session_start();
if (!empty($_POST["logIn_button"])) {
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        echo "<div class='alert_message'>Campos Incompletos</div>";
    } else {
        $correo=$_POST["email"];
        $contraseña=$_POST["password"];

        $sql=$conexion->query("SELECT * FROM usuarios WHERE Correo='$correo'");
        $datos = $sql->fetch_object();

        if ($datos) {            
            $contraseña_encriptada = $datos->Contra;
            $rol = $datos->id;            

            if (password_verify($contraseña, $contraseña_encriptada)) {
                $_SESSION['correo'] = $correo;
                $_SESSION['login'] = True;
                if ($rol == 1) {
                    header("location:../Mi Cuenta/Admin.php");
                }else {
                    header("location:../Mi Cuenta/index.php");
                exit;
                }
                
            }else {
                echo "<div class='alert_message'>Información incorrecta</div>";
            }
            
        } else {
            echo "<div class='alert_message'>Información Incorrecta</div>";
        }
    }
}
?>