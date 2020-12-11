<?php
namespace jiny;

class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

// 네임스페이스 이름을 같이 적용
$obj = new \jiny\Members();
$obj->setUsers(123);

echo "\n";

// 현재 네임스페이스 적용
$obj2 = new Members();
$obj2->setUsers(123);

