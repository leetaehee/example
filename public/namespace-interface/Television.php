<?php

namespace Product\Electronic;

use \Product\Build;

class Television implements Build
{
    public function introduce() : void
    {
        echo "텔레비젼입니다. \n";
    }
}