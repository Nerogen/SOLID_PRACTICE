<?php

class Bicycle extends Vehicle
{
    public function startEngine(): void {
        throw new Exception("Bicycles don't have engines!");
    }
}