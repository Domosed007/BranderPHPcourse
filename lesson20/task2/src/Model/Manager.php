<?php
namespace App;
use App\Employee;
use App\Junior;

class Manager extends Employee
{
    public function getCountLike(Junior $junior):int
    {
        return $junior->getCountLike();
    }
}