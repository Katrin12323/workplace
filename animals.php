<?php
/**
 * Created by PhpStorm.
 * User: katrinees
 * Date: 28.02.17
 * Time: 11:04
 */
$label = array("Coco Chanel", "Karl Lagerfeld", "Elie Saab");
    echo "<h1> My Favourite Labels </h1>";

    echo " <ul>";
foreach ($label as $label_name) {
    echo "<li>" .$label_name . " </li> <br/>";
}
    echo "</ul>";

$Animal = array("Pinguin", "Dog", "Cat", "Chick");
    echo "<h1> My sweeties </h1>";

    echo "<ol>";
    foreach ($Animal as $animal) {
        echo "<li> " . $animal . " </li> <br/>";
    }
    echo "</ol>";