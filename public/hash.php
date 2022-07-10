<?php

$internet = '5d41402abc4b2a76b9719d911017c592';
//$internet = '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824';

$len = strlen($internet);

echo "{$internet} (length = {$len}) <br>";

echo hash('md5', 'hello') . "\n";