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
// include_once 'conexionBBDD.php';
    
    // session_start();
    // if (!empty($_POST["logIn_button"])) {
       
    
    //     // Codigo para verificar el rol del usuario
    //     if (isset($_SESSION["rol"])) {
    //         switch ($_SESSION["rol"]) {
    //             case '1':
    //                 header('location: ../Mi Cuenta/Admin.html');
    //                 break;
                
    //             case '2':
    //                 header('location: ../Mi Cuenta/index.html');
    //                 break;    
                
    //             default:
    //                 # code...
    //                 break;
    //         }
    //     }
    //     // Codigo para autentificar un usuario
    //     if (isset($_POST['Correo']) && isset($_POST['Contra'])) {
    //         $correooo=$_POST["Correo"];
    //         $contraseñaaa=$_POST["Contra"];
    
    //         $conexionn= new ConexionDB();
    //         $query = $conexionn()->prepare('SELECT*FROM usuarios where Correo= :Correo AND Contra= :Contra ');
    //         $query->execute(['Correo' => $correo,'Contra'=> $contraseña]);
    
    //         $row= $query->fetch(PDO::FETCH_NUM);
    //         if ($row == true) {
    //             # Bloque para validar el rol
    //             $rol = $row[4];
    //             $_SESSION['rol'] = $rol;
    //             switch ($_SESSION["rol"]) {
    //                 case '1':
    //                     header('location: Admin.php');
    //                     break;
                    
    //                 case '2':
    //                     header('location: User.php');
    //                     break;    
                    
    //                 default:
    //                     # code...
    //                     break;
    //             }
    //         }else {
    //             # Si no, no existe
    //             echo "El correo o contraseña es incorrecto";
    //         }
    //     }
    //      // // Codigo para cerrar la sesion
       
    //     if (isset($_GET['cerrar_sesion'])) {
    //         session_unset();
    
    //         session_destroy();
    //     }

    // }