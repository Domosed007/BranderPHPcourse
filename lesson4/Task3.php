<?php
/*Написать функцию которая проверяет является ли число простым или нет(продвинутый уровень - использовтаь рекурсию)*/

// function is_simpleNumber(int $num){
//     if($num<=1){
//         return false;
//     }
//     for($i=2;$i<$num;$i++){
//         if($num%$i==0){
//             return false;
//         }
//     }

//     return true;
// }

function is_simpleNumber(int $num,int $i=2){
    if($i==$num){
         return true;
    }

    if($num%$i==0){
        return false;
    }

    return is_simpleNumber($num,++$i);
}

var_dump(is_simpleNumber(6));