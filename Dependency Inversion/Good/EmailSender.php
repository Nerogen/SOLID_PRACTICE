<?php

namespace Good;

class EmailSender implements Sender
{
    public function send(string $message): void {
        echo "Sending email: $message";
    }
}