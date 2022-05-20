<?php
namespace App;
use App\Employee;
use App\Junior;

class HR extends Employee
{
    public function getCountDislikeJunior(Junior $junior):int
    {
        return $junior->getCountDislike();
    }
}