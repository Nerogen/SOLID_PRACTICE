<?php

class CarCostCalculator
{
    public function calculateCost(string $carType, int $fee): int
    {
        return match (true) {
            $carType === 'jaguar' => 1000 * $fee,
            $carType === 'corvette' => 1200 * $fee,
            default => 0,
        };

        // Добавление нового типа требует модификации:
        //     return match (true) {
        //         $carType === 'jaguar' => 1000 * $fee,
        //         $carType === 'corvette' => 1200 * $fee,
        //         $carType === 'golf' => 500 * $fee,
        //         default => 0,
        //     };
    }
}
