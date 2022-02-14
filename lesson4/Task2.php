<?php
//Написать функцию которая принимает число от 1 до 7 и
// возвращает день недели Если число не входит в заданый диапазон то возвращает сообщение об ошибке

function day(int $num){
    switch(!check($num)){
        case 1:
            return "Monday"
            break;
        case 2:
            
    }
}

function check(int $num){
    if($num>7||$num<1){
        echo "Error! Data incorrect!";
        return false;
    }
    return true;
}