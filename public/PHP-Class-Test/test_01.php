<?php
//리스코프치환
abstract class Command
{
    abstract public function getEngineInfo() : void;
}

class Engine extends Command
{
    private $engine = null;

    public function __construct(string $engine)
    {
        $this->engine = $engine;
    }

    public function getEngineInfo() : void
    {
        echo '현재 엔진은 ' . $this->engine . ' 입니다.';
    }
}

class CarRepairStore
{
    private $command = null;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function getReceipt() : void
    {
        $this->command->getEngineInfo();
    }
}

$engine = new Engine('울트라 엔진');
$repairShop = new CarRepairStore($engine);
echo $repairShop->getReceipt();