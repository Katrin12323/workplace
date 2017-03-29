<?php

function ListOfDestination () {

    $DestinationList = array(
        array('destination' => 'Dubai', 'price' => 1200, 'distance' => 2000, 'type' => 'Summer'),
        array('destination' => 'Croatia', 'price' => 1200, 'distance' => 2000, 'type' => 'Summer'),
        array('destination' => 'China', 'price' => 1200, 'distance' => 2000, 'type' => 'Spring'),

    );

    foreach ($DestinationList as $destination) {

        if (in_array($destination['type'], $_POST['selectSeason'])) {

            echo $destination['destination'] . $destination['price'] . $destination['distance'] . "<br/>";

        }

    }
}

ListOfDestination();

function Hello ($firstName, $lastName) {
    echo "<h2> Hello dear " .$firstName . " " . "$lastName" . " we are glad that exactly you are our customer, and we hope that you will be glad also  </h2> <br/>";
}

Hello ($_POST['firstName'], $_POST['lastName']);