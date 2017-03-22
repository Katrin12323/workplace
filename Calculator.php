<?php
function Results ($sum) {
    echo "The result is " . $sum ;
}

function CalculatorAdd ($a, $b) {
    echo Results($a + $b );
}

function CalculatorSubtract($a, $b) {
    echo Results($a - $b);
}

function CalculatorMultiply ($a, $b) {
    echo Results($a*$b);
}

function CalculatorDivide ($a,$b) {
    echo Results($a/$b);

}

$action = $_GET['action'];
$numberA = $_GET ['a'];
$numberB = $_GET['b'];


if ('add'== $_GET['action']) {
    echo CalculatorAdd($numberA, $numberB);
}

elseif ('subtract' == $_GET['action']) {
    echo CalculatorSubtract($numberA, $numberB);
}


elseif ('divide' == $_GET['action']) {
    echo CalculatorDivide($numberA, $numberB);

}

elseif ('multiply' == $_GET['action']) {
    echo CalculatorMultiply($numberA, $numberB);
}




