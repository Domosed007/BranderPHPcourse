<?php
/*
 Напишите функцию, которая принимает два параметра - массив и элемент.
 Функция должна из переданного массива удалить все переданные элементы.
*/
function deleteElements(array &$arr,$element){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]===$element){
            unset($arr[$i]);
        }
    }
}

$arr=[0,1,2,1,4,1,5];

deleteElements($arr,1);

var_dump($arr);
