<?php

 require 'calculator-functions.php';

$action = $_GET['action'];
$numberA = $_GET ['a'];
$numberB = $_GET['b'];


if ('add'== $_GET['action']) {
    CalculatorAdd($numberA, $numberB);
}

elseif ('subtract' == $_GET['action']) {
     CalculatorSubtract($numberA, $numberB);
}


elseif ('divide' == $_GET['action']) {
     CalculatorDivide($numberA, $numberB);

}

elseif ('multiply' == $_GET['action']) {
     CalculatorMultiply($numberA, $numberB);
}




