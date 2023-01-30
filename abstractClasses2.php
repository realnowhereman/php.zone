<?php
echo '<h3 style="text-align: center;">Abstract classes</h3><hr align="center" width="50%">';

abstract class AbstractClass {
  abstract public function getValue();

  public function printValue() {
    echo 'значение: ' . $this->getValue();
  }
}

class ClassA extends AbstractClass {
  private $value;

  public function __construct(string $value) {
    $this->value = $value;
  }

  public function getValue() {
    return $this->value;
  }
}

$objA = new ClassA('kek');
$objA->printValue();
echo '<br><hr>';

abstract class Man {
  private $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }

  abstract public function getGreetings(): string;
  abstract public function getMyNameIs(): string;

  public function introduceYourself(): string {
    return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
  }
}

class Englishman extends Man {
  public function getGreetings(): string {
    return "Hi";
  }

  public function getmyNameIs(): string {
    return "My name is ";
  }
}

class Russianman extends Man {
  public function getGreetings(): string {
    return "Привет";
  }

  public function getmyNameIs(): string {
    return "Меня зовут ";
  }
}

$russian = new RussianMan('Иван');
$british = new EnglishMan('John');
// var_dump($russian);
echo $russian->introduceYourself() . '<br>';
echo $british->introduceYourself();



/*$object = new AbstractClass(); / Ошибка! создать объект абстрактного класса нельзя, от него можно только наследоваться*/



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