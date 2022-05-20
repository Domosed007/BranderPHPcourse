<?php
namespace App;

class Employee
{
    protected string $name;
    protected string $surename;

    public function __construct(string $name,string $surename)
    {
        $this->name=$name;
        $this->surename=$surename;
    }
}