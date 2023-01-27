<?php



echo '<h3 style="text-align: center;">Interfaces2</h3><hr align="center" width="50%">';

interface CalcArea {
  public function calcArea(): float;
}

class Rectangle implements CalcArea {
  private $x;
  private $y;

  public function __construct(float $x, float $y) {
    $this->x = $x;
    $this->y = $y;
  }

  public function calcArea(): float {
    return $this->x * $this->y;
  }
}

class Square implements CalcArea {
  private $x;
  
  public function __construct(float $x) {
    $this->x = $x;
  }

  public function calcArea(): float {
    return $this->x ** 2;
  }
}

class Triangle implements CalcArea {
  private $a;
  private $h;

  public function __construct(float $a, float $h) {
    $this->a = $a;
    $this->h = $h;
  }

  public function calcArea(): float {
    return ($this->a * $this->h) / 2;
  }
}

class Circle {
  const PI = 3.1416;
  private $r;

  public function __construct(float $r) {
    $this->r = $r;
  }

  public function calcArea(): float {
    return self::PI * $this->r**2;
  }
}

$rec = new Rectangle(5, 6);
echo "площадь прямоугольника:" . $rec->calcArea();

$sq = new Square(5);
echo "<br>площадь квадрата:" . $sq->calcArea();

$circ = new Circle(5);
echo "<br>площадь круга:" . $circ->calcArea();

$tr = new Triangle(5, 6);
echo "<br>площадь треугольника:" . $tr->calcArea();
echo '<hr>';

$objects = [
  new Square(5),
  new Rectangle(2, 4),
  new Triangle(2, 5),
  new Circle(10)
];

foreach ($objects as $object) {
  if ($object instanceof calcArea) {
    echo 'Объект класса ' . get_class($object) . ' реализует интерфейс CalcArea. Его площадь: ' . $object->calcArea() . '<br>';
  }
  else {
    echo 'Объект класса ' . get_class($object) . ' не реализует интерфейс CalcArea. Его площадь: ' . $object->calcArea() . '<br>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaces 2</title>
</head>
<body>
  
</body>
</html>