<?php
trait Printer
{
    public function printSimpleGreeting($name){ echo "Hello dear {$name} <br>"; }
    public function printSimpleFarewell($name){ echo "Goodbye dear {$name} <br>"; }
}

class TelegramBot
{
    use Printer;
}

$existedTelegramBot = new TelegramBot;
$existedTelegramBot->printSimpleGreeting('Kimqwezz');
$existedTelegramBot->printSimpleFarewell('Sovux');
?>