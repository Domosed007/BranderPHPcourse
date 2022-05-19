<?php

use App\Task1;
use PHPUnit\Framework\TestCase;

class Task1Test extends TestCase
{
    public function testMultAllElementsArr()
    {
        $this->assertEquals([0,2,4],Task1::multAllElementsArr([0,1,2],2));
    }

    public function testSumNumberRecurse()
    {
        $this->assertEquals(10,Task1::sumNumberRecurse(154));
    }

    public function testSumAllElementsArray()
    {
        $this->assertEquals(10,Task1::sumAllElementsArray([0,1,2,3,4]));
    }

    public function testFilterArr()
    {
        $this->assertEquals(["3"=>3,"4"=>4],Task1::filterArr([0,1,2,3,4],2));
    }
}