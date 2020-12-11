<?php
namespace jiny\site;

class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

// 네임스페이스 이름을 같이 적용
$obj = new \jiny\site\Members();
$obj->setUsers(124);

echo "\n";

// 클래스의 네임스페이스 출력
echo Members::class;