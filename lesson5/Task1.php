<?php
/*
Написать функцию которая принимает на первым аргументом строку, а вторым символ.
В случае если искомые символ присуствует в строке то заменить его встроке на такой 
же но в верхнем регистре
*/

function getStringCharUpper(string $str,  $ch){
    if(strlen($ch)>1){
        echo "Error! $ch isn`t char!It is string!";
        return; 
    }
    
    $intCh=ord($ch);
    
    if($intCh<97||$intCh>122){
        echo "Error! $ch is not char!";
        return;
    }
    
    for($i=0;$i<strlen($str);$i++){
        if($str[$i]==$ch){
            $str[$i]=chr($intCh-32);
        }
    }
    return $str;
}

echo getStringCharUpper("apach",'p');