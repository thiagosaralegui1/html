<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];

        // Cabeceras para el envío del correo
        $header = "From: tueventouy0@gmail.com\r\n";
        $header .= "Reply-To: $email\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();

        // El destinatario debe ser tu dirección de correo, no la del usuario
        $destinatario = "tueventouy0@gmail.com";
        $mensaje = "Nombre: $name\nEmail: $email\nMensaje:\n$msg";

        // Enviar correo con la función mail() de PHP
        $mail = mail($destinatario, $subject, $mensaje, $header);

        // Verificar si el correo fue enviado
        if ($mail) {
            echo "<h4>¡Correo enviado con éxito!</h4>";
        } else {
            echo "<h4>Error al enviar el correo.</h4>";
        }
    } else {
        echo "<h4>Por favor, completa todos los campos.</h4>";
    }
}
?>
