<?php

abstract class AbstractClass
{
    abstract protected function prefixName($name);
}

class ConcreateClass extends AbstractClass
{
    public function prefixName($name, $separator=".")
    {
        if($name=="Pacman"){
            $prefix="Mr";
        } elseif($name=="Pacwoman"){
            $prefix="Ms";
        } else{
            $prefix="Dr";
        }

        return "{$prefix}{$separator}{$name}";
    }
}

$pac = new ConcreateClass;
echo $pac->prefixName("Daniil");

?>