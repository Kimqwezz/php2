<?php

interface iMessenger 
{
    function send();
}

class EmailMessenger implements iMessenger
{
    function send()
    {
        echo "Send you on e-mail.";
    }
}

$outlook = new EmailMessenger();
$outlook->send();

?>