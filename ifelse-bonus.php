<?php

//Indexes in the array start with 0
//                  0        1            2         3         4         6
$wordArray = array("COCO", "VICTORIA", "HARISSON", "FORD", "CHANEL", "SECRET");

//Нека на екрана се изпише: COCO CHANEL
$num1 = 1020;
$num2 = 1200;



if ($num1 < 1021) {
    echo $wordArray[0];
} else {
    echo $wordArray[1];
}

if ($num2 > 1000 && $num1 < $num2) {
    echo " " . $wordArray[4];
} else {
    echo " " . $wordArray[3];
}