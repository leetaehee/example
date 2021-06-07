<?php
$value = isset($_GET['memo']) === true && empty($_GET['memo']) === false ? $_GET['memo'] : '';

// xss 처리하기
//echo htmlspecialchars($value);

include_once $_SERVER['DOCUMENT_ROOT'] . '/../template/xss_test.html.php';