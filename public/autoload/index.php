<?php

require_once "../vendor/autoload.php";

use app\Shop;
use app\Member;

$shop = new Shop();
$member = new Member();

$shop->setPrice(1000);
echo "이 상품의 가격은 " . $shop->getPrice() . "입니다. \n";

$member->setId('lastride25');
echo "회원의 아이디는 " . $member->getId() . "입니다. \n";