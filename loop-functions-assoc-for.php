<?php

function printWithFor($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "Name: " . $array[$i]['name'] . "</br >";
        echo "Age: " . $array[$i]['age'] . "</br >";
        echo "Super Power: " . $array[$i]['superPower'] . "</br >";
    }
}

$theArray = array(
    array("name" => "Katrin", "age" => "24", "superPower" => "unordinary beauty"),
    array("name" => "Spas", "age" => "27", "superPower" => "unbearable curiosity"),
    array("name" => "Stefan", "age" => "1", "superPower" => "little Al Quida"),
);


//Подаваме променливата $heArray като параметър на фунцкцията printWithFor
printWithFor($theArray);

