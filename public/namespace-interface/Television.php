<?php

namespace Electronic;

class Television implements Product
{
    public function getProduct() : void
    {
        echo '텔레비젼입니다.';
    }
}