<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

	// 지금시각
	$nowTime = date('Y-m-d H:i:s');

	// pdo- mysql
    //$db = new PDO('mysql:host=localhost;dbname=myapp','homestead', 'secretKK1234!@');


    //print_r(PDO::getAvailableDrivers());

    // oci_connect
    $dns = "(DESCRIPTION = (ADDRESS = 
                (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
                (CONNECT_DATA = (SID = XE))
            )";

    // pdo- oracle
    //$db = new PDO("oci:dbname=". $tns . ";charset=UTF8", "test", "testdb1234");


    $conn = oci_connect('test', 'testdb1234', $dns);

    if (! $conn) {
        echo '커넥션 실패하였습니다. <br>';
        exit;
    }

    $selQuery = "SELECT MAX(PK) + 1 AS PK,
                        CEIL(SUM(VAL) / COUNT(PK)) VAL
                 FROM TESTER";

    $stid = oci_parse($conn, $selQuery);
    if(oci_execute($stid) === false) {
        echo '실패';
        exit;
    }

    // 배열로 출력
    oci_fetch_all($stid, $res);

    // 화면에 출력
    //print_r($res);

    $pk = $res['PK'][0];
    $val = $res['VAL'][0];

    // 데이터 추가
    $insQuery = "INSERT INTO TESTER (PK, VAL, VAL_DATE) VALUES ($pk, $val, SYSDATE)";

    $stid = oci_parse($conn, $insQuery);
    oci_execute($stid);

	include_once $_SERVER['DOCUMENT_ROOT'] . '/../template/index.html.php';
