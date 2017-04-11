<?php

require './classes/newspaper.php';

$vouge = new Newspaper($_POST['name'], $_POST['type'], $_POST['dateOfIssue'], $_POST['theme'], $_POST['price']);
$vouge->showNewspaperInfo();

// Creating connection to database
$connectionToDatabase = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');

// Checking if  connection to database is established
if ($connectionToDatabase->connect_error) {
    echo "Connection failed: " . $connectionToDatabase->connect_error;
    exit;
} else {
    echo "Connected successfully";
}

/*това са имената на колоните от таблицата*/
$insertQuery = "INSERT INTO newspaper (`name`, `type`, dateOfIssue, theme, price)
VALUES('$vouge->name', '$vouge->type', '$vouge->dateOfIssue', '$vouge->theme', '$vouge->price');";

mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);
