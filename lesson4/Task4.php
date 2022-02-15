<?php
/*Написать функцию которая рекурсивно выводит все делители переданого числа(для 21 это 7 и 3)*/

function printNumberDivisors(int $num, int $div=2){
    if($num==$div){
        return;
    }
    if($num%$div==0){
        echo "$div ";
    }

    return printNumberDivisors($num,++$div);
}

printNumberDivisors(21);