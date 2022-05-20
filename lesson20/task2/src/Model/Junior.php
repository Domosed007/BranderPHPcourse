<?php
namespace App;
use App\Employee;
use App\TeamLead;

class Junior extends Employee
{
    private TeamLead $teamLead;
    private int $countDislike=0;//количество выговоров
    private int $countLike=0;//количество поощрений

    public function __construct(string $name,string $surename, TeamLead $teamLead)
    {
        $this->name=$name;
        $this->surename=$surename;
        $this->teamLead=$teamLead;
    }

    public function resultWorkJunior(bool|int $signal):void
    {
        if($this->teamLead->setStateChange($signal)==true) $this->countLike++;
        elseif($this->teamLead->setStateChange($signal)==false) $this->countDislike++;        
    }

    //Возвращает количество выговоров
    public function getCountDislike():int
    {
        return $this->countDislike;
    }

    //Возвращает количество поощрений
    public function getCountLike():int
    {
        return $this->countLike;
    }
}