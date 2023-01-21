<?php
echo "<h3>oop2</h3>";

echo "<hr width='50%' align='center'>";
echo "<br>";

class Cat {
  public $name;
  public $color;
  public $weight;

  public function sayHello() {
    echo "<br>$this->name: Meow!<br>";
  }
}

$cat1 = new Cat();

var_dump($cat1);
echo "<br><br>";

$cat1->name = "Снежок";
$cat1->color = 'white';
$cat1->weight = 3.5;

var_dump($cat1);
echo "<br><br>";

$cat2 = new Cat();
$cat3 = new Cat();

$cat2->name = "Барсик";
$cat2->color = 'black';
$cat2->weight = 5;

$cat3->name = "Матроскин";
$cat3->color = 'striped';
$cat3->weight = 4.4;

var_dump($cat2);
echo "<br><br>";
var_dump($cat3);
echo "<br><br>";
$cat3->sayHello();
echo "<br><br>";

class Dog {
  private $name;

  public function setName(string $name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }

  public function sayHello() {
    echo "<br>$this->name: Woof!<br>";
  }
}

$dog1 = new Dog();
$dog1->setName('Шарик');
// $dog1->name = 'Шарик'; не присвоится, потому что свойство $name - private

var_dump($dog1);
$dog1->sayHello();
echo "<br>";
// echo $dog1->name; не выведет, потому что свойство $name - private
echo $dog1->getName();
echo "<br><br>";

class Mouse {
  private $name;
  private $color; 

  public function __construct(string $name, string $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function sayHello() {
    echo "Привет! Меня зовут $this->name. Мой цвет - $this->color.";
  }

  public function getName(): string {
    return $this->name;
  }

  public function setColor(string $color) {
    $this->color = $color;
  }

  public function getColor(): string {
    return $this->color;
  }
}

$mouse1 = new Mouse('Джери', 'коричневый');
echo $mouse1->getName();
echo "<br>";
$mouse1->sayHello();
echo "<br>";
echo $mouse1->getColor();
$mouse1->setColor('серый');
echo "<br>";
echo $mouse1->getColor();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop2</title>
</head>
<body>
  
</body>
</html>