<?php

class EmailSender
{
    public function send(string $message): void {
        echo "Sending email: $message";
    }
}