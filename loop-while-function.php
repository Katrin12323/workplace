<?php

function viewBrands ($array) {

    $i = 0;
    while ($i < count($array)) {
        echo $array[$i] . "<br />";
        $i++;
    }
}
$brands = array ("Coco Chanel", "Elie Saab", "Karl Lagerfeld", "Mia donna");

viewBrands($brands);