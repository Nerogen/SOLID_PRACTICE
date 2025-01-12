<?php

namespace Good;

class HumanWorker implements Workable, Eatable
{
    public function work(): void {
        echo "Human worked!\n";
    }
    public function eat(): void {
        echo "Human Eating!\n";
    }
}