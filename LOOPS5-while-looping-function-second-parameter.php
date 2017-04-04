<?php
function ShowMe ($a, $b) {
    echo "<ol>";
    $i = 0;
    while ($i < $a) {
        echo "<li>" . $b . " </li><br/>";
        $i++;
    }
    echo "</ol>";
}
ShowMe(666, 'I love shopping soooooo much');