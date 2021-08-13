<?php

if(isset($_POST['enviar'])){
  /*  if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $asunto = $_POST['subject'];
            $message = $_POST['message'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.= "Reply-To: arvipe@hotmail.com" . "\r\n";
            $header.= "X-Mailer: PHP/". phpversion();
            $mail = mail($email,$asunto,$message,$header);
            if($mail){
                echo"<h4>!Mail enviado exitosamente!</h4>";
            }
            
    
    }*/

                // El mensaje
$mensaje = "Línea 1\r\nLínea 2\r\nLínea 3";

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

// Enviarlo
mail('artfdl963@gmail.com', 'Mi título', $mensaje);
   


}
