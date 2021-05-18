<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = 'monolog_' . date('Ymd') . ".log";

$logger = new Logger('[MonoLog]');
$logger->pushHandler(new StreamHandler("./logs/{$logFile}", Logger::DEBUG));
$logger->info('monolog로 테스트합니다.. 앞으로 개발할 때는 이거로하..', ['log' => 'monolog']);