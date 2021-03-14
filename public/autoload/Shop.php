<?php

namespace app;

class Shop
{
    private $price = 0;

    public function getPrice() : int
    {
        return $this->price;
    }

    public function setPrice(int $price) : void
    {
        $this->price = $price;
    }
}