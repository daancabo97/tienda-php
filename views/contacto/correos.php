<?php 

    $destinatario = 'danielcaicedo285@gmail.com';
    // esto es al correo al que se enviara el mensaje
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la aplicacion Bendita Empanada";
    $mensajeCompleto = "\nMensaje: " . $mensaje . "\nAtentamente: " . $nombre;

    // Funcion para enviar correos - -  A quien va dirigido:
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo '<strong class="alerta">El mensaje se ha enviado correctamente</strong>';
    header('Location:'.base_url.'contacto/contactoForm');

?>