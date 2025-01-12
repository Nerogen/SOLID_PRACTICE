## Single Responsibility (Принцип Единой ответственности)
### Когда каждый класс отвечает за свой круг обязанностей, то код становится более предсказуемым и легко поддерживаемым
#### Плохой пример, работник выполняет всю работу за несколько человек
```php
    class Worker
    {
        public function __construct(public string $name, public int $age) {}

        public function writeBackendCode() {}
        public function writeFrontendCode() {}
        public function testLogicOnBugs() {}
        public function manageProjectTasks() {}
    }
```
#### Хороший пример, который демонстрирует "Разделяй и властвуй"
#### Базовый класс "Работник"
```php
    class Worker
    {
        public function __construct(private string $name, private int $age) {}

        public function work(): void {}
    
        public function getName(): string
        {
            return $this->name;
        }
    
        public function getAge(): int
        {
            return $this->age;
        }
    }
```
#### Дочерний класс "Конкретный работник который занимается своей зоной ответственности"
```php
    class Backend extends Worker
    {
        public function work(): void {}
    }
```