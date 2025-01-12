## Interface Segregation (Принцип разделения интерфейсов)
### Не следует заставлять класс реализовывать методы, которые он не использует.
#### Плохой пример, имеем интерфейс Worker с методом work and eat, для класса Human всё хорошо, но робот не ест
```php
interface Worker
{
    public function work(): void;
    public function eat(): void;
}
```
```php
class Human implements Worker
{
    public function work(): void {
        echo "Human worked!\n";
    }
    public function eat(): void {
        echo "Human Eating!\n";
    }
}
```
```php
class Robot implements Worker
{
  public function work(): void {
      echo "Robot worked!\n";
  }
  
  public function eat(): void {
      throw new Exception("Robots don't eat!");
  }
}
```
#### Хороший пример, разделяем интерфейс на несколько.
```php
interface Workable
{
    public function work(): void;
}
```
```php
interface Eatable
{
    public function eat(): void;
}
```
```php
class HumanWorker implements Workable, Eatable
{
    public function work(): void {
        echo "Human worked!\n";
    }
    public function eat(): void {
        echo "Human Eating!\n";
    }
}
```
```php
class RobotWorker implements Workable
{
    public function work(): void
    {
        echo "Robot worked!\n";
    }
}
```