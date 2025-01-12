## Open-Closed (Принцип открытости-закрытости)
### Классы должны быть открыты для расширения, но закрыты для модификации
#### Плохой пример, где при появлении новых типов машин, необходимо менять метод, что может приводить к ошибкам и багам
```php
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
```
#### Хороший пример, где мы выделяем контракт для подсчета стоимости и для каждой машины он индивидуален
```php
interface CarCostCalculatorInterface
{
    public function calculateCost(int $fee): int;
}
```
```php
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
```