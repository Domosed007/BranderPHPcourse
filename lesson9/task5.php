<?php
/*
 Напишите функцию, которая принимает два параметра - входящий массив и размер исходных подмассивов.
 Суть в том, что бы разделить один большой массив на несколько маленьких (заданного размера)
*/

function chunkArray(array $arr,int $size):array{
    $newArray=[];

    while(count($arr)>0){
      $newArray[]=array_slice($arr,0,$size);  
      array_splice($arr,0,$size);
    }
    
    return $newArray;
}

$arr=[0,1,2,3,4];

print_r(chunkArray($arr,2));