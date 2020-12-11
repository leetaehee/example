<?php

namespace Shop\Event;

class MemberEvent
{
    private $eventName;

    public function __construct($name)
    {
        $this->eventName = $name;
    }

    public function getEvent()
    {
        echo "이벤트명을 출력합니다. 이 이벤트는 " . $this->eventName . "입니다. \n";
    }
}