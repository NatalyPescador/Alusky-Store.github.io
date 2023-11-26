<?php
if (!empty($_GET['token'])) {

    $token = $_GET['token'];

    $sql = $conexion->prepare("SELECT correo, fecha_expiracion FROM tokens_recuperacion WHERE token = ? LIMIT 1");
    $sql->bind_param("s", $token);
    $sql->execute();
    $sql->bind_result($correo, $fecha_expiracion);
    $sql->fetch();
    $sql->close();

    if ($correo) {
        $fecha_actual = new DateTime();
        $fecha_expiracion_dt = new DateTime($fecha_expiracion);

        if ($fecha_actual <= $fecha_expiracion_dt) {
            header("Location: cambiar_contrasena_formulario.php?token=$token");
            exit();
        } else {
            echo "<div class='alert_message'>El enlace de recuperación ha expirado.</div>";
        }
    } else {
        echo "<div class='alert_message'>Token no válido.</div>";
    }
} else {
    echo "<div class='alert_message'>Token no proporcionado.</div>";
}
?>