<?php
for ($i = 0; $i < 10; $i++) {

    $num = (int)$i;

    print_num($i);
}

function print_num(int $i) : void
{
    if ($i === 2 || $i === 4) {
        return;
    }

    echo $i . "\n\n\n";
}