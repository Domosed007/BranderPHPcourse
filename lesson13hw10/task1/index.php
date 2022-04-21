<?php
/*
Створити клас City. Описати 7 об’єктів та виведіть на екран для кожного міста назву і населення.
*/

class City{
    private $nameCity, $population;

    function __construct($name,$pop){
        $this->nameCity=$name;
        $this->population=$pop;
    }

    function display(){
        echo "Name\t\t$this->nameCity\nPopulation\t$this->population".PHP_EOL;
        echo " ".PHP_EOL;
    }
}

//1
$tokyo=new City('Tokyo',37.4);
$tokyo->display();

//2
$delhi =new City('Delhi',29.4);
$delhi->display();

//3
$shanghai=new City('Shanghai',26.3);
$shanghai->display();

//4
$saoPaolo=new City('Sao Paulo ',21.8);
$saoPaolo->display();

//5
$mexicoCity=new City('Mexico City ',21.6);
$mexicoCity->display();

//6
$cairo=new City('Cairo',20.5);
$cairo->display();

//7
$dhaka =new City('Dhaka ',20.3);
$dhaka->display();