<?php
class Person{
    private $name;

    static $count;

    function __construct($a)
    {
        $this->name=$a;
        $this->count++;
    }

    final function print(){
        echo "Name: $this->name<br>";
        echo "Count: $this->count<br>";
    }

    function __destruct()
    {
        "Destructor";
    }
};

$sem=new Person('Sem');
$sem->print($sem);

$ben=new Person('Ben');
$ben->print($ben);

$tom=new Person('Tom');
$tom->print($tom);