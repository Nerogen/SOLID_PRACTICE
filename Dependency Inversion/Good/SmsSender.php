<?php

namespace Good;

class SmsSender implements Sender
{
    public function send(string $message): void {
        echo "Sending sms: $message";
    }
}