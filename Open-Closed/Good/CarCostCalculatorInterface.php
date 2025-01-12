<?php

namespace Good;

interface CarCostCalculatorInterface
{
    public function calculateCost(int $fee): int;
}
