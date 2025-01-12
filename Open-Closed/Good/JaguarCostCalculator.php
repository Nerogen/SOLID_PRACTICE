<?php

namespace Good;

class JaguarCostCalculator implements CarCostCalculatorInterface
{
    private int $cost = 1000 {
        get {
            return $this->cost;
        }
        set {
            $this->cost = $value;
        }
    }

    public function calculateCost(int $fee): int {
        return $this->cost * $fee;
    }
}
