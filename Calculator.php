<?php
function Results ($sum) {
    echo "The result is " . $sum ;
}
function CalculatorMultiply ($a, $b) {
    echo Results($a*$b);
}


function CalculatorDivide ($a,$b) {
    echo Results($a/$b);

}


function CalculatorAccumulation ($a, $b) {
    echo Results($a + $b );
}


function CalculatorExtract($a, $b) {
    echo Results($a - $b);
}

$action = $_GET['action'];
$numberA = $_GET ['a'];
$numberB = $_GET['b'];








