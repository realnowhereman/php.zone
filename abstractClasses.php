<?php
echo '<h3 style="text-align: center;">Abstract classes</h3><hr align="center" width="50%">';
abstract class AbstractClass {
  abstract public function getValue();
  public function printValue() {
    echo 'Value: ' . $this->getValue();
  }
}

// $object = new AbstractClass();

class ClassA extends AbstractClass {
  private $value;

  public function __construct(string $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

$objectA = new ClassA('kek');
$objectA->printValue();

echo '<hr>';

/*
тнаследуйте от него 2 класса: RussianHuman и EnglishHuman.

Реализуйте в них методы getGreetings(), которые будут возвращать приветствие на разных языках, вроде «Привет».

Реализуйте в них методы getMyNameIs(), которые будут возвращать на разных языках слова «Меня зовут».

В итоге метод introduceYourself должен возвращать строку, вроде «Привет! Меня зовут Иван.»

Создайте объекты этих классов и заставьте их поздороваться.
*/

abstract class ManAbstract {
  private $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }

  abstract function getGreetings(): string;
  abstract function getMyNameIs(): string;

  public function introduceYourself(): string {
    return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . getName() . '.';
  }
}

class RussianMan extends ManAbstract {
  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getMyNameIs() {
    return $this->name;
  }

  public function getGreetings() {
    return 'Привет!';
  }
}

class EnglishMan extends ManAbstract {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>abstract classes</title>
</head>
<body>
  
</body>
</html>