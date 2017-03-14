<?php
//Програма която изписва на екрана любимите ти марки дрехи.
// Имената на марките дрехи да се съдържат в обикновен индексен масив.
$brands =array('Coco Chanel', 'Karl Lagerfeld', 'Elie Saab', 'Tom Ford', 'Dolce & Gabanna');

echo " <h1> My favourite brands are: </h1>";
for ($i=0;$i < count($brands); $i++){
    echo  $brands[$i] . "<br />";
}