<?php
/*
Написать функцию которая на вход примниает два аргумента - строки(отрывки из текста) и сравнивает % совпадения.
 Если строки идентичны - 100%
*/

function stringIdentity(string $str1,string $str2){
    $countSameSymbol=0;
    $maxSameSymbol=strlen($str1)>strlen($str2)?strlen($str1):strlen($str2);

    for($i=0;$i<strlen($str1)&&$i<strlen($str2);$i++){
        if($str1[$i]===$str2[$i]){
            $countSameSymbol++;
        }
    }

    return per($maxSameSymbol,$countSameSymbol);
}

//Функция возвращает процент от числа
function per(int $num1,int $num2){
    return $num2/$num1*100;
}

echo stringIdentity("qwert","Qwert");