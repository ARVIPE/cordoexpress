<?PHP
$sender = 'willyrex@gmail.com';
$recipient = 'artfdl963@gmail.com';

$subject = "Fiesta en la mansion youtuber";
$message = "Te invito a mi casa con vergota si te sientas te la mete";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>