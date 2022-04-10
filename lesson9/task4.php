<?php
/*
 Напишите функцию, которая оставляет в массиве только уникальные значения
*/

function  arrayUnique(array &$arr){
    $newArr=[];

    foreach($arr as $item){
        if(!valueCheck($newArr,$item)){
            $newArr[]=$item;
        }
    }

    $arr=[];

    foreach($newArr as $i){
        $arr[]=$i;
    }
}

function valueCheck(array $arr, $value):bool{
    foreach($arr as $item){
        if($item===$value){
            return true;
        }
    }
    return false;
}

$arr=[0,1,1,2,2,3,3];

print_r($arr);

arrayUnique($arr);

print_r($arr);