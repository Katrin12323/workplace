<?php

function title($title) {
    echo "<h2> " . $title . " </h2>";
}


function viewPerson($array) {
    foreach ($array as $person) {
        title('SuperHero: ');
        echo $person['name'] . " is ";
        echo $person['age'] . " ";
        echo  "and has super power: ". $person['superPower'] . " <br /> ";

    }
}

$theArray = array(
    array("name" => "Katrin", "age" => "24", "superPower" => "unordinary beauty"),
    array("name" => "Spas", "age" => "27", "superPower" => "unbearable curiosity"),
    array("name" => "Stefan", "age" => "1", "superPower" => "little Al Quida"),
);

viewPerson($theArray);