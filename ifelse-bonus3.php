<?php

//Indexes in the array start with 0
//                  0     1      2     3       4      5        6             7
$wordArray = array("I", "YOU", "ME", "HATE", "LOVE", "MY", "SUNSHINE", "CODDER GIRL");

//Нека на екрана се изпише: I LOVE MY SUNSHINE CODDER GIRL
$num1 = 1020;
$num2 = 1;
$num3 = 10;
$num4 = 1;



if ($num1 < 1021 || $num4 < 2) {
    echo $wordArray[0];
} else {
    echo $wordArray[1];
}

if ($num2 == $num4) {
    echo " " . $wordArray[4];
} else {
    echo " " . $wordArray[5];
}

if ($num3 > $num4) {
    echo " " . $wordArray[5];
} else {
    echo " " . $wordArray[3];
}

if ($num3 == $num4) {
    echo " " . $wordArray[5];
} else {
    echo " " . $wordArray[6];
}

if (2 > $num4) {
    echo " " . $wordArray[7];
}