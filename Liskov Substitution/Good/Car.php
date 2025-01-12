<?php

namespace Good;

class Car implements EngineVehicle
{
    public function startEngine(): void {
        echo "Engine started!";
    }

    public function move(): void {
        echo "Car is moving!";
    }
}