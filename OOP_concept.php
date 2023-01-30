<?php
echo "<h3 style='text-align: center;'>OOP concept</h3><hr align='center' width='50%'>";

class User {
  private $name;

  public function __construct(string $name) {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  } 
}

class Article
{
  private $title;
  private $text;
  private $author;

  public function __construct(string $title, string $text, User $author)
  {
    $this->title = $title;
    $this->text = $text;
    $this->author = $author;
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getText(): string
  {
    return $this->text;
  }

  public function getAuthor(): User {
    return $this->author;
  }
}

$author = new User('Ivan');
$article = new Article('Заголовок', 'Текст', $author);

var_dump($article);

echo '<br>';
echo '<br>';

echo 'Имя автора: ' . $article->getAuthor()->getName();

echo '<br>';
echo '<br>';

class Admin extends User {

}

$author = new Admin('John');
$article = new Article('Заголовок 2', 'Текст 2', $author);

echo 'Имя автора: ' . $article->getAuthor()->getName();

echo '<br>';
echo '<br>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP_concept</title>
</head>
<body>
  
</body>
</html>