<?php
$a=[0,1,4,5,2,3];

$newA=[];

// for($i=count($a)-1;$i>=0;--$i){
//     $newA[]=$a[$i];
// }

// for($i=count($a)-1;$i>=0;--$i){
//     if($a[$i]>3){
//         $newA[]=$a[$i];
//     }
//     }

//print_r (array_filter($a,'f'));

// function f(int $num){
//     if($num>3){
//         return $num;
//     }
//     return false;
// }



var_dump(array_reduce($a, function ($carry,$item){
    $carry+=$item;
    return $carry;
}));