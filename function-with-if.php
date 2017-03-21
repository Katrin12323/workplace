<?php

function Comparison ($a, $b) {
    if ($a > $b) {
        echo $a . " is bigger than " .$b . "<br />";
    }
    elseif ($a < $b) {
        echo $a . " is smaller than " . $b . "<br />";
    }
}
Comparison(100,20);