<?php

function ShowMeText ($a,$b) {
    echo "<ol>";
    for ($i = 0; $i < $a; $i++){
        echo " <li> " . $b. "</li> <br />";
    }
    echo "</ol>";
}
ShowMeText(189, 'I love shopping');