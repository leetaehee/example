<?php

namespace Product\Electronic;

use Product\Build;

class NoteBook implements Build
{
    public function introduce(): void
    {
        echo "NoteBook 입니다. \n";
    }
}