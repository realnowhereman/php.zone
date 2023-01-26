<?php
echo "<h3 style='text-align: center;'>Inheritance3</h3><hr align='cener' width='50%'>";

class Post {
  protected $title;
  protected $text;

  public function __construct(string $title, string $text) {
    $this->title = $title;
    $this->text = $text;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title): void {
    $this->title = $title;
  }

  public function getText() {
    return $this->text;
  }

  public function setText($text): void {
    $this->text = $text;
  }
}

class Lesson extends Post {
  private $homework;

  public function __construct(string $title, string $text, string $homework) {
    $this->title = $title;
    $this->text = $text;
    $this->homework = $homework;
  }

  public function getHomework(): string {
    return $this->homework;
  }

  public function setHomework($homework): void {
    $this->homework = $homework;
  }
}

class Lesson2 extends Post {
  private $homework;

  public function __construct(string $title, string $text, string $homework) {
    parent::__construct($title, $text);
    $this->homework = $homework;

  }
  public function getHomework(): string {
    return $this->homework;
  }
}

$lesson = new Lesson('Title1', 'Text1', 'HW1');
echo "Название урока1: " . $lesson->getTitle();
echo '<br>';

$lesson2 = new Lesson2('Title2', 'Text2', 'HW2');
echo "ДЗ урока2: " . $lesson2->getHomework();

echo '<hr>';

class PaidLesson extends Lesson2 {
  private $price;

  public function __construct(string $title, string $text, string $homework, float $price) {
    parent::__construct($title, $text, $homework);
    $this->price = $price;
  }

  public function getPrice(): float {
    return $this->price;
  }
}

$lesson3 = new PaidLesson('Title3', 'Text3', 'HW3', 99.9);

echo "стоимость платного урока: " . $lesson3->getPrice();
// var_dump($lesson3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inheritance3</title>
</head>
<body>
  
</body>
</html>