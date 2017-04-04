<?php
function display ($array)
{
    for ($i = 0; $i< count($array); $i++ ) {
        echo $array[$i] . "<br />";
    }
}
$brand = array ("Coco Chanel", "Elie Saab", "Karl Lagerfeld", "Mia donna");

display($brand);
