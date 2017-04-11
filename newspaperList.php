<?php
require './classes/newspaper.php';

$connection = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connection->connect_error) {
    echo "Connection failed " . $connection->connect_error;
    exit;
}
$query = "SELECT * FROM newspaper;";
$resultNewspaper = mysqli_query($connection, $query);
while ($newspaper = $resultNewspaper->fetch_assoc()) {
   $newspaperObject = new newspaper($newspaper['name'], $newspaper['type'], $newspaper['dateOfIssue'], $newspaper['theme'], $newspaper['price']);
   $newspaperObject->showNewspaperInfo();
   echo "</br>";
}

