<?php
$file=fopen('Data.csv','r');

if($file!==false){
    for($i=0;($data=fgetcsv($file,1000,','))!==false;$i++){
        foreach($data as $var){
            echo "$var\t";
        }
        echo ' '.PHP_EOL;
    }
}

fclose($file);
?>