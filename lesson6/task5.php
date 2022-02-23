<?php
/*
Основывая на #4 задании написать ту же функцию но тепреь она работает рекурсивно
*/

// С этой задачей 

function find(array $arr,$someVar){
    $result=false;

    foreach($arr as $key=>$var){// циклом проходимся по массиву
        if(is_array($var)){// если итератор тоже массив, то рекурсивно вызывается функция find
            $result=find($var,$someVar);
        }
        elseif($var===$someVar){
                $result=$key."\n";
        }
    }
    return $result;
}

var_dump(find(['a',['b',6,'e'],'c','b'],6));