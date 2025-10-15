<?php

namespace Abs\Abs;

class Send
{
    public function __construct(public Notification $notification){
        echo $this->notification->send();
    }
}