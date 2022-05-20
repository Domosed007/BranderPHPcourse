<?php

use App\Employee;
use App\Junior;
use App\TeamLead;
use App\HR;
use App\Manager;

require __DIR__.'/vendor/autoload.php';

$T_70=new TeamLead('Arnold','Schwarzenegger',0);

$john=new Junior('John','Conor',$T_70);

$T_1000=new HR('Robert','Patric');

echo $T_1000->getCountDislikeJunior($john).PHP_EOL;

$T_1001=new Manager('Ketrine','Weaver');

echo $T_1001->getCountLike($john).PHP_EOL;