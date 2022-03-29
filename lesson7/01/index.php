<?php
$path=$argv[1];

printDirContents($path);

function printDirContents($path){
   $dir=opendir($path);

while($name=readdir($dir)){
    if($name[0]=='.'){
        continue;
    }

    $pathThisDir=$path."/$name";

    if(is_dir($pathThisDir)){
        echo " d ".$name."\n";
        printDirContents($pathThisDir);
    }
    elseif(is_file($name)){
        echo " f ".$name."\n";
    }
}
closedir($dir); 
}
?>