<?php
include_once 'quadrilateral.php';

class Square extends Quadrilateral{
    private $side;

    function __construct(int $a){
        $this->side=$a;
    }
    
    function getP():float{
        return $this->side*4;
    }

    function getS():float{
        return $this->side*2;
    }

    function displayPS(){
        echo "P:".$this->getP().'<br>';
        echo 'S:'.$this->getS().'<br>';
    }    
}