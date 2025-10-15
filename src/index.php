<?php
require __DIR__ . '/../vendor/autoload.php';

use Abs\Abs\Email;
use Abs\Abs\Instagram;
use Abs\Abs\Send;
use Abs\Abs\Telegram;

$message = 'Authentication o\'zgartiring';

$telegram = new Telegram($message);
$instagram = new Instagram($message);
$email = new Email($message);
$send = new Send($email);