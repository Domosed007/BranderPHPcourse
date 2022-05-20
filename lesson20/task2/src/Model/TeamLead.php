<?php
namespace App;
use App\Employee;

class TeamLead extends Employee
{
    private int $idMood;

    //массив состояний
    private $arrayMood=
    [    
        'very bed',
        'bad',
        'normal',
        'good'
    ];

    public function __construct(string $name,string $surename,int $idMood=3)
    {
        $this->name=$name;
        $this->surename=$surename;
        $this->idMood=$idMood;
    }

    //Возвращает текущее настроение объекта
    public function getMoodString():string
    {
        return $this->arrayMood[$this->idMood];
    }

    //Устанавливает настроение тимлида принимая строку
    public function setMoodString(string $mood):void
    {
        switch($mood)
        {
            case 'very bed':
                $this->idMood=0;
                break;
            case 'bed':
                $this->idMood=1;
                break;
            case 'normal':
                $this->idMood=2;
                break;
            case 'good':
                $this->idMood=3;
                break;
            default:
            echo 'Error! Нет такого значения';
        }
    }
  
    //Устанавливает настроение тимлида принимая цифру
    public function setMoodInt(int $mood)
    {
        if($mood>3||$mood<0) 
        {
            echo 'Error! Нет такого значения';
            return 0;
        }
        $this->idMood=$mood;
    }

    //Меняет состояние объекта
    public function setStateChange(bool|int $signal)
    {
        if($signal==true)
        {
            if($this->idMood===3)
            {
                echo($this->teamLeadSay()).PHP_EOL;
                
                return true;
            } 
            else{
                $this->idMood++;

                echo($this->teamLeadSay()).PHP_EOL;
            }
        }
        else
        {
            if($this->idMood===0)
            {
                echo($this->teamLeadSay()).PHP_EOL;
            
                return false;
            }
            else
            {
                $this->idMood--;
    
                echo($this->teamLeadSay()).PHP_EOL;
            }
            
        }
    }

    private function teamLeadSay()
    {
        switch($this->idMood)
        {
            case 0:
                return 'Я в ярости';
            case 1:
                return 'Я в плохом настроении';
            case 2:
                return 'Я в нормальном настроении';
            case 3:
                return 'Я в хорошем настроении';
        }
    }
}
