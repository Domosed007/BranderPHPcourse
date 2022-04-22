<?php
class Calculator{
    private $num1;
    private $num2;

    function __construct(float $n1,float $n2)
    {
        $this->num1=$n1;
        $this->num2=$n2;
    }

    function getSum():float{
        return $this->num1+$this->num2;
    }

    function getDif():float{
        return $this->num1-$this->num2;
    }

    function getMult():float{
        return $this->num1*$this->num2;
    }

    function getDiv():float{
        return $this->num1/$this->num2;
    }
}