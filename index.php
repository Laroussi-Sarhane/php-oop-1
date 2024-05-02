<?php 

require_once __DIR__ . '/movie.php';

$film = new Movie('QBR', 'micheal B.J',['2004','1990','1998','2000'] );
var_dump($film);


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1> Film </h1>
    <h3> <?php echo $film->getFullInfo()?> </h3>

    <ul>
      <?php foreach($film->years as $year): ?>
      <li>
        <?php echo $year  ?>
      </li>
      <?php endforeach ?>
    </ul>

  </div>
</body>
</html>