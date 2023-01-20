<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>003</title>
</head>
<body>
  <h1>Пример встраивния php в html</h1>
  <?php
    echo "2 + 2 = " . 2 + 2;
  ?>

  <hr>
  2 + 2 = <?php echo 2 + 2;?>
  <hr>

  <?php
    $sum = 500 + 277;
    echo $sum . "<br>";

    $a = 3;
    $b = 5;
    echo "$a $b <br>";
    $c = $a;
    $a = $b;
    $b = $c;
    echo "$a $b <hr>";

    var_dump(!1);
    echo "<br>";
    var_dump(!0);
    echo "<br>";
    var_dump(!true);
    echo "<br>";
    var_dump(2 && 3);
    echo "<br>";
    var_dump(3 || 0);
    echo "<br>";
    var_dump(5 / 1);
    echo "<br>";
    var_dump(1 / 5);
    echo "<br>";
    // var_dump(5 + '5string'); error
    echo "<br>";
    var_dump('5' == 5);
    echo "<br>";
    var_dump('05' == 5);
    echo "<br>";
    var_dump('05' == '5');

    echo "<hr align=\"center\" width=30%\">";

    $x = -5;
    echo "x = $x <br>";
    $mod = $x >= 0 ? $x : -$x;
    echo "Модуль x: $mod";
    echo "<hr align=\"center\" width=33%\">";

    if ('string') {
      echo 'Условие выполнилось';
    }
    echo "<br>";
    if (0) {
      echo 'Условие выполнилось';
    }
    else {
      echo 'Не выполнилось';
    }
    echo "<br>";
    if (null) {
      echo 'Условие выполнилось';
    }
    else {
      echo 'Не выполнилось';
    }
    echo "<br>";

    $num = 500;
    $s = $num % 2 == 0 ?  'even' : 'odd';
    echo "$num - $s";
    echo "<hr>";

    $num = 777;
    echo $num % 2 === 0 ? "$num - четное" : "$num - нечетное";


  echo "<br><br>==================Functions======================<br><br>";

  echo round(cos(3.14)) . "<br>";

  echo intdiv(10, 3);
  echo "<br>";
  $s = "abracadabra";
  echo str_replace("a", "o", $s);
  echo "<br>";
  function getSum($a, $b) {
    echo $a + $b . "<br>";
  }

  $x = 5;
  $y = 10;
  getSum($x, $y);
  getSum(500, 1000);

  function plus5(&$x) {
    $x += 5;
    echo $x . "<br>";
  }

  $a = 3;
  plus5($a);
  echo $a;

  echo "<br>";
  echo rand() % 10 . "<br>";
  echo "<hr>";

  $answers = ["yes", "absolutely yes", "may be", "not now", "soon", "no", "absolutely no", "don't think"];
  echo $answers[rand(0, 7)];
  echo "<br>";
  echo "<br>";

  function getSinOfRandom() {
    return round(sin(rand(0, 360)));
  }

  echo "синус случайного угла: " . getSinOfRandom();
  echo "<br>";
  echo "<hr width='33%' align='center'>";

  function getSumOfCos(float $x, float $y) {
    $cosX = cos($x);
    $cosY = cos($y);
    return $cosX + $cosY;
  }

  echo getSumOfCos(1.44, 2);

  echo "<br><br><br>";

  function getSumOfSin(float $x, float $y) {
    $sinX = sin($x);
    $sinY = sin($y);
    return getSum($sinX, $sinY);
  }

  echo getSumOfSin(1.44, 2);
  echo "<br><br><br>";

  function getMax(int $x, int $y) {
    if ($x > $y) {
      return $x;
    }
    elseif ($y > $x) {
      return $y;
    }
    else {
      return "числа равны";
    }
  }

  echo getMax(99, 99);

  echo "<br><br><br>";
  echo "<hr width='33%' align='center'>";

  function power(int $n, int $a) {
    if ($a == 0) {
      return 1;
    }

    return $n * power($n, $a - 1);
  }

  echo power(2, 3) . "<br>";
  echo power(2, 10) . "<br>";

  function sumOfDigits($n) {
    if ($n == 1) {
      return 1;
    }

    return $n + sumOfDigits($n - 1);
  }
  echo "<h3>Factorial</h3><br>";

  echo sumOfDigits(6);

  echo "<p>Homework</p><br>";

  function getMin(float $x, float $y, float $z) {
    if ($x < $y && $x < $z) {
      return $x;
    }
    elseif ($y < $x && $y < $z) {
      return $y;
    }
    return $z;
  }

  echo getMin(8.3, 9.9, 11.2);
  echo "<br><br><br>";

  $a = 3;
  $b = 5;

  function mult2(int &$a, int &$b) {
    $a *= 2;
    $b *= 2;
  }

  mult2($a, $b);
  echo $a;
  echo "<br>";
  echo $b;

  function factorial(int $n) {
    if ($n == 0) {
      return 1;
    }
    return $n * factorial($n - 1);
  }

  echo "<br><br>";
  echo factorial(1);
  echo "<br><br>";

  function counter(int $n) {
    if ($n == 0) {
      echo $n;
      return;
    }
    counter($n - 1);
    echo ", " . $n;
  }

  counter(7);









    
  ?>
</body>
</html>