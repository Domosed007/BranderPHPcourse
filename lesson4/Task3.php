<?php
/*Написать функцию которая проверяет является ли число простым или нет(продвинутый уровень - использовтаь рекурсию)*/

function is_simpleNumber(int $num){
    if($num<=1){
        return false;
    }
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            return false;
        }
    }
    return true;
}

var_dump(is_simpleNumber(6));