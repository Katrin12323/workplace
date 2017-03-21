<?php

function Results ($sum) {
    echo "The result is " . $sum ;
}

function Calculator ($a,$b) {
    echo Results();
    echo $a/$b . " <br />";
}

Calculator(10,2);
Calculator(8,4);
Calculator(22,11);
Calculator(1024,16);



//10, 2
//8, 4
//22,11
//1024, 16
