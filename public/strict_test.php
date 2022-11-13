<?php
declare(strict_types = 1);

class A
{
    public function add(int $a, int $b) : int
    {
        return $a  + $b;
    }
}

$a = new A();

$c = $a->add(4,3);

echo 'c = ' . $c . "\n\n";