<?php
namespace jiny\aaa;

class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

namespace jiny\bbb;

class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

// 네임스페이스 이름을 같이 적용
echo "네임스페이스 \jiny\bbb \n";

$obj = new \jiny\bbb\Members();
$obj->setUsers(126);

echo "\n";

// 네임스페이스 이름을 같이 적용
echo "네임스페이스 \jiny\bbb \n";

$obj2 = new \jiny\aaa\Members();
$obj2->setUsers(127);