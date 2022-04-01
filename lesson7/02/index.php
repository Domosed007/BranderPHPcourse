<?php
$file=fopen('Data.csv','r');

$students=[];

if($file!==false){
    for($i=0;($data=fgetcsv($file,1000,','))!==false;$i++){
        $students[$i]=$data;
    }
}

fclose($file);

//var_dump($students);

function writeFile(array $data, string $nameFile){
    $puth=getcwd()."/Data/$nameFile";

    echo $puth.PHP_EOL;

    $file=fopen($puth,'a');

    foreach($data as $var){
        fputcsv($file,$var);
    }

    fclose($file);
}

$arr=[
    ['Иванов','С++',5],
    ['Иванов','PHP',5],
];

writeFile($arr,'test.csv');
?>