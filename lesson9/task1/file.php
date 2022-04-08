<?php
$data=array_map(function($str){
    return htmlentities($str);
},
$_POST);

var_dump($data);

foreach($data as $var){
    echo '<p>'.$var.'</p>';
}
