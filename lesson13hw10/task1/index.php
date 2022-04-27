<?php
/*
Створити клас City. Описати 7 об’єктів та виведіть на екран для кожного міста назву і населення.
*/

class City{
    
    static function display( $nameCity, $population){
        echo "Name: $nameCity Population: $population<br>".PHP_EOL;
    }
}

$arrCity=[
    ['name'=>'Tokyo',
    'population'=>37.4],
    ['name'=>'Delhi',
    'population'=>29.4],
    ['name'=>'Shanghai',
    'population'=>26.3],
    ['name'=>'Sao Paolo',
    'population'=>21.8],
    ['name'=>'Mexico City',
    'population'=>21.6],
    ['name'=>'Cairo',
    'population'=>20.5],
    ['name'=>'Dhaka',
    'population'=>20.3],
];

foreach($arrCity as $city){
    City::display($city['name'],$city['population']);
}