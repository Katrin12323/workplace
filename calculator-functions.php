<?php
function Results ($sum) {
    echo "The result is " . $sum ;
}

function CalculatorAdd ($a, $b) {
     Results($a + $b );
}

function CalculatorSubtract($a, $b) {
     Results($a - $b);
}

function CalculatorMultiply ($a, $b) {
     Results($a*$b);
}

function CalculatorDivide ($a,$b) {
     Results($a/$b);

}
function CalculatorPercentage ($a, $b) {
    Results((100*$a)/$b);
}