<?php

namespace Product\Electronic;

use Product\Build;

class MacBook implements Build
{
    public function getProduct(): void
    {
        echo "Mac Book 입니다. \n";
    }
}