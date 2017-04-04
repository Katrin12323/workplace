<?php
function ViewPerson($array) {
    $i = 0;
    while ($i < count($array)) {
        echo $array[$i]['name'] . " is ";
        echo $array[$i]['age'] . " ";
        echo "and has super power: " . $array[$i]['superPower'] . "<br />";
        $i++;
    }
}

$theArray = array(
    array("name" => "Katrin", "age" => "24", "superPower" => "unordinary beauty"),
    array("name" => "Spas", "age" => "27", "superPower" => "unbearable curiosity"),
    array("name" => "Stefan", "age" => "1", "superPower" => "little Al Quida"),
);
ViewPerson($theArray);