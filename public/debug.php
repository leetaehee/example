<?php
$a = add(3, 7);
echo "a= " . $a ."<br>";

$v = add(-10, 1);
echo "v= " . $v ."<br>";

function add($a, $b)
{
    if ($a < 1) {
        $a = 1;
    }

    return $a + $b;
}