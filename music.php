<?php
$music = array('Rihanna', 'Beyonce', 'Maroon 5', 'The Weeknd');

echo "<ol>";

for ($i=0; $i < count($music); $i++) {

    echo "<li>" . $music[$i] ." </li> <br />";

}

echo "</ol>";