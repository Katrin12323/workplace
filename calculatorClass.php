<?php


class Calculator
{
    public function __construct()
    {
        echo "WELCOME TO THE SUPER AMAZING CALCULATOR <br />";
    }

    public function add($a, $b)
    {
        $sum = $a + $b;
        echo "The sum of " . $a . " and " . $b . " is " . $sum;
    }
    public function subtract ($a, $b) {

        $sum = $a - $b;
        echo "The sum of " . $a . " minus " . $b ." is " . $sum;
    }
    public function multiply ($a, $b) {
        $sum = $a * $b;
        echo "The sum of " . $a . " multiplied " . $b ." is " . $sum;
        }
        public function divide ($a, $b) {
        $sum = $a / $b;
        echo "The sum of " . $a . " divided " . $b ." is " . $sum;
        }

}

$calculatorInstance = new Calculator();

if ($_POST['operation'] == 'plus') {
    $calculatorInstance->add($_POST['a'], $_POST['b']);
}
elseif ($_POST['operation'] == 'minus') {
    $calculatorInstance->subtract($_POST['a'], $_POST['b']);
}
elseif ($_POST['operation'] == 'multiply') {
$calculatorInstance->multiply($_POST['a'], $_POST['b']);
}

elseif ($_POST['operation'] == 'divide') {
$calculatorInstance->divide($_POST['a'], $_POST['b']);
}