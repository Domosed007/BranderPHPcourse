<?php
/*
Написать функцию которая принимает первым аргументом строку, вторым символ.
С помощью цикла вывести данный симфол столько раз сколько симфолов в строке переданной в первом аргументе
*/

function printCharFor(string $str, string $ch){
    for($i=0;$i<strlen($str);$i++){
        echo $ch;
    }
}

function printCharWhile(string $str,string $ch){
    $i=0;
    while($i<strlen($str)){
        echo $ch;
        $i++;
    }
}

function printCharDoWhile(string $str,string $ch){
    $i=0;
   do{
       echo $ch;
        $i++;
   }while($i<strlen($str));
}

printCharDoWhile("String","f");