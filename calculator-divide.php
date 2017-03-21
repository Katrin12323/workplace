<?php

function Results ($sum) {
    echo "The result is " . $sum ;
}

function CalculatorDivide ($a,$b) {
    echo Results();
    echo $a/$b . " <br />";
}

CalculatorDivide(10,2);
CalculatorDivide(8,4);
CalculatorDivide(22,11);
CalculatorDivide(1024,16);



//10, 2
//8, 4
//22,11
//1024, 16
