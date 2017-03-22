<?php
function Results ($sum) {
    echo "The result is " . $sum ;
}
function CalculatorMultiply ($a, $b) {
    echo Results();
    echo $a*$b . "<br />";
}
CalculatorMultiply(10,12);
CalculatorMultiply(8,3);
CalculatorMultiply(22,11);
CalculatorMultiply(2,4);

function CalculatorDivide ($a,$b) {
    echo Results();
    echo $a/$b . " <br />";
}

CalculatorDivide(10,2);
CalculatorDivide(8,4);
CalculatorDivide(22,11);
CalculatorDivide(1024,16);


function CalculatorAccumulation ($a, $b) {
    echo Results();
    echo $a + $b . "<br />";
}

CalculatorAccumulation(10,20);

function CalculatorExtract($a, $b) {
    echo Results();
    echo $a - $b . "<br />";
}

CalculatorExtract(10,9);
CalculatorExtract(9,5);
CalculatorExtract(9000,6984);


