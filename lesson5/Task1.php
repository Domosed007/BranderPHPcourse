<?php
/*
Написать функцию которая принимает на первым аргументом строку, а вторым символ.
В случае если искомые символ присуствует в строке то заменить его встроке на такой 
же но в верхнем регистре
*/

function getStringCharUpper(string $str,  $ch){
    
    for($i=0;$i<strlen($str);$i++){
        if($str[$i]==$ch){
            $str[$i]=mb_strtoupper($str[$i]);
        }
    }

    return $str;
}

echo getStringCharUpper("арбуз",'б');