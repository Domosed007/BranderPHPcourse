<?php
/*
Написать функцию котоая принимает аргументом строку и возвращает ее перевернутый вариант(пример, "Test" -> "tseT")
использовать стандартные функции php работы со строкаими нельзя 
*/

function getArrRev(string $str){
    $newStr="";

    for($i=strlen($str);$i>=0;$i--){
        $newStr.=$str[$i];
    }
    
    return $newStr;
}

echo getArrRev("String");