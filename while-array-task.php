<?php
$brands = array('Coco Chanel', 'Karl Lagerfeld', 'Elie Saab', 'Victorias Secret');
$places = array('Dubai', 'Bora bora', 'Hawai', 'Paris', 'Freiburg', 'Milano', 'Barcelona', 'Las Palmas', 'Kozarevo', 'White house', 'California');

$a = 0;
$b = 0;
 echo "<h2>My Favourite brands  </h2>";
while ($a < count($brands)) {
    echo $brands[$a] . "<br />";
    $a ++;
}
echo "<h2>My Favourite places  </h2>";
while ($b < count($places)) {
    echo $places[$b] . "<br />";
    $b++;
}