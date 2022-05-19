<?php
include_once __DIR__.'/vendor/autoload.php';

use App\Task1;

print_r(Task1::filterArr([0,1,2,3,4],2));