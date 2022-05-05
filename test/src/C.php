<?php
namespace App;

class C{
    private $var;

    function __construct($var)
    {
        $this->var=$var;
    }

    function show(){
        echo $this->var.PHP_EOL;
    }
}