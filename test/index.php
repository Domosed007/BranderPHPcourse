<?php

class Person
{
    public $name='Sem',$age=18;

    function displayInfo(){
        echo "Name: $this->name\tAge: $this->age".PHP_EOL;
    }
}

$tom=new Person();

$tom->name='Tom';
$tom->age=36;

$tom->displayInfo();