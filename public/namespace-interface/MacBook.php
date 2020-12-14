<?php

namespace Product\Electronic;

use Product\Build;

class MacBook implements Build
{
    public function introduce(): void
    {
        echo "Mac Book 입니다. \n";
    }
}