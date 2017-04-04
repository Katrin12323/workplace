<?php

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

$dog = array("animal" => "dog", "lives" => "at the street");
$levche = array("animal" =>"cat", "lives" => "next to the hospital");
$turtle = array("animal" => "turtle", "lives" => "in the river");
$whale = array("animal" => "whale", "lives" => "in the ocean");
$ANIMALS = array($dog, $levche, $turtle, $whale);

foreach ($ANIMALS as $animal) {

      echo "<ul>";
      echo "<li>" . " The animal " . $animal['animal'] . " lives " . $animal['lives'] . " </li>";
      echo "</ul>";
    }
