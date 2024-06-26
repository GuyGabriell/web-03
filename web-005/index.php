<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions-and-Filtering-005</title>
</head>
<body>


<?php 


$books = [

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

function filterByAuthor($books, $author) {
  
  $filteredbooks = [];


  foreach ($books as $book) {
   // if ($book['author'] === 'Philip K. Dick') 
    if ($book['author'] ===  $author) {

      $filteredbooks[] = $book;


    }
  }

  return $filteredbooks;
}




?>



<!--the triple equal sign checks for equality while the single equal to asign a value to a variable-->

<!--whatv i did here is not just function but  also filter-->
<!--create a function that filters the book automatically.

also know functions are the verbs of the programming world they are to be called and perform a task.-->


<ul>

    <?php foreach (filterByAuthor($books, 'Philip K. Dick') as $book) : ?>
   
   

  <li>

    <a href="<?= $book['purchaseUrl'] ?>">
      <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) 
       - By <?= $book['author'] ?>
    </a>

  </li>

      <?php endforeach; ?>

</ul>



</body>
</html>