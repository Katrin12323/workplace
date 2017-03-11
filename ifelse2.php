<?php

//Да се зададът подходящи стойности на $num1, $num2, $num3 така че на екрана да се изпише текста I love You
$num1 = 1022;
$num2 = 5;
$num3 = 200;

if ($num1 > 10 && $num1 > 1021) {
    echo "I";
} else {
    echo "You";
}

if ($num2 == 5) {
    echo " love";
} else {
    echo " hate";
}

if ($num3 > 100) {
    echo " You";
} else {
    echo " Me";
}