<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../plugins/PHPMailer/src/PHPMailer.php';
require '../plugins/PHPMailer/src/Exception.php';
require '../plugins/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Configuración de PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // servidor SMTP 
        $mail->Port = 465; // Puerto SMTP  
        $mail->SMTPAuth = true;
        $mail->Username = 'joserubiohidalgo@gmail.com'; // Tu nombre de usuario SMTP 
        $mail->Password = 'uwcv sonj cgvc qhgg'; // Tu contraseña SMTP 
        $mail->SMTPSecure = 'ssl'; //  TLS es el protocolo de seguridad recomendado por 000webhost
        $mail->setFrom('joserubiohidalgo@gmail.com', 'JoseRubio'); // correo electrónico y tu nombre
        $mail->addAddress($correo); // dirección de correo del destinatario
        $mail->isHTML(true); // Establece el formato del correo electrónico como HTML
        $mail->CharSet = 'UTF-8';  // Establecer la codificación de caracteres a UTF-8
        $mail->Subject = 'Nuevo mensaje de ' . $nombre; // Asunto del correo electrónico

        // Contenido HTML del correo electrónico
        $htmlContent = "
            <header id='header' class='container-fluid'>
                <div class='row'>
                    <div class='col-lg-4 col-sm-12'>
                        <h1>RubFood</h1>
                    </div>
                    <div class='col-lg-6 col-sm-12 d-none  d-lg-block'>
                        <img src='../images/otros/LogoT.png' alt=''>
                    </div>
                </div>
            </header>
            <p>Estimado $nombre,</p>
            <p>Gracias por ponerte en contacto con nosotros. Hemos recibido tu mensaje y lo revisaremos lo antes posible.</p>
            <p>Si es necesario, nos pondremos en contacto contigo en la dirección de correo electrónico proporcionada: $correo.</p>
            <p>Atentamente,<br>RubFood</p>
        ";

        $mail->Body = $htmlContent; // Establece el contenido HTML del correo electrónico

        // Envía el correo electrónico
        $mail->send();

        //enviar mensaje del cliente al correo de la empresa pero el hotmail.com
        $mail->clearAddresses();
        $mail->addAddress('rubfood@hotmail.com');
        $mail->Subject = $nombre . ' - ' .$correo;

        $mail->Body = $mensaje;
        $mail->send();


        echo '<script>alert("Correo enviado correctamente.");</script>';
    } catch (Exception $e) {
        echo '<script>alert("Error al enviar el correo: ' . $mail->ErrorInfo . '");</script>';
    }

    include 'conexion.php';

    // Preparar la consulta SQL para insertar el mensaje en la base de datos
    $sql = "INSERT INTO mensajes_contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo '<script>console.log("Mensaje guardado correctamente en la base de datos.");</script>';
    } else {
        echo '<script>console.log("Error al guardar el mensaje en la base de datos: ' . $conexion->error . '");</script>';
    }

    $conexion->close();

    // Redirige a index.php después de un breve retraso (2 segundos en este caso)
    echo '<script>
            setTimeout(function() {
                window.location.href = "../../index.php";
            }, 1000);
          </script>';
}
