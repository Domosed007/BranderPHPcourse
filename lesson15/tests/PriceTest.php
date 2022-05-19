<?php

use App\Price;
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    public function testCreateFromString()
    {
        $this->assertEquals(2500,Price::createFromString("25"));
    }
}