<?php


        $sender = 'prueba@hotmail.com';
        $recipient = 'artfdl963@gmail.com';

        $subject = 'esto es una prueba';
        $message = 'esto es una prueba';
        $headers = 'From:' . $sender;

        if (mail($recipient, $subject, $message, $headers)) {
            echo "Message accepted";
        } else {
            echo "Error: Message not accepted";
        }

?>