<?php
include_once('./PHPMailer/PHPMailerAutoload.php');

// 메일발송

$driver = new PHPMailer();

$driver->IsSMTP();
$driver->CharSet = 'UTF-8';
$driver->SMTPSecure = 'ssl';
$driver->Host = 'smtp.gmail.com';
$driver->Port = '465';
$driver->Username = 'developerkimtakgu@gmail.com';
$driver->Password = 'eqndljnotjklffvs';
$driver->SMTPAuth = true;
$driver->From = 'developerkimtakgu@gmail.com';
$driver->FromName = 'example';
$driver->Subject = 'PHP Mailer Test..';
$driver->msgHTML('PHP Mailer Test..');
$driver->addAddress('lastride25@naver.com');

$driver->send();