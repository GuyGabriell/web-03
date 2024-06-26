<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions-and-Filtering</title>
</head>
<body>



  

<?php 


$Books = [

  [
    'name' => 'Do Andriods Dream of Electric Sheep',
    'author' => 'Philip K. Dick',
    'releaseYear' => '1968',
    'purchaseUrl' => 'http://example.com'
  ],


  [
    'name' => 'Project Hail Mary',
    'author' => 'Andy Weir',
    'releaseYear' => '2021',
    'purchaseUrl' => 'http://example.com'
  ],



  [
    'name' => 'The Martians',
    'author' => 'Andy Weir',
    'releaseYear' => '2011',
    'purchaseUrl' => 'http://example.com'
  ],




];




?>

<ul>

  <?php foreach ($Books as $Book) : ?>
  <li>
    <a href="<?= $Book['purchaseUrl'] ?>">
      <?= $Book['name']; ?> (<?= $Book['releaseYear'] ?>) 
        
    </a>
  </li>

    <?php endforeach; ?>

</ul>





</body>
</html>