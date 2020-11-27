<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $nombre_persona = $_POST["name"];
    $empleado = $_POST["empleado"];
    $edificio = $_POST["edificio"];
    $edificio_nombre = $nombre_persona." ".$edificio;
    $mensaje = $_POST["mensaje"];
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'alexis_b13@live.com.ar';                     // SMTP username
    $mail->Password   = '';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    //{empleado,nombreDep,edifciodep,trabajoQq}
    
    //Recipients
    $mail->setFrom('alexis_b13@live.com.ar', $edificio_nombre);
    $mail->addAddress('quasirsgs@hotmail.com');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $empleado;
    $mail->Body    = $mensaje;

    $mail->send();
    header("Location: index.html");
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
