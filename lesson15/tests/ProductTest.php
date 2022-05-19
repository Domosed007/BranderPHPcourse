<?php

use App\Price;
use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGetId()
    {
        $product=new Product(1,'Product1',new Price(2500),'summer');

        $this->assertEquals(1,$product->getId());
    }

    public function testGetName()
    {
        $product=new Product(1,'Product1',new Price(2500),'summer');

        $this->assertEquals('Product1',$product->getName());
    }

    public function testGetPrice()
    {
        $product=new Product(1,'Product1',new Price(2500),'summer');

        $this->assertEquals(2500,$product->getPrice());
    }

    public function testGetSeason()
    {
        $product=new Product(1,'Product1',new Price(2500),'summer');

        $this->assertEquals('summer',$product->getSeason());
    }

    public function testToArray()
    {
        $product=new Product(1,'Product1',new Price(2500),'summer');

        $this->assertEquals([
            'id' => 1,
            'name' => 'Product1',
            'price' => '25',
            'season' => 'summer'
        ],$product->toArray());
    }
}