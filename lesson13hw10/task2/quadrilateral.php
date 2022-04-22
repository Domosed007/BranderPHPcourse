<?php
include_once 'figure.php';

class Quadrilateral extends Figure{
    private $side1;
    private $side2;
    private $side3;
    private $side4;
    private $diagonal1;
    private $diagonal2;
    private $sinInjection;

    function __construct(int $a,int $b,int $c,int $d,int $diagonal1,int $diagonal2, int $sinInjection)
    {
        $this->side1=$a;
        $this->side2=$b;
        $this->side3=$c;
        $this->side4=$d;
        $this->diagonal1=$diagonal1;
        $this->diagonal2=$diagonal2;
        $this->sinInjection=$sinInjection;
    }

    function getP():float{
        return $this->side1+$this->side2+$this->side3+$this->side4;
    }

    function getS():float{
        return ($this->diagonal1*$this->diagonal2*$this->sinInjection)/2;
    }

    function displayPS(){
        echo "P:".$this->getP().'<br>';
        echo 'S:'.$this->getS().'<br>';
    }

    function displayInfo()
    {
        echo "Side1\t$this->side1<br>";
        echo "Side2\t$this->side2<br>";
        echo "Side3\t$this->side3<br>";
        echo "Side4\t$this->side4<br>";
    }
}