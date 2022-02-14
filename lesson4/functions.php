<?php

//Print array

function printArray($arr){
    foreach ($arr as $value) {
        echo $value."<br>";
    }
}

//return max number

function maxNumberInArray($arr){
    $max=$arr[0];

    foreach($arr as $k=>$value){
        if($arr[$k]>$max){
            $max=$arr[$k];
        }
    }

    return $max;
}