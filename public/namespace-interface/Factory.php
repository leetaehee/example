<?php

namespace Product;

abstract class Factory
{
    protected $obj = null;

    protected $name;

    protected $price;

    abstract function introduce();
}