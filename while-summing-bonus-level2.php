<?php

$sum = 0;
$i = 5;

while ($i < 55) {
    $sum += $i;
    $i += 5;
}
if ($sum > 275) {
    echo 'I hate you' . "<br /> ";
}
elseif ($sum = 275) {
    echo "I love you" . '<br />';
}


//Числата от 5 до 50, като събира само числата които се кратни на 5. т.е. (5, 10, 15, 20 ... 50)