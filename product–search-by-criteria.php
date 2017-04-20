<?php

require './classes/product_class.php';

$connectionToDataBase = new mysqli('localhost', 'root','xaxanepozna', 'workplace');
if ($connectionToDataBase->connect_error) {
    echo "Connection failed" . $connectionToDataBase->connect_error;
exit;
}

$categoryInsertByUser = $_POST['category'];
$query = "SELECT * FROM magazin WHERE category = '$categoryInsertByUser';";
$queryResultsByCategory = mysqli_query ($connectionToDataBase,$query);


while ($category = $queryResultsByCategory-> fetch_assoc ()) {
    $categoryObject = new Product($category['productName'], $category['category'], $category['price'], $category['description']);
    echo $categoryObject->showMeProductInfo();
    echo "</br>";
}