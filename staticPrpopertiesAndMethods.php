<?php
echo '<h3 style="text-align: center;">static Prpoperties And Methods</h3><hr align="center" width="50%">';

class A {
  public static function test(int $x) {
    return 'x = ' . $x;
  }
}

echo A::test(5);

class User {
  private $role;
  private $name;

  public function _construct(string $role, string $name) {
    $this->role = $role;
    $this->name = $name;
  }
}

$admin = new User('admin', 'Ivan');

class User2 {
  private $role;
  private $name;

  public function __construct(string $role, string $name) {
    $this->role = $role;
    $this->name = $name;
  }

  public static function createAdmin(string $name) {
    return new self('admin', $name);
  }
}

$admin = User2::createAdmin('John');
var_dump($admin);
echo '<br>';
echo '<br>';

class B {
  public static $x;
  public static $y;
}

B::$x = 555;
var_dump(B::$x);
echo '<br>';
echo '<br>';

B::$y = 666;
$b = new B();
var_dump($b::$y);
echo '<br>';
echo '<br>';

class C {
  public static $x;

  public function getX() {
    return self::$x;
  }
}

C::$x = 777;
$c = new C();
var_dump($c->getX());
echo '<br>';
echo '<br>';

class D {
  public static $x;

  public static function getX() {
    return self::$x;
  }
}

D::$x = 888;
$d = new D();
var_dump($d::getX());
echo '<br>';
echo '<br>';

class Human {
  private static $count = 0;

  public function __construct() {
    self::$count++;
  }
  public static function getCount() {
    return self::$count;
  }
}

echo 'Людей: ' . Human::getCount();
echo '<br>';
echo '<br>';

$human1 = new Human();
$human2 = new Human();
$human3 = new Human();
echo 'Людей: ' . Human::getCount();
echo '<br>';
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>staticPrpopertiesAndMethods</title>
</head>
<body>
  
</body>
</html>