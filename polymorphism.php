<?php
echo "<h3 style='text-align: center;'>Polymorphism</h3><hr align='center' width='50%'><br>";

class A {
  public function sayHello() {
    return 'Hello, I am A';
  }
}

$a = new A();

echo '$a - instanceof A: ';
echo ($a instanceof A) ? 'true' : 'false';
echo '<br>';

class B extends A {

}

$b = new B();

echo '$b - instanceof B: ';
// var_dump($b instanceof B);
echo ($b instanceof B) ? 'true' : 'false';
echo '<br>';
echo '$b - instanceof A: ';
echo ($b instanceof A) ? 'true' : 'false';
echo '<br>';
echo '$b - instanceof B: ';
echo ($b instanceof B) ? 'true' : 'false';
echo '<br>$a - instanceof B: ';
echo ($a instanceof B) ? 'true' : 'false';
echo '<br><br>';
echo 'b: ' . $b->sayHello();
echo '<br><br>';

class C extends A {
  public function sayHello() {
    return 'Hello, I am C';
  }
}

$c = new C();
echo 'c: ';
echo $c->sayHello();
echo '<br><br>';

class D extends A {
  public function sayHello() {
    return parent::sayHello() . '. It was joke, I am D :)';
  }
}

$d = new D();
echo 'd: ';
echo $d->sayHello();

echo '<hr>';

class E {
  public function method1() {
    return $this->method2();
  }

  protected function method2() {
    return 'E';
  }
}

class F extends E {
  protected function method2() {
    return 'F';
  }
}

$f = new F();
echo $f->method1();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polymorphism</title>
</head>
<body>
  
</body>
</html>