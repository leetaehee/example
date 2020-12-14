<?php

namespace Product;

class Manual extends Factory
{
    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    public function introduce()
    {
        $this->obj->introduce();
    }
}