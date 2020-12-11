<?php
namespace jiny\aaa;

class Members
{
    public function setUsers($id)
    {
        echo 'aaa 회원 ID = ' . $id;
    }
}

namespace jiny\bbb;

class Members
{
    public function setUsers($id)
    {
        echo 'bbb 회원 ID = ' . $id;
    }
}

use jiny\aaa as aaa;
use jiny\bbb as bbb;

// 네임스페이스 이름을 같이 적용
$obj = new aaa\Members();
$obj->setUsers(1);

echo "\n";

// 네임스페이스 이름을 같이 적용
$obj2 = new bbb\Members();
$obj2->setUsers(2);