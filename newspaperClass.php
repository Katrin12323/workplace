<?php

require './classes/newspaper.php';

$vouge = new Newspaper($_POST['name'], $_POST['kind'], $_POST['dateOfIssue'], $_POST['theme'], $_POST['price']);
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
$insertQuery = "INSERT INTO newspaper (`name`, kind, dateOfIssue, theme, price)
<<<<<<< HEAD
VALUES('". $vouge->getName() ."', '" . $vouge->getKind() ."', '" . $vouge->getDateOfIssue(). "', '" .$vouge->getTheme(). "', '" .$vouge->getPrice(). "');";
=======
VALUES('$vouge->name', '$vouge->kind', '$vouge->dateOfIssue', '$vouge->theme', '$vouge->price');";

>>>>>>> c1b6daf42a75ba359c28aa2fca3e19cf1b91e0e1
mysqli_query($connectionToDatabase, $insertQuery);
mysqli_close ($connectionToDatabase);

