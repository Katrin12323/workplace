<?php

require './classes/Books.php';

$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');

if ($connection->connect_error) {
   echo "My fucking Jezus " . $connection->connect_error;
   exit;
}

$query = "SELECT * FROM Books;";
$resultBooks =  mysqli_query($connection, $query);

while ($book = $resultBooks->fetch_assoc()) {
    $bookObject = new Books($book['booksName'], $book['genre'], $book['author'], $book['yearOfIssue'], $book['resume'], $book['whatIsYourOpinion']);
    $bookObject->showBooksInfo();
    echo "<br />";
}