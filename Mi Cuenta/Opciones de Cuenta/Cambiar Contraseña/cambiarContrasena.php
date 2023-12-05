<?php
session_start();
if (isset($_POST['cambiar_contrasena'])){
    if (empty($_POST["current_password"]) || empty($_POST["new_password"]) || empty($_POST["confirm_new_password"])) {
        $_SESSION['msg'] = "Campos Incompletos";
    }else{
        $contrasenaActual = $_POST['current_password'];
        $nuevaContrasena = $_POST['new_password'];
        $nuevaContrasenaEncriptada = password_hash($_POST['new_password'], PASSWORD_BCRYPT);        
        $confirmacionContrasena = $_POST['confirm_new_password'];
        $correo = $_SESSION['correo'];

        $conexion=new mysqli("localhost", "root", "", "catalogoalusky");

        if ($correo) {
            $sql=$conexion->query("SELECT Contra FROM usuarios WHERE Correo='$correo'");
            $datos = $sql->fetch_object();
            $contrasena = $datos->Contra;

            if (password_verify($contrasenaActual, $contrasena)) {
                if ($nuevaContrasena == $confirmacionContrasena) {
                    $sql=$conexion->query("UPDATE usuarios SET Contra='$nuevaContrasenaEncriptada' WHERE Correo='$correo'");
                    $_SESSION['msg'] = "La contraseña ha sido cambiada";
                    header("location:index.php");
                    exit();
                }else {
                    $_SESSION['msg'] = "La contraseña nueva no es igual a la confirmación de la contraseña";
                }
            }else {
                $_SESSION['msg'] = "La contraseña actual digitada no es correcta";
            }
        }
    }
}
?>