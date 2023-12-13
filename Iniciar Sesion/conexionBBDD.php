<?php
// session_start();
// $correo=$_POST['email'];
// $contraseña=$_POST['password'];

// $_SESSION['email']=$correo;

// //$conexion=new mysqli("localhost", "root", "", "catalogoalusky");
// $conexion=mysqli_connect("localhost", "root", "", "catalogoalusky");
// $consult="SELECT*FROM usuarios where Correo='$correo' and Contra='$contraseña'";
// $resultado=mysqli_query($conexion,$consult);

// $filas=mysqli_fetch_array($resultado);

// if ($filas['id']==1) {  //*administrador
//     header("location:../Mi Cuenta/Admin.html");
// }elseif ($filas["id"]== 2) { 
//     header("location:../Mi Cuenta/index.html");
//     # code...
// }else {
//     echo "<div class='alert_message'>Información Incorrecta</div>";
// }
?>

<?php
session_start();

// Verificar si se han enviado los datos del formulario
if(isset($_POST['email']) && isset($_POST['password'])){
    $correo = $_POST['email'];
    $contraseña = $_POST['password'];

    $_SESSION['email'] = $correo;

    $conexion = mysqli_connect("localhost", "root", "", "catalogoalusky");

    // Verificar si la conexión se estableció correctamente
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $consult = "SELECT * FROM usuarios WHERE Correo='$correo' AND Contra='$contraseña'";
    $resultado = mysqli_query($conexion, $consult);

    // Verificar si la consulta se ejecutó correctamente
    if ($resultado) {
        $filas = mysqli_fetch_array($resultado);

        // Verificar si se encontró un usuario
        if ($filas) {
            if ($filas['id'] == 1) {  //*administrador
                header("location:../Mi Cuenta/Admin.html");
            } elseif ($filas["id"] == 2) {
                header("location:../Mi Cuenta/index.html");
            } else {
                echo "<div class='alert_message'>Información Incorrecta</div>";
            }
        } else {
            echo "<div class='alert_message'>Usuario no encontrado</div>";
        }
    } else {
        echo "<div class='alert_message'>Error en la consulta: " . mysqli_error($conexion) . "</div>";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    echo "<div class='alert_message'>Datos de formulario no recibidos</div>";
}
?>


