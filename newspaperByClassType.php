<?php
require './classes/newspaper.php';
$connection = new mysqli('localhost','root', 'xaxanepozna','workplace');
if ($connection->connect_error) {
    echo 'Connection failed' . $connection->connect_error;
    exit;
}
$kindFromForm = $_POST['kind'];
$query = "SELECT * FROM  newspaper WHERE kind = '$kindFromForm';";
$resultKindFromForm = mysqli_query($connection, $query);
while ($newspaper = $resultKindFromForm->fetch_assoc()){
    $newspaperObject = new  Newspaper ($newspaper['name'], $newspaper['kind'], $newspaper['dateOfIssue'], $newspaper['theme'], $newspaper['price']);
    echo $newspaperObject->showNewspaperInfo();
    echo '<br/>';
}

