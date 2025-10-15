<?php

namespace Abs\Abs;

class Email extends Notification
{
    public function __construct(string $message)
    {
        $this->setMessage($message);
    }
    public function send(): string
    {
        return 'Email ' . $this->getMessage() . ' Xabar Yuborildi !';
    }
}