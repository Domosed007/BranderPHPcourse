<?php

class Person
{
    public $name,$age;

    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    function displayInfo(){
        echo "Name\t$this->name\nAge\t$this->age".PHP_EOL;
    }
}

$tom=new Person('Tom',29);
$tom->displayInfo();

