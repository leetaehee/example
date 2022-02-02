<?php
declare(strict_types = 1);

class User {
    private ?string $name = null;
    private int $age;
    private int $score;

    public function __construct(?string $name, int $age, int $score)
    {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;

        $this->printInfo();
    }

    public function __destruct()
    {
    }

    public function printInfo() : void
    {
        echo 'name = ' . $this->name .'/ age = ' . $this->age . '/ score = ' . $this->score . "\n";
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    public function setScore(int $score) : void
    {
        $this->score = $score;
    }
}

$name = '말티즈';
$age = 32;
$score = 87;

$user = new User($name, $age, $score);
$user->setName('이태희');
$user->setAge(34);
$user->setScore(80);
$user->printInfo();

//$user = User::class;

/*
    $aTag = "<a href='https://www.naver.com'><p><h1>네이버로 이동하기</h1></p></a>";
    echo strip_tags($aTag, ['h1']) . "<br>";

    $data['date'] = null;
    //$data['date'] = $date['date'] ?? new DateTime();
    $data['date'] ??= new DateTime();
    var_dump($data);

    echo "<br><br>";

    $arrayA = [1, 2, 3];
    $arrayB = [5, 6, 7];
    $result = [...$arrayA, 4, ...$arrayB, 8, 9];
    print_r($result);
*/