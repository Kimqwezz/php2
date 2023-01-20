<?php

class Person 
{
    public $name, $age;
    static $retirementAge=65;
    function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function sayHello()
    {
        echo "Hi, my name is $this->name";
    }

    static function printPerson($person) 
    {
        echo "Name: $person->name, Age: $person->age";
    }
    
    function checkAge() 
    {
        if($this->age >= self::$retirementAge)
            echo "Go to retirement";
        else
            echo "For retirement about " . (Person::$retirementAge - $this->age) . " years. <br>";
    }
}

$tom = new Person("Tom", 19);
$tom->checkAge();
?>