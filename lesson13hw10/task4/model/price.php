<?php
class Price
{
    private float $price;

    function __construct(float $p)
    {
        $this->price=$p;
    }

    function getPrice()
    {
        return $this->price;
    }
}