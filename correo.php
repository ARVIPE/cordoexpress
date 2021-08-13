<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {


        $sender = $_POST['email'];
        $recipient = 'artfdl963@gmail.com';

        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = 'From:' . $sender;

        if (mail($recipient, $subject, $message, $headers)) {
            echo "Message accepted";
        } else {
            echo "Error: Message not accepted";
        }
    }
}
