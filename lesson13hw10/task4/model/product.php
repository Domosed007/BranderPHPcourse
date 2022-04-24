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
        return new static ($arr['title'],new Price($arr['price']));
    }
}