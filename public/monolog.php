<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = 'monolog.log.'. date('Ymd') ;

$logger = new Logger('[MonoLog]');
$logger->pushHandler(new StreamHandler("/logs/{$logFile}", Logger::DEBUG));
$logger->info('monolog 테스트', ['log' => 'monolog']);