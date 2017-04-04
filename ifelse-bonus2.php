<?php

//Indexes in the array start with 0
//                  0        1            2         3         4         5
$wordArray = array("COCO", "VICTORIA", "HARISSON", "FORD", "CHANEL", "SECRET");

//Нека на екрана се изпише: VICTORIA SECRET
$num1 = 1022;
$num2 = 1;



if ($num1 < 1021) {
    echo $wordArray[2];
} else {
    echo $wordArray[1];
}

if ($num2 > 1000 && $num1 < $num2) {
    echo " " . $wordArray[4];
} else {
    echo " " . $wordArray[5];
}