<?php
class Calculator{
    static function getSum(float $num1,float $num2):float{
        return $num1+$num2;
    }

    static function getDif(float $num1,float $num2):float{
        return $num1-$num2;
    }

    static function getMult(float $num1,float $num2):float{
        return $num1*$num2;
    }

    static function getDiv(float $num1,float $num2):float{
        return $num1/$num2;
    }

    static function getMod($num):float{
        if($num<0) return $num*(-1);
        else return $num;
    }
    static function remainderDiv(float $num1,float $num2):float{
        return $num1%$num2;
    }
}