<?php

$clothes = array(
    array('title' => 'Chanel Dress', 'brand' => 'Chanel', 'price' => 1300, 'pic' => 'chanel-dress.jpg'),
    array('title' => 'Karl Lagerfeld Dress', 'brand' => 'Karl Lagerfeld', 'price' => 1200, 'pic' => 'karl-lagerfeld-dress.jpg'),
    array('title' => 'Moschino Dress', 'brand' => 'Moschino', 'price' => 300, 'pic' => 'moschino-t-shirt.jpeg'),
    array('title' => 'Dior Dress', 'brand' => 'Dior', 'price' => 2300, 'pic' => 'dior-dress.jpg')
);

//Присвояваме на променливата $productTitle GET параметър, който ще ни укаже коя дреха разглеждаме
$productTitle = $_GET['title'];

echo "<h1>" . $productTitle . "</h1>";

//Да се попълнят липсващите части от кода така че  на екрана да се покаже информация за дрехата с title равен $productTitle
echo " <ul> ";
foreach ($clothes as $product) {
    if ($productTitle == $product['title']) {
        //Тук трябва да се покаже информацията за продукта, каквото сметнеш за необходимо
        //Използвай HTML тагове по осмутрение
        echo " <li> ";
        echo "Dress by " . $product['brand'] . " <br /> ";
        echo " Price: ".$product['price']. " <br /> ";
        echo " <img src=  ".$product['pic']." height='100' width='100'/>";
        echo " </li> ";
    }

}
echo " </ul> ";



