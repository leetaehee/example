<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$jsons = json_decode(file_get_contents('./env.json'), true);

$fileName = 'monolog.log.'. date('Ymd') ;

$logger = new Logger('[MonoLog]');
$logger->pushHandler(new StreamHandler("{$jsons['log_path']}/{$fileName}", Logger::DEBUG));
$logger->info('monolog 테스트', ['log' => 'monolog']);
$logger->warning('테스트중..');