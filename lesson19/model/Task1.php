<?php
namespace App;

class Task1
{
    private static $n;

    static function multAllElementsArr(array $arr, int $n):array
    {
       $newArr=[];
        
       foreach($arr as $i)
       {
           $newArr[]=$i*$n;
       }

       return $newArr;
    }

    public static function sumNumberRecurse(int $n,int $sum=0):int
    {
        if($n>10)
        {
            $sum+=$n%10;

            return self::sumNumberRecurse($n/10,$sum);
        }
        
        $sum+=$n;
        
        return $sum;
    }

    public static function sumAllElementsArray(array $arr):int
    {
        return array_reduce($arr,function($carry,$item)
        {
            $carry+=$item;
            return $carry;
        });
    }

    public static function filterArr(array $arr,int $n):array
    {
        self::$n=$n;

        return array_filter($arr,function($i)
        {
            if($i>self::$n)return $i;
        });
    }
}