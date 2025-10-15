<?php

namespace Abs\Abs;

class Instagram extends Notification
{
    public function __construct(string $message)
    {
        $this->setMessage($message);
    }

    public function send(): string
    {
        return 'Instagramga '. $this->getMessage() .' Yuborildi !';
    }
}