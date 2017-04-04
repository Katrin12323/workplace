<?php
//Програма която изписва на екрана любимите ти марки козметика.
// Имената на марките да се съдържат в обикновен индексен масив.
$strawberry =array('Guerlain', 'Dior', 'Clarins', 'Kiko', 'Estee Lauder');

echo " <h1> Favourite luxury cosmetics </h1>";

for ($i=0; $i <count($strawberry); $i++) {
    echo $strawberry[$i]. "<br/>";

}