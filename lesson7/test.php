<?php
$arr=[1,2,3];

$new_arr=array_map(function($n){
    return $n*$n*$n;
},$arr);

var_dump($new_arr);