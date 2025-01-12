<?php

class Human implements Worker
{
    public function work(): void {
        echo "Human worked!\n";
    }
    public function eat(): void {
        echo "Human Eating!\n";
    }
}