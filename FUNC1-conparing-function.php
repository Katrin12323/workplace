<?php
function WhichNumberIsBigger ($a, $b) {
    if ($a < $b) {
        echo $b . " is bigger than " . $a . "<br />";
    }
    elseif ($a > $b) {
        echo  $a . " is bigger than " . $b ."<br /> ";

    }
}

WhichNumberIsBigger(10,20);
WhichNumberIsBigger(56,98);
WhichNumberIsBigger(64,85);