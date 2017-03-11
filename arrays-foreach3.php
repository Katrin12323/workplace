<?php

$coco = array("name" => "Coco Chanel", "knownFor" => "Stylish clothes");
$karl = array("name" => "Karl Lagerfeld", "knownFor" => "Stylish clothes");
$alessandra = array("name" => "Alessandra Ambrosio", "knownFor" => "Victoria's Secrets Angel");
$rihana = array("name" => "Rihana", "knownFor" => "Four Five Seconds");
$grafa = array("name" => "Grafa", "knownFor" => "Monte music");

//Обикновен масив с индекси
$myFavoritePeople = array($coco, $karl, $alessandra, $rihana, $grafa);

foreach ($myFavoritePeople as $person) {
    echo "Name: " . $person['name'] . "<br />";
    echo "Known for: " . $person['knownFor'] . "<br />";
    echo "<br />"; //Празен ред да отдели информацията за всеки един от хората
}

//Задача да се добавят още 2 масива, един съдържащ любимите ти марки дрехи, един съдържащ любимите ти животни
//нека марките дрехи са асоциативни масиви с следните ключове: brand, founded
//array("brand" => "CHANEL", "founded" => 1909);
//нека животните са асоциативни масиви с следните ключове: animal, lives
//array("animal" => "Pinguin", "lives" => "Antarctica");
//Нека за всеки от масивите се направи по един цикъл foreach в чиито блок с код се показва на екрана списък:
//За марки:
// "Brand: [brand name]"
// "Founded: [year]"

//За животни:
// "Animal: [animal]"
// "Lives: [where it lives]"

$Coco = array("brand" => "Chanel", "founded"=> "1909" );
$Saab = array("brand"=>"Elie Saab", "founded" => "1919");
$brands = array($Coco, $Saab);
foreach($brands as $brand) {
    echo "Brand: " . $brand['brand'] . "<br />";
    echo "Founded: " . $brand['founded'] . "<br />";
}

$pinguin = array("animal"=> "Pinguin", "lives" => "Antarktida");
$lev = array("animal" => "Cat", "lives" => "Next to the hospital");
$animals = array($pinguin, $lev);

foreach($animals as $animal) {
        echo "Animal: " . $animal['animal'] . "<br />";
        echo "Lives in: " . $animal['lives'] . "<br />";
}

