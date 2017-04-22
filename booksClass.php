<?php

require './classes/Books.php';

$annaKarenina = new Books($_POST['booksName'], $_POST['genre'], $_POST['author'], $_POST['yearOfIssue'], $_POST['resume'],$_POST['whatIsYourOpinion']);
$annaKarenina->showBooksInfo();

$connectionToDatabase = new mysqli('localhost','root', 'xaxanepozna', 'workplace');

if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
exit;
} else {
    echo "Connection successfully";
}

$insertQuery = "INSERT INTO  Books (booksName, genre, author, yearOfIssue, Resume, whatIsYourOpinion ) 
VALUE('" . $annaKarenina->getBooksName() . " ', '" . $annaKarenina->getGenre() . "', '" . $annaKarenina->getAuthor() . "', '" . $annaKarenina->getYearOfIssue() . "', '" . $annaKarenina->getResume() . "', '" .$annaKarenina->getWhatIsYourOpinion() . "');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close($connectionToDatabase);