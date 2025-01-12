<?php

namespace Good;

class Bicycle implements Vehicle
{
    public function move(): void {
        echo "Bicycle is moving!";
    }
}