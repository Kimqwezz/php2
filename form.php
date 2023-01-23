<?php

function my_autoloader($class)
{
    echo "Function call autoloader";
    include $class . ".php";
}

spl_autoload_register("my_autoloader");

$tom = new Main("Tom", 25);
$tom->printInfo();

?>