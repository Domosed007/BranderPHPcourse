<?php
//На перед Написать функуию которая возвращает все делители числа(нужно будет использовтаь массив)

require_once "functions.php";

function getNumberDivisors($num){
    $arr=[];
    for($i=1;$i<=$num;$i++){
        if($num%$i==0){
            $arr[]=$i;
        }
    }
    return $arr;
}

$divisors=getNumberDivisors(21);

printArray($divisors);