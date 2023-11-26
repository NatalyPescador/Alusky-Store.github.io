<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Incluir las clases de PHPMailer
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/SMTP.php';

if (!empty($_POST["recuperar_contrasena"])) {
    if (empty($_POST["correo"])) {
        echo "<div class='alert_message'>Campos incompletos</div>";
    } else {
        $correo = $_POST["correo"];

        // Generar un token único
        $token = uniqid();

        // Almacenar el token en la base de datos junto con el correo y la marca de tiempo
        $sql = $conexion->prepare("INSERT INTO tokens_recuperacion (correo, token, fecha_expiracion) VALUES (?, ?, DATE_ADD(NOW(), INTERVAL 1 HOUR))");
        $sql->bind_param("ss", $correo, $token);

        if ($sql->execute()) {
            // Enviar un correo electrónico con el enlace de recuperación
            $enlace_recuperacion = "http://localhost/Alusky-Store/cambiar_contrasena.php?token=$token";
            $mensaje = "Para recuperar tu contraseña, haz clic en el siguiente enlace: $enlace_recuperacion";

            // Configurar PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Configuración del servidor SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp-mail.outlook.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'enios05@gmail.com';
                $mail->Password = 'N4rut0*98.';
                $mail->Port = 587;

                // Configuración del correo electrónico
                $mail->setFrom('enios05@gmail.com', 'Johan');
                $mail->addAddress($correo);
                $mail->Subject = 'Recuperación de Contraseña';
                $mail->Body = $mensaje;

                // Enviar el correo
                $mail->send();

                echo "<div class='success_message'>Se ha enviado un enlace de recuperación a tu correo electrónico.</div>";
            } catch (Exception $e) {
                echo "<div class='alert_message'>Error al enviar el correo de recuperación: {$mail->ErrorInfo}</div>";
            }
        } else {
            echo "<div class='alert_message'>Error al generar el enlace de recuperación.</div>";
        }

        $sql->close();
    }
} else {
    echo "<div class='alert_message'>Token no disponible.</div>";
}
?>