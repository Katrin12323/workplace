<?php
function WhichNumberIsBigger ($a, $b) {

    if ($a <  $b) {
        echo $b . " is bigger than " . $a . "<br />";
    }
    elseif ($a > $b) {
        echo  $a . " is bigger than " . $b ."<br /> ";

    }
}

WhichNumberIsBigger($_POST['b'], $_POST['a']);