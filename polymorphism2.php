<?php
  echo "<h3 style='text-align: center;'>Polymorphism</h3><hr align='center' width='50%'>";

  class A {
    public function sayHello() {
    return 'Hello, I am A';
    }
  }

$a = new A;

var_dump($a instanceof A);
echo '<br>';

class B extends A {

}

$b = new B;

var_dump($b instanceof B);
echo '<br>';

var_dump($a instanceof B);
echo '<br>';

echo $b->sayHello();
echo '<br>';

class C extends A {
  public function sayHello() {
    return 'Hello, I am C';
  }
}

$c = new C;

echo $c->sayHello();
echo '<br>';

class D extends A {
  public function sayHello() {
    return parent::sayHello() . '. It was a joke, I am D :)';
  }
}

$d = new D;
echo $d->sayHello();
echo '<br>';

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

$f = new F;
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