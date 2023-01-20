<?php

abstract class Messenger 
{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function send($message);
    function close()
    {
        echo "Leaving this messenger";
    }
}

class Telegram extends Messenger
{
    function send($message)
    {
        echo "$this->name sending sms: $message<br>";
    }
}

$outlook = new Telegram("Kimqwezz");
$outlook->send("Hello php 7(");
$outlook->close();

?>