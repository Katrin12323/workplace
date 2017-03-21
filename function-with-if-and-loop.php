<?php

function ShowMe ($a, $b) {
    if ($a < $b) {
    $i = $a;
    while ($i < $b) {
            echo $i . "<br />";
            $i++;
         }
        }

        elseif ($a > $b) {
        $i = $a;
        while ($i > $b) {
            echo $i . "<br />";
            $i--;
         }
    }
}


ShowMe(26,9);

