<?php

namespace jiny\aaa;

class Members1
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

namespace jiny2\bbb;

class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

// 네임스페이스 aaa로 변경
echo "네임스페이스를 aaa로 변경 \n";

use jiny\aaa\Members1;

$obj = new Members1();
$obj->setUsers(126);