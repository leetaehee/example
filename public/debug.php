<?php
$a = add(3, 7);
echo "a= " . $a ."<br>";

$v = add(-10, 1);
echo "v= " . $v ."<br>";

$g = add(1000, 50000);
echo "g= " . display($g) ."<br>";

error_log('a= ' . $a);
error_log('v= ' . $v);
error_log('g= ' . $g);

function add(int $a, int $b) : int
{
    if ($a < 1) {
        $a = 1;
    }

    return $a + $b;
}

function display(int $value) : string
{
    return number_format($value);
}