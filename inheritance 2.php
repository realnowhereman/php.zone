<?php
echo "<h3>inheritance</h3>";
echo "<hr width='50%' align='center'>";
echo "<br><br>";

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
    parent::__construct($title, $text);
    $this->homework = $homework;
  }

  public function getHomework(): string {
    return $this->homework;
  }

  public function setHomework(string $homework): void {
    $this->homework = $homework;
  }
}

$les1 = new Lesson('Header1', 'Text', 'HW1');
echo 'Lesson title: ' . $les1->getTitle();
echo "<br>";
echo 'Lesson homework:' . $les1->getHomework();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inheritance2</title>
</head>
<body>
  
</body>
</html>