<?php

namespace Good;

class Notification
{
    private Sender $sender;

    public function __construct(Sender $sender) {
        $this->sender = $sender;
    }

    public function notify(string $message): void {
        $this->sender->send($message);
    }
}