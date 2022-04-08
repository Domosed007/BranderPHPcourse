<?php
/*
Заполнить массив из 18 элементов так, что третий (шестой, девятый и тд) элемент имеется значение равное сумме двух предыдущих.
*/

function fillArray($countElements):array{
    $arr=[];

    for($i=0,$j=2;$i<$countElements;$i++){
        if($i!==$j){
            $arr[]=$i;
        }
        else{            
            $arr[]=$arr[$i-1]+$arr[$i-2];
            $j+=3;
        }
    }

    return $arr;
}

fillArray(18);