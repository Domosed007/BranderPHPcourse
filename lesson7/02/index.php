<?php
$file=fopen('Data.csv','r');

$students=[];

if($file!==false){
    for($i=0;($data=fgetcsv($file,1000,','))!==false;$i++){
        $students[$i]=$data;
    }
}

fclose($file);

var_dump($students);
?>