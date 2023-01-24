<?php
echo "<h3 style='text-align: center;'>Interfaces</h3><hr width='50%' align='center'>";

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

class Circle /*implements CalcArea*/ {
  const PI = 3.1416;
  private $r;

  public function __construct(float $r) {
    $this->r = $r;
  }

  public function calcArea(): float {
    return self::PI * ($this->r ** 2);
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

$circ = new Circle(5);
var_dump($circ instanceof Circle);
echo "<br>";
var_dump($circ instanceof Triangle);
echo "<br>";
echo $circ->calcArea() . "<br><br>";

$rec = new Rectangle(4, 5);
echo $rec->calcArea() . "<br><br>";

$sq = new Square(5);
echo $sq->calcArea() . "<br><br>";

$tr = new Triangle(5, 6);
var_dump($tr instanceof CalcArea);
echo "<br>";
echo $tr->calcArea() . "<br><br>";

echo "<hr>";

$figures = [
  new Square(5),
  new Rectangle(2, 4),
  new Triangle(6, 3),
  new Circle(9)
];

foreach($figures as $figure) {
  if ($figure instanceof CalcArea) {
    echo 'Объект класса ' . get_class($figure) . ' реализует интерфейс  CalcArea. Площадь: ' . $figure->calcArea();
    echo '<br>';
  }
  else {
    echo 'Объект класса ' . get_class($figure) . ' не реализует интерфейс  CalcArea.';
    echo '<br>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaces</title>
</head>
<body>
  
</body>
</html>