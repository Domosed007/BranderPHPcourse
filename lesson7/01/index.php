<?php
$path=$argv[1];

printDirContents($path);

function printDirContents($path){
   $dir=opendir($path);

while(($name=readdir($dir))!==false){
    if($name[0]=='.'){
        continue;
    }

    $pathThisDir=$path."/$name";

    if(is_dir($pathThisDir)){
        echo "d ".$name."\n";
        printDirContents($pathThisDir);
    }
    else{
        echo "f ".$name."\t".fileperms($pathThisDir)."\t".filesize($pathThisDir)."\n";
    }
}
closedir($dir); 
}
?>