<?php
class Members
{
    public function setUsers($id)
    {
        echo '회원 ID = ' . $id;
    }
}

$obj = new Members();
$obj->setUsers(123);