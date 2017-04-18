<?php
require './classes/product_class.php';

$product = new Product($_POST['productName'], $_POST['category'], $_POST['price'], $_POST['description']);
$product->showMeProductInfo();

$connectionToDataBase = new mysqli('localhost', 'root', 'xaxanepozna', 'workplace');
if ($connectionToDataBase->connect_error) {
    echo "Connection failed" . $connectionToDataBase->connect_error . "</br>";
    exit;
}

$insertQuery = "INSERT INTO magazin (productName, category, price, description )
VALUE ('$product->productName','$product->category','$product->price','$product->description');";

mysqli_query($connectionToDataBase, $insertQuery);
mysqli_close($connectionToDataBase);
