<?php

//Да се зададът подходящи стойности на $num1, $num2, $num3 така че на екрана да се изпише текста I love You
$num1 = 102;
$num2 = 15;
$num3 = 70;

if ($num1 > 101 && $num3 > 50) {
    echo "I";
} else {
    echo "You";
}

if ($num2 == 15 && $num1 < 103) {
    echo " love";
} else {
    echo " hate";
}

if ($num3 < 100) {
    echo " You";
} else {
    echo " Me";
}