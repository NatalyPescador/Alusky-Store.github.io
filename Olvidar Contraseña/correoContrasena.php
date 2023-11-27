<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = 2; //SMTP::DEBUG_SERVER;
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp-mail.outlook.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'enios05@hotmail.com';                     
    $mail->Password   = 'xxxx';                              
    $mail->SMTPSecure = 'tsl'; 
    $mail->Port       = 587;                                    

    
    $mail->setFrom('enios05@hotmail.com', 'Johan');
    $mail->addAddress('johanlpc05@gmail.com', 'Johan');     
    //$mail->addAddress('ellen@example.com');               
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion contraseña';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}