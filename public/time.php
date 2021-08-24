<?php
$d = date('Ymd H:i:s');
echo $d . "\n\n";
$d = strtotime($d) + 300;

echo date('Ymd H:i:s', $d);
