<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = 'monolog_' . date('Ymd') . ".log";

$logger = new Logger('[MonoLog]');
$logger->pushHandler(new StreamHandler("./logs/{$logFile}", Logger::DEBUG));
$logger->info('monolog 테스트', ['log' => 'monolog']);