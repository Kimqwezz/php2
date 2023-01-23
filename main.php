<?php

class Main
{
    private $name, $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function printInfo()
    {
        echo "<br>Name $this->name<br>, age $this->age";
    }
}
?>