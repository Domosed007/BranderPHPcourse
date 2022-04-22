<?php
include_once 'quadrilateral.php';

class Rectangle extends Quadrilateral{
    private $side1;
    private $side2;

    function __construct(int $a,int $b){
        $this->side1=$a;
        $this->side2=$b;
    }
    
    function getP():float{
        return ($this->side1*2)+($this->side2*2);
    }

    function getS():float{
        return $this->side1*$this->side2;
    }

    function displayPS(){
        echo "P:".$this->getP().'<br>';
        echo 'S:'.$this->getS().'<br>';
    }    
}