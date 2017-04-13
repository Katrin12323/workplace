<?php
require './classes/Books.php';
$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed" .$connection->connect_error;
    exit;
}
$genreInsertByUser = $_POST['genre'];
$yearOfIssueInsertByUser = $_POST['yearOfIssue'];
$query = "SELECT * FROM Books WHERE genre = '$genreInsertByUser' AND yearOfIssue = '$yearOfIssueInsertByUser';";
$resultsBySearch = mysqli_query($connection, $query);

while ($bookResults = $resultsBySearch->fetch_assoc()) {
    $bookObject = new Books ($bookResults['booksName'], $bookResults['genre'],$bookResults['author'], $bookResults ['yearOfIssue'], $bookResults['Resume'], $bookResults['whatIsYourOpinion']);
    $bookObject->showBooksInfo();
    echo "</br>";

}




