<?php
//Програма която изписва на екрана любимите ти места в света.
// Имената на местата да се съдържат в обикновен индексен масив.
$places=array('Dubai', 'Bora Bora', 'Hawai', 'Bali', 'Paris' );

echo " <h1> These are the places  on which i wanna go:  </h1> ";

echo "<ol>";
for ($i=0; $i<count($places); $i++) {
    echo "<li>" . $places[$i] . " </li> <br /> ";
}
echo "</ol>";