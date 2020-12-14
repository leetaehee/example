<?php

namespace Product\Electronic;

use Product\Build;

class TabletPC implements Build
{
    public function getProduct(): void
    {
        echo "Tablet PC 입니다. \n";
    }
}