<?php

include_once './board/FreeBoard.php';
include_once './shop/Product.php';

use Board\FreeBoard;
use Shop\Product;

$title = '게시물 테스트 건입니다.';
$content = '게시물은 ' . date('Y-m-d H:i:s') . '에 등록 되었습니다.';

// 게시판 클래스 생성
$freeBoard = new FreeBoard($title, $content);
$freeBoard->getBoard();

// 제품 클래스 생성
$product = new Product('맥북2020', '2,750,000');
$product->getProduct();