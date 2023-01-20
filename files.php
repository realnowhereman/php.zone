<?php
include __DIR__ . '/functions.php';
echo "<h3>files</h3>";
  echo __DIR__;
echo "<hr>";
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>files</title>
</head>
<body>
  number 2 -  <?= isEven(2) ? 'even' : 'odd' ?>
  <br>
  number 5 -  <?= isEven(5) ? 'even' : 'odd' ?>
  <br>
  number 8 -  <?= isEven(8) ? 'even' : 'odd' ?>
  <br>
</body>
</html>