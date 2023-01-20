<?php
echo "<h3>OOP</h3>";

class Cat {
  public $name;
  public $color;
  public $weight;

  public function sayHello() {
    echo "$this->name: Meow !";
  }
}

$cat1 = new Cat();
$cat2 = new Cat();
$cat3 = new Cat();

var_dump($cat1);
echo "<br>";
var_dump($cat2);
echo "<br>";
var_dump($cat3);
echo "<br>";

$cat1->name = 'Снежок';
$cat1->color = 'white';
$cat1->weight = 3.5;

$cat2->name = 'Барсик';
$cat2->color = 'black';
$cat2->weight = 5;

$cat3->name = 'Васька';
$cat3->color = 'grey';
$cat3->weight = 4.5;

var_dump($cat1);

echo "<br><br>";
var_dump($cat2);
echo "<br>";
var_dump($cat3);
echo "<br><br>";

echo $cat1->name;
echo "<br>";
echo $cat2->name;
echo "<br>";
echo $cat3->name;
echo "<br>";

echo $cat1->sayHello();
echo "<br>";
echo $cat2->sayHello();
echo "<br>";
echo $cat3->sayHello();
echo "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop</title>
</head>
<body>
  
</body>
</html>