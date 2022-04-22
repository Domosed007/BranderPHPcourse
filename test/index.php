<?php

class Person
{
    public $name;
    static $var='static';

    function __construct($name){
        $this->name=$name;
    }

    function displayInfo(){
        echo "Name\t$this->name".PHP_EOL;
    }
}

class Employee extends Person{
    public $company;
    function __construct($name,$company)
    {
        parent::__construct($name);
        $this->company=$company;
    }
    function displayInfo()
    {
        parent::displayInfo();
        echo "\nCompany\t$this->company".PHP_EOL;
    }
}

$tom=new Person('Tom','IBM');
print_r(Person::$var);