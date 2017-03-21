<?php

function Results ($sum) {
    echo "The result is " . $sum ;
}
function Calculator($a, $b) {
    echo Results();
    echo $a*$b . "<br />";
}
Calculator(10,12);
Calculator(8,3);
Calculator(22,11);
Calculator(2,4);

//10, 12
//8, 3
//22,11
//2, 4