<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

	// 지금시각
	$nowTime = date('Y-m-d H:i:s');

	// pdo
    $db = new PDO('mysql:host=localhost;dbname=myapp','homestead', 'secretKK1234!@');
    //$db = new PDO('oci:host=localhost;dbname=TEST','test', 'testdb1234');

	include_once $_SERVER['DOCUMENT_ROOT'] . '/../template/index.html.php';
