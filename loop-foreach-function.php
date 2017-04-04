<?php

$favourite = array ("Coco Chanel", "Elie Saab", "Karl Lagerfeld", "Mia donna");

 function ViewBrands ($array) {
     foreach ($array as $brands){
         echo $brands . "<br />";
     }
 }

ViewBrands($favourite);