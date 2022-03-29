<?php
$path=$argv[1];
echo $path.PHP_EOL;
//printDirContents($path);

function printDirContents($path){
   $dir=opendir($path);

while($name=readdir($dir)){
    if($name[0]=='.'){
        continue;
    }
    if(is_dir($name)){
        echo " d ".$name."\n";
        $pathThisDir=$path."/$name";
        printDirContents($pathThisDir);
    }
    elseif(is_file($name)){
        echo " f ".$name."\n";
    }
}
closedir($dir); 
}
?>