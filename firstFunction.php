<?php

function writeToScreen($string) {
    echo $string . "<br >";
}

function sum($a, $b) {
    return $a + $b;
}

$sbor = sum(15,29);
writeToScreen($sbor);