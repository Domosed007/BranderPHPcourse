<?php
//$data=[0,1,2,3,4,5];

/*1. Написать функцию которая вернет все элементы
 массива значение которых больше указанного аргумента*/ 

function moreThan(array $data,int $num){
    $arr=[];
    foreach($data as $var){
        if($var>$num){
            $arr[]=$var;
        }
    }
    return $arr;
} 

//var_dump(moreThan($data,2));

// 2 . Написать функцию которая считает сумму четных элементов массива,
// который передается в аргументы функции.

function even(array $data){
    $sum=0;
    foreach($data as $key=>$var){
        if($key%2==0){
            $sum+=$var;
        }
    }
    return $sum;
}

//echo (even($data)).PHP_EOL;

// 3 Написать функцию которой передается индекс в массиве и количество
// элементов которое необходимо вернуть начиная с этого индекса

$data = [1, 2, 3, 4, 5, 6];

function getDataAfterIndex(array $data, int $index, int $countAfter) {
    $arr=[];
    foreach($data as $k=>$v){
        if($k>=$index&&$k<($index+$countAfter)){
                $arr[]=$v;
        }
    }
    return $arr;
}

var_dump(getDataAfterIndex($data,2,3)); 