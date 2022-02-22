<?php
/*
Написать функцию которая принимает два аргумента, первый массив а вторым значение для поиска.
В случае если значение было найдено возвращает его ключ иначе false.
пользоваться стандартной функцией для поиска в массиве нельзя. Учтите что массив может быть многомерный
*/

function find(array $arr,$someVar){
    foreach($arr as $key=>$var){
        if(is_array($var)){
            foreach($var as $k=>$v){
                if($v===$someVar){
                    return "$key. $k";
                }
            }
        }
        elseif($var===$someVar){
                return $key;
        }
    }
    return false;
}

var_dump(find(['a',['b',2],'c','b'],'b'));