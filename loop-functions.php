<?php

function printWithFor($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "<br />";
    }
}

$theArray = array("PHP", "HTML", "CSS", "JavaScript");


//Подаваме променливата $heArray като параметър на фунцкцията printWithFor
printWithFor($theArray);

