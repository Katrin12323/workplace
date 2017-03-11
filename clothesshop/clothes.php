<?php

$clothes = array(
    array('title' => 'Chanel Dress', 'brand' => 'Chanel', 'price' => 1300, 'pic' => 'chanel-dress.jpg'),
    array('title' => 'Karl Lagerfeld Dress', 'brand' => 'Karl', 'price' => 1200, 'pic' => 'karl-lagerfeld-dress.jpg'),
    array('title' => 'Moschino', 'brand' => 'MOSCHINO', 'price' => 300, 'pic' => 'moschino-t-shirt.jpeg'),
    array('title' => 'Dior Dress', 'brand' => 'Dior', 'price' => 2300, 'pic' => 'dior-dress.jpg')
);

$productTitle = $_GET['title'];
echo "<h1>Our Collection</h1>";

echo "<ul>";

//Да се добави липсващаат част от в променливата линк, така че линка да предава GET параметър, който да укаже
//на product.php кой продукт желаем да разгледаме
//променливата $link да се сложи на подходящо място в кода за да се конструира линк
foreach ($clothes as $item) {
    $link = "http://localhost/clothesshop/product.php?title=" . $item['title'];
    echo "<li>";
    echo " Title: <a href='" . $link . "'> " .  $item['title'] . "</a>";
    echo " Brand: " . $item['brand'];
    echo " Price: " . $item['price'] . "$ ";
    echo "<img src='" . $item['pic'] . "' height='100' width='100'/>";
    echo "</li>";
}

echo "</ul>";