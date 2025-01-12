##  Dependency Inversion (Принцип инверсии зависимостей)
### Модули верхнего уровня не должны зависеть от модулей нижнего уровня. И те, и другие должны зависеть от абстракций. Абстракции не должны зависеть от деталей. Детали должны зависеть от абстракций.
#### Плохой пример, класс Notification имеет прямую зависимость от класса EmailSender, это значит если нам будет необходимо отправлять sms или поменять на push, то придется менять класс Notification
```php
class Notification
{
    private EmailSender $emailSender;

    public function __construct() {
        $this->emailSender = new EmailSender();
    }

    public function notify(string $message): void {
        $this->emailSender->send($message);
    }
}
```
```php
class EmailSender
{
    public function send(string $message): void {
        echo "Sending email: $message";
    }
}
```
#### Хороший пример, выделим контракт на отправку, далее введём конкретную реализацию, и класс Notification будет получать необходимую подстановку через общий интерфейс
```php
interface Sender
{
    public function send(string $message): void;
}
```
```php
class SmsSender implements Sender
{
    public function send(string $message): void {
        echo "Sending sms: $message";
    }
}
```
```php
class EmailSender implements Sender
{
    public function send(string $message): void {
        echo "Sending email: $message";
    }
}
```
```php
class Notification
{
    private Sender $sender;

    public function __construct(Sender $sender) {
        $this->sender = $sender;
    }

    public function notify(string $message): void {
        $this->sender->send($message);
    }
}
```