<?php
/*
Написать функцию которая на вход получает строку(пароль) и проверяет сложность пароля по шкале Простой, Нормальный, Сложный 
*/

function typePassword(string $password){
    $charUpper=false;
    $charLower=false;
    $charNumber=false;
    $charSym=false;

    for($i=0;$i<strlen($password);$i++){
        if(is_lower($password[$i])){
            $charLower=true;
        }
        if(is_upper($password[$i])){
            $charUpper=true;
        }
        if(is_number($password[$i])){
            $charNumber=true;
        }
        if(is_symbal($password[$i])){
            $charSym=true;
        }
    }
    
    if(strlen($password)>=8&&$charLower&&$charUpper&&$charNumber&&$charSym){
        return "Strong";
    }
    if(strlen($password)>=8&&$charLower&&$charUpper&&$charNumber){
        return "Middle";
    }
    else{
        return "Simple";
    }
}


//Функция проверяет является ли символ буквой в нижнем регистре
function is_lower(string $ch){
    if(ord($ch)<97||ord($ch)>122){
        return false;
    }
    return true;
}

//Функция проверяет является ли символ буквой в верхнем регистре
function is_upper(string $ch){
    if(ord($ch)<65||ord($ch)>90){
        return false;
    }
    return true;
}

//Функция проверяет является ли символ цифрой
function is_number(string $ch){
    if(ord($ch)<48||ord($ch)>57){
        return false;
    }
    return true;
}

//Функция проверяет является ли символ спецсимволом
function is_symbal(string $ch){
    if(ord($ch)<33||ord($ch)>47){
        return false;
    }
    return true;
}

echo(typePassword("Passw6ord*"));