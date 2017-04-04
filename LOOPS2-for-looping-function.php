<?php
function ShowMeText ($a) {
    echo "<ol>";
    for ($i = 0; $i < $a; $i++){
        echo " <li> My super power is my beauty </li> <br />";
    }
    echo "</ol>";
}
ShowMeText(10);