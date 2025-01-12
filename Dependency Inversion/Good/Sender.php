<?php

namespace Good;

interface Sender
{
    public function send(string $message): void;
}