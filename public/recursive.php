<?php
class Calculate
{
    public function add(int $a, bool $recursive = false) : int
    {
        $result = 0;

        if ($recursive === false && $a === 2) {
            $result = $this->add($a, true);
            return $result;
        }

        if ($recursive === true) {
            return $a * 2;
        }

        $result = $a + 1;

        return $result;
    }
}

$calculate = new Calculate();

$a = 5;

$result = $calculate->add($a);

echo "result = {$result} \n";