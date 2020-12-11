<?php

namespace Shop;

class Product
{
    private $name;

    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        echo "제품 클래스를 생성합니다. 이 제품의 이름은 " . $this->name . "이며 가격은 " . $this->price . " 입니다. \n";
    }
}