<?php
function Results ($sum) {
    echo "The result is " . $sum ;
}

function CalculatorExtract($a, $b) {
    echo $a - $b . "<br />";
}

CalculatorExtract(10,9);
CalculatorExtract(9,5);
CalculatorExtract(9000,6984);

//10, 9
//9, 5
//9000, 6984