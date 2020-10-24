<?php
//error_log('\n 안', 3, '/usr/local/var/log/nginx/error.log');
//error_log('tkahsla', 3);
//error_log('11ㄹ', 3, './test');

$b = 4;
$bStr = '말티즈 300마리.. (로그 테스트)';

$a = [
    '수미' => 3,
    '은영' => 4,
    '한울' => 5,
];
error_log(var_export($a, 1));

error_log('b=' . $b);
error_log('bstr = ' . $bStr);