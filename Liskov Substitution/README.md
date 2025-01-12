## Liskov Substitution (Принцип подстановки Барбары Лисков)
### Принцип гласит, что объекты дочернего класса должны быть заменяемы объектами их родительского класса без изменения корректности программы.
#### Плохой пример, имеем базовый класс Vehicle при наследовании этого класса, классом Car всё хорошо, но для класса Bicycle не может корректно реализовать метод
```php
class Vehicle
{
    public function startEngine(): void {
        echo "Engine started!";
    }
}
```
```php
class Car extends Vehicle
{
  // correct 
}
```
```php
class Bicycle extends Vehicle
{
    // incorrect
    public function startEngine(): void {
        throw new Exception("Bicycles don't have engines!");
    }
}
```
#### Хороший пример, разделяем контракты на транспортные средства с двигателем и без, теперь все классы могут корректно реализовать методы
```php
interface Vehicle
{
    public function move(): void;
}
```
```php
interface EngineVehicle extends Vehicle
{
    public function startEngine(): void;
}
```
```php
class Car implements EngineVehicle
{
    public function startEngine(): void {
        echo "Engine started!";
    }

    public function move(): void {
        echo "Car is moving!";
    }
}
```
```php
class Bicycle implements Vehicle
{
    public function move(): void {
        echo "Bicycle is moving!";
    }
}
```