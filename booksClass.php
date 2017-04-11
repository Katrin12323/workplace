<?php

require './classes/Books.php';

$annaKarenina = new Books($_POST['booksName'], $_POST['genre'], $_POST['author'], $_POST['yearOfIssue'], $_POST['resume'],$_POST['whatIsYourOpinion']);
$annaKarenina->turnOnPage($_GET['pageIndex']);

$connectionToDatabase = new mysqli('localhost','root', 'xaxanepozna', 'workplace');

if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
exit;
} else {
    echo "Connection successfully";
}

$insertQuery = "INSERT INTO  Books (booksName, genre, author, yearOfIssue, Resume, whatIsYourOpinion ) 
VALUE('$annaKarenina->booksName', '$annaKarenina->genre', '$annaKarenina->author', '$annaKarenina->yearOfIssue', '$annaKarenina->resume', '$annaKarenina->whatIsYourOpinion');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);


