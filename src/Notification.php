<?php

namespace Abs\Abs;

abstract class Notification
{
    protected string $message;
    public function getMessage(): string
    {
        return $this->message;
    }
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
    public abstract function send();

}