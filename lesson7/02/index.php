<?php
    $students=[];
    $excellentStudents=[];
    $goodStudents=[];
    $tripletsStudents=[];    

    $file=fopen('Data.csv','r');

    if($file){
        while(($data=fgetcsv($file,1000,','))!==false){
            $students[$data[0]][]=array_combine(['course','grade'],[$data[1],$data[2]]);
        }
    }

    fclose($file);

    $retake=getArrayRetake($students);

    foreach($students as $key=>$student){
        switch(getMinGradeStudent($student)){
            case 5:
                $excellentStudents[]=[$key,''];
                break;
            case 4:
                $goodStudents[]=[$key,''];
                break;
            case 3:
                $tripletsStudents[]=[$key,''];
                break;
        }
    }


function getArrayRetake($students):array{
    $arr=[];

    foreach($students as $key=>$student){
        foreach($student as $var){
        if($var['grade']==2){
            $arr[]=[$key,$var['course'],$var['grade']];
        }
    }
    }

    return $arr;
}

function getMinGradeStudent(array $student):int{
    $arrayGrade=array_column($student,'grade');
    return min($arrayGrade);
}

function writeFile(array $data, string $nameFile){
    $puth=getcwd()."/Data/$nameFile";

    $file=fopen($puth,'a');

    foreach($data as $var){
        fputcsv($file,$var,' ');
    }

    fclose($file);
}

writeFile($excellentStudents,'Отличники.csv');
writeFile($goodStudents,'Хорошисты.csv');
writeFile($tripletsStudents,'Троечники.csv');
 writeFile($retake,'Пересдача.csv');