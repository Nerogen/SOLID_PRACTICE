<?php

class Notification
{
    private EmailSender $emailSender;

    public function __construct() {
        $this->emailSender = new EmailSender();
    }

    public function notify(string $message): void {
        $this->emailSender->send($message);
    }
}