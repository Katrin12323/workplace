<?php
require './classes/Books.php';
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}
$genreInsertByUser = $_POST['genre'];
$query = "SELECT * FROM Books WHERE genre = '$genreInsertByUser';";
$genreResults = mysqli_query($connection, $query);

while ($booksGenre = $genreResults->fetch_assoc()) {
    $genreObject = new Books ($booksGenre['booksName'], $booksGenre['genre'],$booksGenre['author'], $booksGenre ['yearOfIssue'], $booksGenre['Resume'], $booksGenre['whatIsYourOpinion']);
    $genreObject->showBooksInfo();
    echo "</br>";

}

$yearOfIssueInsertByUser = $_POST['yearOfIssue'];
$query = "SELECT * FROM Books WHERE yearOfIssue = '$yearOfIssueInsertByUser';";
$yearOfIssueResults = mysqli_query($connection, $query);

while ($bookYear = $yearOfIssueResults->fetch_assoc()) {
    $yearOfIssueObject = new Books ($bookYear['booksName'], $bookYear['genre'], $bookYear['author'], $bookYear['yearOfIssue'], $bookYear['Resume'], $bookYear['whatIsYourOpinion']);
    $yearOfIssueObject->showBooksInfo();
    echo "</br>";
}



