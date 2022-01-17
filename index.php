
<?php

  require_once __DIR__.'/database.php';
  require_once __DIR__.'/Movie.php';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($movies as $movie) : ?>
  <div>

    <h1>
      <?php
        $film = new Movie($movie['title'], $movie['plot'], $movie['review'], $movie['genre']);
        echo $film->title;
      ?>
    </h1>

    <p>
      <?php
        echo $film->plot;
      ?>
    </p>

    <p>
      <?php
        $film->setGenre('science fiction');
        echo $film->genre;
      ?>
    </p>

    <h2>
      <?php
        echo $film->review;
      ?>
    </h2>

  </div>
  <?php endforeach; ?>
  
</body>
</html>