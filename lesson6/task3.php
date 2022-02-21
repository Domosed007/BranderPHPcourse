<?php
/*
Написать функцию которая принимает первым аргументом массив и выводит все его элементы.
Учтите что массив может быть многомерный
*/

function printArray(array $arr){
    foreach($arr as $key=>$var){
        if(is_array($var)){
            //  foreach($var as $k=>$v){
            //     echo "$k => $v".PHP_EOL;
            //  }
            printArray($var);
        }
        else{
        echo "$key => $var".PHP_EOL;
        }
    }
}

//printArray([0,[[1,1.01,1.02],1.1,1.2],2,3,4]);