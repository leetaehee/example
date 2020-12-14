<?php

include_once './board/FreeBoard.php';
include_once './shop/Product.php';
include_once './event/MemberEvent.php';

use Board\FreeBoard;
use Shop\Product;

echo 'test';

$title = '게시물 테스트 건입니다.';
$content = '게시물은 ' . date('Y-m-d H:i:s') . '에 등록 되었습니다.';

// 게시판 클래스 생성
$freeBoard = new FreeBoard($title, $content);
$freeBoard->getBoard();

// 제품 클래스 생성
$product = new Product('맥북2020', 2750000);
$product->getProduct();

// 이벤트 클래스 생성
$memberEvent = new Shop\Event\MemberEvent('제품 50% 이벤트');
$memberEvent->getEvent();