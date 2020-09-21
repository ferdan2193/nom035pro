<?php

class SendEmail{

    public function enviarMensaje(){
        $to      = 'webnom035@consultorianom035.com.mx'; 

        $subject = 'Consulta desde web'; 

        $message = "NOMBRE: " . $_POST["nombre"] . " |||| ". "MENSAJE: " . $_POST["mensaje"] . " ||| " .  "TELEFONO: " . $_POST["telefono"] . " ||| " .  "EMAIL: " . $_POST["email"] . " ||| \r\n \r\n" . 

        $headers = 'From: webnom035@consultorianom035.com.mx' . "\r\n" . 

            'Reply-To: webnom035@consultorianom035.com.mx' . "\r\n" . 

            'X-Mailer: PHP/' . phpversion(); 

        mail($to, $subject, $message, $headers); 
    }
}

$mensaje = new SendEmail();
$mensaje->enviarMensaje();
?>