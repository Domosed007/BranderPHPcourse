<?php
//Написать функция котора принимает три целых числа и возвращает болььшее из них, если числа равны то любое из них

require_once "functions.php";

function bigestNumber(int $num1, int $num2, int $num3){
    if($num1==$num2&&$num1==$num3){
        return $num1;
    }
    $arr=makeArray($num1,$num2,$num3);

    return maxNumberInArray($arr);
}

function makeArray(...$values){
    $arr=[];

    foreach ($values as $value) {
        $arr[]=$value;
    }

    return $arr;
}

echo(bigestNumber(3,10,-2));