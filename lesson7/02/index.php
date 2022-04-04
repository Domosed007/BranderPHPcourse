<?php
$file=fopen('Data.csv','r');

$students=[];

if($file){
    while(($data=fgetcsv($file,1000,','))!==false){
            $students[$data[0]][]=array_combine(['course','grade'],[$data[1],$data[2]]);
    }    
}
else echo "ERROR! File not open!".PHP_EOL;

fclose($file);

var_dump($students);
 
// function minGrade(array $students):{
//     $min=0;

    
    
// }

function writeFile(array $data, string $nameFile){
    $puth=getcwd()."/Data/$nameFile";

    $file=fopen($puth,'a');

    foreach($data as $var){
        fputcsv($file,$var);
    }

    fclose($file);
}
?>