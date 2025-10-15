<?php

namespace Abs\Abs;

class Telegram extends Notification
{
    public function __construct(string $message)
    {
        $this->setMessage($message);
    }
    public function send(): string
    {
        return 'Telegramga ' . $this->getMessage() . ' Xabar Yuborildi !';
    }
}