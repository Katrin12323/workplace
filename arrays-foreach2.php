<?php

//Обикновен масив с индекси
$myFavoritePeople = array("Coco Chanel", "Karl Lagerfeld", "Alessandra Ambrosio", "Rihana", "Grafa");

echo "<ul>";

foreach ($myFavoritePeople as $person) {
    echo "<li>Name: " . $person . "<li/>";
}

echo "</ul>";
//Задача да се добавят още 2 масива, един съдържащ любимите ти марки дрехи, един съдържащ любимите ти животни
//Нека за всеки от масивите се направи по един цикъл foreach в чиито блок с код се показва на екрана списък:
//За марки: "Brand: [brand name]"
//За животни: "Animal: [animal]"