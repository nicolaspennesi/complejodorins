<?php

$to = "info@complejodorins.com";

$subject = "Consulta desde web";
$message = "<br><br>Nombre: " . $_POST['nombre'];
$message .= "<br>Email: " . $_POST['email'];
$message .= "<br>Teléfono: " . $_POST['telefono'];
$message .= "<br>Cantidad de Ocupantes: " . $_POST['ocupantes'];
$message .= "<br>Checkin: " . $_POST['checkin'];
$message .= "<br>Checkout: " . $_POST['checkout'];
$message .= "<br>Mensaje: " . $_POST['mensaje'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: Web Complejo Dorin's <info@complejodorins.com>". "\r\n";
$headers .= "Reply-To: " . $_POST['email'] . "\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo 'Ok';
} else {
    header('HTTP/1.1 500 Internal Server Error');
    echo 'Error';
}
