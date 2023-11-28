<?php
    require_once("generarContrasena.php");

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);


    if(isset($_POST['recuperar_contrasena'])){

        $correo = $_POST['correo'];

        $conexion=new mysqli("localhost", "root", "", "catalogoalusky");

        $sql=$conexion->query("SELECT Nombre FROM usuarios WHERE Correo='$correo'");
        $datos = $sql->fetch_object();
        $usuario = $datos->Nombre;

        $contrasenaTemporal = generarContrasenaAleatoria();
        $contrasenaTemporalEncriptada = password_hash($contrasenaTemporal, PASSWORD_BCRYPT);
        $sqlcon=$conexion->query("UPDATE usuarios SET Contra='$contrasenaTemporalEncriptada' WHERE Correo='$correo'");
        
        try {
            //Server settings
            $mail->SMTPDebug = 0; //SMTP::DEBUG_SERVER;                      
            $mail->isSMTP();                                            
            $mail->Host       = 'smtp-mail.outlook.com';                    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'soportealusky@hotmail.com';                     
            $mail->Password   = 'AluskyStore';                              
            $mail->SMTPSecure = 'tsl'; //PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom('soportealusky@hotmail.com', 'Alusky');
            $mail->addAddress($correo, $usuario);     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Recuperacion clave ingreso Alusky Store';
            $mail->Body    = 'Estimado '.$usuario.',<br><br>
            Hemos recibido una solicitud para restablecer su contraseña de acceso a Alusky Store.<br><br>
            Para su seguridad, hemos generado una contraseña temporal que le permitirá acceder a su cuenta.<br><br>           
            Su contraseña temporal es: '.$contrasenaTemporal.'<br><br>          
            Recomendamos que cambie esta contraseña temporal por una nueva y segura tan pronto como inicie sesión.<br><br>
            cordialmente<br>
            Equipo Alusky';

            $mail->send();
            echo 'Se ha enviado un mensaje al correo electronico por favor';
        } catch (Exception $e) {
            echo "El mensaje no se ha podido enviar: {$mail->ErrorInfo}";
        }
    }

?>