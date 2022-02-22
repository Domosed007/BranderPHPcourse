<?php
/*
Основывая на #4 задании написать ту же функцию но тепреь она работает рекурсивно
*/

function find(array $arr,$someVar){
    echo "Start function find()<br>";
    foreach($arr as $key=>$var){// циклом проходимся по массиву
        if(is_array($var)){// если итератор тоже массив, то рекурсивно вызывается функция find
            echo "Start is_array<br>";
            find($var,$someVar);
        }
        elseif($var===$someVar){
                return $key;
        }
    }
    return false;
}

var_dump(find(['a',['b',6,'e'],'c','b'],'c'));