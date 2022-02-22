<?php
require_once "task1.php";
require_once "task3.php";

/*
Основываясь на #1 задании отсортировать массивы 
по определенным критериям(критерии выбирайте сами)
*/

printArray($balls);
asort($balls);
printArray($balls);
arsort($balls);
printArray($balls);
ksort($balls);
printArray($balls);
krsort($balls);
printArray($balls);