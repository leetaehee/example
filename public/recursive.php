<?php
/**
 * Class Calculate 계산기
 */
class Calculate
{
    /**
     * 더하기.
     *
     * @param int $a
     * @param bool $recursive
     *
     * @return int
     */
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

// 유닛테스트
$a = 5;
$result = $calculate->add($a);

// 출력
echo "result = {$result} \n";