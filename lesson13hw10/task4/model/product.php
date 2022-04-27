<?php
include_once 'price.php';

class Product{
    private string $name;
    private Price $price;

    private function __construct(string $name,Price $price){
        $this->name=$name;
        $this->price=$price;
    }

    static function constructorArg(string $title,Price $price){
        return new static($title,$price);
    }

    static function constructorArr(array $arr){
        if(array_key_exists('title', $arr)&&array_key_exists('price', $arr)&&
        gettype($arr['title'])==='string'&& gettype($arr['price'])==='integer'){
            return new static ($arr['title'],new Price($arr['price']));
        }
        else echo 'Error: incorrect data';
    }
}