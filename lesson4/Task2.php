<?php
//Написать функцию которая принимает число от 1 до 7 и
// возвращает день недели Если число не входит в заданый диапазон то возвращает сообщение об ошибке

function day(int $num){
    switch(check($num)){
        case 1:
            return "Monday";
        case 2:
            return "Tuesday";
        case 3:
            return "Wednesday";
        case 4:
            return "Thursday";
        case 5:
            return "Friday";
        case 6:
            return "Saturday";
        case 7:
            return "Sunday";
    }
}

function check(int $num){
    if($num>7||$num<1){
        echo "Error! Data incorrect!";
        return false;
    }
    return true;
}

echo(day(1));