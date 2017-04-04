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

//10, 12
//8, 3
//22,11
//2, 4